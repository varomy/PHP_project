
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

if(isset($_POST['post'])){



   $title=$_POST['title'];
   $content=$_POST['content'];
   $date=date('l jS \of F Y h:i:s:A');
   $sql="INSERT into news (title,content,date) VALUES ('$title','$content','$date')";
 if($title =="" || $content==""){
     echo "sheiyvane rame!";
     return;
 }
 mysqli_query($db,$sql);
 header("Location: index.php");
}

?>

<form action="post.php" method="post" enctype="multipart/form-data">
  <input  style="margin-left:10px;margin-top:10px;"placeholder="title" type="text" name="title"><br><br>
  <textarea  style="margin-left:10px;margin-top:10px;"placeholder="content" name="content" rows="20" cols="30"></textarea><br><br>
  <input  style="margin-left:10px;margin-top:10px;"name="post" type="submit" value="Post">
</form>





</div>
</div>

<?php
    include "components/footer.php";
    ?>
</body>
</html>


