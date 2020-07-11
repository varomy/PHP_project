<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
    session_start();
    require_once "db.php";
    include "components/header.php";
    include "components/slider.php";
?>
<div class="content">
<?php  include "components/leftmenu.php"; 
include_once("db.php");
?>
<div class="news">
    <div style="margin:auto;width:80%;">
<h1>tel: 598 30 17 14</h1>
<h1>Email: email@email.com</h1>
<h1>Fax: 2 322 55884475</h1>
</div>
</div>
</div>

<?php
    include "components/footer.php";
    ?>
</body>
</html>