
<?php
require 'connection.php';
require 'item.php';

if(isset ($_GET ['id'])&& !isset($_POST['update'])){
	$result = mysqli_query ($dbCon, 'select * from product where id=' . $_GET['id']);
	$product = mysqli_fetch_object ($result);
	$item = new Item ();
	$item->id = $product->id;
	$item->name = $product->name;
	$item->price = $product->price;
	$item->quantity = 1;
	//Check product is existing in cart
	$index = - 1;
	if(isset($_SESSION['cart'])){
		$cart = unserialize (serialize ($_SESSION['cart']));
		for($i = 0; $i<count($cart); $i++)
			if($cart[$i]->id == $_GET['id']){
				$index = $i;
				break;
			}
	}
	if(($index == -1))
		$_SESSION['cart'][]= $item;
	else{
		$cart[$index]->quantity++;
		$_SESSION['cart'] = $cart;
	}
}

//Delete product in cart
if(isset($_GET['index']) && !isset($_POST['update'])){
	$cart = unserialize(serialize($_SESSION['cart']));
	unset($cart[$_GET['index']]);
	$cart = array_values($cart);
	$_SESSION['cart'] = $cart;
}

//update quantity in cart
if(isset($_POST['update'])){
	$arrQuantity = $_POST['quantity'];
	
	//check validate quantity
	$valid = 1;
	for($i=0; $i<count($arrQuantity); $i++)
		if(!is_numeric($arrQuantity[$i]) || $arrQuantity[$i] < 1){
			$valid = 0;
			break;
		}
	if($valid == 1){
		$cart = unserialize(serialize($_SESSION['cart']));
		for($i = 0; $i<count($cart); $i++){
			$cart[$i]->quantity = $arrQuantity[$i];
		}
		$_SESSION['cart'] = $cart;
	}
	else
		$error ='<br/><br/><br/><br/><center>Please enter a valid Quantity number!</center>';
}
?>
<?php echo isset($error) ? $error : ''; ?>

<form method="post"><center><br></br>
	<table cellpadding="2" cellspacing="2" border="0" style="top: 35px;">
	
		<tr>
			<br />
			<th>Name</th>
			<th>Price</th>
			<th>Quantity</th>
			<th></th>
			<th>Sub Total</th>
		</tr>
		<?php
		$cart = unserialize(serialize($_SESSION['cart']));
		$s = 0;
		$index = 0;
		for($i=0; $i<count($cart); $i++){
			$s += $cart[$i]->price * $cart[$i]->quantity;
			?>
		<tr>
			<td width="150px"><a href="#"><?php echo $cart[$i]->name; ?></td>
			<td width="100px"><?php echo '$'. $cart[$i]->price; ?></a></td>
			<td><input type="text" value="<?php echo $cart[$i]->quantity; ?>" style="width: 35px;" name="quantity[]"><input type="image" title="Edit Quantity" src="/php/image/img icon/add-to-cart-light.png" height="25px" width="32px"><input type="hidden" name="update"></td>
			<td width="100px"><a href="/php/addtocart.php?index=<?php echo $index; ?>" onclick="return confirm('Are you sure?')">Delete</a></td>
			<td>$<?php echo $cart[$i]->price*$cart[$i]->quantity; ?></td>
		</tr>
		<?php
			$index++;
		}
		?>
		<tr>
			<td colspan="4" align="right">Sub Total: </td>
			<td align="left">$<?php echo $s; ?></td>
		</tr></center>
	</table>
</form>

<form class="pro" name="product" action="/php/productlayout.php">
	<input type="submit" name="Continue Shopping" value="Continue Shopping" style="background: lightblue"></a>  
</form>
<form class="check" name="Checkout" action="/php/checkoutlayout.php">
	<input type="submit" name="Checkout" value="Checkout" style="background: lightblue"></a>
</form>