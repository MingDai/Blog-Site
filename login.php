<?php 
    session_start(); 
    // dBase file 
include($_SERVER['DOCUMENT_ROOT']."/db/db.php");
    if (!$_POST["email"] || !$_POST["password"])    { 
    die("You need to provide a email and password."); 
    } 

    $email = $_POST['email'];
    $password = $_POST['password'];

    $email = stripslashes($email);
    $password = stripslashes($password);
    $email = mysql_real_escape_string($email);
    $password = mysql_real_escape_string($password);
    // Create query 
    $sql="SELECT * FROM $table WHERE password='$password' and email='$email'";
    $result=mysql_query($sql);

    // Mysql_num_row is counting table row
    $count=mysql_num_rows($result); 

   // If result matched $myusername and $mypassword, table row must be 1 row
    if($count==1){

    // Register $myusername, $mypassword and redirect to file "login_success.php"
    $_SESSION["valid_id"] = $obj->id; 
    $_SESSION["valid_user"] = $_POST["email"]; 
    $_SESSION["valid_time"] = time(); 
    header("location:/feed/index.php");
    }
    else {
    echo "Wrong email or Password";
    }
    ?>
    