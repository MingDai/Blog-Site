<?php
    $host = "localhost";
    $username = "root";
    $password = "";
    $db_name = "mysqladmin";
    $table = "s_chat_messages";
    
    mysql_connect("$host", "$username", "$password") or die ("Could not connect.");
    mysql_select_db("$db_name") or die ("Could not select database.");
?>

