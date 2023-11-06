<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <input type="checkbox" name="Pizza" value ="pizza" id="">
        pizza <br>
        <input type="checkbox" name="Momo" value ="momo" id="">
        mmomo <br>
        <input type="checkbox" name="Samosa" value ="samosa" id="">
        samosa <br>
        <input type="checkbox" name="psgd" value ="pizzaasd" id="">
        pizzaasd <br>
        <input type="submit" name="submit" value="submit">
    </form>
</body>
</html>
<?php 
if(isset($_POST["submit"])){
    if(isset($_POST["Pizza"])){
        echo " you like pizza";
    }
    if(isset($_POST["Momo"])){
        echo " you like mom";
    }
    if(isset($_POST["Samosa"])){
        echo " you like samosa";
    }
    if(isset($_POST["psgsd"])){ 
        echo " you like sas";
    }
}
?>