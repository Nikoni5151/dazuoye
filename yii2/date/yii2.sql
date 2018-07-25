-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 2018-07-25 19:28:50
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
  `sign` varchar(255) DEFAULT '0' COMMENT '个性签名',
  `image` text NOT NULL COMMENT '成员头像'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='成员信息';

--
-- 转存表中的数据 `np_member`
--

INSERT INTO `np_member` (`mid`, `mname`, `sex`, `hometown`, `sign`, `image`) VALUES
(1000000, '李兴贺', '男', 'XXX', '123456', '../../src/img/XXX.jpg'),
(1611292, '黄信旭', '男', '天津', '666666666', '../../src/img/XXX.jpg');

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

--
-- 转存表中的数据 `wc_coach`
--

INSERT INTO `wc_coach` (`coachid`, `coachname`, `cname`) VALUES
(1, '切尔切索夫', '俄罗斯'),
(2, '皮济', '西班牙'),
(3, '奎罗斯', '葡萄牙'),
(4, '勒纳尔', '法国'),
(5, '桑托斯', '葡萄牙'),
(6, '范马尔维克', '荷兰'),
(7, '哈雷德', '挪威'),
(8, '德尚', '法国'),
(9, '达利奇', '克罗地亚'),
(10, '哈德格里姆松', '冰岛'),
(11, '罗尔', '德国'),
(12, '克尔斯塔季奇', '塞尔维亚'),
(13, '佩特科维奇', '波黑'),
(14, '洛佩尔吉', '西班牙'),
(15, '勒夫', '德国'),
(16, '安德松', '瑞典'),
(17, '马丁内斯', '西班牙'),
(18, '纳瓦塔卡', '波兰'),
(19, '索斯盖特', '英格兰'),
(20, '加雷卡', '阿根廷'),
(21, '拉米雷斯', '哥斯达黎加'),
(22, '库珀', '阿根廷'),
(23, '奥索里奥', '哥伦比亚'),
(24, '塔瓦雷斯', '乌拉圭'),
(25, '桑保利', '阿根廷'),
(26, '蒂特', '巴西'),
(27, '戈麦斯', '哥伦比亚'),
(28, '佩克尔曼', '阿根廷'),
(29, '西野朗', '日本'),
(30, '申台龙', '韩国'),
(31, '阿利乌·西塞', '塞内加尔'),
(32, '马鲁尔', '突尼斯');

-- --------------------------------------------------------

--
-- 表的结构 `wc_country`
--

