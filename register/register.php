 <?php 
    // dbConfig.php is a file that contains your 
    // database connection information. This 
    // tutorial assumes a connection is made from 
    // this existing file. 
include($_SERVER['DOCUMENT_ROOT']."/db/db.php");
    //Input vaildation and the dbase code  
    $bInputFlag = false; 
    foreach ( $_POST as $field ) 
    { 
    if ($field == "") 
    { 
    $bInputFlag = false; 
    } 
    else 
    { 
    $bInputFlag = true; 
    
    } 
    // If we had problems with the input, exit with error 
    if ($bInputFlag == false) 
    { 
    die( "Problem with your registration info. " 
    ."Please go back and try again."); 
    } 
}
    $email = $_POST['email'];
    $password = ($_POST['password']);
    $email = stripslashes($email);
    $email = mysql_real_escape_string($email);

    // Fields are clear, add user to database 
    // Setup query 
   $sql="INSERT INTO $table(password,email)
            VALUES
            ('$password','$email')";
            mysql_query($sql);
    // Make sure query inserted user successfully 
    if ( !mysql_insert_id() ) 
            { 
            die("Error: User not added to database."); 
            } 
        else 
            { 
            // Redirect to lgoin page. 
            Header("Location: /"); 
            } 
    ?>