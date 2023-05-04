<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>猜数字游戏</title>
</head>

<?php
$random = $_GET["random"];
if($random == null){
    $random = rand(1,100);
}
for($x=1;$x<=100;$x++){
    if($x==$random){
        break;
    }
}
?>

<body>

<form action="#" method="get">
<h1>数字爆炸游戏</h1>
<h3>猜数字 1-100</h3>
随机数是:<input type="text" name="random" value="<?php echo $random; ?>">(清空此框,将再次随机产生一个数)
</br>
<input type="submit" value="点一下自动爆破">
</form>

</body>

<?php
echo "自爆结果是:".$x;
?>

</html>