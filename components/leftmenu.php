<div class="leftmenu">
<div class="leftmenuitem"><a style='color:black;text-decoration:none' href='index.php'>მთავარი</a></div>
<?php
if(!isset($_SESSION['id'])){
    echo "<div class='leftmenuitem'><a style='color:black;text-decoration:none' href='loggin.php'>შესვლა</a></div>";
    echo "<div class='leftmenuitem'><a style='color:black;text-decoration:none' href='registration.php'>რეგისტრაცია</a></div>";

}else{
    echo "<div class='leftmenuitem'><a style='color:black;text-decoration:none' href='post.php'>სიახლის დამატება</a></div>";
    echo "<div class='leftmenuitem'><a style='color:black;text-decoration:none' href='logout.php'>გასვლა</a></div>";
}
?>


<div class="leftmenuitem"><a style='color:black;text-decoration:none' href='contact.php'>კონტაქტი</a></div>
</div>