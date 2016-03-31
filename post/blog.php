<?php
include($_SERVER['DOCUMENT_ROOT']."/db/blogs.php");
session_start();
if (isset($_POST['blog']))
	{
	$topic  = $_GET['topic'];
	$blog= $_POST['blog'];
	$blog = mysql_real_escape_string(stripslashes($blog));
	$email = $_SESSION["valid_user"];
	$email = mysql_real_escape_string(stripslashes($email));

	$sql = "INSERT INTO $table(email,content,cat) VALUES ('$email','$blog','$topic')";
	mysql_query($sql);
	header("location:/feed");
	}
?>