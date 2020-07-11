
<div class="content">
<?php  include "leftmenu.php"; 
include_once("db.php");
?>
<div class="news">


    <?php
      $page = isset($_GET['page'])? $_GET['page']:1;
      if($page==0){$page=1;}
      $limit=3;
      $offset=$limit*($page-1);
$sql="SELECT *FROM news ORDER BY id DESC LIMIT $limit OFFSET $offset";  
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
$posts .="<div style='border:solid black 2px'><h2><a style='margin-left:10px;margin-top:10px;' href='view_post.php?pid=$id'>$title</a></h2><h3 style='margin-left:10px;margin-top:10px;'>$date</h3><p style='margin-left:10px;margin-top:10px;'>$content</p>$del</div>";

}

echo $posts;
}else{echo "no posts";}

echo "<div class='navigation'><a style='text-decoration:none' href='?page=".($page-1)."'><</a>"."----".$page."----"."<a style='text-decoration:none' href='?page=".($page+1)."'  >  ></a></div>";
?>
</div>
</div>