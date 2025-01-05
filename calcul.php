<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="post">
    <h1>calculates</h1>
        <label for="NAME">number 1</label>
        <input type="number" name="num1" placeholder="Entrez num 1">
        <label for="email">nember 2</label>
        <input type="number" name="num2" placeholder="Entrez num 2">
    <button type="submit" name="submit">clique</button>
</form>
<?php
if(isset($_POST['submit'])){
    $num1= htmlspecialchars($_POST['num1']);
    $num2= htmlspecialchars($_POST['num2']);
    if(empty($num1) || empty($num2)){
        echo "Veuillez remplir tous les champs.";
    } else {
        $resultat = $num1 + $num2;
        echo "<h1> result = ".$resultat."<h1>";
    }
}
?>
</body>
</html>