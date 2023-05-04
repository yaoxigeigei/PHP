<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
$num1 = $_GET['num1'];
$opt = $_GET['opt'];
$num2 = $_GET['num2'];
$jieguo = $num1.$opt.$num2;
$result = eval("return $jieguo;");
?>

<form action="#" method="get">
数字1:<input type="text" name="num1" value="<?php echo $num1?>">
运算:<select name="opt">
    <option value="+">+</option>
    <option value="-">-</option>
    <option value="*">*</option>
    <option value="/">/</option>
    </select>
数字2:<input type="text" name="num2" value="<?php echo $num2?>">
<input type="submit" value="计算">
</form>

<?php echo $jieguo."=".$result ?>

</body>
</html>