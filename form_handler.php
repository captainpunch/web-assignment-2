
<?php  
$bgcolor = $_REQUEST['bgcolor'];
$fgcolor = $_REQUEST['fgcolor'];
$name = $_REQUEST['name'];

echo "<style>
	body{
		background-color:".$bgcolor.";
		color:".$fgcolor.";
	}
	</style>";
	
//if (!empty($_REQUEST['name'])) {
	echo "<h1>".$name."</h1>";
	echo "<p>You were refered by: ". $_SERVER["HTTP_REFERER"]."</p>";
	echo "<p>You are broswing using: ". $_SERVER["HTTP_USER_AGENT"]."</p>";
	echo "<p>Your IP address is: ". $_SERVER["REMOTE_ADDR"]."</p>";
//} else {
//	echo '<p class="error">You forgot to enter your name!</p>';
//}


?>

