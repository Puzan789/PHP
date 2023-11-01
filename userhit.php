<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <label for="capital">Capitals</label>
        <input type="text" name="capital" id="capital">
        <button type="submit">Submit</button>
    </form>
</body>
</html>
<?php 
$cap=$_POST['capital'];
$capitalss=array(
    "usa"=>"washingtondc",
    "ktm"=>"laibarilai",
    "jhapa"=>"paan ko paat"
);
print $capitalss[$cap];
?>