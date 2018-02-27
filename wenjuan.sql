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

-- 导出  表 wenjuan.s_info 结构
CREATE TABLE IF NOT EXISTS `s_info` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL COMMENT '中文姓名',
  `sex` enum('男','女') DEFAULT NULL COMMENT ' 性别',
  `e_name` varchar(50) DEFAULT NULL COMMENT '姓名拼音',
  `birthday` timestamp NULL DEFAULT NULL COMMENT '出生日期',
  `passport` varchar(50) DEFAULT NULL COMMENT '护照号码',
  `nationality` varchar(50) DEFAULT NULL COMMENT '国籍',
  `is_food` enum('是','否') DEFAULT NULL COMMENT '是否有对食物过敏',
  `food_name` varchar(50) DEFAULT NULL COMMENT '过敏食物名称',
  `is_medicine` enum('是','否') DEFAULT NULL COMMENT '是否有对药物过敏',
  `medicine_name` varchar(50) DEFAULT NULL COMMENT '国民药物名称',
  `is_require` enum('是','否') DEFAULT NULL COMMENT '是否有个人特殊要求',
  `require_name` varchar(50) DEFAULT NULL COMMENT '特殊要求',
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
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8 COMMENT='学生信息';

-- 正在导出表  wenjuan.s_info 的数据：10 rows
DELETE FROM `s_info`;
/*!40000 ALTER TABLE `s_info` DISABLE KEYS */;
INSERT INTO `s_info` (`id`, `name`, `sex`, `e_name`, `birthday`, `passport`, `nationality`, `is_food`, `food_name`, `is_medicine`, `medicine_name`, `is_require`, `require_name`, `p_name`, `p_e_name`, `P_birthday`, `relation`, `p_nationality`, `p_port_num`, `P_phone`, `is_migrate`, `is_abroad`, `p_email`, `p_address`, `post_code`, `emergent_number`, `emergent_relation`, `emergent_phone`, `emergent_wechat`, `enlist`, `enlist_content`, `created_at`, `updated_at`) VALUES
	(1, 'dadada', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-02-26 15:15:15', '2018-02-26 15:15:15'),
	(2, '陈翔宇', '', 'chenxiangyu', '2018-02-23 00:00:00', '411527199211022097', '中国', '是', '而纷纷无法', '否', NULL, '是', '份额为威风', '陈翔宇', 'chenxiangyu', '2018-02-22 00:00:00', 'hehe ', '中国', '4111556244', '545665465', '是', '否', '99@qq.com', '德费尔费', '411527', '的大苏打', NULL, '15000694560', '14564654645', '套餐:套餐A -磐远游学团    城市：旧金山    旧金山营队A: 2018/07/15-2018/07/29', '生存力及领导力主题+科学领域主题', '2018-02-26 15:15:47', '2018-02-26 15:15:47'),
	(3, '陈翔宇', '', 'chenxiangyu', '2018-02-23 00:00:00', '411527199211022097', '中国', '是', '而纷纷无法', '否', NULL, '是', '份额为威风', '陈翔宇', 'chenxiangyu', '2018-02-22 00:00:00', 'hehe ', '中国', '4111556244', '545665465', '是', '否', '99@qq.com', '德费尔费', '411527', '的大苏打', NULL, '15000694560', '14564654645', '套餐:套餐A -磐远游学团    城市：旧金山    旧金山营队A: 2018/07/15-2018/07/29', '生存力及领导力主题+科学领域主题', '2018-02-26 15:21:26', '2018-02-26 15:21:26'),
	(4, '陈翔宇', '男', 'chenxiangyu', '2018-02-23 00:00:00', '411527199211022097', '中国', '是', '而纷纷无法', '否', NULL, '是', '份额为威风', '陈翔宇', 'chenxiangyu', '2018-02-22 00:00:00', 'hehe ', '中国', '4111556244', '545665465', '是', '否', '99@qq.com', '德费尔费', '411527', '陈翔宇', '的大苏打', '15000694560', '14564654645', '套餐:套餐A -磐远游学团    城市：旧金山    旧金山营队A: 2018/07/15-2018/07/29', '生存力及领导力主题+科学领域主题', '2018-02-26 15:23:52', '2018-02-26 15:23:52'),
	(5, '陈翔宇', '男', 'chenxiangyu', '2018-02-23 00:00:00', '411527199211022097', '中国', '是', '而纷纷无法', '否', NULL, '是', '份额为威风', '陈翔宇', 'chenxiangyu', '2018-02-22 00:00:00', 'hehe ', '中国', '4111556244', '545665465', '是', '否', '99@qq.com', '德费尔费', '411527', '陈翔宇', '的大苏打', '15000694560', '14564654645', '套餐:套餐A -磐远游学团    城市：旧金山    旧金山营队A: 2018/07/15-2018/07/29', '生存力及领导力主题+科学领域主题', '2018-02-26 15:25:02', '2018-02-26 15:25:02'),
	(6, '陈翔宇', '男', 'chenxiangyu', '2018-02-23 00:00:00', '411527199211022097', '中国', '是', '而纷纷无法', '否', NULL, '是', '份额为威风', '陈翔宇', 'chenxiangyu', '2018-02-22 00:00:00', 'hehe ', '中国', '4111556244', '545665465', '是', '否', '99@qq.com', '德费尔费', '411527', '陈翔宇', '的大苏打', '15000694560', '14564654645', '套餐:套餐A -磐远游学团    城市：旧金山    旧金山营队A: 2018/07/15-2018/07/29', '生存力及领导力主题+科学领域主题', '2018-02-26 15:25:17', '2018-02-26 15:25:17'),
	(7, '陈翔宇', '男', 'chenxiangyu', '2018-02-23 00:00:00', '411527199211022097', '中国', '是', '而纷纷无法', '否', NULL, '是', '份额为威风', '陈翔宇', 'chenxiangyu', '2018-02-22 00:00:00', 'hehe ', '中国', '4111556244', '545665465', '是', '否', '99@qq.com', '德费尔费', '411527', '陈翔宇', '的大苏打', '15000694560', '14564654645', '套餐:套餐A -磐远游学团    城市：旧金山    旧金山营队A: 2018/07/15-2018/07/29', '生存力及领导力主题+科学领域主题', '2018-02-26 15:37:59', '2018-02-26 15:37:59'),
	(8, '陈翔宇', '男', 'chenxiangyu', '2018-02-23 00:00:00', '411527199211022097', '中国', '是', '而纷纷无法', '否', NULL, '是', '份额为威风', '陈翔宇', 'chenxiangyu', '2018-02-22 00:00:00', 'hehe ', '中国', '4111556244', '545665465', '是', '否', '99@qq.com', '德费尔费', '411527', '陈翔宇', '的大苏打', '15000694560', '14564654645', '套餐:套餐A -磐远游学团    城市：旧金山    旧金山营队A: 2018/07/15-2018/07/29', '生存力及领导力主题+科学领域主题', '2018-02-26 17:09:15', '2018-02-26 17:09:15'),
	(9, '陈翔宇a ', '男', 'chenxiangyu', '2018-02-23 00:00:00', '411527199211022097', '中国', '是', '而纷纷无法', '否', NULL, '是', '份额为威风', '陈翔宇', 'chenxiangyu', '2018-02-22 00:00:00', 'hehe ', '中国', '4111556244', '545665465', '是', '否', '99@qq.com', '德费尔费', '411527', '陈翔宇', '的大苏打', '15000694560', '14564654645', '套餐:套餐A -磐远游学团    城市：旧金山    旧金山营队A: 2018/07/15-2018/07/29', '生存力及领导力主题+科学领域主题', '2018-02-26 17:12:03', '2018-02-26 17:12:03'),
	(10, '陈翔宇与', '女', 'chenchen', '2018-02-01 00:00:00', '4555555', '没发过', '否', '', '是', NULL, '是', '纷纷', '称策划', 'cjiadmad', '2018-03-01 00:00:00', '父亲', '发的发', '11515665', '15000694560', '否', '否', '996163957@qq.com', '已经元', '4112524', '芙蓉王芙蓉王', '富人服务', '15000694560', '161646576165', '套餐:套餐B -磐远亲子夏令营    城市：洛杉矶    洛杉矶营队A: 2018/07/15-2018/07/29', '生存力及领导力主题+艺术领域主题', '2018-02-26 18:14:31', '2018-02-26 18:14:31');
/*!40000 ALTER TABLE `s_info` ENABLE KEYS */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
