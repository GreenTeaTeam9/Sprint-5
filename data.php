<?php
require '/home/greente1/db.php';
$sql = "DELETE FROM `customer`";
$result = @mysqli_query($cnxn, $sql);
$sql = "DELETE FROM `sets`";
$result = @mysqli_query($cnxn, $sql);
$sql = "INSERT INTO `customer` (`customer_id`, `customer_name`, `email`,`phone`,`delivery`,`date`) VALUES
(1, 'Susie Q Anderson', 'Susie@gmail.com','2063334444','Delivery','2022-12-9'),
(2, 'Susie Q Anderson', 'Susie@gmail.com','2063334444','Delivery','2022-12-10'),
(3, 'Lois Lane', 'Lane@gmail.com','2063331111','Delivery','2022-12-22'),
(4, 'Lois Lane', 'Lane@gmail.com','2063331111','Delivery','2022-12-23'),
(5, 'Michelle Scalley', 'Michelle@gmail.com','2061112222','Delivery','2023-1-13'),
(6, 'Michelle Scalley', 'Michelle@gmail.com','2061112222','Delivery','2023-1-14'),
(7, 'Amy Adams', 'Amy@gmail.com','2063331234','Delivery','2023-3-10'),
(8, 'Amy Adams', 'Amy@gmail.com','2063331234','Delivery','2023-3-10'),
(9, 'Sarah Olmstead', 'Sarah@gmail.com','2061213456','Delivery','2023-3-11'),
(10, 'Sarah Olmstead', 'Sarah@gmail.com','2061213456','Delivery','2023-3-11'),
(11, 'Elaine King', 'Elaine@gmail.com','2067778888','Delivery','2023-4-14'),
(12, 'Elaine King', 'Elaine@gmail.com','2067778888','Delivery','2023-4-15'),
(13, 'Jane Jansen', 'Jane@gmail.com','2063334443','Delivery','2023-4-28'),
(14, 'Jane Jansen', 'Jane@gmail.com','2063334445','Delivery','2023-4-29'),
(15, 'Jillian Sykes', 'Jillian@gmail.com','2063364444','Delivery','2023-5-19'),
(16, 'Taylor Kinsey', 'Taylor@gmail.com','2063331444','Delivery','2023-5-19'),
(17, 'Paige Pierce', 'Paige@gmail.com','2063323444','Delivery','2023-6-9'),
(18, 'Kristen Tattar', 'Kristen@gmail.com','2061234544','Delivery','2023-6-30'),
(19, 'Sarah Hokom', 'Sarah@gmail.com','2061234431','Delivery','2023-6-30'),
(20, 'Jennifer Allen', 'Jennifer@gmail.com','2069998888','Delivery','2023-7-1'),
(21, 'Stacy Rawnsley', 'Stacy@gmail.com','2069999999','Delivery','2023-8-4'),
(22, 'Stacy Rawnsley', 'Stacy@gmail.com','2069999999','Delivery','2023-8-5'),
(23, 'Kat Mertsh', 'Kat@gmail.com','2061112222','Delivery','2023-8-11'),
(24, 'Kat Mertsh', 'Kat@gmail.com','2061112222','Delivery','2023-8-12'),
(25, 'Amy Spicuzza', 'Amy@gmail.com','2063331231','Delivery','2023-9-1'),
(26, 'Ashley Kelver', 'Ashley@gmail.com','2064445555','Delivery','2023-9-1'),
(27, 'Ashley Kelver', 'Ashley@gmail.com','2064445555','Delivery','2023-9-2'),
(28, 'Tina Oakley', 'Tina@gmail.com','2064445575','Delivery','2023-9-2'),
(29, 'Tina Oakley', 'Tina@gmail.com','2064445575','Delivery','2023-9-3'),
(30, 'Madison Walker', 'Madison@gmail.com','2067778888','Delivery','2023-9-7');";
$result = @mysqli_query($cnxn, $sql);
$sql = "INSERT INTO `sets` (`set_selection`, `package`, `extra`,`price`,`customer_id`,`date`,`order_status`) VALUES
('Layered Arch', 'Full LA Rental Set','','849','1','2022-12-9','Unconfirmed'),
('Layered Arch', 'Full LA Rental Set','','849','2','2022-12-10','Unconfirmed'),
('Dark Walnut', 'Full DW Rental Set','Hex Arbor','799','3','2022-12-22','Unconfirmed'),
('Dark Walnut', 'Full DW Rental Set','Hex Arbor','799','4','2022-12-23','Unconfirmed'),
('Mirror Set', 'Full MS Rental Set','Jugs and Jars','799','5','2023-1-13','Unconfirmed'),
('Mirror Set', 'Full MS Rental Set','Jugs and Jars','799','6','2023-1-14','Unconfirmed'),
('Layered Arch', 'Full LA Rental Set','','849','7','2023-3-10','Unconfirmed'),
('Layered Arch', 'Full LA Rental Set','','849','8','2022-3-11','Unconfirmed'),
('Modern Round', 'Full MR Rental Set','','768','9','2022-3-11','Unconfirmed'),
('Layered Arch', 'Full LA Rental Set','','849','10','2023-4-14','Unconfirmed'),
('Layered Arch', 'Full LA Rental Set','','849','11','2022-4-15','Unconfirmed'),
('Modern Round', 'Full MR Rental Set','','699','12','2022-4-28','Unconfirmed'),
('Modern Round', 'Full MR Rental Set','','699','13','2022-4-29','Unconfirmed'),
('', '','Mirror Set','243','14','2023-5-19','Unconfirmed'),
('', '','Arch Set','267','15','2022-5-19','Unconfirmed'),
('Layered Arch', 'Full LA Rental Set','','849','16','2023-6-9','Unconfirmed'),
('Layered Arch', 'Full LA Rental Set','','849','17','2023-6-30','Unconfirmed'),
('Rustic Wood', 'Full RW Rental Set','','789','18','2023-6-30','Unconfirmed'),
('', '','Mirror Set','849','19','2023-7-1','Unconfirmed'),
('', '','Mirror Set,Jugs,Jars,Arbor','520','20','2023-8-4','Unconfirmed'),
('', '','Mirror Set,Jugs,Jars,Arbor','520','21','2023-8-5','Unconfirmed'),
('Modern Round', 'Full MR Rental Set','couch','768','22','2023-8-11','Unconfirmed'),
('Modern Round', 'Full MR Rental Set','couch','768','23','2023-8-12','Unconfirmed'),
('', '','Mirrors,Jugs','368','24','2023-9-1','Unconfirmed'),
('Modern Round', 'Full MR Rental Set','','768','25','2023-9-1','Unconfirmed'),
('', '','Mirrors,Jugs','368','26','2023-9-2','Unconfirmed'),
('Modern Round', 'Full MR Rental Set','','768','27','2023-9-2','Unconfirmed'),
('Dark Walnut', 'Full DW Rental Set','','687','28','2023-9-2','Unconfirmed'),
('Dark Walnut', 'Full DW Rental Set','','687','28','2023-9-3','Unconfirmed'),
('Layered Arch', 'Full LA Rental Set','','849','8','2022-9-7','Unconfirmed');";
$result = @mysqli_query($cnxn, $sql);
?>
