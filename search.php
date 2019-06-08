<?php

if(isset($_POST['search'])){
	$valueToSearch = $_POST['valueToSearch'];
	$query = "SELECT * FROM product WHERE CONCAT(`name`, `description`, `type`)	LIKE '%". $valueToSearch."%'";
	$search_result = filterTable($query);
}
 
 function filterTable($query){
	 $connect = mysqli_connect("localhost", "root", "bryzki", "dbtest");
	 $filter_Result = mysqli_query($connect, $query);
	 return $filter_Result;
 }
?>

<div class="left1">
<div class="padding">
<div class="divhead"><h2><center>Search Results for "<?php echo $_POST['valueToSearch'] ?>"</center></h2></div>
<div class="indexbody">
<table cellpadding="2" cellspacing="4" border="0" font="11">
	<tr>
		<th style="width:30%"></th>
		<th style="width:60%">Name</th>
		<th style="width:40%">Price</th>
		<th></th>
	</tr>
	<?php while($product = mysqli_fetch_object($search_result)){?>
		<tr>
			<td>
				<?php echo '<img class="imgsql" src="data:image/jpeg;base64,'
				.base64_encode($product->image) .'" />'; ?>
			</td>
			<td width="200px">
				<?php echo '<img class="iconsql" src="data:image/jpeg;base64,'
				.base64_encode($product->icon) .'" />'; ?><br/>
				<h4 style="font-size: 14pt"><a href="#"><?php echo $product->name; ?></h4></a><br/>
					<?php echo $product->description; ?><br/>
					<a href="#">Details</a><br/><br/>
			</td>
			<td></td>
			<td>
				<h4>$<?php echo $product->price; ?></h4><br>
				<p style="font-size: 9pt"><?php echo $product->shipping; ?></p>
				<a href="/php/addtocart.php?id=<?php echo $product->id; ?>&action=add" >
				<input type="submit" class="order" name="Order now" 
				value="Add to Cart" style="background: orange"></a>
			</td>
		</tr>
	<?php } ?>
</table>

</div>

</div>
</div>