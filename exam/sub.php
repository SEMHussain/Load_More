<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>XiTEB SUB</title>
    <style>
        .a{background-color: aqua; width: 150px; height: 150px; float: left; margin: 10px;}
    </style>
</head>
<body>
    <?php
        include "db.php";
        $query = "SELECT * FROM sub_cat WHERE cat_id = {$_GET['id']} ";
        $result = mysqli_query($con , $query);
        while($row = mysqli_fetch_assoc($result))
        {
            ?>
            <a href="product.php?id=<?php echo $row['id']?>">
                <div class="a">
                    <?php echo $row['sub_name']; ?>
                </div>
            </a>
            <?php
        }
    ?>

</body>
</html>