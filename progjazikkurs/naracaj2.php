<?php
session_start();

?>
<?php
if(isset($_POST['submit'])){
    $_SESSION['cpp'] = $_POST['cpp'];
    $_SESSION['java'] = $_POST['java'];
    $_SESSION['cs'] = $_POST['cs'];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <h3>Нарачката е успешно направена</h3>
   <a href="detali.php"><h3>Детали за Нарачката</h3></a>

</body>
</html>