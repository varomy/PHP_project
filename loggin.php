
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
session_start();
include_once("db.php");

if(isset($_POST['login'])){
    $name=$_POST['name'];
    $pass=$_POST['pass'];
    $sql="SELECT *FROM users WHERE name='$name' LIMIT 1";

  $query=mysqli_query($db,$sql);
  $row=mysqli_fetch_array($query);
  $id=$row['id'];
  $db_pass=$row['pass'];
  if($pass==$db_pass){
  $_SESSION['name']=$name;
  $_SESSION['id']=$id;
  header("Location: index.php");
  }else{echo "sheiyvane sworad";}

 }
?> 

<form action="loggin.php" method="post" enctype="multipart/form-data">
  <input style="margin-left:10px;margin-top:10px;" placeholder="name" type="text" name="name">
  <input style="margin-left:10px;margin-top:10px;" placeholder="pass" type="password" name="pass" >
  <input style="margin-left:10px;margin-top:10px;" name="login" type="submit" value="login">
</form>


</div>
</div>

<?php
    include "components/footer.php";
    ?>
</body>
</html>
