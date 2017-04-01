--
-- MySQL database dump
-- Created by DbManage class, Power By yanue. 
-- http://yanue.net 
--
-- 主机: localhost
-- 生成日期: 2016 年  10 月 15 日 11:29
-- MySQL版本: 5.5.21-log
-- PHP 版本: 5.4.27

--
-- 数据库: `test`
--

-- -------------------------------------------------------

--
-- 表的结构t_group
--

DROP TABLE IF EXISTS `t_group`;
CREATE TABLE `t_group` (
  `id` int(11) NOT NULL,
  `name` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 t_group
--

INSERT INTO `t_group` VALUES('1','Group1');
INSERT INTO `t_group` VALUES('2','Group1');
--
-- 表的结构t_user
--

DROP TABLE IF EXISTS `t_user`;
CREATE TABLE `t_user` (
  `id` int(11) NOT NULL,
  `name` varchar(30)  DEFAULT NULL,
  `groupid` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `user_fk_u1` (`groupid`),
  CONSTRAINT `user_fk_u1` FOREIGN KEY (`groupid`) REFERENCES `t_group` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 t_user
--

INSERT INTO `t_user` VALUES('1','qianxin','1');
INSERT INTO `t_user` VALUES('2','qianxin','1');
INSERT INTO `t_user` VALUES('3','qianxin','1');
--
-- 表的结构t_user1
--

DROP TABLE IF EXISTS `t_user1`;
CREATE TABLE `t_user1` (
  `id` int(11) NOT NULL,
  `name` varchar(30) DEFAULT NULL,
  `groupid` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `groupid` (`groupid`),
  CONSTRAINT `t_user1_ibfk_1` FOREIGN KEY (`groupid`) REFERENCES `t_group` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 t_user1
--

INSERT INTO `t_user1` VALUES('1','aaa','1');
INSERT INTO `t_user1` VALUES('2','aaa','1');
