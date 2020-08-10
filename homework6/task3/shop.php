<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<?php
        include "config.php";
        $sql = "select * from reviews";
        $query = mysqli_query($connect,$sql);
        $sql = "insert into reviews (name , text) VALUES ($_POST[name], $_POST[text])";
    if (mysqli_query($connect, $sql)) {
        echo "New record created successfully";
    }
        while ($base = mysqli_fetch_assoc($query)){ ?>
            <h2> <?=$base[name]?></h2>
            <p><?=$base[text]?></p>
            <i><?=$base[time]?></i>
        <?php }?>
    <form action="shop.php" method="post">
    <br/><input type="text" name="name" placeholder="Введите ваше имя">
    <br/><textarea name="text"  cols="30" rows="10" placeholder="Введите ваш отзыв"></textarea>
    <input type="submit">
    </form>
</body>
</html>
