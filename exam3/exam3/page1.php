<?php session_start();?>
<?php
include './templates/footer.html';
include './templates/header.html';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel ='stylesheet' href ='./css/main.css'>
    <title>Gestion</title>
</head>
<body>
  <h1>Gestion des modules</h1>
  <form action="index.php" method="GET">
  <label class="container">TEXT 
    <input type="checkbox" name="module1" value="1">
      <span class="checkmark"></span>
  <label class="container">VIDEO
    <input type="checkbox" name="module2" value="2">
      <span class="checkmark"></span>
  <label class="container">IMAGE
    <input type="checkbox" name="module3" value="3">
      <span class="checkmark"></span>
  <input type="submit" value="Submit">
  <span class="checkmark"></span>
  </form>
</body>
</html>
