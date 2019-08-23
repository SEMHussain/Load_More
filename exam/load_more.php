<?php
    include  "db.php";
    $query = "SELECT * FROM product WHERE id > {$_GET['lastid']}";
?>