<!--man header-->
<html>
<style>
*{
	margin:0;
	padding:0;
	list-style:none;
	text-decoration:none;
}
body {
		font-family: verdana;
		padding: 50px;
		background-color:#ABC;
		
	}
		
h1 {
		text-align: center;
		margin-bottom: 10px;
	}
	


/* rules for navigation menu */
	/* ========================================== */
	
	ul#navmenu {
		width: 650px;
		margin: 0px auto;
	}

	ul#navmenu, ul.sub1, ul.sub2 {
		list-style-type: none;
		font-size: 9pt;
		}
		
	ul#navmenu li {
		width: 125px;
		text-align: center;
		position: relative;		/*allow position of sub menu*/
		float: left;
		margin-right: 4px;		/*spaces between list */
		}
		
	ul#navmenu a {
		text-decoration: none;	/*eliminate  underline on links */
		display: block;			/*click inside the block, not just the hyperlink */
		width: 125px;
		height: 25px;
		line-height: 25px;
		background-color: #FFF;
		border: 1px solid #CCC;
		border-radius: 5px;
		}
		

	ul#navmenu li:hover > a {
		background-color: lightblue;		/*hover color*/
		}
		
	ul#navmenu li:hover a:hover {
		background-color: #CFC;		/*hover sub color*/
		}
		
	ul#navmenu ul.sub1 {
		display: none;
		position: absolute;
		top: 26px;
		left: 0px;
		}
		
	ul#navmenu ul.sub2 {
		display: none;
		position: absolute;
		top: 0px;
		left: 126px;
		}
		
	ul#navmenu li:hover .sub1 {		/*displays sub menu*/
		display: block;
		}
		
	ul#navmenu .sub1 li:hover .sub2 {
		display: block;
		}
		
	.darrow {
		font-size: 11pt;
		position: absolute;
		top: 5px;
		right: 4px;
		color: black;
		}
		
	.rarrow {
		font-size: 10pt;
		position: absolute;
		top: 2px;
		right: 4px;
		color: black;
		}
		
#header {
		background-color:#EEEEEE;
		text-align:center;
		padding:5px;
		margin-bottom: 5px;
	}
	

	

#footer {
		background-color: lightblue;
		color: rgb(0,0,100);;
		clear:both;
		text-align:center;
		padding:5px;	
		
}
.search{
	position: absolute;
	margin: 380px;
	top: -600px;
	height:20px;
	padding:5px 5px 5px 5px;
	font-size: 9pt;
}

.search1{
	position: absolute;
	margin: 570px;
	top: -788.5px;
	height:30px;
	padding:5px 25px 15px 20px;
	font-size: 9pt;
	background-color: lightblue;
}

.search:focus{
	width: 23%;
}

</style>
<?php include $_SERVER["DOCUMENT_ROOT"] . '/php/menu.php';?>
<?php include $_SERVER["DOCUMENT_ROOT"] . '/php/checkout.php';?>
<!--page info-->
<?php





?>
<!--body-->


</html>