CREATE TABLE `wc_country` (
  `cid` int(10) NOT NULL COMMENT '国家ID',
  `cname` varchar(50) NOT NULL COMMENT '国家名称',
  `grade` int(3) DEFAULT '0' COMMENT '历史成绩',
  `flag` text NOT NULL COMMENT '国旗'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `wc_country`
--

INSERT INTO `wc_country` (`cid`, `cname`, `grade`, `flag`) VALUES
(1, '俄罗斯', 0, '../../src/flag/XXX.jpg'),
(2, '比利时', 0, '../../src/flag/XXX.jpg'),
(3, '德国', 4, '../../src/flag/XXX.jpg'),
(4, '英格兰', 1, ''),
(5, '西班牙', 1, ''),
(6, '波兰', 0, ''),
(7, '冰岛', 0, ''),
(8, '塞尔维亚', 0, ''),
(9, '葡萄牙', 0, ''),
(10, '法国', 2, ''),
(11, '瑞士', 0, ''),
(12, '克罗地亚', 0, ''),
(13, '瑞典', 0, ''),
(14, '丹麦', 0, ''),
(15, '巴西', 5, ''),
(16, '乌拉圭', 2, ''),
(17, '阿根廷', 2, ''),
(18, '哥伦比亚', 0, ''),
(19, '秘鲁', 0, ''),
(20, '伊朗', 0, ''),
(21, '日本', 0, ''),
(22, '韩国', 0, ''),
(23, '沙特阿拉伯', 0, ''),
(24, '澳大利亚', 0, ''),
(25, '尼日利亚', 0, ''),
(26, '埃及', 0, ''),
(27, '塞内加尔', 0, ''),
(28, '摩洛哥', 0, ''),
(29, '突尼斯', 0, ''),
(30, '墨西哥', 0, ''),
(31, '哥斯达黎加', 0, ''),
(32, '巴拿马', 0, '');

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
  `place` varchar(50) NOT NULL COMMENT '比赛场地',
  `level` varchar(50) NOT NULL COMMENT '比赛级别'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='比赛';

--
-- 转存表中的数据 `wc_match`
--

INSERT INTO `wc_match` (`matchid`, `hometeam`, `awayteam`, `date`, `hscore`, `ascore`, `place`, `level`) VALUES
(1, '英格兰', '比利时', '2018-06-29', 0, 1, '加里宁格勒体育场', '小组赛'),
(2, '巴拿马', '突尼斯', '2018-06-29', 1, 2, '莫尔多瓦竞技场', '小组赛'),
(3, '日本', '波兰', '2018-06-28', 0, 1, '伏尔加格勒竞技场', '小组赛'),
(4, '塞内加尔', '哥伦比亚', '2018-06-28', 0, 1, '萨马拉竞技场', '小组赛'),
(5, '俄罗斯', '沙特阿拉伯', '2018-06-14', 5, 0, '卢日尼基体育场', '小组赛'),
(6, '埃及', '乌拉圭', '2018-06-15', 0, 1, '叶卡捷琳堡竞技场', '小组赛'),
(7, '葡萄牙', '西班牙', '2018-06-16', 3, 3, '克雷斯托夫斯基体育场', '小组赛'),
(8, '摩洛哥', '伊朗', '2018-06-15', 0, 1, '菲斯特奥林匹克体育场', '小组赛'),
(9, '法国', '澳大利亚', '2018-06-16', 2, 1, '喀山竞技场', '小组赛'),
(10, '秘鲁', '丹麦', '2018-06-17', 0, 1, '莫尔多瓦竞技场', '小组赛'),
(11, '阿根廷', '冰岛', '2018-06-16', 1, 1, '斯巴达体育场', '小组赛'),
(12, '克罗地亚', '尼日利亚', '2018-06-17', 2, 0, '加里宁格勒体育场', '小组赛'),
(13, '巴西', '瑞士', '2018-06-18', 1, 1, '罗斯托夫竞技场', '小组赛'),
(14, '哥斯达黎加', '塞尔维亚', '2018-06-17', 0, 1, '萨马拉竞技场', '小组赛'),
(15, '德国', '墨西哥', '2018-06-17', 0, 1, '卢日尼基体育场', '小组赛'),
(16, '瑞典', '韩国', '2018-06-18', 1, 0, '下诺夫哥罗德体育场', '小组赛'),
(17, '突尼斯', '英格兰', '2018-06-19', 1, 2, '伏尔加格勒竞技场', '小组赛'),
(18, '比利时', '巴拿马', '2018-06-18', 3, 0, '菲斯特奥林匹克体育场', '小组赛'),
(19, '哥伦比亚', '日本', '2018-06-19', 1, 2, '莫尔多瓦竞技场', '小组赛'),
(20, '波兰', '塞内加尔', '2018-06-19', 1, 2, '斯巴达体育场', '小组赛'),
(21, '俄罗斯', '埃及', '2018-06-20', 3, 1, '克雷斯托夫斯基体育场', '小组赛'),
(22, '乌拉圭', '沙特阿拉伯', '2018-06-20', 1, 0, '罗斯托夫竞技场', '小组赛'),
(23, '伊朗', '西班牙', '2018-06-21', 0, 1, '喀山竞技场', '小组赛'),
(24, '葡萄牙', '摩洛哥', '2018-06-20', 1, 0, '卢日尼亚体育场', '小组赛'),
(25, '阿根廷', '克罗地亚', '2018-06-22', 0, 3, '叶卡捷琳堡竞技场', '小组赛'),
(26, '丹麦', '澳大利亚', '2018-06-21', 1, 1, '莫尔多瓦竞技场', '小组赛'),
(27, '法国', '秘鲁', '2018-06-21', 1, 0, '叶卡捷琳堡竞技场', '小组赛'),
(28, '尼日利亚', '冰岛', '2018-06-22', 2, 0, '伏尔加格勒竞技场', '小组赛'),
(29, '巴西', '哥斯达黎加', '2018-06-22', 2, 0, '克雷斯托夫斯基体育场', '小组赛'),
(30, '塞尔维亚', '瑞士', '2018-06-23', 1, 2, '加里宁格勒体育场', '小组赛'),
(31, '德国', '瑞典', '2018-06-24', 2, 1, '菲斯特奥林匹克体育场', '小组赛'),
(32, '韩国', '墨西哥', '2018-06-23', 1, 2, '罗斯托夫竞技场', '小组赛'),
(33, '比利时', '突尼斯', '2018-06-23', 5, 2, '斯巴达体育场', '小组赛'),
(34, '英格兰', '巴拿马', '2018-06-24', 6, 1, '下诺夫哥罗德体育场', '小组赛'),
(35, '日本', '塞内加尔', '2018-06-24', 2, 2, '叶卡捷琳堡竞技场', '小组赛'),
(36, '波兰', '哥伦比亚', '2018-06-25', 0, 3, '喀山竞技场', '小组赛'),
(37, '乌拉圭', '俄罗斯', '2018-06-25', 3, 0, '罗斯托夫竞技场', '小组赛'),
(38, '沙特阿拉伯', '埃及', '2018-06-25', 2, 1, '伏尔加格勒竞技场', '小组赛'),
(39, '西班牙', '摩洛哥', '2018-06-26', 2, 2, '加里宁格勒体育场', '小组赛'),
(40, '伊朗', '葡萄牙', '2018-06-26', 1, 1, '莫尔多瓦竞技场', '小组赛'),
(41, '澳大利亚', '秘鲁', '2018-06-26', 0, 2, '菲斯特奥林匹克体育场', '小组赛'),
(42, '丹麦', '法国', '2018-06-26', 0, 0, '卢日尼亚体育场', '小组赛'),
(43, '尼日利亚', '阿根廷', '2018-06-27', 1, 2, '克雷斯托夫斯基体育场', '小组赛'),
(44, '冰岛', '克罗地亚', '2018-06-27', 1, 2, '罗斯托夫竞技场', '小组赛'),
(45, '韩国', '德国', '2018-06-27', 2, 0, '喀山竞技场', '小组赛'),
(46, '墨西哥', '瑞典', '2018-06-27', 0, 3, '叶卡捷琳堡竞技场', '小组赛'),
(47, '瑞士', '哥斯达黎加', '2018-06-28', 2, 2, '下诺夫哥罗德体育场', '小组赛'),
(48, '塞尔维亚', '巴西', '2018-06-28', 0, 2, '斯巴达体育场', '小组赛'),
(55, '法国', '阿根廷', '2018-06-30', 4, 3, '喀山竞技场', '八分之一决赛'),
(56, '乌拉圭', '葡萄牙', '2018-07-01', 2, 1, '菲斯特奥林匹克体育场', '八分之一决赛'),
(57, '西班牙', '俄罗斯', '2018-07-01', 4, 5, '卢日尼基体育场', '八分之一决赛'),
(58, '克罗地亚', '丹麦', '2018-07-02', 4, 3, '下诺夫哥罗德体育场', '八分之一决赛'),
(59, '巴西', '墨西哥', '2018-07-02', 2, 0, '萨马拉竞技场', '八分之一决赛'),
(60, '比利时', '日本', '2018-07-03', 3, 2, '罗斯托夫竞技场', '八分之一决赛'),
(61, '瑞典', '瑞士', '2018-07-03', 1, 0, '克雷斯托夫斯基体育场u', '八分之一决赛'),
(62, '哥伦比亚', '英格兰', '2018-07-04', 4, 5, '斯巴达体育场', '八分之一决赛'),
(63, '法国', '乌拉圭', '2018-07-06', 2, 0, '下诺夫哥罗德体育场', '四分之一决赛'),
(64, '巴西', '比利时', '2018-07-07', 1, 2, '喀山竞技场', '四分之一决赛'),
(65, '俄罗斯', '克罗地亚', '2018-07-07', 5, 6, '菲斯特奥林匹克体育场', '四分之一决赛'),
(66, '瑞典', '英格兰', '2018-07-08', 0, 2, '萨马拉竞技场', '四分之一决赛'),
(67, '法国', '比利时', '2018-07-11', 1, 0, '克雷斯托夫斯基体育场', '半决赛'),
(68, '英格兰', '克罗地亚', '2018-07-12', 1, 2, '卢日尼基体育场', '半决赛'),
(69, '比利时', '英格兰', '2018-07-14', 2, 0, '克雷斯托夫斯基体育场', '三四名决赛'),
(70, '法国', '克罗地亚', '2018-07-15', 4, 2, '卢日尼基体育场', '决赛');

-- --------------------------------------------------------

--
-- 表的结构 `wc_moment`
--

CREATE TABLE `wc_moment` (
  `momentid` int(11) NOT NULL COMMENT '精彩瞬间ID',
  `describes` varchar(255) NOT NULL COMMENT '文字描述',
  `url` text NOT NULL COMMENT '外链地址'
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

--
-- 转存表中的数据 `wc_place`
--

INSERT INTO `wc_place` (`placeid`, `placename`, `number`) VALUES
(1, '卢日尼基体育场', 81000),
(2, '斯巴达体育场', 45360),
(3, '克雷斯托夫斯基体育场', 64287),
(4, '加里宁格勒体育场', 35212),
(5, '喀山竞技场', 45379),
(6, '下诺夫哥罗德体育场', 44899),
(7, '萨马拉竞技场', 44918),
(8, '伏尔加格勒竞技场', 45568),
(9, '莫尔多瓦竞技场', 44412),
(10, '罗斯托夫竞技场', 45000),
(11, '菲斯特奥林匹克体育场', 47659),
(12, '叶卡捷琳堡竞技场', 44130);

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
-- 转存表中的数据 `wc_team`
--

INSERT INTO `wc_team` (`tid`, `tname`, `grade`, `coachname`, `cname`) VALUES
(1, '塞内加尔', '三十二强', '阿利乌·西塞', '塞内加尔'),
(2, '突尼斯', '三十二强', '马鲁尔', '突尼斯'),
(3, '摩洛哥', '三十二强', '勒纳尔', '摩洛哥'),
(4, '俄罗斯', '八强', '切尔切索夫', '俄罗斯'),
(5, '沙特阿拉伯', '三十二强', '皮济', '沙特阿拉伯'),
(6, '伊朗', '三十二强', '奎罗斯', '伊朗'),
(7, '葡萄牙', '十六强', '桑托斯', '葡萄牙'),
(8, '澳大利亚', '三十二强', '范马尔维克', '澳大利亚'),
(9, '丹麦', '十六强', '哈雷德', '丹麦'),
(10, '法国', '冠军', '德尚', '法国'),
(11, '克罗地亚', '亚军', '达利奇', '克罗地亚'),
(12, '冰岛', '三十二强', '哈德格里姆松', '冰岛'),
(13, '尼日利亚', '三十二强', '罗尔', '尼日利亚'),
(14, '塞尔维亚', '三十二强', '克尔斯塔季奇', '塞尔维亚'),
(15, '瑞士', '十六强', '佩特科维奇', '瑞士'),
(16, '西班牙', '十六强', '洛佩尔吉', '西班牙'),
(17, '德国', '三十二强', '勒夫', '德国'),
(18, '瑞典', '八强', '安德松', '瑞典'),
(19, '比利时', '季军', '马丁内斯', '比利时'),
(20, '波兰', '三十二强', '纳瓦塔卡', '波兰'),
(21, '英格兰', '四强', '索斯盖特', '英格兰'),
(22, '秘鲁', '三十二强', '加雷卡', '秘鲁'),
(23, '哥斯达黎加', '三十二强', '拉米雷斯', '哥斯达黎加'),
(24, '埃及', '三十二强', '库珀', '埃及'),
(25, '墨西哥', '十六强', '奥索里奥', '墨西哥'),
(26, '乌拉圭', '八强', '塔瓦雷斯', '乌拉圭'),
(27, '阿根廷', '十六强', '桑保利', '阿根廷'),
(28, '巴西', '八强', '蒂特', '巴西'),
(29, '巴拿马', '三十二强', '戈麦斯', '巴拿马'),
(30, '哥伦比亚', '十六强', '佩克尔曼', '哥伦比亚'),
(31, '日本', '十六强', '西野朗', '日本'),
(32, '韩国', '三十二强', '申台龙', '韩国');

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
  MODIFY `coachid` int(10) NOT NULL AUTO_INCREMENT COMMENT '主教练ID', AUTO_INCREMENT=33;
--
-- 使用表AUTO_INCREMENT `wc_country`
--
ALTER TABLE `wc_country`
  MODIFY `cid` int(10) NOT NULL AUTO_INCREMENT COMMENT '国家ID', AUTO_INCREMENT=33;
--
-- 使用表AUTO_INCREMENT `wc_match`
--
ALTER TABLE `wc_match`
  MODIFY `matchid` int(10) NOT NULL AUTO_INCREMENT COMMENT '比赛ID', AUTO_INCREMENT=71;
--
-- 使用表AUTO_INCREMENT `wc_moment`
--
ALTER TABLE `wc_moment`
  MODIFY `momentid` int(11) NOT NULL AUTO_INCREMENT COMMENT '精彩瞬间ID';
--
-- 使用表AUTO_INCREMENT `wc_place`
--
ALTER TABLE `wc_place`
  MODIFY `placeid` int(10) NOT NULL AUTO_INCREMENT COMMENT '场地ID', AUTO_INCREMENT=13;
--
-- 使用表AUTO_INCREMENT `wc_player`
--
ALTER TABLE `wc_player`
  MODIFY `pid` int(10) NOT NULL AUTO_INCREMENT COMMENT '球员ID';
--
-- 使用表AUTO_INCREMENT `wc_team`
--
ALTER TABLE `wc_team`
  MODIFY `tid` int(10) NOT NULL AUTO_INCREMENT COMMENT '球队ID', AUTO_INCREMENT=33;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
