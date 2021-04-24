-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 14, 2019 at 11:34 AM
-- Server version: 5.6.45-cll-lve
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `roayaDbs`
--

-- --------------------------------------------------------

--
-- Table structure for table `attendance`
--

CREATE TABLE `attendance` (
  `att_code` bigint(11) NOT NULL,
  `att_reg_code` bigint(11) NOT NULL,
  `day` int(3) NOT NULL,
  `month` int(2) NOT NULL,
  `year` int(4) NOT NULL,
  `att_date_time` datetime NOT NULL,
  `att_notes` varchar(4000) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='جدول الحضور';

-- --------------------------------------------------------

--
-- Table structure for table `buttons`
--

CREATE TABLE `buttons` (
  `b_code` int(5) NOT NULL,
  `b_name` varchar(255) CHARACTER SET utf8 NOT NULL,
  `b_active` char(1) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `buttons`
--

INSERT INTO `buttons` (`b_code`, `b_name`, `b_active`) VALUES
(1, 'حفظ', '1'),
(3, 'استعلام', '1'),
(4, 'طباعة', '1'),
(5, 'اعتماد ', '1'),
(6, 'اعتماد المبيع', '1');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `comm_code` bigint(11) NOT NULL,
  `comm_name` varchar(255) NOT NULL,
  `comm_email` varchar(255) NOT NULL,
  `comm_title` varchar(120) NOT NULL,
  `comm_txt` varchar(4000) NOT NULL,
  `comm_crs_code` bigint(11) NOT NULL,
  `comm_date` varchar(30) NOT NULL,
  `comm_user_code` bigint(11) NOT NULL,
  `comm_is_show` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='جدول التعليقات';

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `c_code` bigint(11) NOT NULL,
  `c_name` varchar(150) NOT NULL,
  `c_active` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='المناهج او المساقات';

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`c_code`, `c_name`, `c_active`) VALUES
(4, 'رياضيات', 1),
(7, 'لغة عربية ', 1),
(10, 'لغة انجليزية', 1),
(12, 'جغرافيا ', 1),
(13, 'فيزياء', 1),
(14, 'دين', 1),
(15, 'كيمياء', 1),
(16, 'مدنيات', 1),
(17, 'تاريخ', 1),
(18, 'موطن', 1),
(19, 'بيولوجيا', 1),
(20, 'حسابات', 1),
(21, 'علوم', 1),
(22, 'جميع المواضيع حتى الصف التاسع', 1),
(23, 'تريبه خاصه', 1),
(24, 'تحسين خط', 1),
(25, 'متابعة لجميع المواضيع', 1),
(26, 'سكرتارية', 1),
(27, 'تعليم مصحح', 1),
(28, 'الكترونيكا', 1);

-- --------------------------------------------------------

--
-- Table structure for table `menus`
--

CREATE TABLE `menus` (
  `m_code` bigint(11) NOT NULL,
  `m_name` varchar(255) NOT NULL,
  `m_active` char(1) NOT NULL,
  `icon` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `menus`
--

INSERT INTO `menus` (`m_code`, `m_name`, `m_active`, `icon`) VALUES
(1, 'الصلاحيات', '1', 'fa-bullhorn'),
(2, 'ادارة الثوابت', '1', 'fa-thumb-tack'),
(3, 'الطلاب', '1', 'fa-graduation-cap'),
(4, 'المعلمين', '1', 'fa fa-users'),
(5, 'الحجوزات', '1', 'calendar-check-o fa-calendar-check-o'),
(8, 'المدفوعات', '1', 'fa-credit-card'),
(9, 'التقارير', '1', 'fa-book'),
(10, 'الصفحة الرئيسية', '1', ''),
(11, 'الدورات', '1', 'fa-folder'),
(12, '', '1', '');

-- --------------------------------------------------------

--
-- Table structure for table `msgs`
--

CREATE TABLE `msgs` (
  `id` int(11) NOT NULL,
  `userid` varchar(255) NOT NULL,
  `usrto` varchar(255) NOT NULL,
  `date` datetime NOT NULL,
  `title` varchar(255) CHARACTER SET utf8 NOT NULL,
  `status` tinyint(4) NOT NULL,
  `email` varchar(255) NOT NULL,
  `full` longtext CHARACTER SET utf8mb4 NOT NULL,
  `under` int(11) NOT NULL,
  `updates` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `options`
--

CREATE TABLE `options` (
  `op_code` int(11) NOT NULL,
  `op_title` varchar(120) NOT NULL,
  `op_desc` varchar(255) NOT NULL,
  `op_keyword` varchar(255) NOT NULL,
  `op_facebook_link` varchar(255) NOT NULL,
  `op_twitter_link` varchar(255) NOT NULL,
  `op_youtube_link` varchar(500) NOT NULL,
  `op_password_msg` varchar(1000) NOT NULL,
  `op_register_msg` varchar(1000) NOT NULL,
  `op_regtraining_msg` varchar(255) NOT NULL,
  `op_admin_email` varchar(255) NOT NULL,
  `SMS_username` varchar(255) NOT NULL,
  `SMS_password` varchar(255) NOT NULL,
  `SMS_accid` varchar(255) NOT NULL,
  `SMS_sysPW` varchar(255) NOT NULL,
  `notify_is_recieves` char(1) NOT NULL,
  `op_logo` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='جدول الاعدادات';

--
-- Dumping data for table `options`
--

INSERT INTO `options` (`op_code`, `op_title`, `op_desc`, `op_keyword`, `op_facebook_link`, `op_twitter_link`, `op_youtube_link`, `op_password_msg`, `op_register_msg`, `op_regtraining_msg`, `op_admin_email`, `SMS_username`, `SMS_password`, `SMS_accid`, `SMS_sysPW`, `notify_is_recieves`, `op_logo`) VALUES
(1, 'معهد رؤية ROAYA', 'معهد رؤية لتقديم احدث الطرق التدريسية', 'معهد رؤية ,معهد ,رؤية', 'https://www.facebook.com//', 'http://twitter.com', 'https://youtube.com', 'لقد تم تعيين كلمة المرور الجديدة الخاصة بكم وكلمة مرورك هي :<br />\r\n{var1}<br />\r\n', 'شكرا لتسجيلك {var1} في موقع معهد رؤية التعليمي بامكانك الدخول الان عبر <br />\r\nبريدك الالكتروني: {var2}<br />\r\nكلمة المرور: {var3}<br />\r\n', 'مبروك لقد تسجلت في الدورة بعنوان: {var1}<br />\r\n', 'gitnet51pay@gmail.com', 'as3ad.mansour@gmail.com', 'y9ZBmw', '4185', 'itnewslettrSMS', '1', 'owl.png');

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `p_code` int(5) NOT NULL,
  `st_code` int(5) NOT NULL,
  `m_code` int(11) NOT NULL,
  `amount` int(11) NOT NULL,
  `p_date` date NOT NULL,
  `info` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `payment_methods`
--

CREATE TABLE `payment_methods` (
  `m_code` int(11) NOT NULL,
  `m_name` varchar(150) NOT NULL,
  `m_active` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `payment_methods`
--

INSERT INTO `payment_methods` (`m_code`, `m_name`, `m_active`) VALUES
(3, '1VISA', 1),
(8, 'شيكات ', 1),
(9, 'نقدي', 1);

-- --------------------------------------------------------

--
-- Table structure for table `photos`
--

CREATE TABLE `photos` (
  `P_code` bigint(11) NOT NULL,
  `P_title_ar` varchar(120) NOT NULL,
  `P_title_en` varchar(150) NOT NULL,
  `P_desc_ar` varchar(500) NOT NULL,
  `P_desc_en` varchar(150) NOT NULL,
  `P_photo` varchar(255) NOT NULL,
  `P_is_slider` char(1) NOT NULL,
  `P_active` char(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `photos`
--

INSERT INTO `photos` (`P_code`, `P_title_ar`, `P_title_en`, `P_desc_ar`, `P_desc_en`, `P_photo`, `P_is_slider`, `P_active`) VALUES
(16, 'دورة خياطة', 'دورة خياطة', '', '', 'public/uploads/1562939664_HTB1iiUVQY2pK1RjSZFsq6yNlXXap.jpg', '1', '1'),
(17, 'test', 'test', '', '', 'public/uploads/1562939692_HTB1iiUVQY2pK1RjSZFsq6yNlXXap.jpg', '1', '1'),
(18, 'دورة خياطة', 'دورة خياطة', '', '', 'public/uploads/1562939706_54732226_270997323777603_2416578967258252774_n.jpg', '1', '1'),
(19, 'دورة حياكة', 'دورة حياكة', '', '', 'public/uploads/1562952588_751.pdf', '0', '1'),
(20, '1', '1', '', '', 'public/uploads/1562953347_27798-atlas-douwal-al-arab.jpg', '0', '1'),
(21, 'sss', 'sss', '', '', 'public/uploads/1562954065_HTB1PtwTQYPpK1RjSZFFq6y5PpXag.jpg', '0', '1'),
(22, 'sss', 'sss', '', '', 'public/uploads/1562954149_HTB1PtwTQYPpK1RjSZFFq6y5PpXag.jpg', '0', '1'),
(23, 'sss', 'sss', '', '', 'public/uploads/1562954182_HTB1PtwTQYPpK1RjSZFFq6y5PpXag.jpg', '0', '1'),
(24, 'sss', 'sss', '', '', 'public/uploads/1562954348_cover letter.docx', '0', '1'),
(25, '55', '55', '', '', 'public/uploads/1562955305_gettyimages-548328327.jpg', '0', '1'),
(26, 'mohd', 'mohd', '', '', 'public/uploads/1562956271_download (2).xls', '0', '1'),
(27, 'mohd', 'mohd', '', '', 'public/uploads/1562956271_61952165_372638746692979_1834969664034224564_n.jpg', '0', '1'),
(28, 'mohd', 'mohd', '', '', 'public/uploads/1562957455_1_-T8oo_JoKkMxfnPKLt_Ciw.jpeg', '0', '1'),
(29, 'mohd', 'mohd', '', '', 'public/uploads/1562957455_IMM5739_2-S2P10H9.pdf', '0', '1'),
(30, 'mohd', 'mohd', '', '', 'public/uploads/1562957455_KFC Delivery Flier Online.pdf', '0', '1'),
(31, 'دورة برمجة', 'دورة برمجة', '', '', 'public/uploads/1563195013_cover letter.docx', '0', '1'),
(32, 'دورة برمجة', 'دورة برمجة', '', '', 'public/uploads/1563195013_1_-T8oo_JoKkMxfnPKLt_Ciw.jpeg', '0', '1'),
(33, 'دورة خياطة', 'دورة خياطة', '', '', 'public/uploads/1563286725_google-brain-data1-fade-ss-1920.jpg', '0', '1'),
(34, 'دورة خياطة', 'دورة خياطة', '', '', 'public/uploads/1563286725_image.jpg', '0', '1'),
(37, 'test', 'test', '', '', 'public/uploads/1563287400_eyeem-141819033.jpg', '1', '1'),
(38, 'دورة خياطة', 'دورة خياطة', '', '', 'public/uploads/1563291644_eyeem-141819033.jpg', '0', '1'),
(39, 'دورة تعبير ', 'دورة تعبير ', '', '', 'public/uploads/1563292936_edit and delete fornt.txt', '0', '1'),
(40, 'دورة خياطة', 'دورة خياطة', '', '', 'public/uploads/1563292959_اعلان منزلق.txt', '0', '1'),
(41, 'دورة خياطة', 'دورة خياطة', '', '', 'public/uploads/1563292959_اكثر من 500 جروبات اجنبية متفاعلة للربح.txt', '0', '1'),
(42, 'دورة خياطة30', 'دورة خياطة30', '', '', 'public/uploads/1563363841_edit and delete fornt.txt', '0', '1'),
(43, 'دورة خياطة30', 'دورة خياطة30', '', '', 'public/uploads/1563363841_12121211212.png', '0', '1'),
(96, 'ديما طاطور ', 'ديما طاطور ', '', '', 'public/uploads/1565907049_1.jpg', '0', '1'),
(46, 'ابراهيم جعباط', 'ابراهيم جعباط', '', '', 'public/uploads/1563706549_1562957455_1_-T8oo_JoKkMxfnPKLt_Ciw.jpeg', '0', '1'),
(47, 'اسعد سليمان', 'اسعد سليمان', '', '', 'public/uploads/1563706908_1562955305_gettyimages-548328327.jpg', '0', '1'),
(49, 'غصون عاطف طاطور', 'غصون عاطف طاطور', '', '', 'public/uploads/1563713919_1562954182_HTB1PtwTQYPpK1RjSZFFq6y5PpXag.jpg', '0', '1'),
(50, 'محمد اسماعيل', 'محمد اسماعيل', '', '', 'public/uploads/1564011720_5_AMAOLASH-Eyelashes-Mink-Eyelashes-Thick-Natural-Long-False-Eyelashes-High-Volume-Mink-Lashes-Soft-Dramatic-Eye.jpg', '0', '1'),
(51, 'محمد اسماعيل', 'محمد اسماعيل', '', '', 'public/uploads/1564320602_bg.png', '0', '1'),
(52, 'خالد عمر', 'خالد عمر', '', '', 'public/uploads/1564348016_21.png', '0', '1'),
(54, 'ياقوت بهوتي', 'ياقوت بهوتي', '', '', 'public/uploads/1564349577_3.jpg', '0', '1'),
(64, 'خالد عطي اسماعيل', 'خالد عطي اسماعيل', '', '', 'public/uploads/1564875028_img1.jpg', '0', '1'),
(65, 'خالد عطي اسماعيل', 'خالد عطي اسماعيل', '', '', 'public/uploads/1564875028_img3.jpg', '0', '1'),
(66, 'خالد عطي اسماعيل', 'خالد عطي اسماعيل', '', '', 'public/uploads/1564876823_img1.jpg', '0', '1'),
(67, 'خالد عطي اسماعيل', 'خالد عطي اسماعيل', '', '', 'public/uploads/1564876823_img3.jpg', '0', '1'),
(68, 'خالد عطي اسماعيل', 'خالد عطي اسماعيل', '', '', 'public/uploads/1564877917_img1.jpg', '0', '1'),
(69, 'خالد عطي اسماعيل', 'خالد عطي اسماعيل', '', '', 'public/uploads/1564877917_img3.jpg', '0', '1'),
(70, 'خالد عطي اسماعيل', 'خالد عطي اسماعيل', '', '', 'public/uploads/1564879139_img1.jpg', '0', '1'),
(71, 'خالد عطي اسماعيل', 'خالد عطي اسماعيل', '', '', 'public/uploads/1564879139_img3.jpg', '0', '1'),
(162, 'عمر خالد حسن ', 'عمر خالد حسن ', '', '', 'public/uploads/1569100497_211221.png', '1', '1'),
(169, 'عمر خالد حسن ', 'عمر خالد حسن ', '', '', 'public/uploads/1569111530_owl.png', '0', '1'),
(74, 'خالد عطي اسماعيل', 'خالد عطي اسماعيل', '', '', 'public/uploads/1564881893_img1.jpg', '0', '1'),
(75, 'خالد عطي اسماعيل', 'خالد عطي اسماعيل', '', '', 'public/uploads/1564881893_img3.jpg', '0', '1'),
(76, 'خالد عطي اسماعيل', 'خالد عطي اسماعيل', '', '', 'public/uploads/1564882872_img1.jpg', '0', '1'),
(77, 'خالد عطي اسماعيل', 'خالد عطي اسماعيل', '', '', 'public/uploads/1564882872_img3.jpg', '0', '1'),
(78, 'خالد عطي اسماعيل', 'خالد عطي اسماعيل', '', '', 'public/uploads/1564882963_img1.jpg', '0', '1'),
(79, 'خالد عطي اسماعيل', 'خالد عطي اسماعيل', '', '', 'public/uploads/1564882963_img3.jpg', '0', '1'),
(80, 'خالد عطي اسماعيل', 'خالد عطي اسماعيل', '', '', 'public/uploads/1564883571_img1.jpg', '0', '1'),
(81, 'خالد عطي اسماعيل', 'خالد عطي اسماعيل', '', '', 'public/uploads/1564883571_img3.jpg', '0', '1'),
(82, 'خالد عطي اسماعيل', 'خالد عطي اسماعيل', '', '', 'public/uploads/1564930444_slide6.jpg', '0', '1'),
(83, 'خالد عطي اسماعيل', 'خالد عطي اسماعيل', '', '', 'public/uploads/1564930670_slide6.jpg', '0', '1'),
(84, 'عمر عمر', 'عمر عمر', '', '', 'public/uploads/1564947938_slide6.jpg', '0', '1'),
(107, 'ابراهيم جعباط', 'ابراهيم جعباط', '', '', 'public/uploads/1566128931_new1017-629482445735bd417f97b941377247.jpg', '0', '1'),
(90, 'موسيقى وعزف ', 'موسيقى وعزف ', '', '', 'public/uploads/1565885639_635.jpg', '1', '1'),
(92, 'مسرح دمى ', 'مسرح دمى ', '', '', 'public/uploads/1565886440_4450.jpg', '0', '1'),
(94, 'مبرمج مواقع انترنت ', 'مبرمج مواقع انترنت ', '', '', 'public/uploads/1565887732_1391.jpg', '0', '1'),
(97, 'محمد رجب', 'محمد رجب', '', '', 'public/uploads/1565951403_67563728_10157589021681979_5380519936466616320_n.jpg', '0', '1'),
(99, 'احمد اسماعيل', 'احمد اسماعيل', '', '', 'public/uploads/1565992464_67563728_10157589021681979_5380519936466616320_n.jpg', '0', '1'),
(101, 'عمر عمر', 'عمر عمر', '', '', 'public/uploads/1566059063_1543093421_WhatsApp Image 2018-11-23 at 19.54.15.jpeg', '0', '1'),
(123, 'تطريز برازيلي ', 'تطريز برازيلي ', '', '', 'public/uploads/1566768971_WhatsApp Image 2019-03-18 at 20.20.28.jpeg', '0', '1'),
(124, 'لغة عبرية (محادثة)', 'لغة عبرية (محادثة)', '', '', 'public/uploads/1566769192_תבנית-עברית-שפה-יפה-1024x568.png', '0', '1'),
(116, 'دورة صيانة', 'دورة صيانة', '', '', 'public/uploads/1566664813_18.png', '0', '1'),
(121, 'תקליטן \\ Dj', 'תקליטן \\ Dj', '', '', 'public/uploads/1566768017_31.jpg', '0', '1'),
(105, 'ورشة عمل ', 'ورشة عمل ', '', '', 'public/uploads/1566125138_b972e42e7a053a88a0d05928d74901c5.jpg', '0', '1'),
(106, 'ورشة عمل ', 'ورشة عمل ', '', '', 'public/uploads/1566125138_new1017-629482445735bd417f97b941377247.jpg', '0', '1'),
(110, 'سندس سليمان', 'سندس سليمان', '', '', 'public/uploads/1566129144_b972e42e7a053a88a0d05928d74901c5.jpg', '0', '1'),
(111, 'مريم عبد العزيز سيدي', 'مريم عبد العزيز سيدي', '', '', 'public/uploads/1566129169_b972e42e7a053a88a0d05928d74901c5.jpg', '0', '1'),
(113, 'سيرينا زهر ', 'سيرينا زهر ', '', '', 'public/uploads/1566400731_111111111111.png', '0', '1'),
(122, 'معهد رؤية', 'معهد رؤية', '', '', 'public/uploads/1566768132_owl.png', '0', '1'),
(125, 'تصميم أزياء', 'تصميم أزياء', '', '', 'public/uploads/1566769502_4506.jpg', '0', '1'),
(126, 'اسعاف اولي ', 'اسعاف اولي ', '', '', 'public/uploads/1566769779_23.jpg', '0', '1'),
(127, 'اكسسوارات', 'اكسسوارات', '', '', 'public/uploads/1566769884_2772131.jpg', '0', '1'),
(128, 'بسيخومتري ', 'بسيخومتري ', '', '', 'public/uploads/1566770272_WhatsApp Image 2018-10-29 at 13.27.54.jpeg', '0', '1'),
(129, 'تقني حاسوب ', 'تقني حاسوب ', '', '', 'public/uploads/1566770442_437271-PEBLIJ-562.jpg', '0', '1'),
(130, 'دروس خصوصية عن بعد', 'دروس خصوصية عن بعد', '', '', 'public/uploads/1566770506_WhatsApp Image 2019-03-18 at 21.54.49.jpeg', '0', '1'),
(131, 'ألعاب نفخ', 'ألعاب نفخ', '', '', 'public/uploads/1566770564_WhatsApp Image 2019-07-10 at 23.35.47.jpeg', '0', '1'),
(132, 'أيام رياضية ', 'أيام رياضية ', '', '', 'public/uploads/1566770635_53313394_1921371264635323_1655365608029552640_o.jpg', '0', '1'),
(133, 'أعياد ميلاد', 'أعياد ميلاد', '', '', 'public/uploads/1566817051_2753090.jpg', '0', '1'),
(134, 'תקליטן \\ Dj', 'תקליטן \\ Dj', '', '', 'public/uploads/1566817233_8772.jpg', '0', '1'),
(135, 'اسرار الالقاء وفن الخطابة ', 'اسرار الالقاء وفن الخطابة ', '', '', 'public/uploads/1566817543_2175.jpg', '0', '1'),
(136, 'ملاطفة حيوانات', 'ملاطفة حيوانات', '', '', 'public/uploads/1566818005_46740.jpg', '0', '1'),
(137, 'محاضرات تربوية', 'محاضرات تربوية', '', '', 'public/uploads/1566818793_7120.jpg', '0', '1'),
(138, 'كونديتوريا  صغير  ', 'كونديتوريا  صغير  ', '', '', 'public/uploads/1566819341_2102.jpg', '0', '1'),
(139, 'التعليم العالي في ايطاليا', 'التعليم العالي في ايطاليا', '', '', 'public/uploads/1566819944_236107.jpg', '0', '1'),
(140, 'اعداد مدربين ', 'اعداد مدربين ', '', '', 'public/uploads/1566820676_OFJH6M0.jpg', '0', '1'),
(141, 'تجديل شعر ', 'تجديل شعر ', '', '', 'public/uploads/1566821678_101.jpg', '0', '1'),
(142, 'تأجير قاعة محاضرات', 'تأجير قاعة محاضرات', '', '', 'public/uploads/1566823337_2849.jpg', '0', '1'),
(143, 'كاراتيه', 'كاراتيه', '', '', 'public/uploads/1566823764_26296.jpg', '0', '1'),
(144, 'القائد الصغير ', 'القائد الصغير ', '', '', 'public/uploads/1566824103_614926-PNJJVU-577.jpg', '0', '1'),
(145, 'الطبيب الصغير ', 'الطبيب الصغير ', '', '', 'public/uploads/1566824448_231.jpg', '0', '1'),
(146, 'دورات فنون ', 'دورات فنون ', '', '', 'public/uploads/1566824789_4675.jpg', '0', '1'),
(147, 'الكاتب الصغير ', 'الكاتب الصغير ', '', '', 'public/uploads/1566825182_4570.jpg', '0', '1'),
(148, 'فنون الخط ', 'فنون الخط ', '', '', 'public/uploads/1566826018_1002.jpg', '0', '1'),
(149, 'شطرنج ', 'شطرنج ', '', '', 'public/uploads/1566826824_507.jpg', '0', '1'),
(150, 'لغة عبرية (محادثة)', 'لغة عبرية (محادثة)', '', '', 'public/uploads/1566827062_תבנית-עברית-שפה-יפה-1024x568.png', '0', '1'),
(151, 'المكعب السحري', 'المكعب السحري', '', '', 'public/uploads/1566828064_559.jpg', '0', '1'),
(152, 'المكعب السحري', 'المكعب السحري', '', '', 'public/uploads/1566828225_559.jpg', '0', '1'),
(154, 'كارول شاهين ', 'كارول شاهين ', '', '', 'public/uploads/1567511504_13761891642.gif', '0', '1'),
(155, 'سيرين سارجي ', 'سيرين سارجي ', '', '', 'public/uploads/1567511736_r822X3T-_400x400.jpg', '0', '1'),
(156, 'محمد  سمير حسن', 'محمد  سمير حسن', '', '', 'public/uploads/1567526593_3049.jpg', '0', '1'),
(157, 'اسماء صالح ابواسماعيل ', 'اسماء صالح ابواسماعيل ', '', '', 'public/uploads/1567868827_IMG-20190724-WA0133 (1).jpg', '0', '1'),
(158, 'ساجدة محمد سليمان', 'ساجدة محمد سليمان', '', '', 'public/uploads/1568127484_3049.jpg', '0', '1'),
(159, 'ميساء عيسى', 'ميساء عيسى', '', '', 'public/uploads/1568138536_13568875_1676856742639402_2539331037936531717_o.jpg', '0', '1'),
(160, 'ميساء عيسى', 'ميساء عيسى', '', '', 'public/uploads/1568138589_13568875_1676856742639402_2539331037936531717_o.jpg', '0', '1'),
(170, 'احمد بستوني', 'احمد بستوني', '', '', 'public/uploads/1569159312_אישורי עיריה מחמוד נחאש.pdf', '0', '1'),
(171, 'احمد بستوني', 'احمد بستوني', '', '', 'public/uploads/1569159312_World_Scout_Emblem_1955.png', '0', '1'),
(168, 'عمر خالد حسن ', 'عمر خالد حسن ', '', '', 'public/uploads/1569110367_‏‏מסמך של Microsoft Word חדש (2).docx', '0', '1');

-- --------------------------------------------------------

--
-- Table structure for table `registration_courses`
--

CREATE TABLE `registration_courses` (
  `reg_code` bigint(11) NOT NULL,
  `reg_date` datetime NOT NULL,
  `reg_tr_code` bigint(11) NOT NULL,
  `reg_paid_price` varchar(20) NOT NULL,
  `reg_end_date` date NOT NULL,
  `reg_std_code` bigint(11) NOT NULL,
  `reg_teach_code` bigint(11) NOT NULL,
  `reg_room_code` int(11) NOT NULL,
  `reg_is_complete` char(1) NOT NULL,
  `reg_notes` varchar(4000) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='جدول الدورات المسجلة';

-- --------------------------------------------------------

--
-- Table structure for table `reservations`
--

CREATE TABLE `reservations` (
  `res_code` bigint(20) NOT NULL,
  `res_todate` date NOT NULL,
  `res_teach_code` bigint(11) NOT NULL,
  `res_std_code` bigint(11) NOT NULL,
  `res_cors_code` bigint(11) NOT NULL,
  `res_paid_price` varchar(25) NOT NULL,
  `res_teacher_percent` varchar(20) NOT NULL,
  `res_room_code` int(11) NOT NULL,
  `res_time_start` datetime NOT NULL,
  `res_time_end` datetime NOT NULL,
  `res_teach_note` text NOT NULL,
  `res_admin_note` text NOT NULL,
  `btn_res_edit` int(11) NOT NULL,
  `res_is_confirmed` char(11) NOT NULL,
  `is_sms_sent` char(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='الحجوزات';

--
-- Dumping data for table `reservations`
--

INSERT INTO `reservations` (`res_code`, `res_todate`, `res_teach_code`, `res_std_code`, `res_cors_code`, `res_paid_price`, `res_teacher_percent`, `res_room_code`, `res_time_start`, `res_time_end`, `res_teach_note`, `res_admin_note`, `btn_res_edit`, `res_is_confirmed`, `is_sms_sent`) VALUES
(1, '2019-10-05', 10, 13, 4, '1000', '200', 4, '2019-10-05 14:00:00', '2019-10-05 17:00:00', '', 'hgfhgfhgfh', 0, '1', '0'),
(2, '2019-10-05', 13, 13, 17, '1000', '200', 4, '2019-10-05 17:30:00', '2019-10-05 19:00:00', '', 'dsdsdsdsadsa', 0, '1', '0'),
(3, '2019-10-06', 23, 16, 14, '1000', '200', 4, '2019-10-07 10:00:00', '2019-10-07 13:00:00', '', '647879879878', 0, '1', '0'),
(4, '2019-10-06', 27, 16, 22, '1000', '200', 4, '2019-10-07 03:00:00', '2019-10-07 07:00:00', '', '54458787877878', 0, '1', '0'),
(5, '2019-10-06', 12, 23, 10, '1000', '200', 4, '2019-10-07 15:00:00', '2019-10-07 16:00:00', '', '787878787878', 0, '1', '0'),
(6, '2019-10-07', 10, 13, 7, '1000', '200', 4, '2019-10-07 15:00:00', '2019-10-07 16:00:00', '', '4545454545454', 0, '1', '0'),
(7, '2019-10-07', 25, 23, 25, '1000', '200', 4, '2019-10-07 11:00:00', '2019-10-07 13:00:00', '', '54545454545', 0, '1', '0'),
(8, '2019-10-07', 22, 28, 14, '1000', '222', 4, '2019-10-08 15:00:00', '2019-10-08 17:00:00', '', 'dsfdsfdsfds', 0, '1', '0'),
(9, '2019-10-07', 22, 31, 23, '1000', '200', 4, '2019-10-07 18:00:00', '2019-10-07 19:00:00', '', 'dsaasdsadsadsad', 0, '1', '0'),
(10, '2019-10-12', 31, 36, 26, '1000', '200', 4, '2019-10-12 05:00:00', '2019-10-12 08:00:00', '', '8787878787', 0, '1', '0'),
(11, '2019-10-12', 29, 33, 25, '1000', '200', 5, '2019-10-12 05:00:00', '2019-10-12 07:00:00', '', '8778787878787878', 0, '1', '0'),
(12, '2019-10-12', 14, 18, 7, '1000', '200', 6, '2019-10-12 05:00:00', '2019-10-12 07:00:00', '', 'fdsfsdfsdfsdfsdfsdfsdf', 0, '1', '0');

-- --------------------------------------------------------

--
-- Table structure for table `reservation_status`
--

CREATE TABLE `reservation_status` (
  `rest_code` int(11) NOT NULL,
  `rest_name` varchar(50) NOT NULL,
  `color` varchar(255) NOT NULL,
  `rest_active` char(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='جدول حالات الحجز';

--
-- Dumping data for table `reservation_status`
--

INSERT INTO `reservation_status` (`rest_code`, `rest_name`, `color`, `rest_active`) VALUES
(1, 'تأكيد حجز ', 'alert-success', '1'),
(0, 'انتظار التأكيد ', 'alert-danger', '1'),
(14, 'درس ملغي مدفوع', 'alert-info', '1'),
(15, 'درس ملغي غير مدفوع ', 'alert-warning', '1');

-- --------------------------------------------------------

--
-- Table structure for table `rooms`
--

CREATE TABLE `rooms` (
  `room_code` int(11) NOT NULL,
  `room_name` varchar(50) NOT NULL,
  `room_active` char(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='الغرف';

--
-- Dumping data for table `rooms`
--

INSERT INTO `rooms` (`room_code`, `room_name`, `room_active`) VALUES
(4, 'غرفة رقم 2', '1'),
(5, 'غرفة رقم 3', '1'),
(6, 'غرفة رقم 4', '1'),
(7, 'غرفة رقم 5', '1'),
(8, 'قاعة 1', '1'),
(9, 'قاعة 2', '1'),
(10, 'مكتب ', '1'),
(11, 'اخر', '1');

-- --------------------------------------------------------

--
-- Table structure for table `schools`
--

CREATE TABLE `schools` (
  `sc_code` bigint(11) NOT NULL,
  `sc_name` varchar(150) NOT NULL,
  `sc_active` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='المدارس';

--
-- Dumping data for table `schools`
--

INSERT INTO `schools` (`sc_code`, `sc_name`, `sc_active`) VALUES
(20, 'المدرسة الثانوية المشهد (كنا)', 1),
(21, 'المدرسة الاعدادية الحكمة (الناصرة)', 1),
(22, 'مدرسه  الثانويه الشامله(الرينه)', 1),
(23, 'المدرسه اعداديه_الثناويه غرناطه', 1),
(24, 'مدرسه جبل سيخ', 1),
(25, 'مدرسه اشراقه', 1),
(26, 'مدرسة الابتدائية عين(عين ماهل)', 1),
(27, 'المدرسة الابتدائية د كفركنا (النور)', 1),
(28, 'المدرسة الابتدائية المشهد ب', 1),
(29, 'كليات وجامعات ', 1),
(30, 'المدرسة الاعدادية /الثانوية البعينة', 1),
(31, 'المدرسة الاعدادية الرينة د ', 1),
(32, 'المدرسة الثانوية عين ماهل ', 1),
(33, 'مدرسة دون بوسكو-الناصرة', 1),
(34, 'غير محدد', 1),
(35, 'المدرسة الابتدائية المشهد أ', 1),
(36, 'مدرسة عمر بن الخطاب (الناصرة )', 1),
(37, 'المدرسة الانجيلية الناصرة', 1),
(38, 'المدرسة الثانوية الامل المشهد ', 1),
(39, 'مدرسة الامل الابتدائية المشهد ', 1);

-- --------------------------------------------------------

--
-- Table structure for table `screens`
--

CREATE TABLE `screens` (
  `s_code` bigint(11) NOT NULL,
  `s_menu_code` bigint(11) NOT NULL,
  `s_name` varchar(255) NOT NULL,
  `s_url` varchar(255) NOT NULL,
  `s_is_backend` int(11) NOT NULL,
  `s_symbol` varchar(255) NOT NULL,
  `s_active` char(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `screens`
--

INSERT INTO `screens` (`s_code`, `s_menu_code`, `s_name`, `s_url`, `s_is_backend`, `s_symbol`, `s_active`) VALUES
(1, 1, 'صلاحيات المستخدمين', 'permissions', 0, 'perm', '1'),
(2, 1, 'اضافة زر', 'permissions/addEdit_button', 0, 'btnadd', '1'),
(3, 1, 'اضافة قائمة', 'permissions/addEdit_menu', 0, 'menuadd', '1'),
(5, 1, 'اضافة شاشة', 'permissions/addEdit_screen', 0, 'scradd', '1'),
(6, 1, 'اضافة زر الى شاشة', 'permissions/addbutton_screen', 0, 'btn_to_scr', '1'),
(8, 1, 'اضافة مستخدم او مدير', 'permissions/addEdit_users', 0, 'usersadd', '1'),
(9, 1, 'الحساب الشخصي ', 'Myaccount', 0, 'accs', '1'),
(10, 2, 'ادارة المواد ( المساقات)', 'Constants_ci/courses', 0, 'courses', '1'),
(11, 2, 'ادارة المدارس', 'Constants_ci/schools', 0, 'schools', '1'),
(12, 2, 'ادارة طرق الدفع', 'Constants_ci/payment_methods', 0, 'payment_methods', '1'),
(13, 2, 'ادارة الاشتراكات', 'Constants_ci/subscribes', 0, 'subscribes', '1'),
(14, 0, 'df', 'sadf', 0, 'sfd', '1'),
(15, 3, 'تسجيل الطلاب', 'Students_ci', 0, 'stds', '1'),
(16, 4, 'تسجيل معلم جديد', 'Teachers_ci', 0, 'teachs', '1'),
(17, 2, 'ادارة الغرف', 'Constants_ci/rooms', 0, 'rooms', '1'),
(18, 2, 'ادارة حالات الطلاب', 'Constants_ci/std_status', 0, 'stdStatus', '1'),
(20, 5, 'اضافة حجز فردي', 'Reservation_ci/odd_reservation', 0, '', '1'),
(21, 8, 'مدفوعات الطلاب', 'Payments_ci', 0, '', '1'),
(22, 9, 'تقاربر مدفوعات الطلاب ', 'reports/St_Payments', 0, '', '1'),
(23, 5, 'الحجوزات الفردية', 'Reservation_ci/view_reserv', 0, 'reserv', '1'),
(25, 0, 'الصفحة الرئيسية', 'Home', 0, '', '1'),
(26, 5, 'اضافة حجز جماعي', 'Reservation_ci/group_reserv', 0, 'group_reserv', '1'),
(27, 2, 'حالات الحجوزات ', 'Constants_ci/reserv_state', 0, 'reserv_state', '1'),
(28, 5, 'الحجوزات المتاحة', 'Teachers_ci/available_app', 0, '', '1'),
(29, 9, 'تقارير الحجوزات', 'reports/reports_teachers', 0, '', '1'),
(31, 2, 'ادارة مجموعات الدورات', 'Constants_ci/tr_groups', 0, '', '0'),
(35, 9, 'تقارير معاشات المعلمات ', 'reports/teachers', 0, 'reports/teachers', '1'),
(36, 0, 'برنامج المعلمين', 'Home/mo', 0, '', '1'),
(37, 2, 'تصنيفات الدورات', 'Constants_ci/Training_category', 0, 'Training_category', '1'),
(38, 11, 'ادارة الدورات', 'courses_ci', 0, 'crs', '1'),
(39, 11, 'ادارة التعليقات', 'courses_ci/comments', 0, 'comments', '1'),
(40, 1, 'TV', 'Tv_ci', 0, 'tvci', '1');

-- --------------------------------------------------------

--
-- Table structure for table `scr_has_btn`
--

CREATE TABLE `scr_has_btn` (
  `scrbtn_code` bigint(11) NOT NULL,
  `scrbtn_scr_code` bigint(11) NOT NULL,
  `scrbtn_btn_code` bigint(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `st_code` int(11) NOT NULL,
  `property` varchar(255) NOT NULL,
  `value` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`st_code`, `property`, `value`) VALUES
(1, 'is_with_permission', 1);

-- --------------------------------------------------------

--
-- Table structure for table `std_status`
--

CREATE TABLE `std_status` (
  `std_code` int(11) NOT NULL,
  `std_name` varchar(50) NOT NULL,
  `std_active` char(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `std_status`
--

INSERT INTO `std_status` (`std_code`, `std_name`, `std_active`) VALUES
(1, 'غير فعال', '1'),
(8, 'فعال', '1'),
(9, 'مطلوب موافقة الادارة', '1');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `st_code` bigint(11) NOT NULL,
  `st_name` varchar(200) NOT NULL,
  `st_password` varchar(255) NOT NULL,
  `st_password2` varchar(255) NOT NULL,
  `st_reg_date` date NOT NULL,
  `st_school_code` int(9) NOT NULL,
  `st_class` varchar(11) NOT NULL,
  `st_email` varchar(255) NOT NULL,
  `st_town` varchar(200) NOT NULL,
  `st_sex` varchar(10) NOT NULL,
  `st_birthdate` date NOT NULL,
  `st_sub_code` int(9) NOT NULL,
  `st_price` varchar(50) NOT NULL,
  `st_paymentmethods_code` int(11) NOT NULL,
  `st_status_code` int(11) NOT NULL,
  `st_payment_date` int(11) NOT NULL,
  `st_active` char(1) NOT NULL,
  `st_ID` varchar(9) NOT NULL,
  `st_phone1` varchar(15) NOT NULL,
  `st_phone2` varchar(15) NOT NULL,
  `st_SMS_sub` char(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='الطلاب';

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`st_code`, `st_name`, `st_password`, `st_password2`, `st_reg_date`, `st_school_code`, `st_class`, `st_email`, `st_town`, `st_sex`, `st_birthdate`, `st_sub_code`, `st_price`, `st_paymentmethods_code`, `st_status_code`, `st_payment_date`, `st_active`, `st_ID`, `st_phone1`, `st_phone2`, `st_SMS_sub`) VALUES
(13, 'روان خالد حسن', 'd41d8cd98f00b204e9800998ecf8427e', '', '2018-12-13', 10, '7', 'a@a.om', 'المشهد', 'female', '2006-08-25', 5, '', 9, 8, 1, '1', '000000000', '0505852866', '0000', ''),
(14, 'jjjjj', 'd41d8cd98f00b204e9800998ecf8427e', '', '2018-12-13', 35, '8', 'a@a.om', 'المشهد', 'female', '2005-05-24', 10, '', 9, 8, 1, '1', '000000000', '0527436537', '0000', ''),
(15, 'ساره ابراهيم اماره', '', '', '2018-12-13', 21, '3', 'a@a.om', 'كفركنا', 'female', '2005-01-06', 5, '', 9, 8, 1, '1', '0000000', '0547854305', '0548390066', ''),
(16, 'لمار فضل بصول', '', '', '2018-12-13', 7, '2', 'a@a.om', 'رينه', 'female', '2011-10-01', 5, '', 9, 8, 1, '1', '0000', '0528226481', '0000', ''),
(17, 'علي احمد حسن', '', '', '2018-12-13', 20, '10', 'a@a.om', 'المشهد', 'male', '2003-10-23', 8, '', 9, 8, 1, '1', '325475358', '0505390118', '', ''),
(18, 'شيماء  محمد غرابه', '', '', '2018-12-13', 22, '12', 'a@a.om', 'الرينة', 'female', '2000-12-27', 7, '', 9, 8, 1, '1', '211841648', '0527292015', '', ''),
(20, 'جنى عمر عوده', '', '', '2018-12-13', 16, '1', 'a@a.om', 'المشهد ', 'female', '2012-07-12', 5, '', 9, 8, 30, '1', '220742183', '0502324344', '', ''),
(22, 'ليليان راوي حوا', '', '', '2018-12-13', 22, '12', 'a@a.om', 'الرينة', 'male', '1970-01-01', 7, '', 3, 8, 1, '1', '212191795', '0509659933', '', ''),
(23, 'محمد مدين حسن', '', '', '2018-12-13', 20, '7', 'a@a.om', 'المشهد ', 'male', '2006-09-04', 6, '', 9, 8, 15, '1', '328496484', '00000000__', '0000000', ''),
(24, 'محمد رايق بركات', '', '', '2018-12-13', 23, '10', 'a@a.om', 'المشهد ', 'male', '2003-07-13', 7, '', 9, 8, 10, '1', '00000', '0502564772', '', ''),
(25, 'محمد اشرف حبيب الله', '', '', '2018-12-13', 24, '2', 'a@a.om', 'عين ماهل', 'male', '2010-02-25', 5, '', 9, 8, 30, '1', '218650344', '0544690988', '', ''),
(26, 'جنى موفق حسن', '', '', '2018-12-13', 25, '4', 'a@a.om', 'المشهد ', 'female', '1970-01-01', 5, '', 9, 8, 1, '1', '000000000', '0502240978', '0000', ''),
(27, 'حسن موفق حسن', '', '', '2018-12-13', 25, '6', 'a@a.om', 'المشهد ', 'male', '2007-08-15', 5, '', 9, 8, 1, '1', '000000000', '0502240978', '0000', ''),
(28, 'مجد اكرم ابو هلال', '', '', '2018-12-13', 26, '1', 'a@a.om', 'عين ماهل', 'male', '2012-10-08', 5, '', 9, 8, 10, '1', '220770960', '0527977311', '0536267223', ''),
(29, 'شيماء طاطور', '', '', '2018-12-13', 21, '8', 'a@a.om', 'الرينة', 'female', '1970-01-01', 5, '', 9, 8, 1, '1', '325558112', '0509741347', '0000', ''),
(30, 'جنى مقداد علي', '', '', '2018-12-13', 20, '8', 'a@a.om', 'المشهد ', 'male', '2011-11-11', 5, '', 9, 8, 1, '1', '327748901', '0536214739', '', ''),
(31, 'محمود مقداد علي', '', '', '2018-12-13', 20, '10', 'a@a.om', 'المشهد', 'male', '2011-11-11', 8, '', 9, 8, 1, '1', '212812044', '0536214739', '', ''),
(32, 'شام مروان شحادة', '', '', '2018-12-13', 7, '6', 'a@a.om', 'الرينة', 'female', '2011-11-11', 7, '', 8, 8, 30, '1', '329131775', '0502650090', '', ''),
(33, 'باسل محمد صالح', '', '', '2018-12-17', 16, '7', 'a@a.om', 'المشهد ', 'male', '2006-10-31', 7, '', 9, 8, 14, '1', '214685869', '0524343881', '', ''),
(34, 'محمد بسام ابواسماعيل', '', '', '2018-12-17', 27, '6', 'a@a.om', 'المشهد ', 'male', '2007-07-28', 6, '', 9, 1, 5, '1', '0000000', '0525028231', '0543290931', ''),
(35, 'محمد مروان شحادة ', '', '', '2018-12-17', 16, '7', 'a@a.om', 'المشهد ', 'male', '2006-07-18', 7, '', 8, 8, 19, '1', '29131775', '0502650090', '', ''),
(36, 'عمر اسامة حسن', '', '', '2018-12-17', 7, '1', 'a@a.om', 'المشهد ', 'male', '2013-04-04', 11, '', 9, 8, 20, '1', '220755813', '0505860606', '', ''),
(37, 'عدن سامر سيدي ', '', '', '2018-12-23', 22, '9', 'a@a.om', 'المشهد', 'female', '2004-02-01', 8, '', 9, 8, 1, '1', '325488195', '0546862233', '', ''),
(38, 'نورهان سامر سيدي ', '', '', '2018-12-23', 22, '11', 'a@a.om', 'المشهد', 'female', '2002-07-24', 8, '', 9, 8, 1, '1', '212895726', '0546862233', '', ''),
(40, 'عبدالله  توفيق سليمان', '', '', '2018-12-25', 7, '2', 'aaa@gm.com', 'المشهد', 'male', '2000-01-01', 5, '', 9, 8, 1, '1', '0000', '0504475695', '', ''),
(42, 'سلمى محمد ابو اسماعيل', '', '', '2018-12-26', 20, '9', 'a@a.om', 'المشهد ', 'female', '2004-05-22', 8, '', 9, 8, 1, '1', '213473291', '0549075225', '', ''),
(43, 'امير حسن ', '', '', '2018-12-26', 31, '8', 'a@a.om', 'المشهد', 'male', '1970-01-01', 5, '', 9, 8, 20, '1', '214586554', '0532859456', '', ''),
(44, 'مايا سفيان عرفات', '', '', '2018-12-26', 20, '11', 'a@a.om', 'المشهد ', 'female', '2001-07-01', 9, '', 9, 8, 1, '1', '323036996', '0525097103', '', ''),
(45, 'يزيد حسين فريد ', '', '', '2018-12-27', 29, '1', 'a@a.om', 'المشهد ', 'male', '1996-09-30', 12, '', 9, 8, 1, '1', '315950899', '0524561217', '', ''),
(47, 'علي سلامة سليمان ', '', '', '2018-12-27', 30, '10', 'a@a.om', 'البعينة ', 'male', '2003-06-22', 8, '', 9, 8, 1, '1', '214023665', '0526376791', '', ''),
(49, 'باسل حسام مرعي', '', '', '2019-01-07', 7, '3', 'aa@gmail.com', 'المشهد', 'male', '2011-01-19', 5, '', 9, 8, 1, '1', '324709680', '0000000000', '', ''),
(50, 'سعيد يحيى سليمان', '', '', '2019-01-08', 28, '3', '', 'المشهد ', 'male', '1970-01-01', 5, '', 9, 8, 1, '1', '0000000', '000000000_', '', ''),
(51, 'مروة ماهر حسن', '', '', '2019-01-09', 7, '12', '', 'المشهد', 'female', '2001-12-12', 9, '', 9, 8, 1, '1', '212277347', '0509550720', '', ''),
(52, 'محمد ابو ليل ', '', '', '2019-01-11', 32, '10', '', 'عين ماهل', 'male', '1970-01-01', 8, '', 9, 8, 15, '1', '00000000', '0000000000', '', ''),
(53, 'اسحاق سلامة ', 'd41d8cd98f00b204e9800998ecf8427e', '', '2019-01-11', 33, '7', 'aa@gmail.com', 'كفركنا ', 'male', '1999-09-09', 5, '', 9, 8, 5, '1', '000000', '0549050637', '', ''),
(54, 'ميرا  سعيد حسن ', '', '', '2019-01-13', 33, '9', '', 'المشهد ', 'female', '2004-07-25', 8, '', 9, 8, 1, '1', '214656225', '0528696234', '', ''),
(55, 'منى جمال حسن ', '', '', '2019-01-13', 34, '12', '', 'المشهد', 'female', '2000-08-11', 10, '', 9, 8, 1, '1', '211943592', '0546937111', '', ''),
(56, 'علاء سامر سيدي	', '', '', '2019-01-13', 28, '6', '', 'المشهد', 'male', '1999-09-09', 5, '', 9, 8, 1, '1', '000000000', '0546862233', '', ''),
(57, 'يزن صالح', '', '', '2019-01-14', 28, '2', '', 'المشهد', 'male', '1999-09-09', 6, '', 9, 8, 1, '1', '0000000', '0000000000', '', ''),
(58, 'معاذ صالح ', '', '', '2019-01-14', 7, '5', '', 'المشهد', 'male', '1999-09-09', 7, '', 9, 8, 1, '1', '0000000', '0000000000', '', ''),
(59, 'عدن سعيد سليمان', '', '', '2019-01-20', 7, '6', '', 'المشهد ', 'female', '2099-09-09', 5, '', 9, 8, 1, '1', '000000000', '0000000000', '', ''),
(61, 'ملاك  عودة', '', '', '2019-01-20', 16, '8', '', 'المشهد ', 'female', '2099-09-09', 5, '', 9, 8, 1, '1', '000000000', '0000000000', '', ''),
(63, 'هادي عبد عيسى ', '', '', '2019-01-20', 28, '5', '', 'المشهد ', 'male', '2008-05-06', 5, '', 9, 8, 1, '1', '331824417', '0506249303', '', ''),
(64, 'اسراء احمد حسن', '', '', '2019-01-23', 37, '10', '', 'المشهد', 'female', '2003-09-23', 5, '', 9, 8, 1, '1', '000000000', '0507896288', '05035992662', ''),
(65, 'محمد علي صالح ', '', '', '2019-01-23', 7, '3', '', 'المشهد', 'male', '2099-09-09', 5, '', 9, 8, 1, '1', '000000000', '0000000000', '', ''),
(67, 'صالح سيدي', '', '', '2019-01-23', 34, '3', '', 'المشهد ', 'male', '2099-09-09', 5, '', 9, 8, 1, '1', '000000000', '0000000000', '', ''),
(69, 'علي وليد علي ', '', '', '2019-01-23', 35, '3', '', 'المشهد ', 'male', '2099-09-09', 5, '', 9, 8, 2, '1', '0000000', '0000000000', '', ''),
(71, 'ثائر حسن ', '', '', '2019-01-29', 16, '9', '', 'المشهد ', 'male', '2004-10-07', 8, '', 9, 8, 1, '1', '214627770', '0502881332', '', ''),
(72, 'علي احمد حسن (الهام )', '', '', '2019-01-29', 28, '5', '', 'المشهد ', 'male', '1970-01-01', 5, '', 9, 8, 1, '1', '00000', '0556631095', '', ''),
(73, 'امل مروان دخل الله', '', '', '2019-02-02', 35, '4', '', 'المشهد', 'male', '2011-08-17', 5, '', 9, 8, 1, '1', '220479364', '0502113538', '', ''),
(74, 'ودود عامر ', '', '', '2019-02-02', 34, '4', '', 'المشهد ', 'male', '2099-09-09', 5, '', 9, 8, 1, '1', '000000000', '0000000000', '', ''),
(75, 'سليم دهامشة', '', '', '2019-02-02', 34, '7', '', '', 'male', '2099-09-09', 5, '', 9, 8, 1, '1', '00000000', '0000000000', '', ''),
(76, 'اسلام عثامنة ', '', '', '2019-02-02', 22, '10', '', 'المشهد ', 'male', '2099-09-09', 8, '', 9, 8, 1, '1', '00000000', '0525198131', '', ''),
(77, 'ريانة سيدي ', '', '', '2019-02-02', 35, '3', '', 'المشهد ', 'female', '2099-09-09', 5, '', 9, 8, 1, '1', '000000000', '0000000000', '', ''),
(78, 'محمود شحادة', '', '', '2019-02-02', 20, '12', '', 'المشهد ', 'male', '2011-09-08', 5, '', 9, 8, 1, '1', '323039453', '0524350592', '', ''),
(79, 'شادي عبد عيسى ', '', '', '2019-02-03', 7, '4', '', 'المشهد ', 'male', '2099-09-09', 5, '', 9, 8, 1, '1', '218419125', '0506249303', '', ''),
(80, 'فرح مرعي', '', '', '2019-02-03', 20, '9', '', 'المشهد ', 'female', '2004-08-12', 8, '', 9, 8, 1, '1', '213463151', '0508552121', '', ''),
(81, 'احمد محمد زعبي', '', '', '2019-02-03', 36, '8', '', 'الناصرة ', 'male', '2004-11-12', 8, '', 9, 8, 1, '1', '214694655', '0527506668', '', ''),
(82, 'غنى حسن ', '', '', '2019-02-03', 7, '4', '', 'المشهد ', 'female', '2009-09-17', 5, '', 9, 8, 1, '1', '218359412', '0502881332', '', ''),
(83, 'اسعد مأمون سليمان ', '', '', '2019-02-03', 35, '3', '', 'المشهد ', 'male', '2099-09-09', 5, '', 9, 8, 1, '1', '999999999', '0542116494', '', ''),
(84, 'شهد هشام حسن ', '', '', '2019-02-04', 37, '9', '', 'المشهد ', 'female', '2004-05-05', 8, '', 9, 8, 1, '1', '213473002', '0542011597', '', ''),
(85, 'امينة غسان عثاملة ', '', '', '2019-02-05', 34, '1', '', 'الرينة', 'male', '2006-04-02', 8, '', 9, 8, 1, '1', '327685855', '0000000000', '', ''),
(86, 'لونا سيدي ', '', '', '2019-02-05', 35, '4', '', 'المشهد', 'male', '2099-09-09', 5, '', 9, 8, 1, '1', '9999', '9999999999', '', ''),
(87, 'مهعد رؤية (اجتماع)', '', '', '2019-02-05', 34, '1', '', 'المشهد', 'male', '1991-02-28', 12, '', 9, 8, 1, '1', '000000000', '0532217156', '', ''),
(88, 'ريمان محمد صالح ', '', '', '2019-02-07', 37, '9', '', 'المشهد ', 'female', '2099-09-09', 8, '', 9, 8, 1, '1', '0000000', '6666666666', '', ''),
(89, 'عبدالله عمر مرعي', '', '', '2019-02-07', 35, '4', '', 'المشهد ', 'male', '2099-09-09', 5, '', 9, 8, 1, '1', '999999999', '99999999__', '', ''),
(90, 'ماريا احمد عيسى', '', '', '2019-02-07', 35, '1', '', 'المشهد ', 'female', '2012-06-12', 5, '', 9, 8, 1, '1', '220476493', '0522265373', '', ''),
(91, 'سامر احمد كريم', '', '', '2019-02-07', 34, '12', '', 'الرينة', 'male', '1993-04-06', 10, '', 9, 8, 1, '1', '307952713', '0535678786', '', ''),
(95, 'كاتيا يعقوب ', '', '', '2019-02-17', 34, '12', '', 'طرعان', 'female', '2001-06-10', 8, '', 9, 8, 1, '1', '212260301', '0539319018', '', ''),
(96, 'مجد يوسف سليمان ', '4badaee57fed5610012a296273158f5f', 'MTAyMDMw', '2019-02-19', 34, '12', 'a@a.om', 'المشهد ', 'female', '1998-09-08', 10, '', 9, 8, 1, '1', '208528588', '0524378397', '', ''),
(97, 'محمد مراد بهوتي ', '', '', '2019-02-19', 35, '2', '', 'المشهد', 'male', '2099-09-09', 5, '', 9, 8, 1, '1', '220442917', '0527276485', '', ''),
(98, 'يزن سيدي', '', '', '2019-02-19', 35, '4', '', 'المشهد ', 'male', '2099-09-09', 5, '', 9, 8, 1, '1', '9999', '0000000000', '', ''),
(99, 'روان عثاملة ', '', '', '2019-02-19', 34, '8', '', 'الرينة', 'female', '2000-09-09', 5, '', 9, 8, 1, '1', '0000000', '0000000000', '', ''),
(100, 'بانا يحيى سليمان', '', '', '2019-02-19', 35, '6', '', 'المشهد ', 'female', '2099-09-09', 5, '', 9, 8, 1, '1', '0000000', '0000000000', '', ''),
(101, 'وجيه سليمان', '', '', '2019-02-22', 35, '2', '', 'المشهد ', 'male', '2099-09-09', 5, '', 9, 8, 1, '1', '1', '1111111111', '', ''),
(102, 'يمنى تيسير مرعي', '', '', '2019-02-23', 34, '1', '', 'المشهد', 'male', '2077-07-07', 12, '', 9, 8, 1, '1', '000000000', '0000000___', '', ''),
(103, 'وديع سرحان مرعي ', '', '', '2019-02-24', 34, '8', '', 'المشهد ', 'male', '2005-09-08', 5, '', 9, 8, 1, '1', '00', '0505319845', '', ''),
(104, 'سعيد بهوتي ', '', '', '2019-02-25', 35, '7', '', 'المشهد ', 'female', '2099-09-09', 5, '', 9, 8, 2, '1', '0000', '0000______', '', ''),
(105, 'سيف توفيق سليمان ', '', '', '2019-02-25', 16, '3', '', 'المشهد ', 'male', '2099-09-09', 5, '', 9, 8, 1, '1', '333333', '00000000__', '', ''),
(106, 'عبد الرحمن مقاري ', '', '', '2019-02-28', 34, '9', '', 'كفركنا', 'male', '2099-09-09', 5, '', 9, 8, 1, '1', '00000000', '0000000000', '', ''),
(107, 'مهران حسن', '', '', '2019-02-28', 34, '9', '', 'المشهد ', 'male', '2099-09-09', 5, '', 9, 8, 1, '1', '00000000', '0000000000', '', ''),
(109, 'رنين نزازلة ', '', '', '2019-03-03', 7, '10', '', 'المشهد ', 'female', '2099-09-09', 6, '', 9, 8, 1, '1', '000000000', '0000000000', '', ''),
(110, 'رينال بركات ', '', '', '2019-03-03', 34, '1', '', 'المشهد ', 'male', '2099-09-09', 5, '', 9, 8, 1, '1', '000000000', '0000000000', '', ''),
(111, 'وفاء منصور', '', '', '2019-03-13', 34, '10', 'a@a.om', 'المشهد', 'female', '2033-04-04', 5, '', 9, 8, 30, '1', '0000000', '0000000000', '00000000000', ''),
(112, 'ياقوت بهوتي', '', '', '2019-03-13', 34, '1', 'a@a.om', '0000', 'female', '2000-07-07', 5, '', 9, 8, 30, '1', '0000000', '000_______', '0000000', ''),
(114, 'رفيف هشام حسن', '', '', '2019-03-14', 35, '4', 'aaa@gm.com', 'المشهد', 'female', '2009-02-22', 5, '', 9, 8, 30, '1', '0000', '0000______', '0000', ''),
(116, 'محمد سامي اماره', '', '', '2019-03-15', 34, '9', 'aaa@gm.com', 'كفركنا', 'male', '2005-02-04', 5, '', 9, 8, 30, '1', '0000', '000_______', '0000', ''),
(117, 'محمد عمر سليمان ', '', '', '2019-03-15', 20, '8', '', 'المشهد ', 'male', '2099-09-09', 5, '', 9, 8, 1, '1', '0000000', '000000____', '', ''),
(119, 'معتز سعادة سليمان', '', '', '2019-03-26', 20, '10', '', 'المشهد ', 'male', '2015-02-25', 10, '', 9, 8, 1, '1', '00000000', '0000000000', '', ''),
(121, 'محمد عماد صالح ', '', '', '2019-03-26', 35, '3', '', 'المشهد ', 'male', '2052-05-03', 5, '', 9, 8, 1, '1', '.0000', '000000____', '', ''),
(122, 'لطفي مرعي ', '', '', '2019-03-26', 35, '7', '', 'المشهد ', 'male', '2012-12-12', 5, '', 9, 8, 1, '1', '000000', '00000000__', '', ''),
(124, 'عبدالله صبري سليمان', '', '', '2019-03-31', 20, '10', '', 'المشهد', 'male', '2096-05-05', 8, '', 9, 8, 1, '1', '00000000', '0000000000', '', ''),
(125, 'خالد امين سليمان ', '', '', '2019-03-31', 34, '7', '', 'المشهد ', 'male', '2052-05-25', 5, '', 9, 8, 1, '1', '00000000', '0000000000', '', ''),
(126, 'وديع امين حسن ', '', '', '2019-03-31', 34, '7', '', 'المشهد ', 'male', '2099-09-09', 5, '', 9, 8, 1, '1', '000000000', '00000000__', '', ''),
(127, 'زينة سامي امارة ', '', '', '2019-03-31', 34, '4', '', 'كفركنا', 'female', '2099-02-22', 5, '', 9, 8, 1, '1', '0000000', '0000000000', '', ''),
(128, 'ريماس ثائر نعراني', '', '', '2019-03-31', 34, '4', '', 'ام الفحم ', 'female', '2092-06-05', 5, '', 9, 8, 1, '1', '000000000', '5151555212', '', ''),
(130, 'سجى كريم ', '', '', '2019-03-31', 35, '3', '', 'المشهد ', 'female', '2052-05-22', 5, '', 9, 8, 1, '1', '000000', '0000000000', '', ''),
(131, 'شهد سيدي ', '', '', '2019-03-31', 34, '1', '', 'الرينة', 'female', '2055-05-22', 5, '', 9, 8, 1, '1', '0000000', '0000000000', '', ''),
(132, 'حلا ناصر ', '', '', '2019-03-31', 34, '6', '', 'الناصرة ', 'female', '2055-02-15', 5, '', 9, 8, 1, '1', '000000000', '00000_____', '', ''),
(134, 'محمود مأمون سليمان', '', '', '2019-03-31', 35, '5', '', 'المشهد ', 'male', '2099-09-09', 5, '', 9, 8, 1, '1', '000000000', '00000000__', '', ''),
(135, 'نور مأمون سليمان', '', '', '2019-03-31', 34, '4', '', 'المشهد ', 'female', '2012-12-21', 5, '', 9, 8, 1, '1', '000000000', '000000000_', '', ''),
(136, 'محمد زياد سليمان ', '', '', '2019-04-09', 34, '3', '', 'المشهد ', 'male', '2021-02-05', 5, '', 9, 8, 1, '1', '0000000', '0000000000', '', ''),
(137, 'نغم شحادة ', '', '', '2019-04-09', 34, '8', '', 'المشهد ', 'female', '2066-06-06', 5, '', 9, 8, 1, '1', '00000000', '000000____', '', ''),
(138, 'جلاديس طاطور ', '', '', '2019-04-10', 34, '12', '', 'الرينة', 'female', '2052-02-05', 8, '', 9, 8, 1, '1', '00000', '0000000000', '', ''),
(139, 'عائشة سليمان ', '', '', '2019-04-10', 34, '11', '', 'المشهد', 'female', '2052-04-05', 8, '', 9, 8, 1, '1', '00000', '000000000_', '', ''),
(140, 'لؤي عدي منصور', '', '', '2019-04-12', 34, '3', 'a@a.om', 'المشهد ', 'male', '2045-04-04', 5, '', 9, 8, 1, '1', '0000000', '0000000000', '', ''),
(141, 'علي عمران مرعي', '', '', '2019-04-12', 35, '5', '', 'المشهد ', 'male', '2056-05-05', 5, '', 9, 8, 1, '1', '000000000', '0000______', '', ''),
(142, 'رغد سيدي', '', '', '2019-04-12', 34, '3', '', 'المشهد ', 'female', '2044-04-04', 5, '', 9, 8, 1, '1', '0000000', '0000000000', '', ''),
(143, 'سجى هشام حسن', '', '', '2019-04-12', 34, '7', '', 'المشهد', 'female', '2045-02-04', 5, '', 9, 8, 1, '1', '000000', '00000_____', '', ''),
(144, 'مجدي', '', '', '2019-04-12', 34, '8', '', 'المشهد ', 'male', '2045-02-04', 5, '', 9, 8, 1, '1', '0000000', '000_______', '', ''),
(145, 'محمد طاطور', '', '', '2019-04-12', 34, '7', '', 'الرينة', 'male', '2055-04-05', 8, '', 9, 8, 1, '1', '0000000', '000000000_', '', ''),
(146, 'محمد امارة ', '', '', '2019-04-12', 34, '11', '', 'كفركنا', 'male', '2032-03-04', 8, '', 9, 8, 1, '1', '2323', '233333____', '', ''),
(147, 'سيرين ابراهيم صالح', '', '', '2019-05-20', 34, '9', '', 'المشهد', 'female', '1970-01-01', 5, '', 9, 8, 3, '1', '000000000', '20222222__', '0000000', ''),
(148, 'معتصم كريم ', '', '', '2019-05-20', 34, '11', '', 'المشهد ', 'male', '2000-04-14', 8, '', 9, 8, 1, '1', '000000000', '0000000___', '', ''),
(149, 'ميار هايل صالح ', '', '', '2019-05-20', 34, '9', '', 'المشهد ', 'female', '1970-01-01', 8, '', 9, 1, 1, '1', '000000', '000000000_', '', ''),
(150, '  عباس امارة سعيد', '4badaee57fed5610012a296273158f5f', 'MTAyMDMw', '2019-05-20', 34, '9', 'as3ad.amsnour@gmail.com', 'المشهد ', 'male', '2020-10-20', 5, '', 9, 8, 2, '1', '0000000', '0528277135', '', '0'),
(151, 'محمد صالح كريم ', '', '', '2019-05-20', 34, '1', '', 'المشهد ', 'male', '2052-05-25', 10, '', 9, 8, 1, '1', '0000', '000000000_', '', ''),
(152, 'ريم حميدي', '', '', '2019-05-20', 34, '10', '', 'المشهد ', 'female', '2042-11-22', 8, '', 9, 8, 1, '1', '000000', '0000000000', '', ''),
(153, 'علي حسن (جديد)', '', '', '2019-05-26', 34, '8', '', 'المشهد ', 'male', '2052-12-25', 5, '', 9, 8, 1, '1', '000000000', '0000000000', '', ''),
(154, 'معاذ تيسير مرعي ', '', '', '2019-05-30', 20, '8', '', 'المشهد ', 'male', '2041-04-14', 5, '', 9, 8, 2, '1', '000000000', '0000000000', '', ''),
(155, 'محمد قتيبة شحادة ', '', '', '2019-05-30', 34, '1', '', 'الرينة', 'male', '2014-05-04', 5, '', 9, 8, 1, '1', '000000000', '000000000_', '', ''),
(156, 'مجموعة 4 فصل 3', '', '', '2019-05-30', 34, '4', '', 'المشهد ', 'male', '2054-05-04', 5, '', 9, 8, 2, '1', '000000000', '254155145_', '', ''),
(157, 'محمد منذر منصور', '', '', '2019-06-13', 20, '9', 'a@a.om', 'المشهد ', 'male', '2043-04-02', 8, '', 9, 8, 17, '1', '000000000', '0500000000', '00000000000', ''),
(158, 'ريان هيثم مرعي ', '', '', '2019-06-23', 35, '7', '', 'المشهد ', 'male', '2055-05-05', 5, '', 9, 8, 2, '1', '000000000', '0502549691', '', ''),
(159, 'عمرو فارس سليمان', '', '', '2019-06-23', 35, '6', '', 'المشهد ', 'male', '2041-04-04', 5, '', 9, 8, 1, '1', '0000000', '0000000000', '', ''),
(160, 'عبدالله فارس سليمان ', '', '', '2019-06-23', 35, '5', '', 'المشهد ', 'male', '2034-03-04', 5, '', 9, 8, 1, '1', '4333444', '3444444444', '', ''),
(161, 'ليث فارس سليمان ', '', '', '2019-06-23', 35, '1', '', 'المشهد ', 'male', '2032-04-04', 5, '', 9, 8, 1, '1', '32444', '32444444__', '', ''),
(163, 'محمد خليل صالح ', '', '', '2019-06-24', 35, '2', 'a@a.om', 'المشهد ', 'male', '2011-12-04', 5, '', 9, 8, 1, '1', '220470835', '0508587985', '', ''),
(164, 'نادين هادي فلاح ', '', '', '2019-06-24', 34, '11', 'a@a.om', 'عرب الهيب', 'female', '2052-05-02', 10, '', 9, 8, 1, '1', '123', '3333333333', '', ''),
(165, 'منار يوسف سليمان ', '4badaee57fed5610012a296273158f5f', 'MTAyMDMw', '2019-06-24', 34, '12', 'a@a.om', 'كفركنا', 'female', '1996-09-05', 10, '', 9, 8, 1, '1', '315889931', '0523319065', '', ''),
(167, 'محمد سامر سيدي ', '69ffbb8a76b17639ea607f5d79f02db8', 'MjIwODE0MjYz', '2019-09-05', 7, '2', 'pipe2@gmail.com', 'المشهد ', 'male', '2012-07-13', 5, '', 9, 8, 15, '1', '220814263', '0546862233', '0546862233', NULL),
(168, 'محمد سمير صالح ', '940496d99c0321d50b5cd549d6fd1f15', 'MjE2OTE0OTM3', '2019-09-05', 7, '6', 'pipe3@gmail.com', 'المشهد', 'female', '2008-03-19', 5, '', 9, 8, 10, '1', '216914937', '0548360389', '0548360389', NULL),
(169, 'بنان مروان شحادة ', '9dfadba04ff2f1c42c68a3a28d091cb9', 'MzE5MjgxNTA=', '2019-09-05', 7, '6', 'pipe4@gmail.com', 'الرينة', 'female', '2008-08-28', 5, '', 9, 8, 10, '1', '31928150', '0502650090', '0502650090', NULL),
(171, 'لمى عمار حسن', 'e14e56ec22cdd04d66f195fbb8e39d5d', 'MjIwNDU0NTcz', '2019-09-05', 7, '2', 'pipe6@gmail.com', 'المشهد ', 'female', '2012-04-12', 5, '', 9, 8, 30, '1', '220454573', '0502112274', '0502112274', NULL),
(172, 'محمود فضل بصول ', '599a9c599c41604b351d906843dad692', 'MzI3NzQ3Njcx', '2019-09-05', 22, '9', 'pipe7@gmail.com', 'الرينة', 'male', '2005-03-13', 8, '', 9, 8, 28, '1', '327747671', '0502112274', '0502112274', NULL),
(173, 'لؤى عمار حسن ', 'e62f9d51eea899da3aa9160175621ced', 'MjE4MzU2MzAx', '2019-09-05', 7, '5', 'pipe5@gmail.com', 'المشهد ', 'female', '2009-07-23', 5, '', 9, 8, 30, '1', '218356301', '0502112274', '0502112274', NULL),
(174, 'يثرب علي ', 'b0736b180bb5e2bb1b90b10d883ab475', 'MjE0NzA5MDQw', '2019-09-05', 20, '8', 'pipe8@gmail.com', 'المشهد ', 'female', '2006-11-13', 5, '', 9, 8, 10, '1', '214709040', '0549964245', '0549964245', NULL),
(175, 'رزان راغب حسن', 'fe5d429b4b952353460862ba91530d05', 'MzI3NzE4Mzkx', '2019-09-05', 20, '8', '', 'المشهد ', 'female', '2006-08-30', 5, '', 9, 8, 1, '1', '327718391', '0509412546', '0509412546', NULL),
(176, 'اياد راغب حسن', 'da405a4c6a4a2860a9b3df2cbd0421b9', 'MzM0NjkxOTk1IA==', '2019-09-05', 35, '4', 'fsa10@gmail.com', 'المشهد ', 'male', '2010-12-10', 5, '', 9, 8, 1, '1', '334691995', '0509412546', '0509412546', NULL),
(177, 'فرج راغب حسن ', '416a5af3670fe1e02287159f04246340', 'MjE0NjQxODcw', '2019-09-05', 20, '9', 'fsa11@gmail.com', 'المشهد ', 'male', '2005-01-30', 5, '', 9, 8, 1, '1', '214641870', '0509412546', '0509412546', NULL),
(178, 'معهد رؤية اجتماع ', '714430e21fda6bea135dc981081971c0', 'MDUzMzcxNzEzNQ==', '2019-09-07', 34, '1', 'asmaa.abu.esmaeil@hotmail.com', 'المشهد ', 'male', '2019-08-01', 11, '', 9, 8, 10, '1', '053371713', '0533717135', '0533717135', NULL),
(179, 'عهد علي منصور ', 'c53851b02fd5889ad67f8b5b437a52f6', 'MjIwNDM5Mzc2', '2019-09-08', 7, '3', 'a@a.om', 'المشهد ', 'female', '2010-12-01', 5, '', 9, 8, 1, '1', '220439376', '0524695226', '', NULL),
(180, 'احمد سعيد صالح ', 'e61edd43e47f53ad2174460549d9f3d3', 'MjIwNTA2NjM4', '2019-09-08', 28, '3', 'a@a.om', 'المشهد ', 'male', '2011-05-13', 5, '', 9, 8, 1, '1', '220506638', '0547116502', '', NULL),
(181, 'بيبرس رياض سليمان ', '676b58d93cd3608e2341db08134c9bdd', 'MjE3MzMyMjM4', '2019-09-09', 7, '6', 'msd10@gmail.com', 'المشهد ', 'male', '2007-12-30', 5, '', 9, 8, 1, '1', '217332238', '0507677466', '', NULL),
(182, 'احمد اسعد صالح ', '9c41be999bc5f28bd5152f2125dbb5a4', 'MzM2MDMwOTI5IA==', '2019-09-09', 28, '1', 'fsa15@gmail.com', 'المشهد ', 'male', '2013-06-03', 5, '', 9, 8, 30, '1', '336030929', '0527732906', '', NULL),
(183, 'مجد مثقال حسن ', '5bc1f56697f4e32a2f908da0afb1bcd5', 'MzMxOTI3MjQ0', '2019-09-10', 34, '6', 'pipe10@gmail.com', 'المشهد ', 'male', '2008-08-13', 5, '', 9, 8, 30, '1', '331927244', '0528604506', '0528604506', NULL),
(184, 'رتاج ابو اسماعيل ', '13723a026a1a9b499f0e9f9fb8f4f6ad', 'MjIyMjIyMjIyMjI=', '2019-09-11', 38, '10', 'a@a.om', 'المشهد', 'female', '2004-09-30', 8, '', 9, 8, 1, '1', '325505352', '0504200836', '', NULL),
(185, 'عبد الحميد ربيع ', 'a94d5c0ae0d1da83d6c0eb97030a81aa', 'MjE3MzEzMDIyIA==', '2019-09-12', 20, '7', 'fsa11@gmail.com', 'المشهد ', 'male', '2007-08-26', 5, '', 9, 8, 1, '1', '217313022', '0503666009', '', NULL),
(186, 'دانية صالح ', '09834a8c39fecc8d0dc29767a290f531', 'MzM0MjIyNzU5', '2019-09-12', 28, '4', 'fsa21@gmail.com', 'المشهد ', 'female', '2005-05-07', 5, '', 9, 8, 30, '1', '334222759', '0522956634', '0522956634', NULL),
(187, 'ملك بشير صالح ', '9540ba1db86a15300d7f106e02deff40', 'MjE4NDE1NzY4', '2019-09-12', 35, '4', 'fsa30@gmail.com', 'المشهد ', 'female', '2010-06-10', 5, '', 9, 8, 2, '1', '218415768', '0525450635', '', NULL),
(188, 'عمر خالد حسن ', 'ddab59889e14240d0dbbf198635e01e5', 'MjE0MDgyMjMy', '2019-09-22', 20, '10', 'a@a.om', 'المشهد', 'male', '2003-09-02', 6, '', 8, 9, 30, '0', '214082232', '2222222222222', '0505852866', NULL),
(189, 'احمد بستوني', '795cf832105110aa79182ab6bcc85e82', 'MjMzMjQyMzQ=', '2019-09-22', 26, '7', 'pipe@gmail.com', 'ام الفحم ', 'male', '1970-01-01', 10, '', 9, 8, 5, '1', '23324234', '233333____', '02151515144', NULL),
(190, 'hhhh', '4c93008615c2d041e33ebac605d14b5b', 'MDAwMDAwMDAw', '2019-09-23', 35, '7', 'a@a.om', 'المشهد', 'female', '2006-08-25', 9, '', 9, 8, 1, '1', '000000000', '0505852866', '0000', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `students_notfications`
--

CREATE TABLE `students_notfications` (
  `stdn_code` bigint(20) NOT NULL,
  `stdn_st_code` bigint(20) NOT NULL COMMENT 'كود الطالب',
  `stdn_msg` text NOT NULL COMMENT 'نص الرسالة',
  `stdn_send_date` datetime NOT NULL COMMENT 'وقت الارسال',
  `stdn_send_type` char(20) NOT NULL COMMENT 'نوع المسج',
  `from_person_code` bigint(20) NOT NULL,
  `from_person_name` varchar(255) NOT NULL,
  `to_person_code` bigint(20) NOT NULL,
  `to_person_name` varchar(255) NOT NULL,
  `stdn_active` char(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='جدول رسائل الطلاب';

--
-- Dumping data for table `students_notfications`
--

INSERT INTO `students_notfications` (`stdn_code`, `stdn_st_code`, `stdn_msg`, `stdn_send_date`, `stdn_send_type`, `from_person_code`, `from_person_name`, `to_person_code`, `to_person_name`, `stdn_active`) VALUES
(8, 150, 'Fhjthh', '2019-08-24 06:31:00', 'mobile', 17, 'سندس عمري', 150, '  عباس امارة سعيد', '1'),
(7, 11, 'متابعة يومية', '2019-08-21 05:43:00', 'mobile', 11, 'مريم عبد العزيز سيدي', 11, 'عمر خالد حسن ', '1');

-- --------------------------------------------------------

--
-- Table structure for table `subject_photos`
--

CREATE TABLE `subject_photos` (
  `S_code` bigint(11) NOT NULL,
  `Rcu_id` bigint(11) NOT NULL,
  `Photo_id` bigint(11) NOT NULL,
  `prefix_type` varchar(15) NOT NULL,
  `is_main` char(1) NOT NULL DEFAULT '0',
  `S_active` char(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `subject_photos`
--

INSERT INTO `subject_photos` (`S_code`, `Rcu_id`, `Photo_id`, `prefix_type`, `is_main`, `S_active`) VALUES
(54, 4, 54, 'STD', '1', '1'),
(99, 2, 99, 'STD', '1', '1'),
(52, 3, 52, 'STD', '1', '1'),
(51, 1, 51, 'STD', '1', '1'),
(50, 167, 50, 'STD', '1', '1'),
(49, 25, 49, 'TEACH', '1', '1'),
(47, 27, 47, 'TEACH', '1', '1'),
(46, 26, 46, 'TEACH', '0', '1'),
(96, 29, 96, 'TEACH', '1', '1'),
(16, 6, 16, 'CRS', '1', '0'),
(17, 5, 17, 'CRS', '1', '1'),
(18, 4, 18, 'CRS', '0', '1'),
(19, 6, 19, 'CRS', '0', '1'),
(20, 7, 20, 'CRS', '1', '1'),
(21, 2, 21, 'CRS_DOCS', '0', '1'),
(22, 2, 22, 'CRS_DOCS', '0', '1'),
(23, 2, 23, 'CRS_DOCS', '0', '1'),
(24, 8, 24, 'CRS_DOCS', '0', '1'),
(25, 8, 25, 'CRS', '1', '1'),
(26, 9, 26, 'CRS_DOCS', '0', '1'),
(27, 9, 27, 'CRS', '0', '1'),
(28, 9, 28, 'CRS', '1', '1'),
(29, 9, 29, 'CRS_DOCS', '0', '1'),
(30, 9, 30, 'CRS_DOCS', '0', '1'),
(31, 14, 31, 'CRS_DOCS', '1', '1'),
(32, 14, 32, 'CRS', '1', '1'),
(33, 4, 33, 'CRS', '0', '1'),
(34, 4, 34, 'CRS', '0', '1'),
(37, 5, 37, 'CRS', '0', '1'),
(38, 4, 38, 'CRS', '1', '1'),
(39, 8, 39, 'CRS_DOCS', '1', '1'),
(40, 4, 40, 'CRS_DOCS', '0', '1'),
(41, 4, 41, 'CRS_DOCS', '0', '1'),
(42, 15, 42, 'CRS_DOCS', '1', '1'),
(43, 15, 43, 'CRS', '1', '1'),
(60, 9, 60, 'STD', '0', '1'),
(61, 9, 61, 'STD', '0', '1'),
(65, 7, 65, 'STD', '0', '1'),
(64, 7, 64, 'STD', '0', '1'),
(66, 8, 66, 'STD', '0', '1'),
(67, 8, 67, 'STD', '0', '1'),
(68, 9, 68, 'STD', '0', '1'),
(69, 9, 69, 'STD', '0', '1'),
(70, 10, 70, 'STD', '0', '1'),
(71, 10, 71, 'STD', '0', '1'),
(162, 11, 162, 'STD', '0', '1'),
(168, 11, 169, 'STD', '1', '1'),
(74, 12, 74, 'STD', '0', '1'),
(75, 12, 75, 'STD', '0', '1'),
(76, 13, 76, 'STD', '0', '1'),
(77, 13, 77, 'STD', '0', '1'),
(78, 14, 78, 'STD', '0', '1'),
(79, 14, 79, 'STD', '0', '1'),
(80, 15, 80, 'STD', '0', '1'),
(81, 15, 81, 'STD', '0', '1'),
(82, 16, 82, 'STD', '1', '1'),
(83, 17, 83, 'STD', '1', '1'),
(84, 18, 84, 'STD', '0', '1'),
(114, 22, 114, 'CRS_DOCS', '0', '1'),
(88, 17, 88, 'CRS_DOCS', '1', '1'),
(90, 18, 90, 'CRS', '1', '1'),
(107, 26, 107, 'TEACH', '0', '1'),
(92, 19, 92, 'CRS', '1', '1'),
(94, 20, 94, 'CRS', '1', '1'),
(97, 19, 97, 'STD', '1', '1'),
(101, 18, 101, 'STD', '1', '1'),
(123, 46, 123, 'CRS', '1', '1'),
(104, 21, 104, 'CRS_DOCS', '1', '1'),
(105, 21, 105, 'CRS', '1', '1'),
(106, 21, 106, 'CRS', '0', '1'),
(110, 12, 110, 'TEACH', '1', '1'),
(111, 11, 111, 'TEACH', '1', '1'),
(113, 30, 113, 'TEACH', '1', '1'),
(121, 61, 121, 'CRS', '1', '1'),
(116, 22, 116, 'CRS', '1', '1'),
(117, 22, 117, 'CRS_DOCS', '1', '1'),
(122, 32, 122, 'TEACH', '1', '1'),
(124, 24, 124, 'CRS', '1', '1'),
(125, 43, 125, 'CRS', '1', '1'),
(126, 27, 126, 'CRS', '1', '1'),
(127, 48, 127, 'CRS', '1', '1'),
(128, 38, 128, 'CRS', '1', '1'),
(129, 42, 129, 'CRS', '1', '1'),
(130, 65, 130, 'CRS', '1', '1'),
(131, 59, 131, 'CRS', '1', '1'),
(132, 58, 132, 'CRS', '1', '1'),
(133, 66, 133, 'CRS', '1', '1'),
(134, 61, 134, 'CRS', '0', '1'),
(135, 36, 135, 'CRS', '1', '1'),
(136, 69, 136, 'CRS', '1', '1'),
(137, 63, 137, 'CRS', '1', '1'),
(138, 28, 138, 'CRS', '1', '1'),
(139, 64, 139, 'CRS', '1', '1'),
(140, 37, 140, 'CRS', '1', '1'),
(141, 49, 141, 'CRS', '1', '1'),
(142, 67, 142, 'CRS', '1', '1'),
(143, 32, 143, 'CRS', '1', '1'),
(144, 31, 144, 'CRS', '1', '1'),
(145, 29, 145, 'CRS', '1', '1'),
(146, 30, 146, 'CRS', '1', '1'),
(147, 25, 147, 'CRS', '1', '1'),
(148, 26, 148, 'CRS', '1', '1'),
(149, 33, 149, 'CRS', '1', '1'),
(150, 17, 150, 'CRS', '1', '1'),
(151, 34, 151, 'CRS', '0', '1'),
(152, 34, 152, 'CRS', '1', '1'),
(154, 33, 154, 'TEACH', '1', '1'),
(155, 34, 155, 'TEACH', '1', '1'),
(156, 166, 156, 'STD', '1', '1'),
(157, 31, 157, 'TEACH', '1', '1'),
(158, 21, 158, 'TEACH', '1', '1'),
(159, 14, 159, 'TEACH', '0', '1'),
(160, 14, 160, 'TEACH', '1', '1'),
(169, 189, 170, 'STUDENT_DOCS_PR', '1', '1'),
(170, 189, 171, 'STD', '1', '1');

-- --------------------------------------------------------

--
-- Table structure for table `subscribe_type`
--

CREATE TABLE `subscribe_type` (
  `sub_code` int(9) NOT NULL,
  `sub_name` varchar(150) NOT NULL,
  `sub_active` char(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='انواع الاشتراكات';

--
-- Dumping data for table `subscribe_type`
--

INSERT INTO `subscribe_type` (`sub_code`, `sub_name`, `sub_active`) VALUES
(6, 'مجموعات شهري', '1'),
(7, 'مجموعات فصلي', '1'),
(8, 'فردي ثانوي', '1'),
(9, 'تجهيز بجروت', '1'),
(10, 'فردي فوق ثانوي', '1'),
(11, 'دورات', '1'),
(12, 'طالب جامعي ', '1'),
(13, 'asdfa', '1'),
(14, 'مجموعات شهري	', '1');

-- --------------------------------------------------------

--
-- Table structure for table `teachers`
--

CREATE TABLE `teachers` (
  `te_code` bigint(11) NOT NULL,
  `te_reg_date` date NOT NULL,
  `te_name` varchar(255) NOT NULL,
  `te_ID` int(9) NOT NULL,
  `te_birthday` date NOT NULL,
  `te_gender` varchar(10) NOT NULL,
  `te_email` varchar(255) NOT NULL,
  `te_courses_codes` varchar(255) NOT NULL,
  `te_phone1` varchar(15) NOT NULL,
  `te_town` varchar(255) NOT NULL,
  `te_notes` text NOT NULL,
  `te_active` char(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='جدول المعلمين';

--
-- Dumping data for table `teachers`
--

INSERT INTO `teachers` (`te_code`, `te_reg_date`, `te_name`, `te_ID`, `te_birthday`, `te_gender`, `te_email`, `te_courses_codes`, `te_phone1`, `te_town`, `te_notes`, `te_active`) VALUES
(10, '2018-12-14', 'دينا منصور', 315938175, '1970-01-01', 'female', 'dena.mansour@hotmail.com', '[\"4\",\"7\"]', '0502813639', 'المشهد ', '', '1'),
(11, '2018-12-14', 'مريم عبد العزيز سيدي', 17, '1970-01-01', 'female', 'gitnet51pay@gmail.com', '[\"10\"]', '+970567191315', 'gaza', '0000000000', '1'),
(12, '2018-12-14', 'سندس سليمان', 16, '1970-01-01', 'female', 'sondosa.soliman@gmail.com', '[\"7\",\"10\",\"11\",\"12\",\"14\",\"16\",\"17\",\"18\"]', '+46727753891', 'stockholm', '000000000000000', '1'),
(13, '2018-12-14', 'رفيف صالح', 206140261, '1970-01-01', 'female', 'gitnet51pay@gmail.com', '[\"11\",\"23\"]', '+970567191315', 'gaza', '0000000000', '1'),
(14, '2018-12-14', 'ميساء عيسى', 205537012, '1970-01-01', 'female', 'maysaa_94@hotmail.com', '[\"19\",\"21\"]', '0529563695', 'المشهد ', '', '1'),
(16, '2018-12-17', 'روان احمد سليمان', 13, '1993-11-04', 'female', 'srawan11@campus.technion.ac.il', '[\"4\",\"7\",\"10\",\"11\",\"15\"]', '', 'المشهد ', ',', '1'),
(17, '2018-12-23', 'سندس عمري', 203968649, '1970-01-01', 'female', 'sondos_omary@hotmail.com', '[\"4\",\"7\",\"10\",\"22\"]', '0532217156', 'المشهد', '0000000', '1'),
(18, '2018-12-24', 'صفاء محمد سليمان', 11, '1991-09-12', 'female', 'safa-alro7.s@hotmail.com', '[\"7\",\"11\",\"12\",\"14\",\"15\",\"17\",\"18\",\"19\",\"21\"]', '', 'المشهد', 'ي', '1'),
(19, '2018-12-27', 'محمد سعيد سليمان', 10, '1970-01-01', 'male', 'aa@gmail.com', '[\"4\",\"7\",\"13\",\"14\"]', '', 'المشهد ', '308531409', '1'),
(21, '2019-01-03', 'ساجدة محمد سليمان', 307855031, '1993-11-03', 'female', 'aa@aa.com', '[\"7\",\"14\",\"22\"]', '0547166902', 'المشهد ', 'معلمة', '1'),
(22, '2019-01-11', 'سماح عمر سليمان ', 8, '1992-02-09', 'female', 'aa@gmail.com', '[\"22\"]', '', 'المشهد ', 'معلم ', '1'),
(23, '2019-01-20', 'طارق القواس', 7, '2018-12-03', 'male', 'aa@gmail.com', '[\"4\"]', '', 'كفركنا', 'ال', '1'),
(24, '2019-01-23', 'ماريا عبد الهادي ', 6, '1970-01-01', 'female', 'marieaa87@hotmail.com', '[\"22\"]', '', 'المشهد', '', '1'),
(25, '2019-02-03', 'غصون عاطف طاطور', 5, '1970-01-01', 'female', 'ghuson.ta@gmail.com', '[\"22\"]', '223322233322', 'الرينة', '', '1'),
(26, '2019-03-13', 'ابراهيم جعباط', 4, '1993-12-16', 'male', 'get_lee_0545@hotmail.com', '[\"10\"]', '363636636336633', 'لبعينه', '0000000000000', '1'),
(27, '2019-03-13', 'اسعد سليمان', 3, '2000-07-08', 'male', 'danrad23.as@gmail.com', '[\"4\",\"7\",\"13\"]', '6666665555', 'المشهد', '000000000000', '1'),
(28, '2019-03-26', 'ابتسام صالح ', 2, '1970-01-01', 'female', 'ibtsam@gmail.com', '[\"10\"]', '0528277135', 'المشهد ', 'المشهد ', '1'),
(29, '2019-03-31', 'ديما طاطور ', 1, '1970-01-01', 'female', 'demosht@gmail.com', '[\"10\"]', '0528277135', 'الرينة', '؟', '1'),
(30, '2019-08-21', 'سيرينا زهر ', 32981078, '1970-01-01', 'female', 'srenazher@gmail.com', '[\"10\"]', '0509393710', 'الناصرة ', 'معلمة لغة انجليزية \r\nمعلمة دورات لغة انجليزية بطريقة مبتكرة وجديدة ', '1'),
(31, '2019-08-24', 'اسماء صالح ابواسماعيل ', 308449131, '1993-04-06', 'female', 'asmaabuesmaeil93@gmail.com', '[\"26\"]', '0546211915', 'المشهد ', 'سكرتيرة المعهد ', '1'),
(32, '2019-08-26', 'معهد رؤية', 203685656, '1970-01-01', 'male', 'roaya017@gmail.com', '[\"26\"]', '0532217156', 'المشهد ', '', '1'),
(33, '2019-09-03', 'كارول شاهين ', 34868901, '1978-04-30', 'female', 'kjvsadty@gmail.com', '[\"25\"]', '0507900579', 'الناصرة ', 'تعليم مصحح ', '1'),
(34, '2019-09-03', 'سيرين سارجي ', 36375806, '1979-07-17', 'female', 'dfnk@gmail.com', '[\"25\"]', '0526730823', 'الناصرة ', 'تعليم مصحح', '1'),
(35, '2019-09-05', 'رغد حسن ', 315954842, '1996-03-03', 'female', 'dfnk96@gmail.com', '[\"4\",\"10\",\"11\",\"19\"]', '0547344813', 'المشهد ', 'معلمة لغة عبرية لصف تاسع \r\nعربي سابع \r\nانجليزي كل الاجيال\r\nرياضيات ابتدائي ', '1'),
(36, '2019-09-08', 'مرح دخل الله', 205396971, '1970-01-01', 'female', 'marah.jber94@gmail.com', '[\"15\",\"21\"]', '0502224897', 'المشهد', '', '1'),
(37, '2019-09-09', 'نسرين علي ', 315736603, '1996-11-07', 'female', 'ali.nsreen.1996@gmail.com', '[\"4\",\"11\"]', '0508403180', 'المشهد ', '', '1');

-- --------------------------------------------------------

--
-- Table structure for table `teachers_trainigs`
--

CREATE TABLE `teachers_trainigs` (
  `tt_code` bigint(20) NOT NULL,
  `tt_te_code` bigint(11) NOT NULL,
  `tt_crs_code` bigint(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='جدول مدربين الدورات';

--
-- Dumping data for table `teachers_trainigs`
--

INSERT INTO `teachers_trainigs` (`tt_code`, `tt_te_code`, `tt_crs_code`) VALUES
(12, 12, 15),
(11, 11, 15),
(10, 10, 15),
(13, 13, 15),
(14, 25, 4),
(15, 27, 4),
(16, 28, 4),
(22, 14, 5),
(21, 12, 5),
(20, 10, 5),
(69, 29, 16),
(164, 13, 17),
(68, 12, 18),
(60, 14, 19),
(65, 10, 20),
(163, 11, 17),
(162, 10, 17),
(64, 28, 21),
(63, 24, 21),
(66, 13, 20),
(67, 14, 20),
(72, 13, 22),
(79, 11, 23),
(133, 17, 24),
(158, 31, 25),
(159, 31, 26),
(137, 32, 27),
(149, 31, 28),
(156, 31, 29),
(157, 31, 30),
(155, 31, 31),
(154, 31, 32),
(160, 31, 33),
(166, 31, 34),
(91, 31, 35),
(146, 31, 36),
(151, 31, 37),
(139, 31, 38),
(95, 31, 39),
(96, 31, 40),
(97, 31, 41),
(140, 32, 42),
(134, 31, 43),
(100, 31, 44),
(101, 31, 45),
(132, 32, 46),
(103, 31, 47),
(138, 31, 48),
(152, 31, 49),
(106, 31, 50),
(107, 31, 51),
(108, 31, 52),
(109, 31, 53),
(110, 31, 54),
(111, 31, 55),
(112, 31, 56),
(113, 31, 57),
(143, 31, 58),
(142, 31, 59),
(116, 31, 60),
(161, 32, 61),
(118, 31, 62),
(148, 31, 63),
(150, 32, 64),
(141, 31, 65),
(144, 31, 66),
(153, 31, 67),
(124, 31, 68),
(147, 31, 69);

-- --------------------------------------------------------

--
-- Table structure for table `training_categories`
--

CREATE TABLE `training_categories` (
  `trc_code` bigint(20) NOT NULL,
  `trc_name` varchar(255) NOT NULL,
  `trc_active` char(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='تصنيفات ';

--
-- Dumping data for table `training_categories`
--

INSERT INTO `training_categories` (`trc_code`, `trc_name`, `trc_active`) VALUES
(3, 'دورات', '1'),
(4, 'ورشات', '1'),
(5, 'خدمات', '1');

-- --------------------------------------------------------

--
-- Table structure for table `training_courses`
--

CREATE TABLE `training_courses` (
  `crs_code` bigint(20) NOT NULL,
  `tr_cat_code` bigint(20) NOT NULL,
  `crs_date` varchar(30) NOT NULL,
  `crs_name` varchar(255) CHARACTER SET utf8 NOT NULL,
  `crs_hours` int(11) NOT NULL,
  `crs_details` text CHARACTER SET utf8 NOT NULL,
  `crs_keywords` text CHARACTER SET utf8 NOT NULL,
  `crs_subscrib` int(11) NOT NULL,
  `crs_meetings` int(11) NOT NULL,
  `crs_duration` varchar(255) CHARACTER SET utf8 NOT NULL,
  `crs_price` int(11) NOT NULL,
  `crs_show_price` char(2) CHARACTER SET utf8 NOT NULL,
  `crs_author` bigint(11) NOT NULL,
  `crs_ages` varchar(255) CHARACTER SET utf8 NOT NULL,
  `crs_is_preview` char(1) NOT NULL,
  `crs_active` char(2) CHARACTER SET utf8 NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `training_courses`
--

INSERT INTO `training_courses` (`crs_code`, `tr_cat_code`, `crs_date`, `crs_name`, `crs_hours`, `crs_details`, `crs_keywords`, `crs_subscrib`, `crs_meetings`, `crs_duration`, `crs_price`, `crs_show_price`, `crs_author`, `crs_ages`, `crs_is_preview`, `crs_active`) VALUES
(16, 3, '2019-08-15', 'لغة انجليزية (محادثة)', 40, 'الدورة موجهة إلى شرائح عمرية مختلفة، طريقة العمل الأساسية في هذه الدورات تُحدد بناءً على احتياجات ومستويات المشتركين، والتشديد فيها يكون على إكساب مهارات اللغة المحكية في وضعيات مختلفة بالإضافة إلى العمل على كسر حواجز الثقة بالنفس والتحدث باستخدام اللغة بالنفس.', 'لغة انجليزية (محادثة)', 10, 10, '2 ساعة تعليمية ', 1500, '1', 0, 'فوق 18 ', '0', '1'),
(17, 3, '2019-08-15', 'لغة عبرية (محادثة)', 20, 'تستقبل دورة اللغة العبرية المحكية شرائح عمرية مختلفة، يكون الهدف الرئيسي فيها هو لإكساب لغة ولكنة عبرية صحيحة تساعد وتساهم على الانخراط في المجتمع المختلط والذي يحتم علينا لإتقان اللغة العبرية.', 'لغة عبرية ,محادثة,لغة ، عبرية، محادثة ', 10, 10, '2', 1000, '1', 0, 'فوق 18 ', '0', '1'),
(18, 3, '2019-08-15', 'موسيقى وعزف ', 20, 'نتعرف في هذه الدورة على أساسيات وقواعد عالم الموسيقى، كما ونتذوق العزف على العديد من الآلات الموسيقية وذلك بحسب مستوى', 'موسيقى ,عزف ', 14, 14, '21', 500, '1', 0, '3سنوات حتى 6 سنوات ', '0', '1'),
(19, 3, '2019-08-15', 'مسرح دمى ', 20, 'دورة مسرح الدمى تعرف المشتركين بأنواع المسارح وأنواع الدمى وكذلك كيفية تشغيل وتفعيل هذه الدمى بحسب السياق المطلوب، بالإضافة إلى التعرف على لإمكانية بناء مسرح ودمى من أدوات متوفرة وبسيطة.', 'لغة عبرية ,محادثة,موسيقى ,عزف ,مسرح, دمى ', 10, 5, '1.5', 500, '1', 0, '3سنوات حتى 6 سنوات ', '0', '1'),
(20, 3, '2019-08-15', 'مبرمج مواقع انترنت ', 20, 'التعرف على عالم الشبكة العنكبوتية وأسراره، مما يفيد في تقدمنا في عملية بناء المواقع الإلكترونية بشكل أساسي يهيئنا للانطلاق نحو مستوى أعلى في هذا البحر العميق.', 'مبرمج مواقع انترنت ', 5, 10, '2', 500, '1', 0, '15-18', '0', '1'),
(25, 3, '2019-08-24', 'الكاتب الصغير ', 40, 'دورة الكاتب الصغير تشجع وتنمي مهارات الكتابة عند المشتركين في مجالات أدبية مختلفة وذلك عبر الانكشاف على نصوص مختلفة، تذوقها والاستمتاع بتجربة كتابة فريدة.', 'كاتب، كتابة ابداعية، ', 10, 10, '1', 350, '1', 0, '9-14', '0', '1'),
(24, 3, '2019-08-24', 'لغة عبرية (محادثة)', 45, 'تستقبل دورة اللغة العبرية المحكية شرائح عمرية مختلفة، يكون الهدف الرئيسي فيها هو لإكساب لغة ولكنة عبرية صحيحة تساعد وتساهم على الانخراط في المجتمع المختلط والذي يحتم علينا لإتقان اللغة العبرية.', 'لغة ، عبرية، محادثة ', 15, 10, '1:30', 1000, '1', 0, '15-18 ', '0', '1'),
(26, 3, '2019-08-24', 'فنون الخط ', 10, 'نتعرف على أنواع وفنون الخط العربي الجميل، نمارس كتابتها، ونكتسب الحِيَل والتقنيات التي تساهم في تحسين وتجميل الخط المكتوب.', 'فن، خط، خطوط، دورة خط ', 10, 10, '1', 1000, '1', 0, '10', '0', '1'),
(27, 3, '2019-08-24', 'اسعاف اولي ', 40, 'عالمنا مليء بلحظات المفاجأة الغير سارّة، والتعرّض للحوادث هو أمرٌ شائع، والجاهزية المهنية والنفسية قد تساهم في منع هذه الحوادث والتقليل من العواقب السلبية التي قد ترافقها، لذا في هذه الدورة العمل يكون على تمرير مواد نظرية وتطبيقات عملية في عالم الإسعاف الأولي والتدخل الفوري عند حدوث أي ظرف طارئ', 'اسعاف أولي، اسعاف ', 15, 10, '1', 1000, '1', 0, '20', '0', '1'),
(28, 3, '2019-08-24', 'كونديتوريا  صغير  ', 40, 'هو يوجد أجمل او ألذ من الحلويات، وبالذات حين يعدها أطفالنا الصغار...\r\nنتعرف على المكونات، نحضّر ونتذوق أشهر وأروع أنواع الحلوى في ورشة الكنديتوريا الصغير...\r\n', 'كونديتوريا ،,طبخ،,حلويات،', 10, 10, '1', 1000, '1', 0, '20', '0', '1'),
(29, 3, '2019-08-24', 'الطبيب الصغير ', 40, 'حين تجتمع براءة الطفولة، مع حب الآخر وحب المساعدة، ويتم تطبيقها في مهنية إنسانية هادفة لدى أطفالنا الصغار، تكون النتيجة ملائكة رحمة يطوفون في سماء التحدي ويصنعون حلمًَا قد يتحقق يومًا ما... وذلك في دورة الطبيب الصغير', 'طب، طبيب، الطبيب الصغير ', 10, 10, '1', 1000, '1', 0, '10', '0', '1'),
(30, 3, '2019-08-24', 'دورات فنون ', 40, 'تشمل دورة الفنون العديد من العاليات الفنية والإبداعية، عالم من الألوان والجمال، يصنع الطفل لوحة فنية من نسج بخياله باستخدام مكونات وأدوات مختلفة من عالم الفنون: كالمعجونة، الطين، الورق والكرتون بأنواعه، الألوان بأنواعها، الأدوات الهندسية وغيرها الكثير...', 'فنون، فن ', 10, 10, '1', 1000, '1', 0, '10', '0', '1'),
(31, 3, '2019-08-24', 'القائد الصغير ', 40, 'حس القيادة موجود لدى جميع الأطفال ولكن بمعايير ونسب مختلفة، ومن واجب البالغين اكتشاف هذا الحس، العمل على تحفيزه، تطويره وتشجيعه لدى الأطفال، حتى نخلق جيلًا يتحلى بروح القيادة ويحمل مسؤولية التغيير في هذا المجتمع.', 'قائد، القائد الصغير، قيادة ', 10, 10, '1', 1000, '1', 0, '10', '0', '1'),
(32, 3, '2019-08-24', 'كاراتيه', 40, 'إكساب قواعد واساسيات فنون الدفاع عن النفس، الثقة بالنفس، تقبل الذات وأساليب القتال بحسب معايير عالمية في عالم رياضة الكاراتيه.', 'كراتيه', 10, 10, '1', 1000, '1', 0, '20', '0', '1'),
(33, 3, '2019-08-24', 'شطرنج ', 40, 'تعتبر لعبة الشطرنج من الألعاب العالمية والمتخصصة بزيادة التركيز ورفع مستوى نشاط الدماغ، هي أكثر من لعبة، والتمكن منها ينعكس على مجالات تعليمية مختلفة، كالرياضيات، العلوم، وأساليب حل الأحجيات. ', 'شطرنج', 10, 10, '1', 1000, '1', 0, '10', '0', '1'),
(34, 0, '2019-08-24', 'المكعب السحري', 40, 'دورة المكعب السحري موجهة لشرائح عمرية مختلفة ، تبدأ من جيل الطفولة المبكرة، حيث كشفت الأبحاث بأن استخدام هذا المكعب من شأنه ان ينشط خلايا مختلفة في الدماغ، كما وأنه يحفز على التفكير الإبداعي أو ما يعرف بالتفكير خارج الصندوق.', 'المكعب السحري ', 10, 10, '1', 1000, '1', 0, '20', '0', '1'),
(35, 3, '2019-08-24', 'ايروبيكا بيلاتيس ', 40, 'إنَّ الاعتناء بلياقة الجسم هو امرٌ ضروري، إلّا أنَّ ممارسة النشاطات الجسمانية والتمارين الرياضية بشكل منتظم هو أمر أكثر أهمية، يعود على جسمنا بالكثير من الفوائد الصحية وكذلك النفسية، كما أنه يحفز وينشط عمل الدورة الدموية بجسمنا بشكل أفضل.', 'ايروبيكا ', 10, 10, '10', 1000, '1', 0, '20', '0', '1'),
(36, 3, '2019-08-24', 'اسرار الالقاء وفن الخطابة ', 40, 'تعنى دورة أسس الإلقاء وفنون الخطابة بالعمل على شخصية المتحدث امام الجمهور، مهما كانت شريحة هذا الجمهور مختلفة، وذلك بالاستناد على أسس وركائز علمية وعملية تطبيقية من ع8الم التدريب والخطابة.', 'خطابة، القاء، ', 20, 10, '1', 1500, '1', 0, '20', '0', '1'),
(37, 3, '2019-08-24', 'اعداد مدربين ', 40, 'دورة إعداد المدربين تُعنى باستقبال خريجي دورة أسس الإلقاء وفنون الخطابة، والذين تميزوا وتفوقوا في هذا المجال، حتى يتعلموا ويكتسبوا الأسس والأساسات في عالم التدريب، والتي تتضمن تحضير مواد تدريبية، مخاطبة الجمهور، بناء برنامج عمل... والكثير من الأساسيات التي يرتكز عليها عالم التدريب، حتى نصنع منك متدربًا محترفًا.', 'اعداد مدربين، مدرب، القاء ', 15, 10, '1', 1500, '1', 0, '20', '0', '1'),
(38, 3, '2019-08-24', 'بسيخومتري ', 100, 'دورة التحضير لامتحان البسيخومتري، بالتعاون مع أفضل المرشدين وباستخدام أحدث الكتب والوسائل المساعدة.', 'بسيخومتري ', 15, 20, '2', 3000, '1', 0, '18', '0', '1'),
(39, 3, '2019-08-24', 'تسويق ', 40, 'دورة تسويق إلكترونيه، تُكسب المشتركين أسس ومهارات استخدام وسائل التواصل الاجتماعي، وتقنيات التكنولوجيا الحديثة من أجل تسويق المنتجات والمصالح المختلفة.', 'تسويق ', 10, 10, '1', 1500, '1', 0, '20', '0', '1'),
(40, 3, '2019-08-24', 'لغة عبرية (عالم التشغيل )', 40, 'تخاطب هذه الدورة الشباب والشابات وكذلك الرجال والنساء المقبلين على الانخراط في سوق العمل المختلط والذي يتطلب منهم جاهزية لغوية معيّنة تساهم وتساعد في إنجاحهم وإنجاح سيرورتهم المهنية.', 'عبرية، عمل، تشغيل، لغة', 15, 10, '1', 1500, '1', 0, '20', '0', '1'),
(41, 3, '2019-08-24', 'حاسوب ', 40, 'تعليم أساسيات استخدام برامج ال أوفيس على الحاسوب، من أجل إتقان العمل به ومواكبة الحياة الرقمية والوهمية في ظل عاصفة التكنولوجيا التي تحيط بنا ', 'حاسوب، اوفيس، ', 15, 10, '1', 1000, '1', 0, '20', '0', '1'),
(42, 3, '2019-08-24', 'تقني حاسوب ', 40, 'تهدف هذه الدورة على كشف أسرار تصليح الحواسيب بشكل أولي وأساسي', 'تقني، تقنيات، حاسوب,حاسوب، اوفيس، ', 10, 10, '10', 1000, '1', 0, '20', '0', '1'),
(43, 3, '2019-08-24', 'تصميم أزياء', 45, 'تصميم أزياء تجمع هذه الدورة الفن، الذوق، الملابس والتصاميم العصرية الحديثة، بالإضافة إلى تعليم قواعد وأسس تنسيق وترتيب الملابس بشكل يتماشى مع روح الموضة العصرية ومع تقاليدنا وأعرافنا الاجتماعية.', 'أزياء، تصميم، تصميم أزياء ', 10, 10, '1', 1000, '1', 0, '20', '0', '1'),
(44, 3, '2019-08-24', 'تحضير للصف الأول', 40, 'لإنَّ الانتقال من عالم الروضة والبستان إلى عالم المدرسة يحتاج إلى جاهزية معينة، والطفل الذي يتم تحضيره لهذا التغيير ولهذا الانتقال هو طفل قادر على التأقلم والتعلم بشكل أسرع وأفضل، يتخطى العقبات والصعوبات، يثق بنفسه، ومنفتح اكثر لسيرورة النضوج العمرية وما يتبعها من تغييرات.', 'الأول، ابتدائي، صف الأول', 10, 10, '10', 1000, '1', 0, '20', '0', '1'),
(45, 3, '2019-08-24', 'حكواتي', 40, 'ما أجمل الأجداد وحكاياتهم، ما أروع اللحظات التي ينسجم فيها الخيال مع التشويق لنسج سيرورة وحبكة حكاية يتشوق الكبير لسماع مجرياتها قبل الصغير، كل هذا وأكثر في دورة الحكواتي.', 'حكواتي، حكاية، قصة ', 10, 10, '1', 10000, '1', 0, '10', '0', '1'),
(46, 4, '2019-08-25', 'تطريز برازيلي ', 1, 'التطريز هو أحد الفنون اليدوية، يضيف لمسة رائعة سواء للملابس أو للمفروشات ، كما أنه من الهوايات الرائعة التي لا تحتاج إلى الكثير من التكاليف لإنجازها، تساعد الأشغال اليدوية على الاسترخاء وتقلل من التوتر، وتساعد العقل على التخلص من الأفكار السلبية.  ', 'תקליטן،,تعليم،, تعليم عالي،,التعليم العالي في ايطاليا، ,ايطاليا،,موسيقى ,عزف ,تطريز، تطريز برازيلي ', 15, 1, '3', 250, '1', 0, '15-50 ', '0', '1'),
(47, 4, '2019-08-25', 'كونديتوريا  ', 4, 'مع مرور الوقت، وتقدم الانسان أصبح لصنع الحلويات فن يسمى الكونديتوريا، فن صنع الحلويات، نبع هذا الفن من المخابز حيث كانت تعرض الحلوى اللذيذة بمظهر جميل خلف واجهة الزجاج لتجذب انتباه المارة، وتسر العين قبل المعدة، هكذا أصبح الانسان يبدع ويتفنن بصنع الحلويات بأجمل الأشكال والألوان وألذ النكهات، في ورشة  الكونديتوريا نتعرف على وصفات مميزة ومختلفة وعلى طريقة صنعها بأطيب طعم وأجمل صورة.     ', 'حلويات، كونديتوريا ', 15, 1, '3', 500, '1', 0, '20', '0', '1'),
(48, 4, '2019-08-25', 'اكسسوارات', 21, 'على مر العصور استخدمت الإكسسوارات كزينة للمرأة تبرز جمالها وتضيف عليه لمسة سحرية جذابة، في ورشة الاكسسوارات، نتعرف على الأدوات المستخدمة في صنع الاكسسوارات المختلفة، ونتدرب على تشكيلها وتنسيقها بالتطبيق العملي. ', 'زينة، اكسسوارات، جمال المرأة', 15, 10, '3', 300, '1', 0, '20', '0', '1'),
(49, 4, '2019-08-25', 'تجديل شعر ', 10, 'يعتبر الشعر عنوان جمال المرأة وسر جاذبيتها، ولتجديل الشعر فوائد عديدة، منها: تقوية الشعر وحمايته من الانتفاش والتقصف، وتزيد من طول الشعر...\r\nفي ورشة تجديل الشعر نتعلم طرق تجديل الشعر المختلفة والمتنوعة.   \r\n', 'شعر، تجديل شعر، تسريحة، تسريحات', 10, 10, '10', 300, '1', 0, '10', '0', '1'),
(50, 4, '2019-08-25', 'تعزيز الطاقم ', 10, 'ورشة تعزيز الطاقم هي ورشة هدفها توحيد مجموعة من الناس من أجل الاستمرار في نشاطات مشتركة، يتم ذلك بواسطة نشاطات معينة يمررها مقدم الورشة بهدف توطيد العلاقات بين أفراد المجموعة.', 'تعزيز، طاقم، تعزيز طاقم، توحيد، مجموعة', 10, 10, '10', 1000, '1', 0, '10', '0', '1'),
(51, 4, '2019-08-25', 'تصميم صناديق خشبية', 45, 'تعتبر صناعة الصناديق من الحرف التقليدية التي مارسها الانسان على مر العصور، وتعتبر الصناديق الخشبية من أهم الاضافات التي تعطي روح جديدة للاماكن التي نعيش فيها، بأقل تكلفة. \r\nفي ورشة صناعة الصناديق الخشبية نتعلم كيفية صناعة، صندوق من الخشب وتزينيه، بشكل يتلائم مع موضة العصر.  \r\n', 'تصميم، صناديق خشبية', 10, 10, '10', 1000, '1', 0, '20', '0', '1'),
(52, 4, '2019-08-25', 'فنون ', 40, 'الفن هو شكل من أشكال الثقافة الانسانية، وهو وسيلة للتعبير عن جوهر الانسان فبواسطة الفن يعبر الانسان عن حاجاته ورغباته، في ورشة الفنون كل مرة نقدم فعاليات فنية مختلفة، نكتشف من خلالها  موهبة المشترك، ننمي لديه المهارة، والخبرة ، والابداع، والحدس والمحاكاة، وأشياء اخرى. ', 'فنون، فن، ', 10, 10, '10', 1000, '1', 0, '18', '0', '1'),
(53, 4, '2019-08-25', 'فنون ', 40, 'الفن هو شكل من أشكال الثقافة الانسانية، وهو وسيلة للتعبير عن جوهر الانسان فبواسطة الفن يعبر الانسان عن حاجاته ورغباته، في ورشة الفنون كل مرة نقدم فعاليات فنية مختلفة، نكتشف من خلالها  موهبة المشترك، ننمي لديه المهارة، والخبرة ، والابداع، والحدس والمحاكاة، وأشياء اخرى. ', 'فنون، فن، ', 10, 10, '10', 1000, '1', 0, '18', '0', '1'),
(54, 4, '2019-08-25', 'العالم الصغير ', 40, 'هي ورشة يبحث المشترك من خلالها في خواص المواد، وأهميتها وقوتها في الطبيعة، تهدف الورشة الى تمرير مواد ومصطلحات ذات مستوى علمي عالي بطريقة مبسطة وممتعة، عن طريق تجارب في مجال الفيزياء والكيمياء والبيولوجيا والبيئة. ', 'العالم الصغير، عالم، صغير', 10, 10, '10', 1000, '1', 0, '18', '0', '1'),
(55, 4, '2019-08-25', 'الخط العربي ', 40, 'يعتبر الخط العربي العماد الذي حفظ القران الكريم كتابة، هذا عدا عن انه يبعث في نفس القارئ مشاعر الارتياح النفسي عند قراءة النص المكتوب بخط جميل وواضح، يكتسب الطالب من تعلم الخط مهارات عديدة منها: الترتيب، والتنظيم، ودقة الملاحظة، والموازنة، هذا بالإضافة الى التدريب على الصبر. ', 'خط، خط عربي، ', 10, 10, '10', 1000, '1', 0, '20', '0', '1'),
(56, 5, '2019-08-25', 'دروس خصوصية لجميع الأجيال ', 20, 'يقدم الدرس مدرس مختص في الموضوع المطلوب، تقدم الدروس بشكل فردي أو جماعي، يتم تخطيط الدرس وبنائه حسب احتياجات الطالب، بعد جلسة استشارة مع الأهل، تتم متابعة تقدم الطالب من جهة المعهد ومن جهة الأهل. ', 'دروس، تدريس، دروس خصوصية، وظائف', 10, 10, '10', 1000, '1', 0, '20', '0', '1'),
(57, 5, '2019-08-25', 'تحضير للبجروت', 40, 'يتم تحضير الطالب لامتحانات \"البجروت\" حسب تخصصه وحسب عدد الوحدات المطلوبة منه، مع مدرسين مؤهلين لهذه المهمة. ', 'بجروت، وحدات، تخصص، تحضير للبجروت ', 10, 10, '10', 350, '1', 0, '10', '0', '1'),
(58, 5, '2019-08-25', 'أيام رياضية ', 40, 'تقدم هذه الخدمة حسب الطلب، الفكرة هي تفعيل وتمرير فعاليات رياضية ، بالمدارس أو بالمخيمات أو النوادي وغيرها. ', 'أيام رياضية، رياضة، ', 10, 10, '10', 1000, '1', 0, '10', '0', '1'),
(59, 5, '2019-08-25', 'ألعاب نفخ', 40, 'يمكنكم التواصل وحجز ألعاب نفخ لمدارسكم في أيام الكيف والأيام الرياضية، للمخيمات الصيفية، للنوادي الترفيهية.', 'ترفيه، ,ألعاب، ,ألأعاب نفخ،', 10, 10, '1', 1000, '1', 0, '20', '0', '1'),
(60, 5, '2019-08-25', 'ألعاب مائية ', 45, 'تقدم هذه الخدمة من ضمن الخدمات التي يقدمها المعهد للمدارس والنوادي والمخيمات، حسب الطلب. ', 'ألعاب، ,ألعاب مائية،', 10, 1000, '3', 1000, '1', 0, '15-18 ', '0', '1'),
(61, 5, '2019-08-25', 'תקליטן \\ Dj', 8, 'תקליטן \\ Dj حسب الطلب لتفعيل أيام رياضية، مخيمات، نوادي، وغيرها. ', 'תקליטן،', 100, 1, '1', 1500, '1', 0, 'كل الاجيال ', '0', '1'),
(62, 5, '2019-08-25', 'عربة مأكولات متنقلة ', 10, 'تقدم هذه الخدمة حسب الطلب في الأيام الترفيهية أو المهرجانات والاحتفالات، بالمدارس والنوادي، وغيرها من المؤسسات. ', 'عربة مأكولات متنقلة،,مأكولات،,عربة،', 10, 20, '3', 350, '1', 0, '18', '0', '1'),
(63, 5, '2019-08-25', 'محاضرات تربوية', 1, 'يقدم المعهد خدمة المحاضرات التربوية في مواضيع مختلفة تهم الاباء والأمهات والعاملين في سلك التربية والتعليم', 'محاضرات،,تربوية', 15, 20, '20', 20, '1', 0, '20', '0', '1'),
(64, 5, '2019-08-25', 'التعليم العالي في ايطاليا', 45, 'يتم التسجيل للتعليم في ايطاليا، تمرر محاضرة بخصوص الموضوع للطالب المعني بالتعليم في ايطاليا، بعدها يتقدم الطالب لدورة اللغة الايطالية بالإضافة  الى دورة لاجتياز امتحان القبول للجامعات والتي نسبة النجاح بها تكون 100%. ', 'תקליטן،,تعليم،, تعليم عالي،,التعليم العالي في ايطاليا، ,ايطاليا،', 10, 20, '3', 1500, '1', 0, '15-18 ', '0', '1'),
(65, 5, '2019-08-25', 'دروس خصوصية عن بعد', 1, 'هذه الدروس تقدم عن طريق الانترنت حيث يتعلم الطالب من أي مكان يريد ويتم الدفع لها بواسطة الفيزا', 'انترنت، ,عن بعد،,تعليم عن بعد،,دروس خصوصية،', 10, 10, '1', 300, '1', 0, '9-14', '0', '1'),
(66, 5, '2019-08-25', 'أعياد ميلاد', 40, 'أمكانية عمل عيد الميلاد في قاعة المعهد  ويمكن تزيين القاعة حسب طلب الأهل', 'תקליטן،,أعياد ميلاد،,عيد،,أعياد،,ميلاد،', 10, 15, '1', 1000, '1', 0, '20', '0', '1'),
(67, 5, '2019-08-25', 'تأجير قاعة محاضرات', 45, 'امكانية تأجير القاعة لمن يرغب بذلك من أجل تقديم محاضرات متنوعة ', 'تأجير،,تأجير قاعة،,محاضرات،', 25, 1000, '3', 1000, '1', 0, '20', '0', '1'),
(68, 5, '2019-08-25', 'عروض سحرية', 40, 'امكانية طلب عروض سحرية بواسطة ساحر يقوم بعروض سحرية عن طريق خفة اليد، بالإضافة الى امكانية تعليم العروض السحرية عن طريق ورشات.', 'سحر،,عروض سحرية،,عروض،', 10, 10, '3', 350, '1', 0, '20', '0', '1'),
(69, 5, '2019-08-25', 'ملاطفة حيوانات', 45, 'امكانية طلب جلسة مع حيوانات مختلفة وملاطفتها واللعب معها، بالإضافة  الى امكانية طلب جلسات علاج عن طريق الحيوانات مع معالج مختص. ', 'ملاطفة حيوانات،,حيوانات،', 10, 10, '1', 1000, '1', 0, '15-18 ', '0', '1');

-- --------------------------------------------------------

--
-- Table structure for table `training_groups`
--

CREATE TABLE `training_groups` (
  `trg_code` int(11) NOT NULL,
  `trg_name` varchar(150) NOT NULL,
  `trg_active` char(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='مجموعات الدورات';

--
-- Dumping data for table `training_groups`
--

INSERT INTO `training_groups` (`trg_code`, `trg_name`, `trg_active`) VALUES
(2, 'مجموعة 1', '1'),
(3, 'مجموعة 2', '1');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `u_code` int(11) NOT NULL,
  `u_fname` varchar(255) CHARACTER SET utf8 NOT NULL,
  `u_sex` char(10) NOT NULL,
  `u_email` varchar(255) CHARACTER SET utf8 NOT NULL,
  `u_username` varchar(100) CHARACTER SET utf8 NOT NULL,
  `u_password` varchar(100) CHARACTER SET utf8 NOT NULL,
  `u_type` char(1) CHARACTER SET utf8 NOT NULL,
  `u_birthday` varchar(30) NOT NULL,
  `u_address` varchar(255) CHARACTER SET utf8 NOT NULL,
  `u_scr_priv` varchar(255) CHARACTER SET utf8 NOT NULL,
  `u_ID` int(11) NOT NULL,
  `u_btn_priv` varchar(255) CHARACTER SET utf8 NOT NULL,
  `u_active` char(1) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`u_code`, `u_fname`, `u_sex`, `u_email`, `u_username`, `u_password`, `u_type`, `u_birthday`, `u_address`, `u_scr_priv`, `u_ID`, `u_btn_priv`, `u_active`) VALUES
(1, 'اسعد عاطف منصور ', 'Male', 'as3ad.mansour@gmail.com', 'Admin', 'd54d1702ad0f8326224b817c796763c9', '1', '28/2/1991', 'المشهد ', 'all', 0, 'all', '1'),
(8, 'دينا منصور', 'Female', 'dena.mansour@hotmail.com', 'dina', 'bad670f05ad869901d90a37aef62572c', '2', '', '', '9,23,25,29,36', 315938175, '', '1'),
(9, 'مريم عبد العزيز سيدي', 'Male', 'maryam.siadi@gmail.com', 'miryam', '6ab0357358450ad998820809ff239bed', '2', '2019/06/23', 'שד', '9,23,25,29', 307986273, '', '0'),
(10, 'سندس سليمان', 'Male', 'sondosa.soliman@gmail.com', 'sondoss', '54194d9dd52dd7d074dd81c7b8e2f8a8', '2', '1998/09/12', 'المشهد', '9,23,25,29,36', 208527739, '', '1'),
(11, 'رفيف صالح', 'Female', 'rafeef.saleh1994@gmail.com', 'rafef', '0fd85c3a1a627ab3c5ce428356d5bf37', '2', '2019/01/14', 'المشهد ', '9,23,25,28,29,36', 206140261, '', '1'),
(12, 'ميساء عيسى', 'Male', 'maysaa_94@hotmail.com', 'maysaa', '9189fa39a4cac2974340076cd000882d', '2', '2019/09/08', 'المشهد', '9,23,25,29,36', 205537012, '', '1'),
(13, 'روان احمد سليمان', 'Female', 'srawan11@campus.technion.ac.il', 'rawan', 'ba9ac966cc054f62b3e530913ddfa832', '2', '', '', '9,23,25,29,36', 307954693, '', '1'),
(14, 'سندس عمري', 'Female', 'sondos_omary@hotmail.com', 'sondos', 'c3d57b236b6d91ec943be96695647cf6', '2', '2019/01/29', 'المشهد ', '9,15,20,21,22,23,25,26,27,28,29,36', 203968649, '', '1'),
(15, 'صفاء محمد سليمان', 'Female', 'safa-alro7.s@hotmail.com', 'safaa', '4badaee57fed5610012a296273158f5f', '2', '9/12/1991', 'المشهد ', '9,23,25,29', 203103460, '', '0'),
(16, 'محمد سعيد سليمان', 'Male', 'aa@gmail.com', 'mohamed', '3c23ece997f7f6c8955beaee49805e8b', '2', '', '', '9,23,25,29,36', 336547971, '', '1'),
(17, 'ساجدة محمد سليمان', 'Female', 'aa@aa.com', 'sajeda', '8c15bf9855fffb1f45b29ed74f561648', '2', '1993/06/26', 'المشهد ', '9,15,20,21,22,23,25,26,27,28,29,36', 307855031, '', '1'),
(18, 'سماح عمر سليمان ', 'Female', 'Female', 'smah', '542fb4a2097262e2d7681e1f03e0e395', '2', '1992/09/02', 'المشهد', '9,23,25,29,36', 307913947, '', '1'),
(19, 'طارق القواس', 'Male', 'aaa@gmail.com', 'tarik', '4badaee57fed5610012a296273158f5f', '2', '2019/01/13', 'كفركنا', '9,23,25,29', 336547971, '', '0'),
(20, 'ماريا عبد الهادي ', 'Female', 'marieaa87@hotmail.com', 'mariea', '898f303a062b125edc7ab89d6c480975', '2', '1987/01/13', 'المشهد', '9,23,25,29,36', 336278106, '', '0'),
(21, 'غصون عاطف طاطور', 'Female', 'ghuson.ta@gmail.com', 'ghuson', '5e7b3045edab73d24eb17765d42c09a9', '2', '1993/07/27', 'الرينة', '9,23,25,29,36', 307985812, '', '0'),
(22, 'ابراهيم جعباط', 'Male', 'get_lee_0545@hotmail.com', 'ibrahem', '11451f1b144e50e816ddc77135371c93', '2', '1993/12/16', 'البعينه', '23,25,27,29,36', 312312622, '', '0'),
(23, 'اسعد سليمان', 'Male', 'danrad23.as@gmail.com', 'asaad', '2ad5a11146445f63175e19c4c746a402', '2', '2001/05/08', 'المشهد', '23,25,27,29,36', 322514365, '', '0'),
(24, 'ابتسام صالح ', 'Female', 'ebtysm0@gmail.com', 'ebtisam', '2708ed075ab54fb7ac40002659346584', '2', '1984/11/17', 'المشهد', '23,25,29,36', 36636033, '', '1'),
(25, 'ديما طاطور ', 'Female', 'demosht@gmail.com', 'dimat', '4badaee57fed5610012a296273158f5f', '2', '2019/03/31', 'الرينة', '23,25,27,29,36', 318580289, '', '0'),
(26, 'TV', 'Male', 'TV@TV.com', 'TV', 'e10adc3949ba59abbe56e057f20f883e', '2', '2019/08/16', 'المشهد', '9,40', 0, '', '1'),
(27, 'سيرينا زهر ', 'Female', 'srenazher@gmail.com', 'srena', 'ef008745d397e5d626d4f410378c623a', '2', '1978/10/15', 'الناصرة ', '9,23,25,28', 32981078, '', '1'),
(28, 'اسماء صالح ابواسماعيل ', 'Female', 'asma@gmail.com', 'asmaa', '4badaee57fed5610012a296273158f5f', '2', '1993/06/04', 'المشهد', '5,6,8,9,10,11,12,13,15,16,17,18,20,21,22,23,25,26,27,28,29,36,37,38,39,40', 308449131, '', '1'),
(29, 'معهد رؤية', 'Male', 'roaya017@gmail.com', 'roaya', '94698f1de3c472e19e8b78b16e75fd54', '2', '2019/09/08', 'المشهد', '', 203685656, '', '0'),
(31, 'سيرين سارجي ', '', 'dfnk@gmail.com', '036375806', '1954b2628da6fc959a891296a0446054', '2', '', '', '9,23,25,28,36', 36375806, '', '0'),
(32, 'رغد حسن ', 'Female', 'dfnk96@gmail.com', 'raghad', 'ec21f68f282cd6a2094fced39aeabfe5', '2', '2019/09/08', 'المشهد', '9,23,25,29,36', 315954842, '', '1'),
(33, 'مرح دخل الله', 'Male', 'marah.jber94@gmail.com', 'marah', '47b977e36097a25148c6c2fd818d5515', '2', '1994/07/28', 'المشهد', '9,23,25,36', 205396971, '', '1'),
(34, 'نسرين علي ', 'Female', 'ali.nsreen.1996@gmail.com', 'nsreen', '8c359c3ba22695a49a219e469cc86f10', '2', '1996/11/07', 'المشهد', '9,23,25,28,36', 315736603, '', '1'),
(35, 'كارول شاهين ', 'Female', 'kjvsadty@gmail.com', '34868901', '418e50be60bab12962a416ce81cddc32', '2', '2019/09/09', 'الناصرة ', '9,23,25,28,36', 34868901, '', '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `buttons`
--
ALTER TABLE `buttons`
  ADD PRIMARY KEY (`b_code`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`comm_code`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`c_code`);

--
-- Indexes for table `menus`
--
ALTER TABLE `menus`
  ADD PRIMARY KEY (`m_code`);

--
-- Indexes for table `msgs`
--
ALTER TABLE `msgs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `options`
--
ALTER TABLE `options`
  ADD PRIMARY KEY (`op_code`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`p_code`);

--
-- Indexes for table `payment_methods`
--
ALTER TABLE `payment_methods`
  ADD PRIMARY KEY (`m_code`);

--
-- Indexes for table `photos`
--
ALTER TABLE `photos`
  ADD PRIMARY KEY (`P_code`);

--
-- Indexes for table `registration_courses`
--
ALTER TABLE `registration_courses`
  ADD PRIMARY KEY (`reg_code`);

--
-- Indexes for table `reservations`
--
ALTER TABLE `reservations`
  ADD PRIMARY KEY (`res_code`);

--
-- Indexes for table `reservation_status`
--
ALTER TABLE `reservation_status`
  ADD PRIMARY KEY (`rest_code`);

--
-- Indexes for table `rooms`
--
ALTER TABLE `rooms`
  ADD PRIMARY KEY (`room_code`);

--
-- Indexes for table `schools`
--
ALTER TABLE `schools`
  ADD PRIMARY KEY (`sc_code`);

--
-- Indexes for table `screens`
--
ALTER TABLE `screens`
  ADD PRIMARY KEY (`s_code`);

--
-- Indexes for table `scr_has_btn`
--
ALTER TABLE `scr_has_btn`
  ADD PRIMARY KEY (`scrbtn_code`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`st_code`);

--
-- Indexes for table `std_status`
--
ALTER TABLE `std_status`
  ADD PRIMARY KEY (`std_code`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`st_code`);

--
-- Indexes for table `students_notfications`
--
ALTER TABLE `students_notfications`
  ADD PRIMARY KEY (`stdn_code`);

--
-- Indexes for table `subject_photos`
--
ALTER TABLE `subject_photos`
  ADD PRIMARY KEY (`S_code`);

--
-- Indexes for table `subscribe_type`
--
ALTER TABLE `subscribe_type`
  ADD PRIMARY KEY (`sub_code`);

--
-- Indexes for table `teachers`
--
ALTER TABLE `teachers`
  ADD PRIMARY KEY (`te_code`);

--
-- Indexes for table `teachers_trainigs`
--
ALTER TABLE `teachers_trainigs`
  ADD PRIMARY KEY (`tt_code`);

--
-- Indexes for table `training_categories`
--
ALTER TABLE `training_categories`
  ADD PRIMARY KEY (`trc_code`);

--
-- Indexes for table `training_courses`
--
ALTER TABLE `training_courses`
  ADD PRIMARY KEY (`crs_code`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`u_code`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `buttons`
--
ALTER TABLE `buttons`
  MODIFY `b_code` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `comm_code` bigint(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `c_code` bigint(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `menus`
--
ALTER TABLE `menus`
  MODIFY `m_code` bigint(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `msgs`
--
ALTER TABLE `msgs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `options`
--
ALTER TABLE `options`
  MODIFY `op_code` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `p_code` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `payment_methods`
--
ALTER TABLE `payment_methods`
  MODIFY `m_code` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `photos`
--
ALTER TABLE `photos`
  MODIFY `P_code` bigint(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=172;

--
-- AUTO_INCREMENT for table `reservations`
--
ALTER TABLE `reservations`
  MODIFY `res_code` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `reservation_status`
--
ALTER TABLE `reservation_status`
  MODIFY `rest_code` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `rooms`
--
ALTER TABLE `rooms`
  MODIFY `room_code` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `schools`
--
ALTER TABLE `schools`
  MODIFY `sc_code` bigint(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `screens`
--
ALTER TABLE `screens`
  MODIFY `s_code` bigint(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `scr_has_btn`
--
ALTER TABLE `scr_has_btn`
  MODIFY `scrbtn_code` bigint(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `std_status`
--
ALTER TABLE `std_status`
  MODIFY `std_code` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `st_code` bigint(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=191;

--
-- AUTO_INCREMENT for table `students_notfications`
--
ALTER TABLE `students_notfications`
  MODIFY `stdn_code` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `subject_photos`
--
ALTER TABLE `subject_photos`
  MODIFY `S_code` bigint(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=171;

--
-- AUTO_INCREMENT for table `subscribe_type`
--
ALTER TABLE `subscribe_type`
  MODIFY `sub_code` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `teachers`
--
ALTER TABLE `teachers`
  MODIFY `te_code` bigint(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `teachers_trainigs`
--
ALTER TABLE `teachers_trainigs`
  MODIFY `tt_code` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=167;

--
-- AUTO_INCREMENT for table `training_categories`
--
ALTER TABLE `training_categories`
  MODIFY `trc_code` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `training_courses`
--
ALTER TABLE `training_courses`
  MODIFY `crs_code` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `u_code` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
