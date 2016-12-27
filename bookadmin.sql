-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 2016-12-27 04:06:00
-- 服务器版本： 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bookadmin`
--

-- --------------------------------------------------------

--
-- 表的结构 `books`
--

CREATE TABLE `books` (
  `bookid` varchar(45) NOT NULL,
  `bookname` varchar(100) NOT NULL,
  `author` varchar(100) DEFAULT NULL,
  `publishing` varchar(45) DEFAULT NULL,
  `categoryid` int(11) DEFAULT NULL,
  `price` float DEFAULT NULL,
  `datein` date DEFAULT NULL,
  `quantity_in` int(11) NOT NULL,
  `quantity_out` int(11) NOT NULL,
  `quantity_loss` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `books`
--

INSERT INTO `books` (`bookid`, `bookname`, `author`, `publishing`, `categoryid`, `price`, `datein`, `quantity_in`, `quantity_out`, `quantity_loss`) VALUES
('1003078', '小王子', '（法）圣埃克苏佩里', '中国友谊出版公司', 6, 19.8, '2007-04-23', 41, -2, 7),
('1021615', '小王子（中英文对照本）', '[法国] 安东·德·圣艾修伯里', '哈尔滨出版社', 1, 19.8, '1994-08-08', 21, 3, 2),
('1024577', '小王子', '（法）圣埃克苏佩里', '译林出版社', 2, 16.7, '2010-08-24', 48, 5, 8),
('1031368', 'Java应用程序设计接口(下册)--窗口工具箱和applet', '(美)James Gosling Frank Yellin Java 小组', '北京大学出版社', 3, 45, '2015-06-25', 30, 9, 4),
('10432347', '算法', 'Robert Sedgewick Kevin Wayne', '人民邮电出版社', 4, 99, '1983-02-21', 42, 4, 5),
('10484692', 'Java并发编程实战', 'Brian Goetz Tim Peierls Joshua Bloch Joseph Bowbeer David Holmes Doug Lea', '机械工业出版社华章公司', 10, 69, '2009-05-29', 48, 6, 0),
('1048610', '小王子', '[法] 圣埃克絮佩里', '上海译文出版社', 2, 7.4, '1992-05-29', 49, 6, 0),
('1050882', '数据结构', '殷人昆 陶永雷 谢若阳 盛绚华', '清华大学出版社', 1, 26, '2014-01-30', 33, 10, 3),
('10548379', '数据库系统概念', '（美）Abraham Silberschatz （美）Henry F.Korth （美）S.Sudarshan', '机械工业出版社', 9, 99, '2006-05-16', 35, 2, 1),
('10736899', 'NoSQL数据库入门', '[日]佐佐木达也', '人民邮电出版', 1, 45, '1993-06-14', 28, 2, 4),
('1084336', '小王子', '[法] 圣埃克苏佩里', '人民文学出版社', 1, 22, '1982-12-28', 35, 7, 9),
('1085842', '数据结构', '严蔚敏 吴伟民', '湖南人民出版社', 5, 22, '1994-12-24', 33, 10, 6),
('1086496', '数据库系统实现', 'Hector Garcia-Molina Jeffrey D.Ullman Jennifer Wildom', '机械工业出版社', 9, 45, '1993-11-25', 32, 2, 6),
('1086833', '数据库系统概论（第三版）', '萨师煊 王珊', '高等教育出版社', 2, 28, '1987-06-19', 32, 2, 8),
('1094414', '计算机图形学的算法基础', '罗杰斯', '机械工业出版社', 10, 55, '2001-10-01', 25, 8, 3),
('1099975', '小王子', '[法] 圣埃克絮佩里', '上海译文出版社', 2, 21, '2013-10-07', 26, 4, 5),
('1101158', 'Java编程思想(第2版)', '[美] Bruce Eckel', '机械工业出版社', 6, 99, '1987-06-01', 35, 2, 9),
('1101779', '数据结构', '严蔚敏 吴伟民', '清华大学出版社', 9, 30, '1997-01-25', 40, 6, 3),
('1103015', 'Effective Java 中文版', '（美）Joshua Bloch', '机械工业出版社', 5, 39, '1999-03-23', 46, 9, 3),
('1110934', 'STL源码剖析', '侯捷', '华中科技大学出版社', 7, 68, '2004-06-27', 34, 1, 2),
('1118970', '数据库系统概念', 'Abraham Silberchatz Henry F. Korth S. Sudarshan', '机械工业出版社', 8, 69, '1985-12-07', 48, 8, 3),
('1138768', '深入Java虚拟机(原书第2版)', '（美）文纳斯', '机械工业出版社', 2, 58, '1985-12-09', 25, 5, 1),
('1139426', '数据结构与算法分析', 'Mark Allen Weiss (维斯)', '机械工业出版社', 5, 35, '2013-02-06', 35, 10, 5),
('1143801', '算法I～IV（C++实现）――基础、数据结构、排序和搜索（第三版）', 'Robert Sedgewick', '中国电力出版社', 3, 55, '1999-03-20', 26, 8, 5),
('1144007', 'Java数据结构和算法', '拉佛', '中国电力出版社', 9, 55, '2013-12-30', 33, 10, 2),
('11501595', 'Learning Android（中文版）', '马尔科·加尔根塔', '电子工业出版社', 2, 49, '2000-05-01', 34, 8, 3),
('1152912', '算法导论', '[美] Thomas H. Cormen Charles E. Leiserson Ronald L. Rivest Clifford Stein', '高等教育出版社', 5, 68, '1989-03-22', 26, 8, 3),
('11530748', 'Android开发精要', '范怀宇', '机械工业出版社', 3, 69, '2009-08-28', 30, 3, 1),
('11597373', '爱的算法', '(美)刘宇昆', '四川科学技术出版社', 4, 18, '1987-03-23', 46, 7, 8),
('1169844', 'C算法(第一卷:基础、数据结构、排序和搜索)(第三版)', '塞奇威克(Rdbert Sedgewick)', '人民邮电出版社', 10, 54, '2006-05-25', 47, 0, 10),
('1185462', '小王子', '圣埃克苏佩里', '西苑出版社', 9, 19.8, '1987-04-20', 36, 2, 8),
('1199026', '小王子', '[法] 安东尼·德·圣艾修伯里', '天津教育出版社', 10, 19.8, '2006-08-25', 32, 8, 1),
('1230448', 'PHP程序设计', 'Kevin Tatroe Rasmus Lerdorf', '中国电力出版社', 7, 68, '2002-08-31', 49, 7, 8),
('1231835', '数据结构与算法分析（C++版）（第二版）', '[美] Clifford A.Shaffer', '电子工业出版社', 6, 32, '2015-06-06', 48, 3, 5),
('1246192', 'Java Enterprise最佳实践', 'The OReilly Java Authors', '中国电力出版社', 9, 38, '1982-10-23', 35, 0, 7),
('12704993', 'Een Oud-Javaansch Wetboek Vergeleken Met Indische Rechtsbronnen', 'Christoph Gerhard Jonker, Java Johann', '', 2, 29.1, '2001-12-21', 48, 9, 0),
('12704994', 'Een Oud-Javaansch Wetboek Vergeleken Met Indische Rechtsbronnen', 'Christoph Gerhard Jonker, Java Johann', '', 4, 35.02, '2013-10-20', 31, 1, 2),
('1340507', 'PHP和MySQL Web开发', 'Luke Welling Laura Thomson', '机械工业出版社', 9, 78, '1982-07-26', 40, 2, 1),
('13552523', 'Mededeelingen Van Het Proefstation Voor de Java-Suikerindustrie Volume Jaarg.1922', 'De Java-Suikerindustrie, Proefstation Vo', 'Nabu Press', 4, 52.83, '2000-11-21', 33, 5, 10),
('13552524', 'Mededeelingen Van Het Proefstation Voor de Java-Suikerindustrie Volume Deel.11 1921', 'De Java-Suikerindustrie, Proefstation Vo', '', 7, 37, '1993-05-03', 22, 9, 5),
('13552525', 'Mededeelingen Van Het Proefstation Voor de Java-Suikerindustrie Volume Deel.9 1919', 'De Java-Suikerindustrie, Proefstation Vo', '', 6, 92, '1993-08-26', 40, 9, 0),
('13553357', 'Mededeelingen Van Het Proefstation Voor de Java-Suikerindustrie Volume Deel.7 1917', 'De Java-Suikerindustrie, Proefstation Vo', 'Nabu Press', 1, 52.83, '1987-07-10', 35, 2, 10),
('1436131', 'expert one-on-one J2EE Development without EJB 中文版', '詹森', '电子工业', 5, 59.8, '1984-09-13', 47, 5, 8),
('1444648', '数据结构与算法分析', '维斯', '人民邮电出版社', 6, 49, '1995-10-10', 21, 0, 0),
('1474824', 'Thinking in Java', 'Bruce Eckel', 'Prentice Hall', 9, 74.99, '1980-03-21', 22, 1, 7),
('1490045', '小王子', '圣艾修伯里', '云南美术出版社', 2, 21.8, '2012-03-11', 41, 7, 4),
('1755557', 'Purely Functional Data Structures', 'Chris Okasaki', 'Cambridge University Press', 7, 49.99, '1987-03-20', 43, 2, 6),
('1765938', 'Algorithms on Strings, Trees and Sequences', 'Dan Gusfield', 'Cambridge University Press', 9, 99.99, '2003-10-20', 38, 5, 7),
('1781451', 'JAVA 2核心技术 卷Ⅰ', '[美] 霍斯特曼 [美] 科奈尔', '机械工业出版社', 7, 88, '1980-01-11', 40, 1, 2),
('18088798', 'Kodomo No Utaehon', 'PHP Research Institute', '', 6, 0, '1992-03-06', 36, 5, 4),
('18088800', 'Sekai O Kaeta Hito Ga Kodomo Datta Koro No Ohanashi', 'PHP Kenkyujo', '', 6, 94, '1994-05-05', 31, 5, 7),
('1824542', 'PHP和MySQL Web应用开发核心技术', '温施耐德', '机械工业出版社', 7, 78, '1999-11-24', 21, 8, 6),
('1864527', 'Oracle 9i & 10g编程艺术', 'Thomas Kyte', '人民邮电出版社', 5, 99, '2010-12-20', 50, 8, 1),
('1885170', '算法导论（原书第2版）', '[美] Thomas H.Cormen Charles E.Leiserson Ronald L.Rivest Clifford Stein', '机械工业出版社', 8, 85, '1988-01-13', 37, 3, 10),
('1886174', '数据结构', '霍罗威茨', '机械工业出版社', 9, 48, '2015-08-28', 42, 7, 2),
('1886305', '数据结构与算法', '德罗兹德克', '机械工业出版社', 10, 59, '2002-08-23', 46, 8, 3),
('1888733', 'Java Concurrency in Practice', 'Brian Goetz Tim Peierls Joshua Bloch Joseph Bowbeer David Holmes Doug Lea', 'Addison-Wesley Professional', 9, 59.99, '2000-01-13', 37, 0, 0),
('1909336', '数据结构与算法分析', '维斯', '人民邮电', 3, 59, '2001-08-26', 33, 1, 2),
('1915170', '小王子', '[法] 圣·埃克苏佩里', '群言出版社', 5, 21.8, '2007-10-12', 45, 4, 0),
('1917831', 'Agile Java 中文版', 'JEFF LANGR', '电子工业出版社', 7, 69, '2009-07-10', 42, 9, 7),
('1929984', '数据库系统概念', 'Abraham Silberschatz Henry F. Korth S. Sudarshan', '机械工业', 3, 69.5, '2008-12-16', 30, 0, 4),
('1931540', 'PHP & MySQL Web数据库应用开发指南', '威廉斯', '东南大学出版社', 9, 78, '2015-01-08', 49, 5, 8),
('1933695', '小王子', '[法国] 安托万·德·圣埃克苏佩里', '长江文艺出版社 湖北人民出版社', 10, 19, '2011-05-09', 35, 3, 8),
('1945005', '数据库系统概论（第四版）', '王珊 萨师煊', '高等教育出版社', 5, 39, '1995-03-06', 46, 5, 9),
('1954438', '数据库重构', '安布勒', '机械工业出版社发行室', 2, 32, '2004-05-19', 33, 9, 7),
('1958938', 'PHP与MySQL 5程序设计', 'W.Jason Gilmore', '人民邮电出版社', 8, 79, '1991-02-22', 23, 6, 3),
('1971825', '数据结构与算法分析', '[美]Mark Allen Weiss', '人民邮电出版社', 8, 49, '1996-05-21', 48, 5, 5),
('1986590', '小王子', '[法] 圣·埃克苏佩里 [台] 曾铭祥 图', '新世界出版社', 3, 22, '1997-06-22', 47, 5, 8),
('19952400', '算法（第4版）', '塞奇威克 (Robert Sedgewick) 韦恩 (Kevin Wayne)', '人民邮电出版社', 3, 99, '2006-01-19', 47, 4, 9),
('19967506', '小王子', '[法国] 圣埃克苏佩里', '北京十月文艺出版社', 5, 25, '2012-05-02', 28, 2, 1),
('19969386', 'Java程序性能优化', '葛一鸣', '清华大学出版社', 5, 59, '2014-09-09', 50, 2, 0),
('19976838', 'Android应用性能优化', '[法] Hervé Guihot', '人民邮电出版社', 2, 49, '1993-12-08', 45, 7, 7),
('19986441', 'Android系统源代码情景分析', '罗升阳', '电子工业出版社', 5, 109, '2009-05-23', 20, 9, 3),
('2000732', 'Head First Java（第二版·中文版）', 'Kathy Sierra,Bert Bates 著 杨尊一 编译 张然等 改编', '中国电力出版社', 3, 79, '2012-05-14', 32, 4, 5),
('2004540', 'PHP Manual, Volume 1', 'php', 'Iuniverse Inc', 6, 34.95, '2005-05-27', 32, 3, 7),
('2024655', '数据结构', '严蔚敏 吴伟民', '清华大学出版社', 2, 30, '1987-12-14', 47, 8, 6),
('2025548', '数据库系统概念', '西尔伯沙茨 科思 苏达尔善', '高等教育出版社', 8, 65, '1986-10-20', 41, 1, 9),
('20280734', '妙趣横生的心理学', '理查德?A?卡斯乔', '中国人民大学出版社', 2, 68, '2008-06-17', 50, 1, 1),
('20370984', 'PHP核心技术与最佳实践', '列旭松，陈文', '机械工业出版社', 10, 89, '1990-09-19', 32, 9, 3),
('2039931', '小王子', '[法] 圣埃克絮佩里', '上海译文出版社', 2, 9, '2015-02-27', 43, 10, 2),
('20443559', '小王子', '[法] 安托万?德?圣埃克苏佩里', '天津人民出版社', 2, 32, '1993-01-24', 20, 1, 1),
('20556210', 'Android软件安全与逆向分析', '丰生强', '人民邮电出版社', 6, 69, '1990-08-16', 45, 5, 8),
('2071057', 'PHP程序设计', '勒道夫', '电子工业出版社', 4, 80, '2001-12-12', 35, 6, 8),
('2109775', 'PHP与MySQL基础教程', '厄尔曼', '人民邮电出版社', 4, 59, '1990-07-31', 23, 6, 10),
('2122940', '深度探索关系数据库', 'C.J.Date', '电子工业出版社', 6, 35, '2002-01-19', 22, 0, 6),
('2128062', 'Learning PHP & MySQL中文版', '车立红 译', '中国电力', 6, 36, '2007-11-24', 39, 4, 8),
('2130190', 'Java编程思想 （第4版）', '[美] Bruce Eckel', '机械工业出版社', 1, 108, '1985-09-21', 23, 10, 10),
('2148132', 'JAVA并发编程实践', '戈茨', '电子工业出版社', 10, 58, '1986-02-02', 45, 9, 6),
('2158463', '小王子', '[法] 安东尼·德·圣艾修伯里', '天津教育出版社', 1, 26, '2015-08-30', 29, 7, 3),
('2162035', '数据结构', '殷人昆', '清华大学', 5, 39, '2008-01-14', 49, 7, 7),
('2278402', '小王子', '[法] 安托万·德·圣艾克絮佩里', '作家出版社', 5, 25, '1993-11-07', 48, 1, 3),
('22846521', '大数据挑战与NoSQL数据库技术', '陆嘉恒', '电子工业出版社', 6, 79, '1987-06-16', 26, 10, 7),
('24153574', 'Android 4高级编程', '(美)迈耶(Meier, R.) 著', '清华大学出版社', 8, 98, '1990-01-23', 29, 8, 2),
('24706654', '妙趣横生的心理学', '麦格劳.希尔编写组 编', '人民邮电出版社', 5, 99, '1998-05-01', 25, 8, 6),
('24722612', '深入理解Java虚拟机（第2版）', '周志明', '机械工业出版社', 4, 79, '1984-07-26', 39, 7, 4),
('24737847', '七周七数据库', '[美]Eric Redmond', '人民邮电出版社', 10, 59, '1995-02-04', 30, 4, 6),
('25662138', 'NoSQL精粹', '[美]Pramod J. Sadalage [美]Martin Fowler', '机械工业出版社', 8, 49, '1983-11-14', 33, 3, 7),
('25764505', 'Android应用UI设计模式', '纳德尔曼 (Greg Nudelman)', '人民邮电出版社', 8, 69, '1988-09-01', 40, 10, 9),
('25815707', '数据库查询优化器的艺术', '李海翔', '机械工业出版社', 1, 89, '2009-03-07', 26, 10, 1),
('25828043', 'Java性能优化权威指南', 'Charlie Hunt Binu John', '人民邮电出版社', 4, 109, '2009-06-05', 36, 7, 7),
('25848404', 'Android编程权威指南', '[美] Bill Phillips [美] Brian Hardy', '人民邮电出版社', 3, 99, '1990-08-23', 35, 1, 1),
('25867042', '大型网站系统与Java中间件开发实践', '曾宪杰', '电子工业出版社', 7, 65, '1996-12-06', 21, 5, 9),
('25900156', 'Redis设计与实现', '黄健宏', '机械工业出版社', 1, 79, '2006-12-21', 25, 4, 3),
('25942191', '第一行代码', '郭霖', '人民邮电出版社', 6, 79, '2015-02-20', 46, 0, 10),
('25945449', '数据结构与算法JavaScript描述', '[美] Michael McMillan', '人民邮电出版社', 5, 49, '1995-10-22', 23, 6, 1),
('25994192', '我们都是科学家——那些妙趣横生而寓意深远的科学实验', '薛加民', '人民邮电', 4, 55, '1993-06-06', 41, 6, 7),
('26616226', '小王子', '[法]圣埃克斯佩里', '武汉出版社', 7, 29.8, '1992-01-12', 26, 6, 1),
('26647054', '小王子（纯美珍藏绘本）', '[法] 安东尼·德·圣-埃克苏佩里', '中央广播电视大学出版社.国开童媒', 4, 45, '2003-05-28', 42, 7, 6),
('2841183', 'A Letter To My Sisters', 'Collins, Java L.', 'Cornerstone Pub Inc', 4, 131, '1983-10-20', 41, 1, 2),
('2980837', 'PHP 5项目开发实战详解', 'PHP China', '电子工业出版社', 2, 49.8, '2007-10-15', 43, 7, 5),
('2981954', 'PHP 5权威编程', '(美)古曼兹等', '电子工业出版社', 9, 90, '2004-12-05', 42, 5, 0),
('3012338', '深入浅出MySQL数据库开发、优化与管理维护', '唐汉明 翟振兴 关宝军 兰丽华 申宝柱', '人民邮电出版社', 2, 59, '1994-09-16', 28, 2, 10),
('3014576', '陪安东尼度过漫长岁月', '安东尼', '长江文艺出版社', 6, 18, '1991-07-05', 35, 9, 3),
('3134548', 'Android', 'J.F. DiMarzio', 'McGraw-Hill Osborne Media', 4, 39.99, '2004-04-28', 29, 1, 5),
('3146174', 'JAVA核心技术（卷1）', 'Cay S. Horstmann Gary Cornell', '机械工业出版社', 1, 98, '1987-07-28', 24, 7, 6),
('3193185', '小王子', '聖修伯里', '高寶', 10, 190, '1985-08-10', 46, 4, 5),
('3218539', '小王子', '[法]圣埃克苏佩里 [韩]金珉志', '连环画出版社', 6, 28.8, '1980-09-13', 38, 8, 10),
('3227098', '编程珠玑', 'Jon Bentley', '人民邮电出版社', 2, 39, '2002-02-06', 46, 3, 1),
('3229992', 'PHP Web 2.0开发实战', '泽瓦斯', '人民邮电出版社', 3, 59, '2009-08-25', 41, 10, 2),
('3328585', 'Advanced Data Structures', 'Peter Brass', 'Cambridge University Press', 3, 80, '1984-06-04', 33, 0, 6),
('3333726', '轻量级Java EE企业应用实战', '李刚', '电子工业出版社', 9, 89, '1996-01-18', 49, 5, 4),
('3351237', '数据结构与算法分析', '韦斯 (Mark Allen Weiss)', '机械工业出版社', 6, 55, '2010-10-10', 20, 7, 6),
('3360807', 'Effective java 中文版（第2版）', 'Joshua Bloch', '机械工业出版社', 10, 52, '1992-01-07', 29, 7, 8),
('3549421', 'PHP和MySQL Web开发(原书第4版)', 'Luke Welling Laura Thomson', '机械工业出版社', 10, 95, '2003-07-02', 42, 4, 6),
('3693851', 'PHP与MySQL程序设计', 'W. Jason Gilmore', '人民邮电出版社', 9, 89, '1998-05-28', 40, 10, 7),
('3693974', '小王子', '[法]圣埃克絮佩里', '上海译文出版社', 10, 29, '2009-12-05', 31, 6, 4),
('3765462', 'PHP高级程序设计', 'Kevin McArthur', '人民邮电出版社出版', 2, 45, '1983-02-27', 38, 3, 8),
('3770255', 'Google Android开发入门与实战', '姚尚朗 靳岩', '人民邮电出版社', 8, 55, '2010-12-22', 24, 4, 6),
('3788013', 'Google Android SDK开发范例大全', '余志龙 陈昱勋 郑名杰 陈小凤 郭秩均', '人民邮电出版社', 8, 79, '1991-08-17', 20, 6, 1),
('3923575', '数据库系统基础教程', '（美）厄尔曼', '机械工业出版社', 8, 45, '2011-01-11', 26, 10, 8),
('4065258', '算法：C语言实现', '塞奇威克', '机械工业出版社', 6, 79, '1991-10-10', 35, 8, 10),
('4090200', '细说PHP', '高洛峰', '电子工业出版社', 1, 79, '1992-02-28', 25, 3, 8),
('4099306', 'PHP经典实例', '（美）斯克拉 （美）切贝特伯格', '中国电力出版社', 10, 98, '2016-03-09', 32, 10, 10),
('4111350', 'Android基础教程', '[美] Ed Burnette', '人民邮电出版社', 9, 39, '1983-06-21', 46, 9, 1),
('4126131', '一口气读懂经济学Ⅱ.妙趣横生的经济学茶座', 'NULL', '', 9, 29.8, '1982-10-11', 45, 9, 0),
('4127895', 'Google Android开发入门指南', '王世江', '人民邮电出版社', 4, 45, '1994-06-23', 39, 4, 3),
('4196842', 'PHP实战', 'Dagfinn Reiersol Marcus Baker Chris Shiflett', '人民邮电出版社', 5, 69, '1999-09-17', 34, 5, 5),
('4200822', 'Android应用开发揭秘', '杨丰盛', '机械工业出版社', 4, 69, '1981-01-07', 43, 2, 9),
('4225166', 'PHP基础教程', '厄尔曼', '人民邮电出版社', 5, 49, '2012-10-02', 20, 10, 5),
('4241826', '高性能MySQL', 'Baron Schwartz Peter Zaitsev Vadim Tkachenko Jeremy D.Zawodny Arjen Lent Derek J.Ballin', '电子工业出版社', 3, 99, '2014-05-13', 39, 4, 5),
('4251755', 'Android系统原理及开发要点详解', '韩超 梁泉', '电子工业出版社', 10, 58, '1982-09-19', 43, 10, 8),
('4710825', '妙趣横生的算法', '杨峰', '清华大学出版社', 8, 49, '2012-12-27', 29, 10, 3),
('4746407', '深入PHP', 'Matt Zandstra', '人民邮电出版社', 7, 59, '1993-09-25', 32, 9, 6),
('4829597', '漫画数据库', '[日] 高桥麻奈 著 [日] あづま笙子 漫画绘制 [日] 株式会社TREND-PRO 漫画制作', '科学出版社', 1, 32, '1987-11-14', 40, 8, 1),
('4838430', '数据库系统实现', '加西亚-莫利纳(Hector Garcia-Molina) Jeffrey D.Ullman Jennifer Widom', '机械工业出版社', 5, 59, '1980-03-10', 38, 9, 6),
('4848587', '分布式Java应用', '林昊', '电子工业出版社', 10, 49.8, '1984-02-21', 48, 4, 1),
('4924153', '数据结构与算法分析', '韦斯(Mark Allen Weiss)', '机械工业出版社', 10, 45, '2004-03-17', 32, 2, 0),
('4987594', '小王子', '圣埃克絮佩里 (Saint-Exupery)', '中国华侨出版社', 1, 20, '1987-08-26', 37, 4, 3),
('5345682', 'Maven实战', '许晓斌', '机械工业出版社', 5, 65, '1988-03-04', 25, 4, 5),
('5346169', '海量数据库解决方案', '李华植', '电子工业出版社', 9, 69, '2009-12-31', 34, 5, 3),
('5367372', '精通Android 2', 'Sayed Hashimi', '人民邮电出版社', 3, 89, '2012-12-09', 42, 3, 5),
('5908849', '精通Android游戏开发', '[美] Vladimir Silva', '人民邮电出版社', 4, 45, '2009-06-08', 25, 9, 2),
('5980062', 'Java Performance', 'Charlie Hunt Binu John', 'Prentice Hall', 7, 59.99, '1999-04-07', 46, 2, 4),
('6011680', 'Head First PHP & MySQL（中文版）', 'Lynn Beighley Michael Morrison', '中国电力', 7, 98, '2009-04-25', 24, 8, 4),
('6047744', 'Android技术内幕', '杨丰盛', '机械工业出版社', 8, 69, '2014-08-02', 42, 6, 2),
('6068947', 'MongoDB权威指南', '[美] Kristina Chodorow Michael Dirolf', '人民邮电出版社', 1, 39, '1991-03-19', 28, 2, 2),
('6424904', '大话数据结构', '程杰', '清华大学出版社', 10, 59, '2004-04-23', 46, 8, 8),
('6512489', '使用HTML、CSS和JavaScript开发Android程序', '[美]Jonathan Stark', '电子工业出版社', 4, 39, '2014-02-08', 24, 6, 9),
('6515839', '疯狂Android讲义', '李刚', '电子工业出版社', 8, 89, '2013-07-07', 47, 6, 4),
('6516132', 'PHP与MySQL程序设计（第4版）', 'W. Jason Gilmore', '人民邮电', 9, 89, '2011-08-20', 24, 2, 7),
('6522893', '深入理解Java虚拟机', '周志明', '机械工业出版社', 7, 69, '2001-08-07', 47, 1, 9),
('6529833', 'Java语言程序设计', '（美）  Y. Daniel Liang', '机械工业出版社', 5, 75, '1984-10-13', 32, 0, 9),
('6545083', '智能Web算法', 'Haralambos Marmanis Dmitry Babenko', '电子工业出版社', 9, 65, '1990-09-10', 41, 0, 5),
('6559267', '深入PHP：面向对象、模式与实践（第3版）', '赞特斯彻', '人民邮电出版社', 9, 69, '1981-08-30', 34, 8, 3),
('6802440', '深入理解Android', '邓凡平', '机械工业出版社', 7, 69, '1987-02-01', 50, 7, 0),
('6811238', 'Android内核剖析', '柯元旦', '电子工业出版社', 9, 79.9, '2012-09-16', 40, 1, 4),
('6847455', '高可用MySQL', 'Charles Bell    Mats Kindahl    Lars Thalmann', '电子工业出版社', 4, 98, '2011-05-13', 35, 8, 0),
('6971366', 'PostgreSQL 数据库内核分析', '彭智勇 彭煜玮', '机械工业出版社华章公司', 9, 79, '1999-10-11', 44, 3, 6);

-- --------------------------------------------------------

--
-- 表的结构 `borrow`
--

CREATE TABLE `borrow` (
  `bid` int(10) UNSIGNED NOT NULL,
  `readerid` int(10) NOT NULL,
  `bookid` varchar(45) NOT NULL,
  `dateborrow` varchar(11) NOT NULL,
  `datereturn` varchar(11) NOT NULL,
  `loss` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `borrow`
--

INSERT INTO `borrow` (`bid`, `readerid`, `bookid`, `dateborrow`, `datereturn`, `loss`) VALUES
(1, 1, '1050882', '2016-11-23', '2016-12-01', NULL),
(2, 1, '1084336', '2016-11-23', '2017-01-01', 1),
(5, 1, '1021615', '2016-11-23', '2017-01-01', 0),
(7, 14283000, '1003078', '2016-12-16', '2017-01-15', 1),
(8, 14283000, '1003078', '2016-12-16', '2017-01-15', 1);

-- --------------------------------------------------------

--
-- 表的结构 `category`
--

CREATE TABLE `category` (
  `categoryid` int(11) NOT NULL,
  `category` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `category`
--

INSERT INTO `category` (`categoryid`, `category`) VALUES
(1, '计算机技术'),
(2, '自然科学'),
(3, '医学'),
(4, '农林'),
(5, '建筑'),
(6, '科普'),
(7, '通信'),
(8, '化学'),
(9, '物理'),
(10, '美文');

-- --------------------------------------------------------

--
-- 表的结构 `lossreporting`
--

CREATE TABLE `lossreporting` (
  `readerid` int(10) NOT NULL,
  `lossdate` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `lossreporting`
--

INSERT INTO `lossreporting` (`readerid`, `lossdate`) VALUES
(14283000, '2016-12-16');

-- --------------------------------------------------------

--
-- 表的结构 `memberlevel`
--

CREATE TABLE `memberlevel` (
  `level` tinyint(4) NOT NULL,
  `days` int(11) NOT NULL,
  `numbers` int(11) NOT NULL,
  `fee` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `memberlevel`
--

INSERT INTO `memberlevel` (`level`, `days`, `numbers`, `fee`) VALUES
(1, 30, 5, 5),
(2, 20, 4, 4),
(3, 15, 3, 3);

-- --------------------------------------------------------

--
-- 表的结构 `readers`
--

CREATE TABLE `readers` (
  `readerid` int(10) NOT NULL,
  `readername` varchar(10) NOT NULL,
  `sex` varchar(4) NOT NULL,
  `birthday` varchar(11) NOT NULL,
  `phone` varchar(25) NOT NULL,
  `mobile` varchar(11) NOT NULL,
  `cardname` varchar(10) NOT NULL,
  `cardid` varchar(18) NOT NULL,
  `level` tinyint(4) NOT NULL,
  `day` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `readers`
--

INSERT INTO `readers` (`readerid`, `readername`, `sex`, `birthday`, `phone`, `mobile`, `cardname`, `cardid`, `level`, `day`) VALUES
(1, 'admin', '男', '2001-01-02', '123@163.com', '13111111111', '一卡通', '10000001', 1, '2016-11-21'),
(14283000, '张三', '男', '2016-11-01', '1234@163.com', '13111111111', '一卡通', '142830000', 1, '2016-11-26');

-- --------------------------------------------------------

--
-- 表的结构 `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(32) NOT NULL,
  `authKey` varchar(100) NOT NULL,
  `accessToken` varchar(100) NOT NULL,
  `isAdmin` tinyint(1) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `authKey`, `accessToken`, `isAdmin`) VALUES
