<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<style type="text/css">
    img{
        width: 150px;
        height: 150px;
        margin: 40px;
    }img:hover{
         outline: 1px solid black;
     }
</style>
</body>
</html>

<?php
    $dir = "img";
    $img = array_slice(scandir($dir),2);
    for($i = 0; $i< count($img); $i++){ ?>
        <a href="<?=$dir."/".$img[$i]?>" target="_blank"><img src="<?=$dir."/".$img[$i]?>"></a>

    <?php } ?>
