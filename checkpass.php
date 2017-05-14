<?php
$pass =  md5($_POST["pass"]);
$username = $_COOKIE["name"];
 include("dbcon.php");
$q ='Select * from user where user_ID = "'.$username.'" and password = "'.$pass.'";';
		 mysql_select_db('968907');
		$result = mysql_query($q,$conn);
		$row = mysql_fetch_assoc($result);
		if($row)
			echo 1;
		else
			echo 0;
?>