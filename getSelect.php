<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="get">
        <label for="color">color:</label>
        <select name="color">
            <option value="" disabled selected>Select a color</option>
            <option value="Red">Red</option>
            <option value="Green">Green</option>
            <option value="Blue">Blue</option>
        </select>
        <button type="submit" name="submit">Submit</button>
    </form>
    <?php
    if(isset($_GET['submit'])){
        $select = htmlspecialchars($_GET['color']);
        echo "you selected : $select";
    }
    ?>
</body>
</html>