<?php
	//	Add this anywhere you want on your site or use include command from readme. 
	//	Updated 8.9.2016
	//	  - Added OK button
	//	  - Added Read more
	// 	  - Fixed code
	
	if(empty($_COOKIE['visited_1'])) { 
		echo "<form action='{$_SERVER['PHP_SELF']}' method='post'><input type='hidden' name='cookOK' value='logcookie'>
		This website uses cookies. By using this website, you agree with that. 
		<input type='submit' value='OK' /></form> - 
		Read more <a href='privacy.html'>here</a>. "; 
	}

	if($_POST["cookOK"]=="logcookie") {
	setcookie("visited_1", visited_1, time()+3600);
	header("Refresh:0");
	}
?>
