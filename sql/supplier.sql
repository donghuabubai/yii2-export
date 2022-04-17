#建表
DROP TABLE IF EXISTS `supplier`;
CREATE TABLE `supplier`
  (`id` int unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL DEFAULT '',
  `code` char(3) CHARACTER SET ascii COLLATE ascii_general_ci DEFAULT NULL,
  `t_status` enum('ok','hold') CHARACTER SET ascii COLLATE ascii_general_ci NOT NULL DEFAULT 'ok',
  PRIMARY KEY (`id`), UNIQUE KEY `uk_code` (`code`))
  ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

#插入数据
INSERT INTO `supplier` (name, code, t_status) VALUES ('字节跳动', 'zj', 'hold');
INSERT INTO `supplier` (name, code, t_status) VALUES ('顺丰', 'sf', 'ok');
INSERT INTO `supplier` (name, code, t_status) VALUES ('华为', 'hw', 'hold');
INSERT INTO `supplier` (name, code, t_status) VALUES ('OPPO', 'op', 'ok');
INSERT INTO `supplier` (name, code, t_status) VALUES ('大疆', 'dj', 'ok');
INSERT INTO `supplier` (name, code, t_status) VALUES ('公牛插座', 'gn', 'hold');
INSERT INTO `supplier` (name, code, t_status) VALUES ('魅族', 'mz', 'ok');
INSERT INTO `supplier` (name, code, t_status) VALUES ('Shopee', 'sp', 'ok');
INSERT INTO `supplier` (name, code, t_status) VALUES ('明源云', 'yyy', 'hold');
INSERT INTO `supplier` (name, code, t_status) VALUES ('招商银行', 'zs', 'ok');
INSERT INTO `supplier` (name, code, t_status) VALUES ('同花顺', 'ths', 'ok');
INSERT INTO `supplier` (name, code, t_status) VALUES ('百度', 'bd', 'ok');
INSERT INTO `supplier` (name, code, t_status) VALUES ('中兴', 'zx', 'hold');