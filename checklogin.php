<?php
$con = new mysqli("localhost","root","","fitness hub");
// Check connection
if ($con->connect_error) {
  die("Failed to connect to MySQL: " .$con->connect_error);
  exit();
}

if(isset ($_POST["password"]) && isset($_POST["username"])){
$Password=$_POST["password"];
$Username=$_POST["username"];

$stmt = $con->prepare("SELECT * FROM login WHERE UserName = ?");
$stmt->bind_param("s", $Username);
$stmt->execute();
$stmt_result = $stmt->get_result();

if($stmt_result->num_rows > 0) {
  $data = $stmt_result->fetch_assoc();
  if($data["password"] === $Password) {
    echo'<script>alert ("Login Successfully")</script>';
    } 
  else {
    echo '<html>
          <head>
          <meta http-equiv="refresh" content="1;url=http://localhost/project/login%20form/index.php" />
          </head>
          <body>
         <div>';
            echo '<script>alert ("Invalid Email or password")</script>';
            echo '</div></body></html>';
  }
} else {
echo '<html>
<head>
<meta http-equiv="refresh" content="1;url=http://localhost/project/login%20form/index.php" />
</head>
<body>
<div>';
  echo '<script>alert ("Invalid Email or password")</script>';
  echo '</div></body></html>';
}
}
?>