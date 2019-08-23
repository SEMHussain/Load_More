<?php
    include "db.php";
    if(!empty($_GET['last_id']))
    {
        $query = "SELECT * FROM `load` WHERE id > {$_GET['last_id']} limit 2";
        $result = mysqli_query($con , $query);
        $lastid;
        if(mysqli_num_rows($result) > 0)
        {
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<h3>" . $row['name'] . "</h3>";
                $lastid = $row['id'];
            }


            ?>
            <button id="btn" data-id="<?php echo $lastid; ?>">Load more...</button>
    <?php
        }else{ echo "no more data"; }
    }
    else{ echo "NO DATA :("; }
?>

