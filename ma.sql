-- phpMyAdmin SQL Dump
-- version 3.4.10.1
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2014 年 12 月 20 日 13:47
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

--
-- 转存表中的数据 `ma_file`
--

INSERT INTO `ma_file` (`filename`, `size`, `path`, `time`, `author`, `instruction`, `pass`) VALUES
('商城管理组文档以及项目', 138974, '冯子晨/2014-12-20/', '2014-12-20 00:09:20', '冯子晨', '商城管理的设计刚开始是基于新开的华发商都所设计的。', '9df62e693988eb4e1e1444ece0578579'),
('好旅行项目开发文档', 796697, '钟鹏皓/2014-12-20/', '2014-12-20 00:11:23', '钟鹏皓', '实际上线的项目', '77963b7a931377ad4ab5ad6a9cd718aa'),
('官网项目开发文档以及设想', 43414, '朱冠洲/2014-12-20/', '2014-12-20 00:17:29', '朱冠洲', '移动联盟的设计思路和需求分析', '343d9040a671c45832ee5381860e2996'),
('旅游景点组文档以及项目', 314017, '陈健祥/2014-12-20/', '2014-12-20 00:03:40', '陈健祥', '珠海旅游景点项目，内部包括5个珠海景点的所有信息处理，还包含了内部的酒店和商铺、餐饮等信息', '47bce5c74f589f4867dbd57e9ca9f808'),
('珠海餐饮店组文档以及项目', 567851, '万永昭/2014-12-20/', '2014-12-20 00:13:01', '万永昭', '珠海餐饮的介绍和等级指数，评论等', 'd2f2297d6e829cd3493aa7de4416a18f'),
('酒店管理组文档以及项目', 101527, '孙泽宸/2014-12-20/', '2014-12-20 00:07:50', '孙泽宸', '酒店管理项目的设计理念是为酒店经营方便以及宣传方面的业务设想。', '08f8e0260c64418510cefb2b06eee5cd');

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
(1, '2014-12-02会议', '2014-12-02', '官网项目的开发总结，各个组新的开发内容和文档。还有介绍新加入的成员已经分配组员。会议后期，已经在实训的大四师兄开始给每个队的项目和文档进行分析。最后又韩迪老师总结会议内容。', ''),
(2, '2014-11-25会议', '2014-11-25', '开始又内部成员分享自己的学习经验，有关python的经验。然后没组公开自己的这个星期以来的工作内容。韩迪老师进行点评，再细分各个小组接下来该做的事情。', ''),
(4, 'asdasd', '2014-12-13', '阿迪达斯大1额我打算打啊宿舍打扫大嫂打阿迪达斯大1额我打算打啊宿舍打扫大嫂打阿迪达斯大1额我打算打啊', ''),
(5, '2014-03-21团队内部讨论会', '2014-03-21', '会议期间每个成员都很积极的说出自己对于移动联盟接下来的内容和以后的发展，会议总结移动联盟的开始以及后面的道路，即一切的开始。', ''),
(6, '2014-6-5-珠海大学生IT论坛第一届', '2014-06-05', '由移动联盟和开源中国开办的珠海大学生IT论坛第一届于图书馆报告厅开始，场面特别的火，几乎挤爆了整个报告厅。各个学生都很有精神的学习着演讲者的经验之谈。也积极参与进来。', ''),
(7, '2014.11.08珠海大学生IT论坛第二届', '2014-11-08', '由移动联盟和开源中国开办的珠海大学生IT论坛第二届再次与图书馆报告厅开始，届时虽然是早上而且下雨，可是依然在开场钱半小时报告厅就爆满了。都是学生向往前辈们的开发之旅的眼神。会议结束后，还有韩迪老师公开招募新移动鲜明成员。', ''),
(8, '2014.10.25新小组有关平台系统讨论', '2014-10-25', '这一期讨论开始了每个小组的项目分发，即每个小组根据珠海旅游，酒店，餐饮等娱乐项目进行微网站的开发。更是组建好每个队伍成员。', '');

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
(1, '朱冠州', '男', 20, '程序员', 'HackerZ', '计算机学院', '北理工珠海学院大二学生，主要研究web开发和安卓开发，目前主要学习安卓内部库的使用。', ''),
(2, '陈健祥', '男', 20, '程序员', 'flippancy', '计算机学院', '北理工珠海学院大二学生，主要研究有web开发和cocos2d的开发。之前主要学习ror，现在研究cocos2d的使用', ''),
(3, '梁文韬', '男', 20, '后台程序员', 'livevilwt', '文法学院', '北理工珠海学院大二学生，主要研究有web开发和python的使用。一直在用python做感兴趣的东西，致力于做webapp的开发。', '');

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
(1, 'flippancy', '9b4111f4ffb2f9532b9e8120b7b8e2ea', '', 'flippancy', '2014-12-19 23:10:42', '0.0.0.0', 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
