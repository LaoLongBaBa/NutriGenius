
SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for chat_content
-- ----------------------------
DROP TABLE IF EXISTS `chat_content`;
CREATE TABLE `chat_content` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `cookbook` text COMMENT 'Food input by the user',
  `user_info` text,
  `user_id` int(10) DEFAULT NULL,
  `updated_at` varchar(255) DEFAULT NULL,
  `created_at` varchar(255) DEFAULT NULL,
  `chatgpt_result` text COMMENT 'chatgpt result',
  `api_edamam_results` text,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of chat_content
-- ----------------------------

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `updated_at` varchar(255) DEFAULT NULL,
  `created_at` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=23 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of users
-- ----------------------------


-- ----------------------------
-- Table structure for week_recipe
-- ----------------------------
DROP TABLE IF EXISTS `week_recipe`;
CREATE TABLE `week_recipe` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `chat_content_id` int(10) DEFAULT NULL,
  `json_result` text,
  `updated_at` varchar(255) DEFAULT NULL,
  `created_at` varchar(255) DEFAULT NULL,
  `info_json` text,
  `user_id` int(10) DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of week_recipe
-- ----------------------------


SET FOREIGN_KEY_CHECKS = 1;
nutrigeniusnutrigenius