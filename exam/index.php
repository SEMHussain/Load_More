<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>XiTEB</title>
    <style>
        .a{background-color: aqua; width: 150px; height: 150px; float: left; margin: 10px;}
    </style>
</head>
<body>
    <?php
        include "db.php";
        $query = "SELECT * FROM category";
        $result = mysqli_query($con , $query);
        while($row = mysqli_fetch_assoc($result))
        {
    ?>
            <a href="sub.php?id=<?php echo $row['id']?>">
                <div class="a">
                  <?php echo $row['cat_name']; ?>
                </div>
            </a>
    <?php
        }
    ?>

</body>
</html>