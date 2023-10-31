<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="getpost.php" method="post">
        <label for="username">UserName:</label>
        <input type="text" id="username" name="username"><br><br>
        <label for="password">Password:</label>
        <input type="password" name="password" id="password"><br><br>
        <input type="submit" value="Login">
    </form>
</body>
</html>

 <?php 
    //echo $_GET["username"]."<br>";
    //echo $_GET["password"];

?> -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="getpost.php" method="post">
        <label for="username">UserName:</label>
        <input type="text" id="username" name="username"><br><br>
        <label for="password">Password:</label>
        <input type="password" name="password" id="password"><br><br>
        <input type="submit" value="Login">
    </form>
</body>
</html>

<?php 
    echo $_POST["username"]."<br>";
    echo $_POST["password"];

?>