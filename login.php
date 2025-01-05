<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="post">
        <input type="text" name="name" >
        <input type="password" name="password">
        <button type="submit" name="submit">clique</button>
</form>
<?php
if(isset($_POST['submit'])){
    $name = htmlspecialchars($_POST['name']);
    $password = htmlspecialchars($_POST['password']);
    if (empty($name) || empty($password)) {
        echo "Veuillez remplir tous les champs.";
    } else {
    echo "welcome $name <br>";
    echo "your password is : $password";
    }
}
?>
</body>
</html>