

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
    $pid=$_GET['pid'];
$sql="SELECT *FROM news WHERE id=$pid";  
$res=mysqli_query($db,$sql) or die(mysqli_error());
$posts="";
if(mysqli_num_rows($res)>0){
while($row=mysqli_fetch_assoc($res)){
$id=$row['id'];
$title=$row['title'];
$content=$row['content'];
$date=$row['date'];
$del="";
if(!isset($_SESSION['id'])){
}else{
$del="<div style='margin-left:10px;margin-bottom:10px;'><a href='del_post.php?pid=$id'>Delete</a>&nbsp;<a href='edit_post.php?pid=$id'>Edit</a></div>";
}
$posts .="<div style='width:70%;margin:auto;margin-top:30px;'><h2 style='margin-left:10px;margin-top:10px;color:red;'>$title</h2><h3 style='margin-left:10px;margin-top:10px;'>$date</h3><p style='color:green;margin-left:10px;margin-top:10px;'>$content</p>$del</div>";

}

echo $posts;
}else{echo "no posts";}

?>
</div>
</div>

<?php
    include "components/footer.php";
    ?>
</body>
</html>