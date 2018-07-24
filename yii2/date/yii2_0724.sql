-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 2018-07-24 17:38:05
-- 服务器版本： 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `yii2`
--

-- --------------------------------------------------------

--
-- 表的结构 `np_member`
--

CREATE TABLE `np_member` (
  `mid` int(8) NOT NULL COMMENT '成员学号',
  `mname` varchar(20) NOT NULL COMMENT '成员姓名',
  `sex` varchar(2) NOT NULL COMMENT '成员性别',
  `hometown` varchar(20) NOT NULL COMMENT '成员家乡',
  `sign` varchar(255) DEFAULT '0' COMMENT '个性签名'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='成员信息';

--
-- 转存表中的数据 `np_member`
--

INSERT INTO `np_member` (`mid`, `mname`, `sex`, `hometown`, `sign`) VALUES
(1234567, '李兴贺', '男', 'XXX', '123456'),
(1611292, '黄信旭', '男', '天津', '666666666');

-- --------------------------------------------------------

--
-- 表的结构 `np_message`
--

CREATE TABLE `np_message` (
  `messageid` int(10) NOT NULL COMMENT '留言ID',
  `content` varchar(255) NOT NULL COMMENT '留言内容',
  `date` datetime NOT NULL COMMENT '留言创建时间'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='留言';

--
-- 转存表中的数据 `np_message`
--

INSERT INTO `np_message` (`messageid`, `content`, `date`) VALUES
(3, '哈哈哈哈', '2018-07-24 17:34:13'),
(4, '终于弄好这个了。时间记录也正常了', '2018-07-24 17:33:27'),
(5, '95148621', '2018-07-24 17:34:21');

-- --------------------------------------------------------

--
-- 表的结构 `user`
--

CREATE TABLE `user` (
  `id` int(20) UNSIGNED NOT NULL,
  `username` varchar(50) DEFAULT NULL COMMENT '用户名',
  `password_hash` varchar(80) DEFAULT NULL COMMENT '密码',
  `password_reset_token` varchar(60) DEFAULT NULL COMMENT '密码token',
  `email` varchar(60) DEFAULT NULL COMMENT '邮箱',
  `auth_key` varchar(60) DEFAULT NULL,
  `status` int(5) DEFAULT NULL COMMENT '状态',
  `created_at` int(18) DEFAULT NULL COMMENT '创建时间',
  `updated_at` int(18) DEFAULT NULL COMMENT '更新时间',
  `password` varchar(50) DEFAULT NULL COMMENT '密码'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `user`
--

INSERT INTO `user` (`id`, `username`, `password_hash`, `password_reset_token`, `email`, `auth_key`, `status`, `created_at`, `updated_at`, `password`) VALUES
(1, 'admin0', '$2y$13$BSPdi/0PaWJ4ZcMz6b0zIOB7utTN6zce0R9xdRnp/GQFotPUP5ldy', NULL, 'admin@admin.com', '7JvLbdIHHVPlBWRZYe66r-xuVAMJZMOz', 10, 1532350900, 1532350900, NULL),
(2, '123456', '$2y$13$NIa05i0A8ReAbSafY9qurOEuHu45nepQjJ1U..ffSqh2ag1js/x2e', NULL, '123@123.com', 'H3nWRBHUm9yogHo58PMnA5iJ5PmGp-ui', 10, 1532354115, 1532354115, NULL);

-- --------------------------------------------------------

--
-- 表的结构 `wc_coach`
--

CREATE TABLE `wc_coach` (
  `coachid` int(10) NOT NULL COMMENT '主教练ID',
  `coachname` varchar(50) NOT NULL COMMENT '主教练姓名',
  `cname` varchar(50) NOT NULL COMMENT '主教练国籍'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='主教练';

-- --------------------------------------------------------

--
-- 表的结构 `wc_country`
--

CREATE TABLE `wc_country` (
  `cid` int(10) NOT NULL COMMENT '国家ID',
  `cname` varchar(50) NOT NULL COMMENT '国家名称',
  `grade` int(3) DEFAULT '0' COMMENT '历史成绩'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `wc_match`
--

CREATE TABLE `wc_match` (
  `matchid` int(10) NOT NULL COMMENT '比赛ID',
  `hometeam` varchar(50) NOT NULL COMMENT '主场队伍名称',
  `awayteam` varchar(50) NOT NULL COMMENT '客场队伍名称',
  `date` date NOT NULL COMMENT '比赛日期',
  `hscore` int(10) NOT NULL COMMENT '主队得分',
  `ascore` int(10) NOT NULL COMMENT '客队得分',
  `win` varchar(50) NOT NULL COMMENT '胜利队伍名称'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='比赛';

-- --------------------------------------------------------

--
-- 表的结构 `wc_moment`
--

CREATE TABLE `wc_moment` (
  `momentid` int(11) NOT NULL COMMENT '精彩瞬间ID',
  `describes` varchar(255) NOT NULL COMMENT '文字描述'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='精彩瞬间';

-- --------------------------------------------------------

--
-- 表的结构 `wc_place`
--

CREATE TABLE `wc_place` (
  `placeid` int(10) NOT NULL COMMENT '场地ID',
  `placename` varchar(50) NOT NULL COMMENT '场地名称',
  `number` int(10) NOT NULL COMMENT '可容纳人数'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='比赛场地';

-- --------------------------------------------------------

--
-- 表的结构 `wc_player`
--

CREATE TABLE `wc_player` (
  `pid` int(10) NOT NULL COMMENT '球员ID',
  `pname` varchar(50) NOT NULL COMMENT '球员姓名',
  `number` int(10) NOT NULL COMMENT '球员编号',
  `tid` int(10) NOT NULL COMMENT '所属球队ID',
  `goals` int(10) DEFAULT '0' COMMENT '进球数',
  `cname` varchar(50) NOT NULL COMMENT '球员国籍',
  `club` varchar(50) DEFAULT NULL COMMENT '所属俱乐部'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='球员' ROW_FORMAT=COMPACT;

-- --------------------------------------------------------

--
-- 表的结构 `wc_team`
--

CREATE TABLE `wc_team` (
  `tid` int(10) NOT NULL COMMENT '球队ID',
  `tname` varchar(50) NOT NULL COMMENT '球队名称',
  `grade` varchar(50) NOT NULL COMMENT '成绩',
  `coachname` varchar(50) NOT NULL COMMENT '球队主教练',
  `cname` varchar(50) NOT NULL COMMENT '所属国家'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='球队信息';

--
-- Indexes for dumped tables
--

--
-- Indexes for table `np_member`
--
ALTER TABLE `np_member`
  ADD PRIMARY KEY (`mid`);

--
-- Indexes for table `np_message`
--
ALTER TABLE `np_message`
  ADD PRIMARY KEY (`messageid`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `wc_coach`
--
ALTER TABLE `wc_coach`
  ADD PRIMARY KEY (`coachid`);

--
-- Indexes for table `wc_country`
--
ALTER TABLE `wc_country`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `wc_match`
--
ALTER TABLE `wc_match`
  ADD PRIMARY KEY (`matchid`);

--
-- Indexes for table `wc_moment`
--
ALTER TABLE `wc_moment`
  ADD PRIMARY KEY (`momentid`);

--
-- Indexes for table `wc_place`
--
ALTER TABLE `wc_place`
  ADD PRIMARY KEY (`placeid`);

--
-- Indexes for table `wc_player`
--
ALTER TABLE `wc_player`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `wc_team`
--
ALTER TABLE `wc_team`
  ADD PRIMARY KEY (`tid`);

--
-- 在导出的表使用AUTO_INCREMENT
--

--
-- 使用表AUTO_INCREMENT `np_message`
--
ALTER TABLE `np_message`
  MODIFY `messageid` int(10) NOT NULL AUTO_INCREMENT COMMENT '留言ID', AUTO_INCREMENT=6;
--
-- 使用表AUTO_INCREMENT `user`
--
ALTER TABLE `user`
  MODIFY `id` int(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- 使用表AUTO_INCREMENT `wc_coach`
--
ALTER TABLE `wc_coach`
  MODIFY `coachid` int(10) NOT NULL AUTO_INCREMENT COMMENT '主教练ID';
--
-- 使用表AUTO_INCREMENT `wc_country`
--
ALTER TABLE `wc_country`
  MODIFY `cid` int(10) NOT NULL AUTO_INCREMENT COMMENT '国家ID';
--
-- 使用表AUTO_INCREMENT `wc_match`
--
ALTER TABLE `wc_match`
  MODIFY `matchid` int(10) NOT NULL AUTO_INCREMENT COMMENT '比赛ID';
--
-- 使用表AUTO_INCREMENT `wc_moment`
--
ALTER TABLE `wc_moment`
  MODIFY `momentid` int(11) NOT NULL AUTO_INCREMENT COMMENT '精彩瞬间ID';
--
-- 使用表AUTO_INCREMENT `wc_player`
--
ALTER TABLE `wc_player`
  MODIFY `pid` int(10) NOT NULL AUTO_INCREMENT COMMENT '球员ID';
--
-- 使用表AUTO_INCREMENT `wc_team`
--
ALTER TABLE `wc_team`
  MODIFY `tid` int(10) NOT NULL AUTO_INCREMENT COMMENT '球队ID';
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
