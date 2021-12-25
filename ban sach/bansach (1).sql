-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 10, 2021 at 04:09 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 7.3.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bansach`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
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

CREATE TABLE `books` (
  `book_isbn` varchar(20) NOT NULL,
  `book_title` varchar(60) DEFAULT NULL,
  `book_author` varchar(60) DEFAULT NULL,
  `book_image` varchar(40) DEFAULT NULL,
  `book_descr` text DEFAULT NULL,
  `book_price` decimal(6,3) NOT NULL,
  `publisherid` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`book_isbn`, `book_title`, `book_author`, `book_image`, `book_descr`, `book_price`, `publisherid`) VALUES
('0510', 'Điềm Tĩnh Và Nóng Giận', 'Tạ Quốc Kế', 'diemtinh.jpg', 'Trong cuộc sống thường ngày, chúng ta thường nổi giận vì nhiều nguyên do: công việc không suôn sẻ, chúng ta tức giận; bị người khác hiểu nhầm, chúng ta tức giận; thấy việc chướng tai gai mắt, chúng ta tức giận; không thể chấp nhận được dư luận xã hội, chúng ta tức giận. Thậm chí, chúng ta bực tức, cáu gắt, hờn dỗi, nhỏ nhen, uất ức vì thời tiết xấu, vì tiền lương thấp, vì nhà cửa bừa bộn, vì thái độ của người khác, vì những chuyện không may mà mình gặp phải. Dường như cuộc đời chúng ta là một chuỗi tức giận không hồi kết. Hãy thử tự hỏi bản thân: sau khi tức giận thì phiền não sẽ tan biến ư?\r\n\r\nDân gian vốn có câu “cả giận mất khôn”, Đức Phật cũng đã dạy “một ngọn lửa sân đốt cháy rừng công đức”. Cơn nóng giận có thể hủy diệt sức khỏe, sự nghiệp, tình cảm và hạnh phúc của chúng ta. Cơn giận khiến đầu óc ta bốc hỏa, kích động và lỗ mãng để rồi phạm phải những sai lầm không thể bù đắp. Nóng giận là trừng phạt bản thân bằng lỗi lầm của người khác, đánh cược hạnh phúc cả đời bằng một phút thiếu kiềm chế. Hầu hết những bất hạnh trong đời đều từ đó mà ra. Bởi thế, mỗi người chúng ta sống trong xã hội này đều cần rèn giũa cho mình một thái độ sống điềm tĩnh trước mọi điều.', '78.700', 9),
('0684', 'Dám Bị Ghét', 'Kishimi Ichiro, Koga Fumitake', 'dambighet.jpg', 'Dám Bị Ghét\r\n\r\nCác mối quan hệ xã hội thật mệt mỏi.\r\n\r\nCuộc sống sao mà nhạt nhẽo và vô nghĩa.\r\n\r\nBản thân mình xấu xí và kém cỏi.\r\n\r\nQuá khứ đầy buồn đau còn tương lai thì mờ mịt.\r\n\r\nYêu cầu của người khác thật khắc nghiệt và phi lý.\r\n\r\nTẠI SAO BẠN CỨ PHẢI SỐNG THEO KHUÔN MẪU NGƯỜI KHÁC ĐẶT RA?\r\n\r\nDưới hình thức một cuộc đối thoại giữa Chàng thanh niên và Triết gia, cuốn sách trình bày một cách sinh động và hấp dẫn những nét chính trong tư tưởng của nhà tâm lý học Alfred Adler, người được mệnh danh là một trong “ba người khổng lồ của tâm lý học hiện đại”, sánh ngang với Freud và Jung. Khác với Freud cho rằng quá khứ và hoàn cảnh là động lực làm nên con người ta của hiện tại, Adler chủ trương “cuộc đời ta là do ta lựa chọn”, và tâm lý học Adler được gọi là “tâm lý học của lòng can đảm”.\r\n\r\nBạn bất hạnh không phải do quá khứ và hoàn cảnh, càng không phải do thiếu năng lực. Bạn chỉ thiếu “can đảm” mà thôi. Nói một cách khác, bạn không đủ “can đảm để dám hạnh phúc”. [...] Bởi can đảm để dám hạnh phúc bao gồm cả “can đảm để dám bị ghét” nữa. [...] Chỉ khi dám bị người khác ghét bỏ, chúng ta mới có được tự do, có được hạnh phúc.', '76.800', 4),
('1058', 'Trí Tuệ Nhân Tạo - 101 Điều Cần Biết Về Tương Lai', 'Lasse Rouhiainen', 'ai.jpg', 'Làn sóng Trí tuệ nhân tạo và Cách mạng Công nghiệp Lần thứ Tư đã đưa cuộc sống loài người bước sang một kỉ nguyên mới, mà sớm hay muộn, không có ai đứng ngoài cuộc. Hãy cùng tác giả Lasse Rouhiainen tìm hiểu 101 điều cần biết về AI – Trí tuệ nhân tạo và tương lai của chúng ta.\r\n\r\n“Được học hỏi những cách thức mới để triển khai AI và các loại công nghệ khác trong cuộc sống hay công việc là một điều tuyệt vời, nhưng đồng thời chúng ta cũng phải tập trung vào việc trở thành một con người tốt hơn, mạnh mẽ hơn và khoẻ khoắn hơn. Không nên cực đoan, hoàn toàn né tránh AI, hoặc phụ thuộc vào nó quá nhiều.” Lasse Rouhiainen', '88.000', 6),
('1351', 'Máy Móc - Nền Tảng - Cộng Đồng', 'Andrew McAfee, Erik Brynjolfsson', 'maymoc.jpg', 'Công nghệ kỹ thuật số ngày càng phát triển, loài người đã có những thời điểm đắm mình trong những thành công rực rỡ ấy nhưng rồi một ngày bỗng trở nên sợ hãi trước nguy cơ máy móc và nền tảng sẽ làm chủ cuộc sống của chúng ta.\r\n\r\nTrong Máy móc – Nền tảng – Cộng đồng, một cuốn sách lớn, dữ dội nhưng cũng đầy thú vị, hai tác giả đã cung cấp một hướng dẫn những điều cần làm để làm chủ sự chuyển đổi kỹ thuật số trong tương lai của nhân loại. Ngoài việc khéo léo minh họa cách sự tiến bộ phi thường của công nghệ đang định hình lại cuộc sống của chúng ta, Andrew McAfee và Erik Brynjolfsson còn nghiêm túc trả lời những câu hỏi về thách thức và cơ hội vốn có của trí tuệ nhân tạo trong những thập kỷ gần đây, như xe tự lái và máy in 3D, nền tảng trực tuyến để thuê trang phục và lên lịch tập luyện, hoặc nghiên cứu y tế xuất phát từ cộng đồng.', '159.200', 9),
('159', 'Sự Sống Bất Tử', 'Jeffrey Long, Paul Perry', 'untitled_5_14.jpg', 'Cuộc sống sau cái chết và sự tồn tại của một Đấng tối cao luôn là đề tài mà con người quan tâm trong suốt chiều dài lịch sử. Là một bác sĩ y khoa, người thành lập Cơ sở Nghiên cứu Trải nghiệm Cận tử (Near Death Experience Research Foundation, NDERF), Jeffrey Long đã nghiên cứu trải nghiệm cận tử của 3.000 nhân chứng có các hoàn cảnh sống, tôn giáo, truyền thống khác nhau; trong đó có những những người tin vào tâm linh và những người không tin vào tâm linh. \r\n\r\nDựa vào những nghiên cứu này, Jeffrey Long đã viết nhiều cuốn sách gây chú ý về đề tài cuộc sống sau cái chết và thế giới tâm linh.  Trong đó, có cuốn “Sự sống bất tử”. Khác với những cuốn sách mô tả về “thế giới bên kia” trước đó, trong cuốn sách lần này, Jeffrey Long tập trung vào việc minh chứng sự tồn tại và mô tả “chân dung” của thượng đế, dựa trên những điểm tương đồng trong lời kể về trải nghiệm cận tử của hàng ngàn nhân chứng.', '78.400', 4),
('1964', 'Đàn Ông Sao Hỏa Đàn Bà Sao Kim', 'John Gray', 'man-woman.jpg', 'Cuốn sách này thực sự đã giúp đỡ cho hàng triệu độc giả, trong đó có tôi và chắc chắn cũng sẽ có bạn. Nếu không có những ý niệm mới mẻ này thì chưa chắc tôi đã có được cuộc hôn nhân hạnh phúc như hiện nay hay có thể trở thành một người cha giàu đức hy sinh đối với các con của mình như vậy. Những vướng mắc trong mối quan hệ với vợ cách đây hai mươi năm đã từng làm tôi tức điên lên, hiện giờ thi thoảng nó vẫn thường xảy ra. Nhưng điều khác biệt là tôi đã biết khoan dung hơn, chấp nhận và thấu hiểu hơn. Tôi có thể hiểu những lời lẽ và phản ứng của vợ tôi theo cách khách quan hơn, đồng thời tôi biết cách nên đáp lại như thế nào. Có thể tôi là một chuyên gia trong lĩnh vực giao tiếp và sự khác biệt về giới tính, tuy nhiên, đối với Bonnie và các cô con gái của tôi thì việc để hiều được họ vẫn còn là những bí ẩn. Dù vậy, cuốn sách này có thể giúp chúng ta trở nên khoan dung và biết tha thứ khi ai đó không đáp lại theo cách mà ta mong đợi. May mắn thay, để xây dựng những mối quan hệ bền đẹp, tính hoàn hảo không phải là điều kiện bắt buộc.', '150.400', 2),
('2019', 'Chạy Đua Với Robot', 'Joseph E Aoun', 'robot.jpg', 'Nhân loại đang trải qua một cuộc cách mạng khác trong cách loài người làm việc và kiếm sống – và một lần nữa, cuộc cách mạng này lại đốt bỏ những điều tưởng chừng hiển nhiên của quá khứ trong đống tro tàn lịch sử. Một lần nữa, công nghệ mới đã tạo tiền đề cho cách mạng. Nhưng thay vì là hạt giống, là máy dệt, hay là đầu máy hơi nước; động cơ của cuộc cách mạng này là công nghệ kỹ thuật số và robot.\r\n\r\nCuộc cách mạng kỹ thuật số hiện tại rõ ràng khác biệt với các bước nhảy vọt về công nghệ trước đó, bởi giờ đây khả năng xử lý dữ liệu – hay trí thông minh – của máy móc dường như không còn giới hạn. Ở bất cứ công việc đã được lập trình sẵn nào, máy tính cũng có ưu thế về nhận thức hơn con người. Và bởi việc sao chép phần mềm cũng không mấy khó khăn nên bất cứ tiến bộ kỹ thuật số nào cũng có thể được nhân bản ngay lập tức trên khắp toàn cầu. Nếu như đây quả thực là hướng đi của công nghệ trong tương lai gần – và cũng có nhiều lý do để tin vào điều đó – thì sắp tới có khả năng việc trả công cho người lao động sẽ trở thành điều dị thường. Trong một viễn cảnh tương lai ảm đạm, những cỗ máy siêu thông minh sẽ vượt qua khả năng hiểu biết và kiểm soát của con người. Nếu máy tính có thể nắm quyền điều khiển nhiều hệ thống quan trọng, hậu quả sẽ rất tàn khốc. Nhẹ thì loài người sẽ mất đi quyền kiểm soát vận mệnh của mình, còn nặng thì máy sẽ đưa người đến bờ tuyệt chủng.', '80.300', 1),
('2021', 'Sinh Tồn Cùng Covid-19', 'Tony Hoang', 'sinhtoncovid.jpg', 'Sinh tồn cùng Covid-19 là cuốn sách được viết bởi Thạc sĩ Tony Hoàng (Hoàng Xuân Tùng) là một tác, giả, một giảng viên kinh tế, đồng thời cũng là một doanh nhân đang sống và làm việc tại Sydney, Australia. Anh còn là thành viên của Hiệp hội Nghiên cứu Giáo dục Australia.\r\n\r\nTony Hoàng có kinh ngiệm làm việc gần 20 năm trong lĩnh vực Công nghệ thông tin và Quản trị kinh doanh cho nhiều công ty, tập đoàn trong và ngoài Việt Nam. Anh từng dược chứng nhận là kỹ sư hệ thống Microsoft, là chuyên viên bảo mật thông tin kiểm định bởi CompTIA, Hoa Kỳ.\r\n\r\nTrong bối cảnh thế giới nói chung và Việt Nam nói riêng đang lao đao trong cơn bão đại dịch Covid-19, Tony Hoang đã viết cuốn sách này để cùng người đọc vạch ra chiến lược phát triển ngay cả trong suy thoái.\r\n\r\nTrong nền kinh tế khó khan, hầu hết các cá nhân và doanh nghiệp rơi vào vòng xoáy đổ vỡ. Nhưung cũng trong bối cảnh đó, một số ít cá nhân, doanh nghiệp như những ngôi sao sáng ra đời và phát triển mạnh mẽ.\r\n\r\nCuốn sách này không theo số đông, nó phân tích và tìm hiểu về số ít, từ đó đúc kết lại những gì cần biết để vượt qua cuộc khủng hoảng với sự thông minh và hiệu quả nhất.', '138.300', 3),
('20391', 'Những Khoảng Lặng Cuộc Sống', 'Jack Canfield', 'khoanglang.jpg', 'Cuộc sống chứa đựng cả niềm vui và nỗi buồn. Những sự kiện, biến cố… cứ thế nối tiếp nhau trong cuộc sống đời thường, và cả những điều rất đơn giản, bình dị nữa. Mỗi giây phút trôi đi là một khoảng thời gian mà chúng ta hoặc ngập tràn niềm vui và hy vọng, hoặc rơi vào gánh nặng của thất vọng, âu lo. Nhưng dù cuộc sống có diễn ra thế nào đi nữa, cuối cùng chúng ta sẽ nhận ra một điều: “Đằng sau tất cả những gì đã và đang xảy ra đều ẩn chứa một ý nghĩa nào đó để chúng ta suy ngẫm và trải nghiệm.”\r\n\r\nĐôi khi, chính trong những phút giây khổ đau tuyệt vọng, chúng ta mới cảm nhận được những điều tốt đẹp và quý giá cho cuộc sống của chính mình. First News hân hạnh giới thiệu tập sách Những Khoảng Lặng Cuộc Sống như một điểm dừng trong khoảnh khắc trước nhịp sống vẫn đang tiếp tục trôi. Những khoảng lặng này là giây phút chúng ta nhìn lại mình, cùng chia sẻ và suy ngẫm những điều mà trước đây chúng ta chưa nhìn thấy hoặc vô tình bỏ qua.', '54.400', 5),
('2212', 'Gửi Tuổi Hai Mươi Tươi Đẹp Của Chúng Ta', 'Ngưu Doanh', 'tuoihaimuoi.jpg', 'Thân gửi tuổi hai mươi tươi đẹp của chúng ta!\r\n\r\nTrong cuộc đời của mỗi người, tuổi hai mươi luôn là độ tuổi đẹp nhất, cả thể lực và tinh thần đều trong giai đoạn nhiệt huyết và sung sức nhất. Tuy đâu đó trong chúng ta vẫn còn níu giữ lại những sự bồng bột và nổi loạn của tuổi trẻ, song cũng đã tới lúc thể hiện sự trưởng thành và chín chắn, vững bước tiến đến tương lai. Khi ấy chúng ta sẽ nhận ra rằng, mọi sai lầm và vấp ngã bản thân từng trải qua đều không phải ngẫu nhiên, lựa chọn thế nào sẽ gặp cuộc đời thế ấy, đừng vì không có được mà buồn chán, nản chí. Hãy coi đó là một bài học đắt giá dành cho chính mình.\r\n\r\nLuôn trân trọng những gì mình đang có và nghe theo tiếng gọi của trái tim mới là điều bạn nên hướng tới. Bởi vì chúng ta đã, đang và sẽ sống trong tuổi hai mươi tươi đẹp không hối tiếc!', '62.300', 9),
('2942', 'Nghệ Thuật Hành Nghệ Luật Sư', 'Nguyễn Hoàng Trung Hiếu', 'luatsu.jpg', 'Tại những quốc gia thịnh vượng và văn minh, tiếng nói của Luật sư luôn được đánh giá cao nhằm đem lại cân bằng cho nhịp sống xã hội hiện đại. Việt Nam từng có cả thế hệ vàng các Luật sư đã đấu tranh và giành chiến thắng bằng những lập luận hào hùng trước những cường quốc văn minh trên chính trường quốc tế, góp phần giải phóng dân tộc, bảo vệ chủ quyền quốc gia.\r\n\r\nNgày nay, đất nước đang trên đà phát triển theo xu hướng hội nhập với thế giới, nghành Luật sư Việt Nam cũng đã có những bước chuyển mình mạnh mẽ, nhận rõ tầm quan trọng của đội ngũ Luật sư đối với sự đổi mới chung trong thời kỳ hội nhập.\r\n\r\nThực hiện nghị quyết của Bộ chính trị, nghành Luật sư Việt Nam đã phát triển đáng kể về số lượng và chất lượng của Luật sư, thể hiện sự sâu sắc và đậm nét trong từng nhịp sống của xã hội, trên từng lý luận của nghị trường và chính trường quốc tế, tiếp nối truyền thống vẻ vang của nghành Luật Việt Nam. Do đó, để đáp ứng cho kỳ vọng của xã hội và đất nước, nghề Luật sư cần phải trau dồi hơn nữa các kỹ năng cùng kiến thức chuyên môn, trong đó đạo đức nghề nghiệp cũng là điều kiện tiên quyết.', '80.300', 8),
('3943', '6 Bước Tự Xuất Bản Một Cuốn Sách', 'Nguyễn Tuấn Anh', '6buoc.jpg', 'Theo số liệu của Cục Xuất bản, In và Phát hành – Bộ Thông tin và Truyền thông, hơn 33.000 cuốn sách được cấp phép xuất bản trong năm 2020, có nghĩa là mỗi ngày có gần 100 cuốn sách được xuất bản ở Việt Nam. Nhiều tác giả sách best-seller hiện nay không phải là các nhà văn, nhà báo (những tác giả chuyên nghiệp theo quan niệm truyền thống), họ là những người bình thường như nhà khoa học, chuyên gia kinh tế, doanh nhân, bác sĩ, mẹ bỉm sữa, nhân viên văn phòng, sinh viên... Cùng với thủ tục pháp lý ngày càng đơn giản, việc các cá nhân tự xuất bản một cuốn sách trong thời điểm hiện tại là không khó.\r\n\r\nTheo tác giả, nhà báo Nguyễn Tuấn Anh, người đã có gần 10 năm trong lĩnh vực tư vấn xuất bản và truyền thông, thì nhu cầu tự xuất bản sách sẽ ngày càng lớn cùng với việc các cá nhân ý thức được rằng tự xuất bản sách là cách làm thương hiệu cá nhân đỉnh cao. Anh cho biết thêm cuốn sách này không giống các tài liệu, giáo trình về xuất bản đang được giảng dạy tại các trường đại học, bởi vì nó dành cho những người bình thường có mong muốn tự xuất bản một cuốn sách cho chính mình.', '90.000', 7),
('5843', 'Chia Sẻ Tâm Hồn Và Quà Tặng Cuộc Sống', 'Jack Canfield, Mark Victor Hansen', 'quatangcuocsong.jpg', 'Đây là những câu chuyện nổi tiếng đang được lưu truyền trên Internet, từng được mọi người trên thế giới và bạn trẻ Việt Nam chuyền tay nhau, gửi qua email như một sự chia sẻ tinh thần, truyền cảm hứng hay động viên nhau trong những lúc khó khăn của cuộc sống... Nhưng ít người biết được tác giả và xuất xứ của những câu chuyện này mà thường chỉ quen gọi là truyện “Chicken Soup”.\r\n\r\nSau khi thực hiện các tập Hạt giống Tâm hồn và những cuốn sách chia sẻ cuộc sống được sự đón nhận và đồng cảm sâu sắc của đông đảo độc giả, First News đã mua bản quyền với Tập đoàn Xuất bản Health Communications - Hoa Kỳ để xuất bản dưới hình thức song ngữ 2 tập đầu tiên của bộ sách “Condensed Chicken Soup for the Soul” nằm trong bộ “Chicken Soup for the Soul” nổi tiếng của 2 tác giả quen thuộc Jack Canfield và Mark Victor Hansen.', '48.000', 7),
('58436', 'Đừng Chết Bởi Hóa Chất - Hiểu Tường Tận, Cẩn Thận Sử Dụng', 'Kang Sang Wook, Lee Jun Young', 'dungchetboihoachat.jpg', 'Hóa chất là một phần không thể thiếu đối với xã hội hiện đại ngày nay. Cùng với những phát kiến, tiến bộ trong nghiên cứu và ứng dụng hóa chất vào đời sống, con người ngày càng tìm thấy nhiều lợi ích to lớn của hóa chất nhằm đáp ứng nhu cầu ngày càng cao của đời sống hiện đại. Tuy nhiên, việc lạm dụng cũng như thiếu hiểu biết về hóa chất có thể gây hại, thậm chí mang tới bệnh tật nguy hiểm cho con người và xã hội.\r\n\r\nHội chứng sợ hóa chất là một khái niệm mới xuất hiện và phổ biến tới nỗi hiện nay gần như không ai là không biết đến. Nó xuất phát chỉ từ cảm giác chối bỏ hóa chất rồi lớn dần tới mức trở thành cảm giác sợ hãi cực độ. Là một người làm việc trong lĩnh vực hóa học, phần nào tôi cũng cảm thấy đau lòng với hội chứng này.', '68.000', 6),
('6789', 'Mật Mã Sự Sống', 'Mark Pitstick', 'mat_ma_su_song_1_2018_10_29_14_53_27.jpg', '11 câu hỏi lớn về tất cả những điều con người quan tâm về cuộc sống, cái chết và những gì diễn ra sau cái chết đã được các chuyên gia giải quyết rốt ráo trong cuốn sách này.\r\n\r\nSuy ngẫm về sự vận động của đời sống, nhà khoa học lừng danh Marie Curie, người đầu tiên vinh dự nhận được hai Giải Nobel trong hai lĩnh vực khác nhau, vật lý và hóa học từng nhận xét: “Cuộc đời này không có gì để sợ, chỉ có những thứ để tìm hiểu. Bây giờ là lúc chúng ta tìm hiểu nhiều hơn, để có thể sợ hãi ít hơn”. Trải qua rất nhiều khoảng thời gian khó khăn, từ khi còn ấu thơ đến tận khi trưởng thành để cuối cùng chạm tay vào những giải thưởng lớn nhất của sự nghiệp, phát biểu ấy phần nào lý giải vì sao bà có thể vượt qua bao sóng gió, thăng trầm.', '62.400', 5),
('7777', 'Hạnh Phúc Đến Từ Sự Biến Mất', 'Ajahn Brahm', 'hanhphuc.jpg', 'Là sư trụ trì của tu viện Bodhiyana (Giác Thừa) và là Giám đốc tâm linh của Hiệp hội Phật giáo Tây Úc, Ajahn Bram không chỉ là một vị cao tăng, người thầy dẫn dắt tâm linh của hàng ngàn môn đệ, ông còn là tác giả của rất nhiều đầu sách về Phật giáo và thiền định có ảnh hưởng đến Phật tử khắp nơi trên thế giới.\r\n\r\n  Trong “Hạnh phúc đến từ sự biến mất”, tu sỹ Ajahn Brahm chia sẻ những trải nghiệm và suy nghĩ của mình về con đường đi tìm hạnh phúc vĩnh hằng. Đó chính là con đường chánh niệm, diệt trừ cái tôi, trở nên “vô ngã” của Đức Phật từ ngàn xưa.', '60.800', 5);

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `comment_id` int(11) NOT NULL,
  `content` varchar(255) NOT NULL,
  `book_id` int(11) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp(),
  `user_id` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`comment_id`, `content`, `book_id`, `date`, `user_id`) VALUES
(2, 'sách này hay quá nè mn ơi', 510, '0000-00-00', '28');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `customerid` int(10) UNSIGNED NOT NULL,
  `name` varchar(60) COLLATE latin1_general_ci NOT NULL,
  `address` varchar(80) COLLATE latin1_general_ci NOT NULL,
  `city` varchar(30) COLLATE latin1_general_ci NOT NULL,
  `zip_code` varchar(10) COLLATE latin1_general_ci NOT NULL,
  `country` varchar(60) COLLATE latin1_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

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

CREATE TABLE `orders` (
  `orderid` int(10) UNSIGNED NOT NULL,
  `customerid` int(10) UNSIGNED NOT NULL,
  `amount` decimal(6,2) DEFAULT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp(),
  `ship_name` char(60) NOT NULL,
  `ship_address` char(80) NOT NULL,
  `ship_city` char(30) NOT NULL,
  `ship_zip_code` char(10) NOT NULL,
  `ship_country` char(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`orderid`, `customerid`, `amount`, `date`, `ship_name`, `ship_address`, `ship_city`, `ship_zip_code`, `ship_country`) VALUES
(1, 1, '60.00', '2015-12-03 13:30:12', 'a', 'a', 'a', 'a', 'a'),
(2, 2, '60.00', '2015-12-03 13:31:12', 'b', 'b', 'b', 'b', 'b'),
(3, 3, '20.00', '2015-12-03 19:34:21', 'test', '123 test', '12121', 'test', 'test'),
(4, 1, '20.00', '2015-12-04 10:19:14', 'a', 'a', 'a', 'a', 'a'),
(5, 0, '190.00', '0000-00-00 00:00:00', 'minh', '0123', 'nhà tao', 'dsadsa', 'sdasds'),
(6, 0, '370.00', '0000-00-00 00:00:00', 'sa cà na', '123123', 'ưeqwe12', '12312', '123@gmail.com'),
(7, 0, '2060.00', '0000-00-00 00:00:00', 'minh', '123', '123', '123', '123'),
(8, 0, '956.20', '0000-00-00 00:00:00', 'Lưu Quang Minh', '0337475790', 'Đà Nẵng', 'Đà Nẵng', 'quangminh02112@gmail'),
(9, 0, '78.40', '0000-00-00 00:00:00', 'Lưu Quang Minh', '0337475790', 'Đà Nẵng', 'Đà Nẵng', 'quangminh02112@gmail');

-- --------------------------------------------------------

--
-- Table structure for table `order_items`
--

CREATE TABLE `order_items` (
  `orderid` int(10) UNSIGNED NOT NULL,
  `book_isbn` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `item_price` decimal(6,2) NOT NULL,
  `quantity` tinyint(3) UNSIGNED NOT NULL
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

CREATE TABLE `publisher` (
  `publisherid` int(10) UNSIGNED NOT NULL,
  `publisher_name` varchar(60) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `publisher`
--

INSERT INTO `publisher` (`publisherid`, `publisher_name`) VALUES
(1, 'NXB Thế Giới'),
(2, 'NXB Hồng Đức'),
(3, 'NXB Dân Trí'),
(4, 'NXB Lao Động'),
(5, 'NXB Tổng Hợp TPHCM'),
(6, 'Kim Đồng'),
(7, 'Nhà xuất bản trẻ'),
(8, 'Nhà xuất bản Thanh Niên'),
(9, 'NXB Thông tin và Truyền thông');

-- --------------------------------------------------------

--
-- Table structure for table `reply_comments`
--

CREATE TABLE `reply_comments` (
  `reply_comment_id` int(11) NOT NULL,
  `comment_id` int(11) NOT NULL,
  `content` varchar(255) NOT NULL,
  `reply_user_id` int(11) NOT NULL,
  `book_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `reply_comments`
