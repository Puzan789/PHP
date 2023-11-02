<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="radiobuttons.php" method="post">
        <input type="radio" name="card" id="" value="visa"> visa
        <br>
        <input type="radio" name="card" id="" value="visam"> visam
        <br>
        <input type="radio" name="card" id="" value="master">master

        <br>
        <input type="radio" name="card" id="" value="card">card
        <input type="submit" value="confirm" name="confirm">


    </form>
</body>
</html>
<?php 
if(isset($_POST['confirm']))
{
    if(isset($_POST['card'])){
    $credicard=$_POST['card'];
    echo $credicard;
    }
    else{
        echo"please select";
    }

}
?>