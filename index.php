<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>LOAD MORE</title>
</head>
<body>
    <div id="lod">
        <?php
            include "db.php";
            $query = "SELECT * FROM `load` limit 2";
            $result = mysqli_query($con , $query);
            $lastid;
            while($row = mysqli_fetch_assoc($result))
            {
                echo "<h3>".$row['name']."</h3>";
                $lastid = $row['id'];
            }
        ?>
    </div>

    <button id="btn" data-id="<?php echo $lastid; ?>">Load more...</button>
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    <script>
        $(document).ready(function(){
            $(document).on('click' , '#btn' , function(){
                var a = $(this).data('id');
                $.ajax({
                    url : 'load.php',
                    data : {last_id : a},
                    success:function(data){
                        $("#btn").remove();
                        $("#lod").append(data);
                    }
                });
            });
        });
    </script>
</body>
</html>