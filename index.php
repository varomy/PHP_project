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
    include "components/content.php";
    include "components/footer.php";
    ?>
</body>
</html>