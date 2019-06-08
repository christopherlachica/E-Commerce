<?php include $_SERVER["DOCUMENT_ROOT"] . '/php/menu.php';?>
<br/><br/><center><?php echo isset($error)? $error: "";?></center>
<form class="formform" action="/php/logrep.php" method="post">
	<fieldset>	
		<legend>Login Form</legend>
		<label>
			Username: <span color="red">*<input type="text" name="username" placeholder="E-mail Address.."/>
		</label><br/>
		<label>
			Password: <span color="red">*<input type="password" name="pass" placeholder="Password.."/>
		</label><br/>
		<input class="placeButtons" type="submit" name="submit" value="Login"/>
		<input class="placeButtons" type="reset"/> 
	</fieldset>
</form>
		
<form class="form1" name="NewCustomer" action="/php/reg.php" method="get">
	<fieldset>
		<legend>New Customer Sign-Up</legend>
		<p>Create a partsRus.com account today. With a partsRus.com account, 
		you'll be able to conveniently place orders, 
		check the status of your recent orders and much more. <br/><br></p>
		<input class="placeButtons1" type="submit" value="Create New Account" />
	</fieldset>
</form>

</nav>

</header>