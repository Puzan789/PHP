<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <label for="username">number</label>
        <input type="text" name="username" id="">
        <button type="submit">post</button>
    </form>
</body>
</html>
<?php 
$p=50;
$q=60;
$m=$_POST['username'];
if ($p>$q){
    echo"something is wrong";
}
else{
    echo"how many roads must a man walk through <br>";
}

switch ($m) {
    case 1:
        echo "its the 1 number ";
        break;
    case 2:
        echo "its the 2 number ";
        break;
    default:
        echo"hello world";
    }
for($i=1;$i<=10;$i++){
    echo "<br>$i <br>";
}
?>
