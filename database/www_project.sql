-- phpMyAdmin SQL Dump
-- version 4.4.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 05, 2015 at 05:57 PM
-- Server version: 5.6.25
-- PHP Version: 5.6.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `www_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `name` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `pass` varchar(40) COLLATE latin1_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`name`, `pass`) VALUES
('admin', 'd033e22ae348aeb5660fc2140aec35850c4da997');

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE IF NOT EXISTS `books` (
  `book_isbn` varchar(20)  NOT NULL,
  `book_title` varchar(60)  DEFAULT NULL,
  `book_author` varchar(60)  DEFAULT NULL,
  `book_image` varchar(40)  DEFAULT NULL,
  `book_descr` text ,
  `book_price` decimal(6,3) NOT NULL,
  `publisherid` int(10) unsigned NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`book_isbn`, `book_title`, `book_author`, `book_image`, `book_descr`, `book_price`, `publisherid`) VALUES
('978-0-321-94786-4', 'Learning Mobile App Development', 'Jakob Iversen, Michael Eierman', 'mobile_app.jpg', 'Giờ đây, một cuốn sách có thể giúp bạn thành thạo việc phát triển ứng dụng dành cho thiết bị di động với cả hai nền tảng dẫn đầu thị trường: iOS của Apple và Android của Google. Hoàn hảo cho cả sinh viên và chuyên gia, Học phát triển ứng dụng dành cho thiết bị di động là hướng dẫn duy nhất có phạm vi bảo hiểm song song hoàn chỉnh của cả iOS và Android. Với hướng dẫn này, bạn có thể thành thạo một trong hai nền tảng hoặc cả hai - và hiểu sâu hơn về các vấn đề liên quan đến việc phát triển ứng dụng dành cho thiết bị di động. \r\n\r\nBạn sẽ phát triển một ứng dụng hoạt động thực tế trên cả iOS và Android, thành thạo toàn bộ vòng đời phát triển ứng dụng dành cho thiết bị di động, từ lập kế hoạch thông qua cấp phép và phân phối. \r\n\r\nMỗi hướng dẫn trong cuốn sách này đã được thiết kế cẩn thận để hỗ trợ người đọc có nền tảng khác nhau và đã được thử nghiệm rộng rãi trong các khóa đào tạo trực tiếp dành cho nhà phát triển. Nếu bạn là người mới sử dụng iOS, bạn cũng sẽ tìm thấy phần giới thiệu dễ dàng, thiết thực về Objective-C, ngôn ngữ mẹ đẻ của Apple. ', '250.000', 6),
('978-0-7303-1484-4', 'Doing Good By Doing Good', 'Peter Baines', 'doing_good.jpg', 'Doing Good by Doing Good sẽ cho các công ty cách cải thiện lợi nhuận bằng cách triển khai một chương trình hấp dẫn, chân thực và nâng cao kinh doanh giúp nhân viên và doanh nghiệp phát triển. Cố vấn CSR quốc tế Peter Baines rút ra bài học kinh nghiệm từ những thách thức phải đối mặt trong sự nghiệp của anh ấy với tư cách là cảnh sát, điều tra viên pháp y và người sáng lập Hands Across the Water để mô tả cảnh quan CSR của Úc và các yếu tố tạo nên một chương trình mang lại lợi ích cho tất cả mọi người tham gia . Các nghiên cứu điển hình minh họa tác động thực sự của CSR đối với cả doanh nghiệp và xã hội, với hướng dẫn rõ ràng về việc tối đa hóa sự tham gia, thu hút tất cả nhân viên và cải thiện lợi nhuận. Các nghiên cứu điển hình chỉ ra những công ty đang tập trung vào việc tạo ra giá trị chung để đáp ứng những thách thức của xã hội đồng thời mang lại lợi nhuận kinh tế mạnh mẽ. \r\n\r\nNgười tiêu dùng hiện đang kỳ vọng rằng các doanh nghiệp lớn có lợi nhuận ngày càng tăng trở lại cộng đồng mà từ đó những lợi nhuận đó phát sinh. Đồng thời, các cổ đông đang đòi cổ phần của họ và vui mừng khi thấy cổ tức tăng vọt. Làm đúng là một hành động cân bằng và Làm tốt bằng Làm tốt giúp các công ty vạch ra một kế hoạch hành động để hoàn thành nó. ', '180.000', 2),
('978-1-118-94924-5', 'Programmable Logic Controllers', 'Dag H. Hanssen', 'logic_program.jpg', 'Được sử dụng rộng rãi trong tự động hóa công nghiệp và sản xuất, Programmable Logic Controller (PLC) thực hiện một loạt các nhiệm vụ cơ điện với nhiều cách sắp xếp đầu vào và đầu ra, được thiết kế đặc biệt để đối phó trong các điều kiện môi trường khắc nghiệt như ô tô và nhà máy hóa chất. Sử dụng CoDeSys là một hướng dẫn thực hành để nhanh chóng đạt được sự thành thạo trong việc phát triển và vận hành PLC dựa trên tiêu chuẩn IEC 61131-3. Sử dụng công cụ phần mềm CoDeSys * có sẵn miễn phí, được sử dụng rộng rãi trong các dự án tự động hóa thiết kế công nghiệp, tác giả có một cách tiếp cận thực tế cao đối với thiết kế PLC bằng cách sử dụng các ví dụ trong thế giới thực. Công cụ thiết kế, CoDeSys, cũng có bộ mô phỏng / phần mềm PLC tích hợp cho phép người đọc thực hiện các bài tập và kiểm tra các ví dụ. ', '135.000', 2),
('978-1-1180-2669-4', 'Professional JavaScript for Web Developers, 3rd Edition', 'Nicholas C. Zakas', 'pro_js.jpg', 'Nếu bạn muốn đạt được toàn bộ tiềm năng của JavaScript, điều quan trọng là phải hiểu bản chất, lịch sử và những hạn chế của nó. Vì vậy, phiên bản cập nhật này của cuốn sách bán chạy nhất của tác giả kỳ cựu và chuyên gia JavaScript Nicholas C. Zakas bao gồm JavaScript từ thuở sơ khai cho đến ngày nay, bao gồm DOM, Ajax và HTML5. Zakas chỉ cho bạn cách mở rộng ngôn ngữ mạnh mẽ này để đáp ứng các nhu cầu cụ thể và tạo giao diện người dùng động cho web làm mờ ranh giới giữa máy tính để bàn và internet. Vào cuối cuốn sách, bạn sẽ hiểu rõ về những tiến bộ quan trọng trong phát triển web vì chúng liên quan đến JavaScript để bạn có thể áp dụng chúng cho trang web tiếp theo của mình. ', '220.000', 1),
('978-1-44937-019-0', 'Learning Web App Development', 'Semmy Purewal', 'web_app_dev.jpg', 'Nắm bắt các nguyên tắc cơ bản về phát triển ứng dụng web bằng cách xây dựng một ứng dụng đơn giản dựa trên cơ sở dữ liệu được hỗ trợ từ đầu, sử dụng HTML, JavaScript và các công cụ nguồn mở khác. Thông qua các hướng dẫn thực hành, hướng dẫn thực tế này cho các nhà phát triển ứng dụng web chưa có kinh nghiệm cách tạo giao diện người dùng, viết máy chủ, xây dựng giao tiếp máy khách-máy chủ và sử dụng dịch vụ dựa trên đám mây để triển khai ứng dụng. \r\n\r\ nMỗi chương bao gồm các vấn đề thực hành, các ví dụ đầy đủ và các mô hình tinh thần của quy trình phát triển. Lý tưởng cho một khóa học ở cấp đại học, cuốn sách này giúp bạn bắt đầu phát triển ứng dụng web bằng cách cung cấp cho bạn nền tảng vững chắc trong quá trình này. ', '280.000', 3),
('978-1-44937-075-6', 'Beautiful JavaScript', 'Anton Kovalyov', 'beauty_js.jpg', 'JavaScript được cho là ngôn ngữ lập trình phân cực và bị hiểu nhầm nhất trên thế giới. Nhiều người đã cố gắng thay thế nó thành ngôn ngữ của Web, nhưng JavaScript vẫn tồn tại, phát triển và phát triển mạnh mẽ. Tại sao một ngôn ngữ được tạo ra một cách vội vàng lại thành công trong khi những ngôn ngữ khác lại thất bại? \r\n\r\nHướng dẫn này cung cấp cho bạn cái nhìn hiếm có về JavaScript từ những người quen thuộc với nó. Các chương do các chuyên gia tên miền như Jacob Thornton, Ariya Hidayat và Sara Chipps đóng góp cho thấy những gì họ yêu thích về ngôn ngữ yêu thích của họ - cho dù đó là biến những tính năng đáng sợ nhất thành công cụ hữu ích hay cách JavaScript có thể được sử dụng để tự thể hiện. ', '170.000', 3),
('978-1-4571-0402-2', 'Professional ASP.NET 4 in C# and VB', 'Scott Hanselman', 'pro_asp4.jpg', 'ASP.NET giúp bạn làm việc hiệu quả nhất có thể khi xây dựng các ứng dụng web nhanh và an toàn. Mỗi bản phát hành của ASP.NET trở nên tốt hơn và loại bỏ rất nhiều mã tẻ nhạt mà bạn cần đặt trước đó, làm cho các tác vụ ASP.NET thông thường trở nên dễ dàng hơn. Với cuốn sách này, một nhóm tác giả vô song sẽ hướng dẫn bạn qua toàn bộ bề rộng của ASP.NET cũng như các khả năng mới và thú vị của ASP.NET 4. Các tác giả cũng chỉ cho bạn cách tối đa hóa sự phong phú của các tính năng mà ASP.NET cung cấp để tạo ra. quá trình phát triển của bạn mượt mà và hiệu quả hơn. ', '180.000', 1),
('978-1-484216-40-8', 'Android Studio New Media Fundamentals', 'Wallace Jackson', 'android_studio.jpg', 'Android Studio New Media Fundamentals là một phần mềm truyền thông mới bao gồm các khái niệm trung tâm sản xuất đa phương tiện cho Android bao gồm hình ảnh kỹ thuật số, âm thanh kỹ thuật số, video kỹ thuật số, minh họa kỹ thuật số và 3D, sử dụng các gói phần mềm mã nguồn mở như GIMP, Audacity, Blender và Inkscape. Các gói phần mềm chuyên nghiệp này được sử dụng cho cuốn sách này vì chúng miễn phí cho mục đích thương mại. Cuốn sách xây dựng dựa trên các khái niệm cơ bản về raster, vectơ và dạng sóng (âm thanh) và nâng cao hơn khi các chương tiếp tục phát triển, bao gồm nội dung phương tiện mới nào tốt nhất để sử dụng với Android Studio cũng như các yếu tố chính liên quan đến quy trình làm việc tối ưu hóa dấu chân dữ liệu và tại sao nội dung phương tiện mới và tối ưu hóa dữ liệu phương tiện mới lại quan trọng như vậy. ', '240.000', 4),
('978-1-484217-26-9', 'C++ 14 Quick Syntax Reference, 2nd Edition', '	Mikael Olsson', 'c_14_quick.jpg', 'Hướng dẫn C ++ 14 nhanh tiện dụng được cập nhật này là một tham chiếu mã và cú pháp cô đọng dựa trên bản phát hành C ++ 14 mới được cập nhật của ngôn ngữ lập trình phổ biến. Nó trình bày cú pháp C ++ cơ bản ở định dạng được tổ chức tốt có thể được sử dụng như một tài liệu tham khảo hữu ích. \r\n\r\ nBạn sẽ không tìm thấy bất kỳ biệt ngữ kỹ thuật nào, các mẫu cồng kềnh, các bài học lịch sử rút ra hoặc các câu chuyện dí dỏm trong Cuốn sách này. Những gì bạn sẽ tìm thấy là một tham chiếu ngôn ngữ ngắn gọn, trọng tâm và dễ tiếp cận. Cuốn sách chứa đựng nhiều thông tin hữu ích và là tài liệu cần có đối với bất kỳ lập trình viên C ++ nào. \r\n\r\nTrong Tài liệu Tham khảo Cú pháp Nhanh C ++ 14, Phiên bản thứ hai, bạn sẽ tìm thấy một tài liệu tham khảo ngắn gọn về cú pháp ngôn ngữ C ++ 14. Nó có các ví dụ mã ngắn, đơn giản và tập trung. Cuốn sách này bao gồm một mục lục được trình bày tốt và một chỉ mục toàn diện cho phép dễ dàng xem lại. ', '340.000', 4),
('978-1-49192-706-9', 'C# 6.0 in a Nutshell, 6th Edition', 'Joseph Albahari, Ben Albahari', 'c_sharp_6.jpg', 'Khi bạn có câu hỏi về C # 6.0 hoặc .NET CLR và các hội đồng Framework cốt lõi của nó, hướng dẫn bán chạy nhất này có câu trả lời bạn cần. C # đã trở thành một ngôn ngữ có độ linh hoạt và rộng lớn khác thường kể từ khi ra mắt vào năm 2000, nhưng sự phát triển liên tục này có nghĩa là vẫn còn nhiều điều để học. \ R \ n \ r \ nĐược tổ chức xung quanh các khái niệm và trường hợp sử dụng, ấn bản thứ sáu được cập nhật kỹ lưỡng này cung cấp cho các lập trình viên trung cấp và cao cấp một bản đồ ngắn gọn về kiến thức C # và .NET. Đi sâu vào và khám phá lý do tại sao hướng dẫn Nutshell này được coi là tài liệu tham khảo cuối cùng về C #. ', '190.000', 3);

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE IF NOT EXISTS `customers` (
  `customerid` int(10) unsigned NOT NULL,
  `name` varchar(60) COLLATE latin1_general_ci NOT NULL,
  `address` varchar(80) COLLATE latin1_general_ci NOT NULL,
  `city` varchar(30) COLLATE latin1_general_ci NOT NULL,
  `zip_code` varchar(10) COLLATE latin1_general_ci NOT NULL,
  `country` varchar(60) COLLATE latin1_general_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`customerid`, `name`, `address`, `city`, `zip_code`, `country`) VALUES
(1, 'a', 'a', 'a', 'a', 'a'),
(2, 'b', 'b', 'b', 'b', 'b'),
(3, 'test', '123 test', '12121', 'test', 'test');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE IF NOT EXISTS `orders` (
  `orderid` int(10) unsigned NOT NULL,
  `customerid` int(10) unsigned NOT NULL,
  `amount` decimal(6,2) DEFAULT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `ship_name` char(60) NOT NULL,
  `ship_address` char(80) NOT NULL,
  `ship_city` char(30) NOT NULL,
  `ship_zip_code` char(10) NOT NULL,
  `ship_country` char(20) NOT NULL
)ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`orderid`, `customerid`, `amount`, `date`, `ship_name`, `ship_address`, `ship_city`, `ship_zip_code`, `ship_country`) VALUES
(1, 1, '60.00', '2015-12-03 13:30:12', 'a', 'a', 'a', 'a', 'a'),
(2, 2, '60.00', '2015-12-03 13:31:12', 'b', 'b', 'b', 'b', 'b'),
(3, 3, '20.00', '2015-12-03 19:34:21', 'test', '123 test', '12121', 'test', 'test'),
(4, 1, '20.00', '2015-12-04 10:19:14', 'a', 'a', 'a', 'a', 'a');

-- --------------------------------------------------------

--
-- Table structure for table `order_items`
--

CREATE TABLE IF NOT EXISTS `order_items` (
  `orderid` int(10) unsigned NOT NULL,
  `book_isbn` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `item_price` decimal(6,2) NOT NULL,
  `quantity` tinyint(3) unsigned NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `order_items`
--

INSERT INTO `order_items` (`orderid`, `book_isbn`, `item_price`, `quantity`) VALUES
(1, '978-1-118-94924-5', '20.00', 1),
(1, '978-1-44937-019-0', '20.00', 1),
(1, '978-1-49192-706-9', '20.00', 1),
(2, '978-1-118-94924-5', '20.00', 1),
(2, '978-1-44937-019-0', '20.00', 1),
(2, '978-1-49192-706-9', '20.00', 1),
(3, '978-0-321-94786-4', '20.00', 1),
(1, '978-1-49192-706-9', '20.00', 1);

-- --------------------------------------------------------

--
-- Table structure for table `publisher`
--

CREATE TABLE IF NOT EXISTS `publisher` (
  `publisherid` int(10) unsigned NOT NULL,
  `publisher_name` varchar(60) COLLATE latin1_general_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `publisher`
--

INSERT INTO `publisher` (`publisherid`, `publisher_name`) VALUES
(1, 'Wrox'),
(2, 'Wiley'),
(3, 'O''Reilly Media'),
(4, 'Apress'),
(5, 'Packt Publishing'),
(6, 'Addison-Wesley');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`name`,`pass`);

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`book_isbn`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`customerid`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`orderid`);

--
-- Indexes for table `publisher`
--
ALTER TABLE `publisher`
  ADD PRIMARY KEY (`publisherid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `customerid` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `orderid` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `publisher`
--
ALTER TABLE `publisher`
  MODIFY `publisherid` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
