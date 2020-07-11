


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
if(!isset($_SESSION['id'])){
header("Location:loggin.php");
return;
} 
if(!isset($_GET['pid'])){
    header("Location:index.php");
    return;
}
$pid=$_GET['pid'];
if(isset($_POST['update'])){
   $title=$_POST['title'];
   $content=$_POST['content'];
   $date=date('l jS \of F Y h:i:s:A');
   $sql="UPDATE news set title='$title', content='$content', date='$date' WHERE id=$pid";
 if($title =="" || $content==""){
     echo "sheiyvane rame!";
     return;
 }
 mysqli_query($db,$sql);
 header("Location: index.php");
}

?>

<?php
$sql_get="SELECT * FROM news WHERE id=$pid";
$res=mysqli_query($db,$sql_get);
if(mysqli_num_rows($res)>0){
    while($row=mysqli_fetch_assoc($res)){
    $title=$row['title'];
    $content=$row['content'];
 echo  " <form action='edit_post.php?pid=$pid' method='post' enctype='multipart/form-data'> ";
 echo " <input value='$title' type='text' name='title'><br><br> ";
 echo " <textarea name='content' rows='20' cols='30'>$content</textarea><br><br> ";

    }
}
?>

  <input name="update" type="submit" value="Update">
</form>

</div>
</div>

<?php
    include "components/footer.php";
    ?>
</body>
</html>