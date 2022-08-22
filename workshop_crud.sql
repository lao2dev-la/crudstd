CREATE DATABASE IF NOT EXISTS `workshop_crud` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;
USE `workshop_crud`;

CREATE TABLE `tbl_member` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `surname` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `tbl_member` (`id`, `name`, `surname`) VALUES
(1, 'somxai', 'Ngakhamphithoun'),
(2, 'kittixay', 'sengthong'),
(3, 'andamon', 'lithanongsin'),
(4, 'thebphabout', 'thamalungka'),
(5, 'Natasha', 'Alianovna Romanoff'),
(6, 'Peter', 'Benjamin Parker'),
(7, 'Clinton', 'Francis Barton'),
(8, 'Yondu', 'Udonta'),
(9, 'Steven', 'Rogers');

ALTER TABLE `tbl_member`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `tbl_member`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;