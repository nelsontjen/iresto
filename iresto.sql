-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 15, 2021 at 09:12 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `iresto`
--

-- --------------------------------------------------------

--
-- Table structure for table `add_to_cart`
--

CREATE TABLE `add_to_cart` (
  `id` int(11) NOT NULL,
  `product_id` varchar(255) NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `b_qty` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `add_to_cart`
--

INSERT INTO `add_to_cart` (`id`, `product_id`, `user_id`, `b_qty`, `created_at`) VALUES
(25, '5', '5', '8', '2021-03-14 07:23:06'),
(26, '6', '5', '3', '2021-03-14 07:23:15'),
(27, '7', '6', '2', '2021-03-14 07:25:00'),
(28, '7', '5', '2', '2021-03-14 07:23:23'),
(29, '8', '5', '1', '2021-03-13 20:45:00'),
(30, '9', '5', '1', '2021-03-13 20:45:04'),
(31, '15', '5', '1', '2021-03-13 20:45:06'),
(32, '23', '5', '1', '2021-03-13 20:45:08'),
(33, '6', '3', '1', '2021-03-13 21:17:57'),
(34, '12', '5', '1', '2021-03-14 07:20:26'),
(35, '11', '6', '1', '2021-03-14 07:24:54'),
(36, '6', '6', '2', '2021-03-14 07:25:08'),
(37, '19', '5', '1', '2021-03-14 16:47:08'),
(40, '33', '4', '1', '2021-03-15 07:17:22'),
(44, '5', '4', '2', '2021-03-15 07:29:00');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(250) DEFAULT NULL,
  `qty` int(11) DEFAULT NULL,
  `img` varchar(250) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `price` int(11) DEFAULT NULL,
  `category_id` int(11) NOT NULL,
  `Description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `qty`, `img`, `status`, `price`, `category_id`, `Description`) VALUES
(5, 'Ketoprak', 32, 'ketoprak.png', 1, 25, 1, 'Salah satu makanan khas indonesia yang menggunakan ketupat dan dikuahi dengan bumbu kacang.'),
(6, 'Nasi Goreng', 1, 'nasi goreng.jpg', 1, 52, 1, 'Nasi goreng yang dihidangkan dengan isi daging ayam,telur,cabai,sosis,bakso,acar, dan beberapa kerupuk.'),
(7, 'Rendang', 18, 'rendang.png', 1, 50, 1, 'Makanan yang berupa daging sapi yang dimasak dengan rempah-rempah dan santan.'),
(8, 'Sate', 100, 'sate.jpg', 1, 10, 1, 'Makanan yang berupa daging yang dililitkan atau ditusuk ke lidi atau bambu yang kemudian di bakar'),
(9, 'Sop buntut', 50, 'sop buntut.png', 1, 25, 1, 'Makanan khas indonesia yang dibuat dengan ekor sapi.'),
(11, 'Bebek Peking', 20, 'bebek peking.jpg', 1, 100, 2, 'Makanan yang dibuat dari bebek khusus yang diternak dan dipanggang  pada suhu yang pas.'),
(12, 'Capcay', 50, 'capcay.jpg', 1, 25, 2, 'Makanan khas chinese yang isinya berupa berbagai macam sayuran yang dimasak dengan cara direbus atau digoreng.'),
(15, 'Dimsum Hakao', 50, 'dimsum hakao.jpg', 1, 30, 2, 'Dimsum dengan kulitnya yang transparan dan bentuknya yang mungil serta diisi dengan udang'),
(16, 'Fuyunghai', 20, 'fuyunghai.jpg', 1, 40, 2, 'Merupakan makanan khas chinese yang terbuat dari telur dengan campuran berupa sayuran,daging babi,dan daging ayam'),
(17, 'Siomay', 50, 'siomay.jpg', 1, 25, 2, 'Merupakan jenis pangsit khas chinese yang diisi dengan daging ayam'),
(18, 'Pizza', 20, 'pizza.jpg', 1, 100, 4, ' Makanan dari roti yang dibentuk agar memiliki adonan yang bundar dan pipih yang dipanggang di oven dan diisi saus tomat, keju maupun bahan makanan lainnya'),
(19, 'Lasagna', 30, 'Lasagna.jpg', 1, 50, 4, 'Pasta yang dipanggang di oven dan memiliki isian daging, sayur, ayam, makanan laut. sesuai dengan selera anda'),
(20, 'Ribollita', 20, 'Ribollita.jpg', 1, 50, 4, 'Sup sayuran kental yang dua kali direbus dan dibuat dari kubis hitam dan putih, kacang putih dan sayuran lainnya, kemudian dituang diatas roti panggang Tuscan'),
(21, 'Spaghetti', 50, 'Sphagethi.jpg', 1, 30, 4, 'Jenis pasta yang berbentuk panjang, tipus, silindris, dan padat yang diberikan saos diatasnya'),
(22, 'Fiorentina Steak', 10, 'Fiorentina Steak.jpg', 1, 150, 4, 'Steak yang terbuat dari daging sapi muda yang dikombinasikan dengan persiapan khusus.'),
(23, 'Burger', 100, 'burger.jfif', 1, 30, 3, 'Makanan yang berupa roti yang berbentuk bundar yang ditengah-tengahnya diisi dengan daging sapi,sayuran,dan keju.'),
(24, 'Chicken Cordon Bleu', 50, 'chicken cordon bleu.png', 1, 40, 3, 'Hidangan daging yang dililit keju dan dilapisi tepung roti yang kemudian digoreng.'),
(25, 'Fish and chips', 50, 'fish and chips.jpg', 1, 50, 3, 'Hidangan dengan ikan yang digoreng garing serta dihidangkan dengan kentang goreng sebagai penikmat.'),
(26, 'Hotdog', 50, 'hotdog.jpg', 1, 20, 3, 'Makanan yang berupa roti yang membalut sosis dan terdapat sayuran juga didalamnya'),
(27, 'Pancake', 25, 'pancake.jfif', 1, 20, 3, 'Kue makanan penutup yang nikmat dengan rasa yang manis dan gurih serta dihidangkan 	 dihidangkan bersamaan dengan buah-buahan seperti strawberry dan cerry'),
(33, 'Gado-Gado', 4, 'Gado_gado.jpg', 1, 15, 1, '');

-- --------------------------------------------------------

--
-- Table structure for table `products_category`
--

CREATE TABLE `products_category` (
  `id` int(11) NOT NULL,
  `name_category` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products_category`
--

INSERT INTO `products_category` (`id`, `name_category`) VALUES
(1, 'Indonesian Food'),
(2, 'Chinese Food'),
(3, 'Western Food'),
(4, 'Italian Food');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `firstname` varchar(128) NOT NULL,
  `lastname` varchar(128) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(256) NOT NULL,
  `role_id` int(11) NOT NULL,
  `is_active` int(11) NOT NULL,
  `bdate` date NOT NULL,
  `gender` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `firstname`, `lastname`, `email`, `password`, `role_id`, `is_active`, `bdate`, `gender`) VALUES
