<header class = "navmenu">

<div class="addcart" style="position: absolute; width: 250px;">
  <div style="position: absolute; top: 20px; align-right: right;right: -700px;width: 500px; text-align:right;"><a href="addtocart.php">
    Cart() </a>
  </div>
  <div class="signup" style="position: absolute; bottom: 0; top: 20px;right: -850px; width: 140px; text-align:right;">
    <a href="/php/loginsuccess.php">
	<?php 
	session_start();

	include("connection.php");
	if(isset($_COOKIE[$cookie_name])){
		$cookie_value = $_COOKIE[$cookie_name];
		echo "$cookie_value";
		echo '              <a style="font-size:9pt" href="logout.php">Logout</a>';
	}
	else{
		echo '<a href="/php/signup.php">Sign Up/Register</a>';
	}
	?></a>
  </div>

</div>

	<a href="/php/indexx.php"><img class = "logo" src="/php/image/logo.png" ></a>
	<form action="/php/searchLayout.php" method="post">
	<input type="text" class="search" name="valueToSearch" placeholder="Keywords, Model# or Item #..">
	<input type="submit" class="search1" name="search" value="Search"></form>
<nav>

<ul id="navmenu">
	<li><a href="#">Brands</a><span class="darrow">&#9660;</span>
		<ul class="sub1">
			<li><a href="/php/brand.php">Asus</a></li>
			<li><a href="/php/brand1.php">Corsair</a></li>
			<li><a href="/php/brand2.php">Razer</a></li>
		</ul>
	</li>
	<li><a href="#">Product</a><span class="darrow">&#9660;</span>	
		<ul class="sub1">
			<li><a href="#">System</a><span class="rarrow">&#9654;</span>
				<ul class="sub2">
					<li><a href="/php/systemlaptop.php">Gaming Laptop</a></li>
					<li><a href="/php/systemdesktop.php">Gaming Desktop</a></li>
				</ul>
			</li>
			<li><a href="#">Peripherals</a><span class="rarrow">&#9654;</span>
				<ul class="sub2">
					<li><a href="/php/peripherals.php">Keyboard</a></li>
					<li><a href="/php/peripherals2.php">Mice</a></li>
					<li><a href="/php/peripherals3.php">Audio</a></li>
				</ul>
			</li>
			<li><a href="#">Case</a><span class="rarrow">&#9654;</span>
				<ul class="sub2">
					<li><a href="/php/case1.php">Full Tower</a></li>
					<li><a href="/php/case2.php">Mid Tower</a></li>
				</ul>
			</li>
			<li><a href="/php/monitor.php">Monitor</a></li>
		</ul>
	</li>
	<li><a href="/php/productlayout.php">All Products</a></li>
	<li><a href="#">Support</a><span class="darrow" color="black">&#9660;</span>
		<ul class="sub1">
			<li><a href="#">Track An Order</a></li>
			<li><a href="#">Return An Item</a></li>
		</ul>
	</li>
	<li><a href="#">Contact Us</a></li>
</ul>


</div>
		