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
        br {clear: both}
    </style>
</head>
    <body>
        <?php
            include "db.php";
            $query = "SELECT * FROM product WHERE sub_cat_id = {$_GET['id']} limit 2 ";
            $result = mysqli_query($con , $query);
            $lastid;
            while($row = mysqli_fetch_assoc($result))
            {
                ?>
                <a href="sub.php?id=<?php echo $row['sub_cat_id']?>">
                    <div class="a">
                        <?php echo $row['product_name']; ?>

                    </div>
                </a>
                <?php
                $lastid = $row['id'];
            }
        ?>
        <br><br>
        <button id="btn" data-id="<?php echo $lastid; ?>" >Load ore...</button>
        <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    <script>
        $(document).ready(function(){
            $(document).on('click' , '#btn' , function(){
                var lastid = $(this).data('id');
                $.ajax({
                    url:'load_more.php',
                    data : {lastid : lastid},
                    success:function(data){
                        console.log(data)
                    }
                });
            });
        });
    </script>
    </body>
</html>