(1, 'admin', 'admin', '1234', '12345', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`bookid`),
  ADD KEY `categoryid` (`categoryid`);

--
-- Indexes for table `borrow`
--
ALTER TABLE `borrow`
  ADD PRIMARY KEY (`bid`),
  ADD KEY `readerid` (`readerid`),
  ADD KEY `bookid` (`bookid`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`categoryid`);

--
-- Indexes for table `lossreporting`
--
ALTER TABLE `lossreporting`
  ADD PRIMARY KEY (`readerid`);

--
-- Indexes for table `memberlevel`
--
ALTER TABLE `memberlevel`
  ADD PRIMARY KEY (`level`);

--
-- Indexes for table `readers`
--
ALTER TABLE `readers`
  ADD PRIMARY KEY (`readerid`),
  ADD KEY `level` (`level`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- 在导出的表使用AUTO_INCREMENT
--

--
-- 使用表AUTO_INCREMENT `borrow`
--
ALTER TABLE `borrow`
  MODIFY `bid` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- 使用表AUTO_INCREMENT `category`
--
ALTER TABLE `category`
  MODIFY `categoryid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- 使用表AUTO_INCREMENT `readers`
--
ALTER TABLE `readers`
  MODIFY `readerid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14283004;
--
-- 限制导出的表
--

--
-- 限制表 `books`
--
ALTER TABLE `books`
  ADD CONSTRAINT `books_ibfk_1` FOREIGN KEY (`categoryid`) REFERENCES `category` (`categoryid`);

--
-- 限制表 `borrow`
--
ALTER TABLE `borrow`
  ADD CONSTRAINT `borrow_ibfk_1` FOREIGN KEY (`readerid`) REFERENCES `readers` (`readerid`),
  ADD CONSTRAINT `borrow_ibfk_2` FOREIGN KEY (`bookid`) REFERENCES `books` (`bookid`);

--
-- 限制表 `readers`
--
ALTER TABLE `readers`
  ADD CONSTRAINT `readers_ibfk_1` FOREIGN KEY (`level`) REFERENCES `memberlevel` (`level`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
