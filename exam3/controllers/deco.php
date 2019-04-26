<?php
include '../templates/footer.html';
include '../templates/header.html';
session_start();
session_destroy();
header("refresh:0;url=../index.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel='stylesheet' href="../css/main.css">
  <title>Deco</title>
</head>
<body>
</body>
</html>