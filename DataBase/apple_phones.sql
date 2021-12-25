-- Table structure for table `cart`


CREATE TABLE `cart` (
  `cart_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL
)

-- Table structure for table `product`

CREATE TABLE `product` (
  `item_id` int(11) NOT NULL,
  `item_brand` varchar(255) NOT NULL,
  `item_name` varchar(255) NOT NULL,
  `item_price` double(10,2) NOT NULL,
  `item_type` varchar(255) NOT NULL,
  `item_image` varchar(255) NOT NULL,
  `item_register` datetime DEFAULT NULL
) 


-- inserting data for table `product`


INSERT INTO `product` (`item_id`, `item_brand`, `item_name`, `item_price`, `item_type`, `item_image`, `item_register`) VALUES
(1, 'Apple', 'Iphone 5', 150.00, 'old','./assets/products/1jfif.jfif', '2021-11-22 11:08:57'), 
(2, 'Apple', 'Iphone 6', 200.00, 'old', './assets/products/2.jfif', '2021-11-22 11:08:57'),
(3, 'Apple', 'Iphone 7', 300.00, 'old','./assets/products/3.jfif', '2021-11-22 11:08:57'),
(4, 'Apple', 'Iphone 8', 350.00, 'new', './assets/products/4.jfif', '2021-11-22 11:08:57'),
(5, 'Apple', 'Iphone x', 400.00, 'new','./assets/products/5.jfif', '2021-11-22 11:08:57'),
(6, 'Apple', 'Iphone X Max', 600.00,'new', './assets/products/5.jfif', '2021-11-22 11:08:57'),
(7, 'Apple', 'Iphone 11', 700.00,'new', './assets/products/6.jfif', '2021-11-22 11:08:57'),
(8, 'Apple', 'Iphone 11 Pro', 1000.00,'upcoming', './assets/products/6.jfif', '2021-11-22 11:08:57'),
(9, 'Apple', 'Iphone 12', 1200.00, 'upcoming', './assets/products/7.jfif', '2021-11-22 11:08:57'),
(10, 'Apple', 'Iphone 13', 1400.00,'upcoming', './assets/products/8.jfif', '2021-11-22 11:08:57')

-- --------------------------------------------------------

--




-- Table structure for table `user`

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `register_date` datetime DEFAULT NULL
) 


-- inserting data for table `user`

INSERT INTO `user` (`user_id`, `first_name`, `last_name`, `register_date`) VALUES
(1, 'nour', 'abshir', '2021-11-22 13:07:17'),
(2, 'salman', 'roble', '2021-11-22 13:07:17');

-- Table structure for table `wishlist`


CREATE TABLE `wishlist` (
  `cart_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL
) 
-- Table structure for table `users`
CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `user_f_Name` varchar(255) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `user_uid` varchar(255) NOT NULL,
  `user_pswd` varchar(255) NOT NULL
)

CREATE TABLE confirm_order_product(
    id int(11) not null PRIMARY KEY AUTO_INCREMENT,
    order_id int(11) not null,
    product_name varchar(255) not null,
    product_price varchar(255) not null,
    product_qty varchar(255) not null,
    product_image varchar(255) not null,
    product_total varchar(255) not null
)