--

INSERT INTO `reply_comments` (`reply_comment_id`, `comment_id`, `content`, `reply_user_id`, `book_id`) VALUES
(3, 2, 'đúng rồi nè, tui chưa đọc luôn', 30, 510),
(4, 2, 'oh yeah, thật là hayyy\r\n', 31, 510),
(5, 2, 'hai bạn giả trân quá ', 31, 510);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `image` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `image`) VALUES
(8, 'Pure Coding', 'purecodingofficial@gmail.com', '0139a3c5cf42394be982e766c93f5ed0', ''),
(28, 'minh', '123@gmail.com', '202cb962ac59075b964b07152d234b70', 'hinh-nen-thien-nhien-4k-34.jpg'),
(29, 'minh11', 'quangminh02112@gmail.com', '202cb962ac59075b964b07152d234b70', 'ggavatar.jpg'),
(30, 'sacana', 'abc@gmail.com', '202cb962ac59075b964b07152d234b70', 'bang-dao-ham-va-nguyen-ham.jpg'),
(31, 'lannguyen', 'bcs@gmail.com', '202cb962ac59075b964b07152d234b70', 'ggavatar.jpg');

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
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`comment_id`);

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
-- Indexes for table `reply_comments`
--
ALTER TABLE `reply_comments`
  ADD PRIMARY KEY (`reply_comment_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `comment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `customerid` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `orderid` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `publisher`
--
ALTER TABLE `publisher`
  MODIFY `publisherid` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `reply_comments`
--
ALTER TABLE `reply_comments`
  MODIFY `reply_comment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
