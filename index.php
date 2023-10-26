<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        include('navbar.php');
    ?>

    <?php
        if (isset($_REQUEST['p'])) {
            include($_REQUEST['p']. '.php');
        }else {
    ?>

    <?php
        include('dashboard.php');
    }
    ?>

</body>
</html>