<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
  </head>
  <body>
    <h1><a href="index.php">Barceloven</a></h1>
    <ol>
        <li><a href="index.php?id=Devotion">Devotion</a></li>
        <li><a href="index.php?id=Music">Music</a></li>
        <li><a href="index.php?id=Orchestration">Orchestration</a></li>
        <li><a href="index.php?id=Church">Church</a></li>
      </ol>
<h2>
<?php
if(isset($_GET['id'])){
echo $_GET['id'];
} else {
  echo "Home";
}
  ?>
</h2>
<p>
  <?php
  if(isset($_GET['id'])) {
  echo file_get_contents("data/".$_GET['id']);
  } else {
    echo "Hello";
  }
  ?>
</p>
  </body>
</html>
