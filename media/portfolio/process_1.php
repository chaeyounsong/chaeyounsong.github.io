<?php

  $conn = mysqli_connect("localhost","root", "agnes417");
  mysqli_select_db($conn, "chaeyoun");
  $sql="INSERT INTO topic (`title`,`description`,`author`,`created`) VALUES('".$_POST['title']."','".$_POST['description']."','".$_POST['author']."',now())";
  $result = mysqli_query($conn, $sql);
  header('Location:http://localhost:8008/php/index.php');
?>
