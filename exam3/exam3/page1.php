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
    <input type="checkbox" name="module1" value="1"> TEXT <br>
    <input type="checkbox" name="module2" value="2"> VIDEO <br>
    <input type="checkbox" name="module3" value="3"> IMAGE <br>
    <input type="submit" value="Submit">
  </form>
</body>
</html>
