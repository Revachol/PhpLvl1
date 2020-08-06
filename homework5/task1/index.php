<style>
    img{
        width: 150px;
        height: 150px;
    }
</style>
<?php
    const SERVER = "homework5";
    const DB = "gallery";
    const LOGIN = "root";
    const PS = "";
    $connect = mysqli_connect(SERVER,LOGIN,PS,DB);
    $sql = "select * from gallery";
    $query = mysqli_query($connect,$sql);

    while ( $base = mysqli_fetch_assoc($query)){?>

        <a href="image/<?=$base[id]?>.php"><img src="img/<?=$base[id]?>.jpg" alt=""></a>

   <?php } ?>
