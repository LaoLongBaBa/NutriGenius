<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Users;
use App\Models\Week_recipe;
use App\Models\Chat_content;
use Illuminate\Support\Facades\Hash;
use OpenAI\Laravel\Facades\OpenAI;
use DB;

class
IndexController extends Controller
{
    public function index()
    {
        return view('home.index');
    }
    public function chat()
    {
        $uid = session('Home_user_id');
        $chat_data = Chat_content::where('user_id',$uid)->get();
        return view('home.chat',compact('chat_data'));
    }
    public function form(Request $request)
    {
        $uid = session('Home_user_id');
        if (empty($uid)){
            return redirect('/login')->with('message', 'Please log in first');
        }
        return view('home.form');
    }
    /**
     *create_week_recipe
     */
    public function weekly_recipe($chat_content_id)
    {
        $uid = session('Home_user_id');
        if (empty($uid)){
            return redirect('/login')->with('message', 'Please log in first');
        }
        $Week_recipe_data = Week_recipe::where('user_id',$uid)->where('chat_content_id',$chat_content_id)->get();
       foreach ($Week_recipe_data as $key => $value) {
          $result_data = json_decode($value->json_result, true);

           $Week_recipe_data[$key]['result_data'] = $result_data['choices'][0]['message']['content'];

       }
        return view('home.weekly_recipe',compact('Week_recipe_data'));

    }
    /**
     *create_week_recipe
     */
    public function create_week_recipe($chat_content_id)
    {
        $week_recipe = new Week_recipe;
        $uid = session('Home_user_id');
        if (empty($uid)){
            return redirect('/login')->with('message', 'Please log in first');
        }
        $week_recipe_data = $week_recipe->where('user_id',$uid)->where('chat_content_id',$chat_content_id)->get();
        if (!empty($week_recipe_data[0])){
            return redirect("/weekly_recipe/$chat_content_id")->with('message', 'We have already created a weekly recipe for you before, please check it out');
        }
        $chat_data = Chat_content::where('user_id',$uid)->where('id',$chat_content_id)->first(['id','user_info']);
        $user_info = str_replace(',Based on the above information, we recommend the required nutritional data', '', $chat_data->user_info);
        $Monday = $user_info.",Based on the above information, propose a dietary plan for Monday";
        $Tuesday = $user_info.",Based on the above information, propose a diet plan for Tuesday";
        $Wednesday = $user_info.",Based on the above information, propose a dietary plan for Wednesday";
        $Thursday = $user_info.",Based on the above information, propose a dietary plan for Thursday";
        $Friday = $user_info.",Based on the above information, propose a dietary plan for Friday";
        $Saturday = $user_info.",Based on the above information, propose a dietary plan for Saturday";
        $Sunday = $user_info.",Based on the above information, propose a dietary plan for Sunday";
//        ['system', 'assistant', 'user', 'function']
       $messages = [
            ['role' => 'user', 'content' => $Monday],
            ['role' => 'user', 'content' => $Tuesday],
            ['role' => 'user', 'content' => $Wednesday],
            ['role' => 'user', 'content' => $Thursday],
            ['role' => 'user', 'content' => $Friday],
            ['role' => 'user', 'content' => $Saturday],
            ['role' => 'user', 'content' => $Sunday],
        ];

        $info = json_encode($messages);
        foreach ($messages as $key => $value){
            $array_value = array($value);
            $result = OpenAI::chat()->create([
                'model' => 'gpt-3.5-turbo',
                'messages' => $array_value,
            ]);

//            $week_recipe->chat_content_id =$chat_content_id;
//            $week_recipe->info_json =$info;
//            $week_recipe->user_id =$uid;
//            $week_recipe->json_result =json_encode($result);
////            dd($week_recipe);
//            $week_recipe->save();

            DB::table('week_recipe')->insert([
                'chat_content_id' => $chat_content_id,
                'info_json' => "$info",
                'user_id' => "$uid",
                'updated_at' => date('Y-m-d H:i:s'),
                'created_at' => date('Y-m-d H:i:s'),
                'json_result' => json_encode($result),
            ]);


        }
        return redirect("/weekly_recipe/$chat_content_id")->with('message', 'Created a weekly recipe plan for you');

    }
    /**
     *create_recipe_list
     */
    public function create_recipe_list()
    {
        $uid = session('Home_user_id');
        if (empty($uid)){
            return redirect('/login')->with('message', 'Please log in first');
        }
        $chat_data = Chat_content::orderby('created_at','desc')->where('user_id',$uid)->get();
//        $chat_data[0]['api_edamam_data'] = json_decode($chat_data[0]->api_edamam_results, true);
        return view('home.create_recipe_list',compact('chat_data'));
    }
    /**
     *create_recipe_info
     */
    public function create_recipe_info($id)
    {
        $uid = session('Home_user_id');
        if (empty($uid)){
            return redirect('/login')->with('message', 'Login Expired');
        }
        $chat_data = Chat_content::where('id',$id)->where('user_id',$uid)->get();
        $chat_data[0]['api_edamam_data'] = json_decode($chat_data[0]->api_edamam_results, true);
        $array_data = json_decode($chat_data[0]->chatgpt_result, true);
        $chat_data[0]['chatgpt_result_data']  = $array_data['choices'][0]['message']['content'];
        $chat_data =$chat_data[0];
        return view('home.create_recipe',compact('chat_data'));
    }
    /**
     *Create your recipe
     */
    public function create_recipe()
    {
        $uid = session('Home_user_id');
        $chat_data = Chat_content::orderby('created_at','desc')->where('user_id',$uid)->get();
        $chat_data[0]['api_edamam_data'] = json_decode($chat_data[0]->api_edamam_results, true);

        $array_data = json_decode($chat_data[0]->chatgpt_result, true);
        $chat_data[0]['chatgpt_result_data']  = $array_data['choices'][0]['message']['content'];
        $chat_data =$chat_data[0];
        return view('home.create_recipe',compact('chat_data'));
    }
    /**
     *Create your recipe
     */
    public function create_recipe_edit_processing(Request $request,$id)
    {
        $uid = session('Home_user_id');
        if (empty($uid)){
            return redirect('/login')->with('message', 'Please log in first');
        }
        $chat_data = Chat_content::where('id',$id)->where('user_id',$uid)->first();
        $api_edamam_data = json_decode($chat_data->api_edamam_results, true);
        $api_edamam_data['calories'] = $request->calories;
        $api_edamam_data['co2EmissionsClass'] =$request->co2EmissionsClass;
        $api_edamam_data['totalWeight'] =$request->totalWeight;
        $api_edamam_data['totalNutrients']['ENERC_KCAL']['quantity'] =$request->ENERC_KCAL;
        $api_edamam_data['totalNutrients']['FAT']['quantity'] =$request->FAT;
        $api_edamam_data['totalNutrients']['FATRN']['quantity'] =$request->FATRN;
        $api_edamam_data['totalNutrients']['CHOCDF']['quantity'] =$request->CHOCDF_net;
        $api_edamam_data['totalNutrients']['FIBTG']['quantity'] =$request->FIBTG;
        $api_edamam_data['totalNutrients']['SUGAR']['quantity'] =$request->SUGAR;
        $api_edamam_data['totalNutrients']['PROCNT']['quantity'] =$request->PROCNT;
        $api_edamam_data['totalNutrients']['NA']['quantity'] =$request->NA;
        $api_edamam_data['totalNutrients']['MG']['quantity'] =$request->MG;
        $api_edamam_data['totalNutrients']['K']['quantity'] =$request->K;
        $api_edamam_data['totalNutrients']['FE']['quantity'] =$request->FE;
        $api_edamam_data['totalNutrients']['P']['quantity'] =$request->P;
        $api_edamam_data['totalNutrients']['VITA_RAE']['quantity'] =$request->VITA_RAE;
        $api_edamam_data['totalNutrients']['VITC']['quantity'] =$request->VITC;
        $api_edamam_data['totalNutrients']['NIA']['quantity'] =$request->NIA;
        $api_edamam_data['totalNutrients']['WATER']['quantity'] =$request->WATER;
        $api_edamam_data['totalDaily']['FAT']['quantity'] =$request->totalDaily_FAT;
        $api_edamam_data['totalDaily']['FASAT']['quantity'] =$request->FASAT;
        $api_edamam_data['totalDaily']['ENERC_KCAL']['quantity'] =$request->totalDaily_ENERC_KCAL;
        $api_edamam_data['totalDaily']['CHOCDF']['quantity'] =$request->CHOCDF;
        $api_edamam_data['totalDaily']['FIBTG']['quantity'] =$request->totalDaily_FIBTG;
        $api_edamam_data['totalDaily']['PROCNT']['quantity'] =$request->totalDaily_PROCNT;
        $api_edamam_data_json = json_encode($api_edamam_data);
        $chat_data->api_edamam_results = $api_edamam_data_json;
        if ($chat_data->save()){
            return redirect('/create_recipe')->with('message', 'Recipe report updated successfully');
        }else{
            return redirect('/create_recipe')->with('message', 'Recipe report update failed');
        }
    }
    /**
     *create recipe edit
     */
    public function create_recipe_edit($id)
    {
        $uid = session('Home_user_id');
        $chat_data = Chat_content::orderby('created_at','desc')->where('user_id',$uid)->first();
        $chat_data['api_edamam_data'] = json_decode($chat_data->api_edamam_results, true);
//        dd($chat_data['api_edamam_data']['totalDaily']['ENERC_KCAL']);
        return view('home.create_recipe_edit',compact('chat_data'));
    }
    /**
     *Create your recipe
     */
    public function form_post(Request $request)
    {
        $uid = session('Home_user_id');
        if (empty($uid)){
            return redirect('/login')->with('message', 'Only after logging in can a recipe be created');
        }
//        dd();
        $user_info =  $request->user_info.",Based on the above information, we recommend the required nutritional data";
//dd($user_info);
                $messages = [
            ['role' => 'user', 'content' => $user_info],
        ];
        $chatgpt_result = OpenAI::chat()->create([
            'model' => 'gpt-3.5-turbo',
            'messages' => $messages,
        ]);


        $chatgpt_result = json_encode($chatgpt_result);
//dd($chatgpt_result);
        $Chat_content_tab = new Chat_content;
        $url = "https://api.edamam.com/api/nutrition-data?";
        if (!empty($request->cookbook)){
            $data = array( 'app_id' => '637bd403',
                'app_key' => 'b3d7e2775a286453eb699a8611035cf8',
                'nutrition-type' => 'cooking',
                'ingr' => "$request->cookbook"
            );

            $postdata = http_build_query($data);
            $api = $url.$postdata;
            $json = file_get_contents($api);
        }else{
            $api_url ='https://api.edamam.com/api/nutrition-data?app_id=637bd403&app_key=b3d7e2775a286453eb699a8611035cf8&nutrition-type=cooking&ingr=1%20cup%20rice%2C%2010%20oz%20chickpeas';
            $json = file_get_contents($api_url);
        }
//        $arr_data = json_decode($json, true);
        $Chat_content_tab->user_id = $uid;
        $Chat_content_tab->api_edamam_results = $json;
        $Chat_content_tab->chatgpt_result = $chatgpt_result;
        $Chat_content_tab->cookbook = $request->cookbook;
        $Chat_content_tab->user_info = $user_info;
        if ($Chat_content_tab->save()){
            return redirect('/create_recipe')->with('message', 'Your report has been generated, please review');
        }else{
            return redirect('/form')->with('message', 'Your recipe creation failed');
        }

    }

    public function log_out()
    {

        session()->pull('Home_user_id');
        session()->pull('Home_user_name');
        session()->pull('email');
        return redirect('/login');

    }

    public function login() {
        return view('home.login');
    }
    public function register() {
        return view('home.register');
    }
    public function register_store(Request $request) {
        //用户添加处理
        $tab = new Users;
//        dd($request->all());
        $uname = $request->input('Username','');//传过来的用户名
        $tab->name = $uname;
        $tab->email = $request->input('email','');
        if ($request->input('password','') != $request->input('doPassword','')){
            $request->flashExcept('_token','password');
            return redirect($_SERVER['HTTP_REFERER'])->with('message', 'The two passwords do not match');
        }
        $tab->password = Hash::make($request->input('password',''));
        $sole = $tab->where('name',$uname)->get();
        if ($sole->count()){
            //判断用户是否存在
            $request->flashExcept('_token','password');
            return redirect($_SERVER['HTTP_REFERER'])->with('message', 'User already exists');
        }else{
            if($tab->save()){
                return redirect('/login')->with('ok', 'Register successfully, log in now.');
            }else{
                return redirect($_SERVER['HTTP_REFERER'])->with('message', '添加失败');
            }
        }

    }

    public function dologin(Request $request) {
        $uname = $request['user_name'];
        $password = $request['password'];
        $user = Users::where('name',"$uname")->first();
        if (!empty($user)) {
            $user_password = $user->password;
            if (Hash::check($password, $user_password)) {
                $user_id = $user->id;
                $user_name = $user->name;
                $user_email = $user->email;
                session(['Home_user_id'=>$user_id]);
                session(['Home_user_name'=>$user_name]);
                session(['email'=>$user_email]);
                return redirect('/form');
            }else{
                $request->flashExcept('_token','password');
                return redirect($_SERVER['HTTP_REFERER'])->with('message', 'Password error');
            }
        }else{
            $request->flashExcept('_token','password');
            return redirect($_SERVER['HTTP_REFERER'])->with('message', 'User does not exist');
        }

    }
    /***
     *create_recipe_del
     ****/
    public function create_recipe_del($id)
    {
        $Home_user_id =  session('Home_user_id');//user ID
        if (empty($uid)){
            return redirect('/login')->with('message', 'Please log in first');
        }
        $data = Chat_content::where('id',$id)->where('user_id',$Home_user_id)->first();
        if ($data->delete()){
            return redirect('/create_recipe_list')->with('message', 'Successfully deleted');
        }else{
            return redirect('create_recipe_list')->with('message', 'Delete failed！！！');
        }

    }

}
