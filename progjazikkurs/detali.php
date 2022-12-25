<?php
session_start();

?>

<?php
$cpp = $_SESSION['cpp'];
$java = $_SESSION['java'];
$cs = $_SESSION['cs'];

$intval = (int) $cpp;
$intval1 = (int) $java;
$intval2 = (int) $cs;

$vk1 = $intval*60;
$vk2 = $intval1*50;
$vk3 = $intval2*40;

$vk = $intval + $intval1 + $intval2;
$kod = 10*11+2001;
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
    <h3>Детали:</h3>
    <?php echo "C++ = $intval"?><br>
    <?php echo "Java = $intval1"?><br>
    <?php echo "C# = $intval2"?><br>
    <hr>
    <?php echo "ВКУПНО: $vk" ?><br>
    <?php echo "Вашиот код е: $kod" ?>

</body>
</html>