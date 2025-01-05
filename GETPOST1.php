<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="get">
        <input type="text" name="name" >
        <input type="text" name="email">
        <button type="submit" name="submit">clique</button>
    </form>
<?php
if(isset($_GET['submit'])){
    $name = htmlspecialchars($_GET['name']);
    $email =htmlspecialchars($_GET['email']);
    echo "welcome $name <br>";
    echo "your email is : $email";
}
?>
</body>
</html>