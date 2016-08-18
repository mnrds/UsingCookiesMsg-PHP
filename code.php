//Add this anywhere you want on your site. 
<?php
	$cookiemes = '';
	if(empty($_COOKIE['visited_1'])) { 
		echo "This website uses cookies. By using this website, you agree with that."; 
		setcookie("visited_1", visited_1, time()+3600);
	}
?>
