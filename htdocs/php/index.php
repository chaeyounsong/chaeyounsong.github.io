<?php
$conn = mysqli_connect("localhost","root", "agnes417");
mysqli_select_db($conn, "chaeyoun");
$result = mysqli_query($conn, "SELECT * FROM topic");
?>

<!DOCTYPE html>
<html>
<head>

    <meta charset="utf-8" />
    <title>chaeyounsong</title>
    <link rel="stylesheet" type="text/css" href="http://localhost:8008/style.css">


  </head>

</script>
<body id = 'target'>


  <header>
    <a href="http://localhost:8008/php/index.php"><img src="http://localhost:8008/img/home.png" alt="test_logo">
    <h1>JavaScript</h1>
    <p>Hello stranger! I'm Chaeyoun. This is my first test page.</p>
  </header>


<nav>
    <ol>
      <?php
      while($row = mysqli_fetch_assoc($result)){
        echo '<li><a href="http://localhost:8008/php/index.php?id='.$row['id'].'">'.$row['title'].'</li></a>'."\n";
      }
      ?>
    </ol>
</nav>

<div class="control">


  <input class="btnDesign" type="button" value="white" onclick="document.getElementById('target').className='white'" />
  <input class="btnDesign" type="button" value="black" onclick="document.getElementById('target').className='black'" />

</div>

<article>


  <?php
   if(empty($_GET['id']) === false ) {
       $sql = 'SELECT * FROM topic WHERE id='.$_GET['id'];
       $result = mysqli_query($conn, $sql);
       $row = mysqli_fetch_assoc($result);
       echo '<h2>'.$row['title'].'</h2>';
       echo $row['description'];
   }else{
        echo '<img class="main-img" src="http://localhost:8008/img/computer.png" alt="icon" />';
   }

   ?>

</article>

</body>
</html>
