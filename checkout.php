<?php
require 'connection.php';
require 'item.php';

//Save new order
$qry = "insert into orders(name, datecreation, status, username) values('New Order', now(), 1,'$cookie_value') ";
mysqli_query($dbCon, $qry);

$ordersid = mysqli_insert_id($dbCon);
 
//Save order details for new order
$cart = unserialize(serialize($_SESSION['cart']));
for($i=0; $i<count($cart); $i++){
	mysqli_query($dbCon, 'insert into ordersdetail (productid, ordersid, price, quantity)
values('.$cart[$i]->id.', '.$ordersid.', '.$cart[$i]->price.', '.$cart[$i]->quantity.')');
}
//Clear all products in cart
unset($_SESSION['cart']);

?>

<br/><br/><center>
Thank you for buying 
<?php echo "$cookie_value"; ?>! Click <a href="indexx.php">here</a> to continue shopping.</center>