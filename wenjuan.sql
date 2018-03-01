-- --------------------------------------------------------
-- 主机:                           127.0.0.1
-- 服务器版本:                        5.5.53 - MySQL Community Server (GPL)
-- 服务器操作系统:                      Win32
-- HeidiSQL 版本:                  8.2.0.4675
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- 导出  表 wenjuan.p_info 结构
CREATE TABLE IF NOT EXISTS `p_info` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `p_name` varchar(50) DEFAULT NULL COMMENT '家长中文姓名',
  `p_e_name` varchar(50) DEFAULT NULL COMMENT '家长(监护人)护照英文姓名拼音',
  `P_birthday` timestamp NULL DEFAULT NULL COMMENT '出生日期',
  `relation` varchar(50) DEFAULT NULL COMMENT '关系',
  `p_nationality` varchar(50) DEFAULT NULL COMMENT '国籍',
  `p_port_num` varchar(50) DEFAULT NULL COMMENT '护照号码',
  `P_phone` varchar(50) DEFAULT NULL COMMENT '联系电话',
  `is_migrate` enum('是','否') DEFAULT NULL COMMENT '是否有移民需求',
  `is_abroad` enum('是','否') DEFAULT NULL COMMENT '孩子将来是否有赴美教育规划',
  `p_email` varchar(50) DEFAULT NULL COMMENT '电子邮件',
  `p_address` varchar(50) NOT NULL COMMENT '地址',
  `post_code` varchar(50) DEFAULT NULL COMMENT '邮政编码',
  `emergent_number` varchar(50) DEFAULT NULL COMMENT '关系',
  `emergent_relation` varchar(50) DEFAULT NULL COMMENT '紧急联系人',
  `emergent_phone` varchar(50) DEFAULT NULL COMMENT '联系电话',
  `emergent_wechat` varchar(50) DEFAULT NULL COMMENT '微信',
  `enlist` varchar(255) DEFAULT NULL COMMENT '报名选项',
  `enlist_content` varchar(255) DEFAULT NULL COMMENT '套餐内容选项',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COMMENT='学生信息';

-- 正在导出表  wenjuan.p_info 的数据：~0 rows (大约)
DELETE FROM `p_info`;
/*!40000 ALTER TABLE `p_info` DISABLE KEYS */;
INSERT INTO `p_info` (`id`, `p_name`, `p_e_name`, `P_birthday`, `relation`, `p_nationality`, `p_port_num`, `P_phone`, `is_migrate`, `is_abroad`, `p_email`, `p_address`, `post_code`, `emergent_number`, `emergent_relation`, `emergent_phone`, `emergent_wechat`, `enlist`, `enlist_content`, `created_at`, `updated_at`) VALUES
	(6, '陈翔宇', 'chenxaingyu', '2018-03-17 00:00:00', '叔叔', '美国', '1561465', '15000694550', '是', '是', '996163957@qq.com', '颐景园', '14025652', '哈哈', '嘿嘿', '15000694560', '1256156', '套餐:套餐A -磐远游学团    城市:洛杉矶    营队:洛杉矶营队A: 2018/07/15-2018/07/29', '生存力及领导力主题+艺术领域主题', '2018-03-01 20:09:12', '2018-03-01 20:09:12');
/*!40000 ALTER TABLE `p_info` ENABLE KEYS */;


-- 导出  表 wenjuan.s_info 结构
CREATE TABLE IF NOT EXISTS `s_info` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `p_info_id` int(11) NOT NULL DEFAULT '0',
  `name` varchar(50) DEFAULT NULL,
  `sex` enum('男','女') DEFAULT NULL,
  `e_name` varchar(50) DEFAULT NULL,
  `birthday` timestamp NULL DEFAULT NULL,
  `passport` varchar(50) DEFAULT NULL,
  `nationality` varchar(50) DEFAULT NULL,
  `is_food` enum('是','否') DEFAULT NULL,
  `food_name` varchar(50) DEFAULT NULL,
  `is_medicine` enum('是','否') DEFAULT NULL,
  `medicine_name` varchar(50) DEFAULT NULL,
  `is_require` enum('是','否') DEFAULT NULL,
  `require_name` varchar(50) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COMMENT='学生信息表';

-- 正在导出表  wenjuan.s_info 的数据：~0 rows (大约)
DELETE FROM `s_info`;
/*!40000 ALTER TABLE `s_info` DISABLE KEYS */;
INSERT INTO `s_info` (`id`, `p_info_id`, `name`, `sex`, `e_name`, `birthday`, `passport`, `nationality`, `is_food`, `food_name`, `is_medicine`, `medicine_name`, `is_require`, `require_name`, `created_at`, `updated_at`) VALUES
	(3, 6, '晨晨', '男', 'chenchen', '2018-03-28 00:00:00', '411527', '中国', '是', '过敏食物', '是', '过敏药物', '是', '特殊要求', NULL, NULL),
	(4, 6, '晨晨2', '男', 'chenchen2', '2018-04-07 00:00:00', '2156', '美国', '是', '过敏', '是', '过敏', '是', '过敏', NULL, NULL);
/*!40000 ALTER TABLE `s_info` ENABLE KEYS */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
