
<!doctype html>
<meta http-equiv="refresh" content="20">

<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Nicaragua</title>
  <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/2.1.1/css/bootstrap.min.css">
</head>
<body style="background-image:url('coffeebeans.jpeg');background-repeat:repeat;">

<div class="navbar">
  <div class="navbar-inner">
    <a class="brand" href="#">Nicaragua</a>
    <ul class="nav">
      <li  class="active" ><a href="/feed">Feed</a></li>
      
      <li><a href="/post">Post</a></li>
  <li><a href="/chat">Chat</a></li>
<li><form action="/logout.php">
  <button  class ="btn btn-default"type="submit"> Log Out </button></form></li>  
    </ul>
  </div>
</div>
  
    <?php include($_SERVER['DOCUMENT_ROOT']."/db/blogs.php"); 

        $sqltopic="SELECT * FROM $table";
  $result=mysql_query($sqltopic);
while($row = mysql_fetch_array($result)){
  $cat = $row['cat'];
  $email = $row['email'];
  $content = $row['content'];
  echo "<div style=''> <h2 style='margin-left:30px;color:#BDFFBD;wmargin-right:30px;'> $cat </h2> </div>";
  echo "<div style=''> <h3  style='margin-left:30px;margin-right:30px;color:white;'> $email </h3> </div> ";
  echo "<div class='well well-large'  style='background-color:#BDFFBD;margin-left:30px;margin-right:30px;'> <pre><p  style='font-size:16px;'> $content</p> </pre></div> ";
} 
mysql_close();
  ?>
 
  
</div>



</body>
</html>