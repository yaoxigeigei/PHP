<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>猜数字游戏</title>
</head>

<?php
$num = $_GET["num"];
$random = $_GET["random"];
if($random == null){
    $random = rand(1,100);
}
if($num < $random){
    $x = "你输入的数字小了";
}elseif($num > $random){
    $x = "你输入的数字大了";
}else{
    $x = "猜对了";
}
?>

<body>

<form action="#" method="get">
<h1>数字爆炸游戏</h1>
<h3>猜数字 1-100</h3>
随机数是:<input type="text" name="random" value="<?php echo $random; ?>">(清空此框,将再次随机产生一个数)
</br>
请输入你猜的数字:<input type="text" name="num" value="<?php echo $num; ?>">
<input type="submit" value="提交数字">
</form>

</body>

<?php
echo "$x";
?>

</html>