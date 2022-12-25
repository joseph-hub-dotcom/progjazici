<?php session_start(); ?>

<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Document</title>

</head>

<body>

    <h2><b>Пријава курс за програмски јазик</b></h2>

    <hr></hr>

    <h2><b>Одберете некој од понудените курсеви</b></h2>

    <hr></hr>

    <form action="naracaj2.php" method="post">
    C++:<input type="checkbox" name="cpp" value="15000">15000ден<br>
    Java:<input type="checkbox" name="java" value="25000">25000ден<br>
    C#:<input type="checkbox" name="cs" value="20000">20000ден<br>

    <input type="submit" name="submit" value="Нарачај">

</form>

</body>

</html>