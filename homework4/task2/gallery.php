<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script type="text/javascript" src="scripts/jquery.js"></script>
    <script type="text/javascript" src="scripts/fancybox/jquery.mousewheel-3.0.4.pack.js"></script>
    <script type="text/javascript" src="scripts/fancybox/jquery.fancybox-1.3.4.pack.js"></script>
    <link rel="stylesheet" type="text/css" href="scripts/fancybox/jquery.fancybox-1.3.4.css" media="screen" />
    <title>Document</title>
</head>
<body>
<script type="text/javascript">
    $(document).ready(function(){
        $("a.photo").fancybox({
        });
    });
</script>
<style type="text/css">
    img{
        width: 150px;
        height: 150px;
        margin: 40px;
    }img:hover{

     }
</style>
</body>
</html>

<?php
    $dir = "img";
    $img = array_slice(scandir($dir),2);
    for($i = 0; $i< count($img); $i++){ ?>
        <a rel="gallery" class="photo" href="<?=$dir."/".$img[$i]?>" target="_blank"><img src="<?=$dir."/".$img[$i]?>"></a>

    <?php } ?>
