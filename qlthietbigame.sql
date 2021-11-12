-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 08, 2021 at 04:31 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `qlthietbigame`
--

-- --------------------------------------------------------

--
-- Table structure for table `danhmuc`
--

CREATE TABLE `danhmuc` (
  `id` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `nhanbiet` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `danhmuc`
--

INSERT INTO `danhmuc` (`id`, `name`, `nhanbiet`) VALUES
('a', 'Xbox', 1),
('a1', 'PS4', 2),
('a2', 'PS5', 3),
('a3', 'tay cầm', 4),
('a4', 'PS3', 5),
('a5', 'Nintendo Switch', 6);

-- --------------------------------------------------------

--
-- Table structure for table `lienhe`
--

CREATE TABLE `lienhe` (
  `id` int(11) NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `content` varchar(1000) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `lienhe`
--

INSERT INTO `lienhe` (`id`, `email`, `phone`, `content`) VALUES
(1, 'tieuyeu0414@gmail.com', '0943856881', 'Trang web rất bổ ích'),
(12, 'tieuyeu0414@gmail.com', '44943856881', '3');

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `id` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `idsp` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `quantity` int(11) NOT NULL,
  `totalprice` float NOT NULL,
  `state` int(11) NOT NULL,
  `iduser` varchar(1000) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`id`, `idsp`, `quantity`, `totalprice`, `state`, `iduser`) VALUES
('1', 'a1', 1, 8390000, 2, 'a'),
('B', 'a1', 1, 8390000, 2, 'a'),
('E', 'a', 1, 20300000, 2, 'a'),
('g', 'a1', 1, 8390000, 2, 'a'),
('H', 'a', 3, 60900000, 2, 'a'),
('n', 'a', 1, 20300000, 2, 'a'),
('Q', 'a', 1, 20300000, 2, 'a'),
('W', 'a1', 13, 109070000, 2, 'F');

-- --------------------------------------------------------

--
-- Table structure for table `thietbigame`
--

CREATE TABLE `thietbigame` (
  `id` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `price` int(11) NOT NULL,
  `color` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `img` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `content` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `trademark` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Origin` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `number` int(11) NOT NULL,
  `time` date NOT NULL,
  `nhanbiet` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `thietbigame`
--

INSERT INTO `thietbigame` (`id`, `name`, `price`, `color`, `img`, `content`, `trademark`, `Origin`, `number`, `time`, `nhanbiet`) VALUES
('a', 'PlayStation 5 / PS5 Standard Edition - KOREA', 20300000, 'Trắng', 'ps5-standard-bh-12th-00-700x700.jpg', '<li>Chi tiết CPU: AMD Zen 2 8 nhân 16 luồng, xung nhịp 3.5GHz</li><li>GPU: Kiến trúc RDNA 2 của AMD, sức mạnh 10.3 TFLOPS, tốc độ 2.23GHz, hỗ trợ Ray-Tracing</li><li>RAM: GDDR6 16GB</li><li>Bộ nhớ trong: 825GB SSD tốc độ đạt 5,5 GB/s</li><li>Tính năng mới: Hỗ trợ Ray-Tracing, hỗ trợ chơi game 8K 120Hz, âm thanh vòm 3D audio, tương thích ngược với game PS4</li><li>Cổng kết nối: HDMI 2.1, 3 x USB-A, 1 x USB-C</li><li>Kích thước: 39 x 10.4 x 26 (cm)</li><li>Trọng lượng: 4.5kg</li><li>Nguồn điện: 100-240V, 50/60Hz</li><li>Công suất tiêu thụ: 350W</li>', 'PlayStation 5', 'KOREA', 496, '2021-11-01', 3),
('a1', 'Bộ Máy Ps4 Slim 1tb Model 2218B -Hàng New - Chính Hãng Sony Việt Nam', 8390000, 'Đen', 'b2f1f3b7afd31cb08f972393caa92af9.jpg.webp', '<li>CPU: x86-64 AMD Jaguar, 8 nhân GPU: 4.20 TFLOPS, đồ họa nền tảng AMD Radeon RAM: GDDR5 8GB Bộ nhớ lưu trữ: 1tb Model 2218B Hdd 1000gb thỏa mái chứa film và game Ổ BD/DVD: BD x 6 CAV/DVD x 8 CAV Bluetooth: 4.0 Công suất: 310W Kết nối: Cổng HDMI out port (hỗ trợ 4K/HDR), cổng quang (OPTICAL port), USB tốc độ cao (USB 3.1 thế hệ 1) x 3, cổng AUX x 1 Note : sp này được tách ra từ bộ bundle mega park 2 nên sec không có seal , nhưng vẫn check được trên hệ thống sony việt nam .</li><li>Thiết kế nhựa nhám matte chống bám vân tay</li><li>Thao tác bấm đơn giản và thân thiện hơn</li><li>Tốc độ xử lý đồ họa nhanh</li><li>Cạnh sau của máy là khu vực của các cổng kết nối. Đáng chú ý là cổng quang optical đã được loại bỏ, bây giờ chúng ta chỉ còn AUX, HDMI out, cổng LAN và cổng nguồn số 8. Cạnh hông và phía sau có nắp để lắp ổ cứng cho máy vì thế giờ đây thao tác thay ổ cứng cho máy đã đơn giản hơn rất nhiều.</li><li>Tay bấm dễ dàng hơn khi chơi nhiều máy</li>', 'Sony ', 'Việt Nam', 185, '2021-11-03', 2),
('a10', 'Máy Chơi Game Nintendo Switch', 127000, 'V2 - Động vật', '142a7cb40bcbafc66f5d9d40a6efa21c.jpg', '<li>1 dock gắn tivi</li><li>Joy-con (L), joy-con (R).</li><li>1 cáp HDMI.</li><li>1 Nguồn ac adapter</li><li>1 joy-con grip.</li><li>2 dây đeo joycon (Straps)</li><li>Bộ nhớ trong 32GB</li><li>Hỗ trợ kết nối WiFi</li><li>Chơi game liên tục lên đến 6.5 giờ</li><li>2 Joy-Con (trái và phải)</li><li>Dock</li><li>Joy-Con grip</li><li>2 wrist-straps</li><li> 1 AC adaptor (Cổng USB Type-C)</li><li>1 cáp HDMI</li>', 'NINTENDO', 'Nhật Bản', 24, '2021-11-08', 6),
('a11', 'Nintendo Switch : Super Mario Odyssey Hệ US', 1150000, 'Đỏ', 'ab72638dfbf144933e626c4d0aefc5c2.jpg', '<li>Tham gia cùng Mario trong một cuộc phiêu lưu 3D khổng lồ, chạy nước kiệu trên toàn cầu và sử dụng những khả năng mới đáng kinh ngạc của anh ấy để thu thập Mặt trăng để bạn có thể tăng sức mạnh cho airship của mình, Odyssey và giải cứu Công chúa Peach khỏi kế hoạch đám cưới của Bowser. Super Mario 64 và Nintendo Game được yêu thích của năm 2002 Khối lập phương cổ điển Super Mario Sunshine chứa đầy những bí mật và bất ngờ, và với những động tác mới của Mario như ném mũ, nhảy mũ và bắt, bạn sẽ có những trải nghiệm chơi thú vị và thú vị không giống như bất cứ thứ gì bạn đã từng thích một trò chơi Mario trước đây. Hãy sẵn sàng để được đưa đến những nơi kỳ lạ và tuyệt vời khác xa Vương quốc Nấm</li>', 'Nintendo', 'Hàn Quốc', 30, '2021-11-08', 6),
('a12', 'Máy chơi game Nintendo Switch V2 chính hãng fullbox', 7350000, 'Đỏ xanh', '7d4d715e0a67f36931f73d20428510cb.jpg', '<li>MỚI 100% NGUYÊN SEAL FULLBOX</li><li>Bảo hành 3 tháng </li><li>Bộ nhớ trong 32GB</li><li>Hỗ trợ kết nối WiFi</li><li>Chơi game liên tục lên đến 6.5 giờ</li><li>2 Joy-Con (trái và phải)</li><li>Máy chơi game nintendo switch là một trong những máy game console được ưa chuộng nhất bởi khách hàng từ nhiều độ tuổi khác nhau. Máy game nintendo switch không đơn thuần chỉ là một chiếc máy game mà nó còn có thể giúp bạn có một khoảng thời gian giải trí/ thư giãn cùng gia đình và người thân sau những ngày làm việc mệt mỏi. Máy game nintendo switch ngoài ra có thêm chức năng có thể chuyển đổi hình ảnh sang tivi để có thể chơi cùng nhiều người cùng một lúc. Bộ máy game sẽ đi kèm 1) máy game (console), 2) hai joycon, 3) dock tivi, 4) cáp hdmi chuyển đổi lên tivi, 5) cáp sạc, 6) tay cầm (grip), 7) strap gắn vào joycon  </li>', 'Nintendo', 'Hàn Quốc', 4, '2021-11-08', 6),
('a13', 'Tay cầm PlayStation VR Aim Controller', 1590000, 'Trắng Bạc', 'gearvn.com-products-tay-cam-playstation-vr-aim-controller-4_-_copy_9c5c4e7a04514a2ebf2d3b6c78975cd1.jpg', '<li>Model:VR Aim Controller</li><li>Kết nối: Không dây</li><li>Khoảng cách:5-10m</li><li>Tính năng:Thiết kế giả lập dạng súng. Thiết kế thuận tiện cho việc cầm và thao tác trong các trò chơi bắn súng. Tích hợp đèn nhận diện với PlayStation Camera.</li><li>Tương thích hệ điều hành:PlayStation 4 và PlayStation VR.</li><li>Dung lượng Pin:5-7 tiếng</li><li>Đi kèm sản phẩm:Sách HDSD</li>', 'Sony', 'Việt Nam', 33, '2021-11-08', 4),
('a14', 'Tay cầm Rapoo V600S Blue', 650000, 'Xanh', 'gearvn.com-products-rapoo-v600s-blue-1_2efa2c317e8a4a058cf8fe29681a0b96.jpg', '<li>Model:V600S</li><li>Kết nối:Wireless</li><li>Khoảng cách:5-10m</li><li>Tính năng:Giao diện nút bấm thao tác nhanh</li><li>Dung lượng Pin:5-7 tiếng</li><li>Đi kèm sản phẩm:USB Reciever, sách HDSD, cáp sạc</li>', 'Rapoo', 'Anh', 390, '2021-11-08', 4),
('a15', 'Playstation 3 Slim 3001A 160GB USED', 4200000, 'Đen', 'ps3-slim-3000-tang-688-game-700x700.jpg', '<li>Ngoại hình gọn nhẹ hơn đời PS3 Fat</li><li>Lớp vỏ nhám không bám vân tay</li><li>Khả năng kết nối với PlayStation Portable (PSP)</li><li>Đã hack, chép được hầu hết các game PS3</li><li>Hỗ trợ âm thanh chất lượng cao (5.1 và 7.1).</li><li>Hình ảnh: Chuẩn Blu-ray cho hình ảnh của game & phim độ phân giải cao nhất hiện tại. Bên cạnh đó, PS3 cũng có khả năng hỗ trợ chơi game và phim chuẩn 3D.</li><li>Các máy PS3 2nd bán ra tại HALO đều được mở khóa và có thể chép game vào ổ cứng, chơi game không giới hạn, tiết kiệm chi phí.</li>', ' Sony PlayStation', 'Việt Nam', 300, '2021-11-08', 5),
('a16', 'Microsoft Xbox Console', 6988370, 'Đen', '71AtLTRlT2L._SR476,476_.jpg', '<li>Phản hồi khách hàng</li><li>3,7 trên 5 sao, 199 đánh giá</li><li>Định giá</li><li>Giá gạch ngang là Giá niêm yết. Tiết kiệm thể hiện sự giảm giá so với Giá niêm yết.</li><li>Kích thước sản phẩm: 10,5 x 12,75 x 3,75 inch; 6 cân</li><li>Trọng lượng sản phẩm: 6 cân</li><li>Bên dưới vẻ ngoài lạnh lùng, cứng cáp là một hệ thống có khả năng cung cấp trải nghiệm chơi game đơn và nhiều người chơi tốt nhất hiện nay • Được thiết kế để đẩy việc chơi game đến giới hạn tuyệt đối, bảng điều khiển Xbox mang đến đồ họa tuyệt vời và âm thanh như điện ảnh</li>', 'Microsoft', 'Việt Nam', 10000, '2021-11-08', 1),
('a17', 'Xbox 360 Slim 4GB JTAG USED', 3200000, '', 'xbox-360-slim-tang-688-game-700x700.jpg', '<li>Máy Xbox 360 Slim</li><li>Adapter AC + Cáp Nguồn</li><li>1 tay cầm</li><li>1 dây HDMI</li>', 'Microsoft Xbox', 'Việt Nam', 100, '2021-11-08', 1),
('a18', 'Máy chơi game PS4 Pro Death Stranding Limited Sony Playstation Edtition PCAS-05113SA', 11339000, 'Trắng/Đen', '49945_may_choi_game_sony_plastation_ps4_pro_death_stranding_limited_edtition_pcas_05113sa_0000_3.jpg', '<li>Model: CUH-7218B</li><li>Bộ vi xử lý: x86-64 AMD \"Jaguar\", 8 nhân</li><li>Dung lượng Ram: GDDR5 8GB</li><li>Dung lượng ổ cứng: 1TB</li><li>Ổ đĩa quang: BD x 6 CAV, DVD x 8 CAV (read only)</li><li>GPU: 4.20 TFLOPS, AMD Radeon based graphics engine</li><li>Ethernet: Ethernet (10BASE-T, 100BASE-TX, 1000BASE-T)</li><li>Wi-Fi: IEEE 802.11 a/b/g/n/ac</li><li>USB: Super-Speed USB (USB 3.1 Gen.1) port x 3</li><li>HDMI: HDMI out port (Hỗ trợ 4K/HDR)</li><li>Digital Audio: Cổng DIGITAL OUT (OPTICAL)</li><li>Kích thước: 295 × 55 × 327mm</li><li>Trọng lượng: 3,3 Kg</li>', 'Sony', 'Việt Nam', 650, '2021-11-08', 2),
('a19', 'Máy chơi game Playstation PS4 Pro 1TB SONY CUH-7218B PTY', 12879000, 'Đen', '51092_may_choi_game_playstation_ps4_pro_1tb_sony_cuh_7218b_pty_1.jpg', '<li>Máy chơi game Playstation PS4 Pro 1TB là phiên bản high-end của máy chơi game console PS4 được thiết kế với kiểu dáng mạnh mẽ có kích thước 327mm x 295mm x 55mm, và khối lượng 3,2kg giúp cho các game thủ có thể dễ dàng đặt máy ở cấc vị trí gần với màn hình chiếu, TV mang đến trải nghiệm chơi game thoải mái, tiện lợi.</li><li>Máy chơi game Playstation PS4 Pro 1TB được trang bị với bộ xử lý tuỳ chỉnh đơn chip mạnh mẽ với CPU x86-64 AMD “Jaguar”, 8 nhân và GPU có tốc độ xử lý 4.20 TFLOPS (FLoating-point Operations Per Second), engine đồ hoạ AMD Radeon™ mạnh mẽ giúp cho game thủ có thể chơi các tựa game AAA có đồ hoạ “khủng” với FPS (Frame Per Second) cao cho trải nghiệm chơi game mượt mà, cuốn hút. Ngoài ra, bộ xử lý của thiết bị còn hỗ trợ cho việc chạy các tựa game thực tế ảo (VR – Virtual Reality) mang đến cho các game thủ trải nghiệm gaming mới lạ, độc đáo.</li>', 'Sony', 'Việt Nam', 900, '2021-11-08', 2),
('a2', 'Máy PS5 Digital Edition', 17380000, 'Trắng', 'may-ps5-digital-edition-P1544-1621773244499.jpg', '<li>Tính năng: Chơi game, lướt web, youtube, xem phim</li><li>Đồ họa: Chơi game hình ảnh 8K, sắc nét đến từng chi tiết</li><li>Kích thước bên ngoài: Khoảng 295 × 55 × 327 mm (rộng × cao × dài)</li><li>Khối lượng: Khoảng 5,3kg</li><li>Ổ đĩa: Blueray,dvd</li><li>Mạng: Cáp Lan, wifi</li><li>Nguồn điện: AC 100-240V, 50/60Hz</li>', 'Sony  ', 'Việt Nam', 300, '2021-11-08', 3),
('a20', 'XBOX 360 (2005)', 10000000, 'Bạc', 'may_choi_game_xbox_360_ac015d6f867247e0a6f8b00232dd380a_grande.jpg', '<li>CPU: Microsoft XCPU (Xenon), 3 lõi - 500 MHz</li><li>GPU: R500, chip Xenos theo ATI - 500 MHz</li><li>Bộ nhớ: 512 MB RAM GDDR3</li><li>Ổ cứng: 250 GB HDD</li><li>Ổ đĩa quang: 12x DVD</li><li>Đầu ra video: HDMI 1.2a vào / ra</li><li>Mạng: Ethernet, IEEE 802.11 b / g / n Wi-Fi</li><li>Âm thanh: Âm thanh vòm 5.1 đa kênh</li>', 'XBox', 'Mỹ', 1000000, '2021-11-08', 1),
('a21', 'XBOX SERIES S (2020)', 50000000, 'Trắng', 'xbox_series_s_79863d8d25c14eb2a8dd0fdae7380fa8.jpg', '<li>CPU: 8-Core AMD Zen 2 CPU @ 3.6GHz 4GHz w/ SMT Enable</li><li>GPU: AMD RDNA 2GPU 20 CUs @ 1.565GHz, 4 TFLOPS</li><li>Bộ nhớ: 10GB GDDR6</li><li>Ổ cứng: 512GB PCle Gen 4 NVME SSD</li><li>Xbox Series S sẽ có thiết kế hình chữ nhật màu trắng giống Xbox One S với một tấm tản nhiệt hình tròn lớn ở mặt trước, máy mỏng và nhỏ hơn khá nhiều so với Xbox Series X, chỉ bằng 1/3. Microsoft tuyên bố Series S là \"Xbox nhỏ nhất từ ​​trước đến nay\". Kích thước nhỏ gọn, giá thành thấp nên Series S sẽ không có ổ đĩa như các hệ máy khác và sẽ đi kèm với SSD NVME 512GB tùy chỉnh thay vì ổ cứng 1TB, nhưng bạn có thể mở rộng lên đến 1TB thông qua thẻ mở rộng.</li>', 'Xbox Series S', 'Việt Nam', 3000000, '2021-11-08', 1),
('a22', 'Máy chơi game Nintendo Switch Fornite Edition', 9789000, 'Vàng Xanh', '57049_may_choi_game_nintendo_switch_fornite_edition_0002_3.jpg', '<li>Máy chơi game Nintendo Switch Fornite Edition</li><li>Phiên bản V2 với thời lượng pin cao hơn trước</li><li>Máy chơi game dành cho gia đình</li><li>Hỗ trợ lên đến 4 người chơi (Tuỳ theo game)</li><li>Sử dụng đa dạng: Handheld mode/TV Mode/Tabletop mode</li><li>Thích hợp chơi cùng người thân, bạn bè, gia đình.</li><li>Lưu ý: Sản phẩm không đi kèm Code game<li', 'Nintendo', 'Hàn Quốc', 10000000, '2021-11-08', 6),
('a23', 'Máy chơi game Nintendo Switch Animal Crossing New Horizons Special Edition', 8999000, 'xanh xanh', '60221_may_choi_game_nintendo_switch_animal_crossing_new_horizons_special_edition_0001_2.jpg', '<li>3 chế độ trong 1: Nintendo Switch được thiết kế phù hợp cho cuộc sống của bạn, từng kiểu chơi của bạn. Chuyển đổi từ chế độ Console sang chế độ cầm tay chỉ trong tích tắc</li><li>TV mode: Gắn Nintendo Switch và Dock xuất hình của bạn để thưởng thức trò chơi HD trên TV.</li><li>Tabletop mode: Lật giá đỡ để dựng màn hình, sau đó chia sẻ niềm vui trong trò chơi cùng người khác</li><li>Handheld mode: Cầm máy lên và sử dụng Joy‑Con™ để điều khiển cuộc chơi của bạn</li><li>Joy‑Con™: Bộ điều khiển Joy‑Con đi kèm giúp bạn hoàn toàn linh hoạt khi chơi.</li><li>Chọn kiểu chơi của bạn: Một hoặc hai bộ điều khiển, dọc hoặc ngang, gắn vào bảng điều khiển hoặc riêng biệt. Bạn có thể chơi nhiều cách, tùy thuộc vào trò chơi.</li>', 'Nintendo', 'Hàn Quốc', 2000000, '2021-11-08', 6),
('a24', 'Tay cầm chơi game không dây Xbox One S - MineCraft Creeper', 1899000, 'xanh', '43260_tay_game_xbox_one_s_minecraft_creeper_02.jpg', '<li>Phụ kiện bao gồm : 02 Pin và sách hướng dẫn</li><li>Kết nối không cần Receiver</li><li>Tương thích với Window 10</li><li>Tương thích phần cứng: PC/Xbox</li><li>Kết nối:Dây/Blutooth</li>', 'XBox', 'Nhật Bản', 300, '2021-11-08', 4),
('a25', 'Máy Ps3 Slim Đời 2500 Cop Game Full Ổ Cứng - List Game Hơn 5000', 2800000, 'Đen', 'de0e5e7057b67191c62abf0186e46e3f.jpg', '<li>PS3 Slim Đời Siêu Trâu Bò. Dòng ổn định nhất của PS3 chạy liên tục 24/7 không lo lỗi đèn vàng, đèn đỏ</li><li>Máy đã cài sẵn app tải game trực tiếp trên máy hơn 5000 games đủ thể loại.  Bên shop sẽ hướng dẫn chi tiết cách tải game cho khách.</li><li>Máy đã chép sẵn full hơn 3000 games NES, SNES, GameBoy, Game Thùng, Neogeo, Arcade... </li><li>Miễn Phí Chép Game Theo Yêu Cầu</li>', 'Sony', 'Việt Nam', 700, '2021-11-08', 5),
('a26', 'Máy chơi Game PS3 Slim + 2 Tay Cầm ( Kho 3000 game free )', 3850000, 'Đen', '44b9bc92242c4237707e9208bfcc3195.jpg', '<li>Máy hàng Nhật chính hãng nói không với hàng đã qua sửa chữa , hàng kém chất lượng </li><li>Máy bán ra đã được shop kiểm tra kỹ càng mọi chức năng , cài game theo yêu cầu trước khi giao tới tay khách hàng</li><li>Phụ Kiện được shop trang bị đầy đủ khi bán ra : 2 Tay cầm , dây HDMI , dây nguồn , dây sạc tay</li><li>Máy bán ra đã được cài full game và phần mềm PKGJ tải game ps3 trực tiếp trên máy</li><li>MÁY RA ĐỜI ĐÃ LÂU VÀ ĐÃ QUA SỬ DỤNG NÊN KHÔNG TRÁNH KHỎI XƯỚC XÁT , ổ cứng dung lượng càng thấp cài được càng ít Game PS3</li>', 'Sony ', 'Nhật Bản', 500, '2021-11-08', 5),
('a27', 'Máy PS3 Super Slim 4000-Cop game Full Ổ Cứng - List Game Hơn 5000', 4200000, 'Đỏ', '8520aaac9e77344012e419bf99bdf930.jpg', '<li>PS3 Super Slim Đời 4000 Đời Cuối Của PS3 Siêu Trâu Bò. Dùng ổn định nhất của PS3 chạy liên tục 24/7 không lo lỗi đèn vàng, đèn đỏ.</li><li>Đã Hack Full chơi đc tất cả game PS3 và Giả lập PS1, PSP, GB, GBA, SNES, NES.. Tất cả trong 1</li><li>Cài sẵn ứng dụng tải game trực tiếp trên máy PS3, không cần ra shop chép game.</li><li>Bảo hành nghiêm chỉnh 1 tháng. Đổi mới trong vòng 7 ngày nếu máy lỗi.</li><li>Hàng nguyên zin nguyên bản, không thay vỏ hay thay thế bất cứ thứ gì.</li><li>- 1 tay cầm chính hãng theo máy.</li><li>- 1 dây nguồn.</li><li>- 1 dây HDMI.</li><li>- 1 dây cáp usb dùng để sạc cho tay cầm.</li>', 'Sony', 'Nhật Bản', 50, '2021-11-08', 5),
('a28', 'Máy chơi game Nintendo Switch OLED White (Trắng )', 10999000, 'Trắng', '61005_may_choi_game_nintendo_switch_oled_white_trang_0007_8.jpg', '<li>Chi tiết CPU: NVIDIA Tegra X1, 20nm, Cortex A7 bốn nhân</li><li>Hỗ trợ thẻ nhớ: Có, dung lượng tối đa 2TB</li><li>GPU: NVIDIA Custom</li><li>Bộ nhớ trong: 64GB</li><li>Cảm biến: Cảm biến gia tốc, con quay hồi chuyển, cảm biến ánh sáng</li>', 'Nintendo', 'Nhật Bản', 400, '2021-11-08', 6),
('a29', 'Máy chơi game Nintendo Switch Mario Red', 9599000, 'Đỏ', '60220_may_choi_game_nintendo_switch_mario_red_blue_edition_0004_5.jpg', '<li>Chi tiết CPU: NVIDIA Tegra X1, 20nm, Cortex A7 bốn nhân</li><li>Hỗ trợ thẻ nhớ: Có, dung lượng tối đa 2TB</li><li>GPU: NVIDIA Custom</li><li>Độ phân giải: 1280 x 720 pixels (HDMI: 1080p60)</li><li>Kích thước màn hình: 6.2-inch</li>', 'Nintendo', 'Mỹ', 30, '2021-11-08', 6),
('a3', 'Máy Nintendo Switch with Gray Joy‑Con - New', 7180000, 'Đen', 'may-nintendo-switch--may-nintendo-switch-chinh-hang-nintendo-P575-1568192947294.jpg', '<li>Tính năng: Chơi game nintendo switch, lướt web, youtube, xem phim</li><li>CPU: Nvidia tegra x2, Cortex A7 4 nhân, 20nm</li><li>GPU: Nvidia custom</li><li>Dung lượng lưu trữ: 32GB, có thể mua thêm thẻ nhớ gắn thêm tăng dung lượng</li><li>Kích thước bên ngoài: Khoảng 102 x 239 x 13.9 mm (dài × ngang × dày)</li><li>Khối lượng: Khoảng 0,3 kg</li><li>Khay thẻ nhớ: Micro SD</li><li>Mạng: wifi</li><li>Nguồn điện: AC 100-240V, 50/60Hz</li><li>Đầu ra: Cổng ra HDMI</li>', 'Nintendo', 'Nhật Bản', 200, '2021-11-08', 6),
('a30', 'Microsoft Xbox One X', 11499606, 'Trắng', 'e01fb158eddba5a6931590867a8365d6d44a8224_0.jpg', '<li>Kích thước (W x H x D): 30 x 5.9 x 24cm</li><li>Độ phân giải màn hình: 2560 x 1440</li><li>Bộ nhớ trongL 8GB</li><li>Loại bộ nhớ: GDDR3</li><li>Loại bộ nhớ lưu trữ: HHD</li><li>Lõi bộ xử lý: 8</li><li>Số lượng cổng USB: 3</li>', 'Microsoft', 'Nhật Bản', 2, '2021-11-08', 1),
('a4', 'Máy PS4 Slim 1TB Mega Pack Kèm 3 Game - Chính Hãng', 8880000, 'Đen', 'ps4-slim--playstation-4-slim-500gb---ps4-chinh-hang-gia-re-P274-1573514845490.jpg', '<li>CPU: x86-64 AMD \"Jaguar\", 8 lõi</li><li>GPU: 1,84 TFLOPS, công cụ đồ họa dựa trên AMD Radeon ™</li><li>Bộ nhớ Ram: GDDR5 8GB</li><li>Dung lượng lưu trữ: 1TB Ổ đĩa cứng * 1</li><li>Đầu ra:  Cổng ra HDMI (hỗ trợ đầu ra HDR)</LI>', 'Sony ', 'Mỹ', 1000, '2021-11-08', 2),
('a5', 'Tay Cầm Xbox 360 Có Dây Chĩnh Hãng Chơi mọi loại gaming cắm cổng USB', 190000, 'Đen', 'b306dabf3b82232b1048864c3f7ddd9f.jpg', '<li>Tay Cầm XBOX 360 Có Dây Dành cho máy tính và Xbox 360, tay cầm hoạt động trên các nền tảng tṛò chơi của Microsoft</li><li>Xbox 360 Controller for Windows hoạt động với hầu hết các máy tính chạy Window 7, Windows 8, Window 10 (Win 7, Win 8 & Win 10 ) máy game Xbox…\r\n</li><li>Sự Tiện dụng: Xbox 360 có dây mang lại 1 cảm giác chơi hoàn toàn thoải mái. Thiết kế tiện dụng nhỏ gọn đã từng giành giải thưởng đem lại trải nghiệm chơi trò chơi thoải mái hơn.</li><li> Dùng trên 2 hệ máy : Máy tính (PC) & Xbox 360</li><li>Chiều dài dây cable 1,8 Mét: khoảng cách hợp lý sử dụng với màn hình PC</li><li>Đầu cắm USB</li><li>Không cần pin, tay bấm sử dụng nguồn trực tiếp từ máy</li><li>Hỗ trợ rung tốt với những game có chế độ rung cho bạn trải nghiệm chơi game tuyệt đỉnh</li>', 'XBox', 'Việt Nam', 999, '2021-11-08', 4),
('a6', 'xbox ones 1Tb', 3600000, 'Đen', 'f50397ccc6a881252055f53477fd3f66.jpg', '<li>máy hoạt động ổn định, không lỗi lầm</li><li>hình thức đẹp . Màu sắc như hình. Tay đã thay tay khác, màu trắng</li>', 'Xbox One', 'Hàn Quốc', 5, '2021-11-08', 1),
('a7', 'Máy Chơi Game Cầm Tay G5 Cổ Điển 500 Trò chơi nổi tiếng 1 thời', 230000, 'Xanh', 'a606729f2edb196796164839f2a16ddf.jpg', '<li>BH 12 tháng- Lỗi 1 đổi 1 trong vòng 7 ngày</li><li>Máy Chơi Game Cầm Tay 500 Trò Chơi G5 LikeTech Nổi tiếng một thời những năm 90S với những trò chơi đã in đậm trong kí ức nhiều người như Contra, Nấm lùn, Tank...  2 Người Sử Dụng Kết Nối Tivi Âm Thanh Hình Ảnh Rõ Nét Bảo Hành 12 Tháng</li><li>Loại trò chơi: Nhập vai RPG, trò chơi hành động ACT, trò chơi phiêu lưu AVG</li><li>Hệ điều hành: trò chơi cố định</li><li>Bộ nhớ: 500 trong một</li><li>Loại giao diện: USB</li><li>Giao diện mạng: Giao diện AV</li><li>Phương thức kết nối: có dây</li><li>Phân loại trò chơi điện tử: cấp độ đầu vào, cấp độ sốt, cấp độ ưu tú, cấp độ khó khăn</li><li>Số lượng áp dụng: 1-2 người</li>', 'LikeTech', 'Hàn Quốc', 20, '2021-11-08', 4),
('a8', 'Máy ps3 slim và super slim', 3300000, 'Đỏ', 'c4854ef44a7eb80de28430bb85d21337.jpg', '<li>Máy PS3, hack game chép full ổ nổi bật GOD OF WAR, GTA5 VIỆT HÓA, PES 2021 TIẾNG VIỆT</li><li>Phụ Kiện: 1 tay, Dây nguồn, HDMI, dây sạc</li><li>Đặt hàng quý khách vui lòng trao đổi trước khi đặt, để tư vấn ảnh máy chính xác.</li><li>Sản phẩm bảo hành 1 tháng, bao test 7 ngày</li>', 'Sony', 'Việt Nam', 4, '2021-11-08', 5),
('a9', 'SONY Tay cầm chơi game không dây cho PS3', 127000, 'Hồng', '1cad118d27262ada6b427d81ee039b3d.jpg', '<li>Cảm nhận mọi cú đánh, sự cố và vụ nổ với phản ứng sốc kép rung bằng tay</li><li>Dự đoán một lối chơi chân thực nhờ 6 cảm biến tích hợp Nhân vật và đối tượng trong game sẽ di chuyển và phản ứng khi bạn nghiêng, đẩy và lắc bộ điều khiển</li><li>Với công nghệ truyền dẫn không dây, bạn sẽ không bị mất dữ liệu hoặc nhiễu tín hiệu. </li><li>Nó được thiết kế với công thái học, thoải mái khi cầm. Cung cấp quyền truy cập vào tất cả các nút mà không hạn chế chơi trò chơi hoặc chuyển động. Nó được thiết kế để hoàn thiện gần như hoàn hảo về mặt công thái học để phù hợp với bất kỳ tay game thủ nào. </li><li> Nó thậm chí có thể phát hiện các chuyển động tự nhiên để chơi tương tác trong thời gian thực và độ chính xác cao, hoạt động như một phần mở rộng tự nhiên của cơ thể người dùng.</li>', 'Sony', 'Anh', 999, '2021-11-08', 4);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `pass` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `nickname` varchar(30) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `pass`, `name`, `phone`, `email`, `address`, `nickname`) VALUES
('a', 'Long0414^^', 'miu', '0943856881', 'hailong14092000@gmail.com', 'số 11 - ngõ 797 - đường Nguyễn Văn Ninh - Sài Đồng - Long Biên - Hà Nội', 'Tieuyeu0414'),
('F', 'Long0414^^', 'nickname', '0943856881', 'keokhoakepchim2@gmail.com', 'Nguyễn Văn Ninh', 'tieuyeu04');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `lienhe`
--
ALTER TABLE `lienhe`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `thietbigame`
--
ALTER TABLE `thietbigame`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `lienhe`
--
ALTER TABLE `lienhe`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
