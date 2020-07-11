
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

<?php
include_once("db.php");

if(isset($_POST['registration'])){
    $name=$_POST['name'];
    $pass=$_POST['pass'];
    $sql="INSERT into users (name,pass) VALUES ('$name','$pass')";
  if($name =="" || $pass==""){
      echo "sheiyvane rame!";
      return;
  }
  mysqli_query($db,$sql);
  header("Location: index.php");
 }
 
?> 

<form action="registration.php" method="post" enctype="multipart/form-data">
  <input style="margin-left:10px;margin-top:10px;" placeholder="name" type="text" name="name"><br><br>
  <input style="margin-left:10px;margin-top:10px;" placeholder="pass" type="password" name="pass" ><br><br>
  <input style="margin-left:10px;margin-top:10px;" name="registration" type="submit" value="registration">
</form>

</div>
</div>

<?php
    include "components/footer.php";
    ?>
</body>
</html>
