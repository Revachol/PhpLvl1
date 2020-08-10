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
    <form action="server.php" method="post">
       <input type="text" name="first">
        <input name="action" type="radio" value="addition" > addition
        <input name="action" type="radio" value="subtraction"> subtraction
        <input name="action" type="radio" value="multiplication" > multiplication
        <input name="action" type="radio" value=" division" >  division
        <input type="text" name="second">
        <input type="submit">
    </form>
</body>
</html>