(3, 'nelson', 'tjen', 'nelson1@student.umn.ac.id', '$2y$10$9TUYluXy5eNT1fvGbzyqy.6fvOv4.dzmLvyqew9g8BoM.VC6brqvy', 1, 1, '2021-03-12', 'Laki-Laki'),
(4, 'hindra', 'pangadi', 'admin@umn.ac.id', '$2y$10$ygL8Um05yWW7LvEgilsVdO/Iyoan0.F1mjfnUnOWLOMjFNa2NKyrG', 1, 1, '2021-03-12', 'Laki-Laki'),
(5, 'nelson', 'asd', 'agung@umn.ac.id', '$2y$10$zISkSW3jnnUITcADEUo35Oz2kE2N8VPpoRVoLgUaH7oWzQtI7elqy', 2, 1, '2021-03-06', 'Perempuan'),
(6, 'John', 'Doe', 'juangantengsukacewe@juju.com', '$2y$10$iyMC..JW7fpxdkVX2UJnxegpPNAXrLHMkX69hS3bPFQKM0BG9IlU2', 2, 1, '2021-03-02', 'Laki-Laki');

-- --------------------------------------------------------

--
-- Table structure for table `user_access_menu`
--

CREATE TABLE `user_access_menu` (
  `id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_access_menu`
--

INSERT INTO `user_access_menu` (`id`, `role_id`, `menu_id`) VALUES
(1, 1, 1),
(2, 1, 2),
(3, 2, 2);

-- --------------------------------------------------------

--
-- Table structure for table `user_menu`
--

CREATE TABLE `user_menu` (
  `id` int(11) NOT NULL,
  `menu` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_menu`
--

INSERT INTO `user_menu` (`id`, `menu`) VALUES
(1, 'Admin'),
(2, 'User');

-- --------------------------------------------------------

--
-- Table structure for table `user_resto`
--

CREATE TABLE `user_resto` (
  `id` int(11) NOT NULL,
  `role` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_resto`
--

INSERT INTO `user_resto` (`id`, `role`) VALUES
(1, 'Administrator'),
(2, 'Member');

-- --------------------------------------------------------

--
-- Table structure for table `user_sub_menu`
--

CREATE TABLE `user_sub_menu` (
  `id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL,
  `title` varchar(128) NOT NULL,
  `url` varchar(128) NOT NULL,
  `icon` varchar(128) NOT NULL,
  `is_active` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_sub_menu`
--

INSERT INTO `user_sub_menu` (`id`, `menu_id`, `title`, `url`, `icon`, `is_active`) VALUES
(1, 1, 'Edit Menu', 'admin', 'far fa-edit', 1),
(2, 2, 'My Order', 'user', 'fas fa-clipboard-list', 1),
(3, 2, 'Menu', 'user/menu', 'fas fa-fw fa-utensils', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `add_to_cart`
--
ALTER TABLE `add_to_cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products_category`
--
ALTER TABLE `products_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_access_menu`
--
ALTER TABLE `user_access_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_menu`
--
ALTER TABLE `user_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_resto`
--
ALTER TABLE `user_resto`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `add_to_cart`
--
ALTER TABLE `add_to_cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `products_category`
--
ALTER TABLE `products_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `user_access_menu`
--
ALTER TABLE `user_access_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `user_menu`
--
ALTER TABLE `user_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user_resto`
--
ALTER TABLE `user_resto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
