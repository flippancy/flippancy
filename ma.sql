-- phpMyAdmin SQL Dump
-- version 3.4.10.1
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2014 年 12 月 16 日 03:36
-- 服务器版本: 5.5.20
-- PHP 版本: 5.3.10

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `ma`
--

-- --------------------------------------------------------

--
-- 表的结构 `ma_file`
--

CREATE TABLE IF NOT EXISTS `ma_file` (
  `filename` varchar(32) NOT NULL COMMENT '文件名',
  `size` int(11) NOT NULL COMMENT '文件大小',
  `path` varchar(32) NOT NULL COMMENT '文件路径',
  `time` datetime NOT NULL COMMENT '上传时间',
  `author` varchar(32) NOT NULL COMMENT '作者',
  `instruction` varchar(64) NOT NULL COMMENT '说明',
  `pass` varchar(32) NOT NULL COMMENT '密码',
  PRIMARY KEY (`filename`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `ma_news`
--

CREATE TABLE IF NOT EXISTS `ma_news` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '主键',
  `title` varchar(100) NOT NULL COMMENT '标题',
  `date` date NOT NULL COMMENT '新闻时间',
  `content` text NOT NULL COMMENT '新闻简介',
  `image-text` text NOT NULL COMMENT '图文详情',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='新闻表' AUTO_INCREMENT=9 ;

--
-- 转存表中的数据 `ma_news`
--

INSERT INTO `ma_news` (`id`, `title`, `date`, `content`, `image-text`) VALUES
(1, '一切的开始', '2014-12-13', '北京理工大学珠海学院移动联盟网站正式诞生！', ''),
(3, '打哈哈', '2014-12-13', '阿迪达斯大1额我打算打啊宿舍打扫大嫂打阿迪达斯大1额我打算打啊宿舍打扫大嫂打阿迪达斯大1额我打算打啊阿迪达斯大1额我打算打啊宿舍打扫大嫂打阿迪达斯大1额我打算打啊宿舍打扫大嫂打阿迪达斯大1额我打算打啊', ''),
(4, 'asdasd', '2014-12-13', '阿迪达斯大1额我打算打啊宿舍打扫大嫂打阿迪达斯大1额我打算打啊宿舍打扫大嫂打阿迪达斯大1额我打算打啊', ''),
(5, '123213', '2014-12-13', '啊打我', ''),
(6, '12312', '2014-12-13', '阿迪达斯大1额我打算打啊宿舍打扫大嫂打阿迪达斯大1额我打算打啊宿舍打扫大嫂打阿迪达斯大1额我打算打啊阿迪达斯大1额我打算打啊宿舍打扫大嫂打阿迪达斯大1额我打算打啊宿舍打扫大嫂打阿迪达斯大1额我打算打啊', ''),
(7, '123123', '2014-12-14', '阿迪达斯大1额我打算打啊宿舍打扫大嫂打阿迪达斯大1额我打算打啊宿舍打扫大嫂打阿迪达斯大1额我打算打啊', ''),
(8, '123', '2014-12-14', '123                                                                                                                     ', '');

-- --------------------------------------------------------

--
-- 表的结构 `ma_person`
--

CREATE TABLE IF NOT EXISTS `ma_person` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '主键',
  `name` varchar(11) NOT NULL COMMENT '人物姓名',
  `sex` varchar(11) CHARACTER SET utf16 NOT NULL COMMENT '性别',
  `age` int(11) NOT NULL COMMENT '年龄',
  `role` varchar(50) NOT NULL COMMENT '社团中的角色、身份',
  `english_name` varchar(50) NOT NULL COMMENT '英文名',
  `college` varchar(50) NOT NULL COMMENT '属于哪个学院、班级',
  `content` text NOT NULL COMMENT '内容介绍',
  `img_path` varchar(255) NOT NULL COMMENT '头像',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='优秀社团人物表' AUTO_INCREMENT=4 ;

--
-- 转存表中的数据 `ma_person`
--

INSERT INTO `ma_person` (`id`, `name`, `sex`, `age`, `role`, `english_name`, `college`, `content`, `img_path`) VALUES
(1, '朱冠州', '男', 20, '非常重要', 'HackerZ', '计算机学院', '我了个企业我了个企业我了个企业我了个企业我了个企业我了个企业我了个企业我了个企业我了个企业我了个企业我了个企业我了个企业我了个企业我了个企业我了个企业我了个企业我了个企业我了个企业我了个企业我了个企业我了个企业我了个企业我了个企业我了个企业我了个企业我了个企业我了个企业我了个企业我了个企业', ''),
(3, '陈健祥', '男', 20, '大人物', 'flippancy', '计算机学院', '', '');

-- --------------------------------------------------------

--
-- 表的结构 `ma_user`
--

CREATE TABLE IF NOT EXISTS `ma_user` (
  `user_id` int(11) NOT NULL COMMENT '用户id',
  `username` varchar(16) NOT NULL COMMENT '用户账户',
  `password` varchar(32) NOT NULL COMMENT '用户密码',
  `salt` varchar(10) NOT NULL COMMENT '加盐',
  `loginname` varchar(32) NOT NULL COMMENT '登陆名',
  `lastlogin` datetime NOT NULL COMMENT '上次登陆时间',
  `ip` varchar(16) NOT NULL COMMENT '登陆ip',
  `power` tinyint(5) NOT NULL COMMENT '权限',
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `ma_user`
--

INSERT INTO `ma_user` (`user_id`, `username`, `password`, `salt`, `loginname`, `lastlogin`, `ip`, `power`) VALUES
(0, 'hackerz', '911b008995e0ed77f137d1e58df96689', '1Xtxlz', 'hackerz', '2014-12-13 14:13:05', '127.0.0.1', 1),
(1, 'flippancy', '9b4111f4ffb2f9532b9e8120b7b8e2ea', '', 'flippancy', '2014-12-16 11:34:28', '0.0.0.0', 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
