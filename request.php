<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
    Name: <input type="text" name="fname">
    Age :<input type="text" name="age">
    <input type="submit">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // collect value of input field
    $name = $_REQUEST['fname'];
    $age = $_REQUEST['age'];
    if (empty($name) || empty($age)) {
        echo "Name and/or age is empty ";
    } else {
        echo "Name: " . $name . "<br>";
        echo "Age: " . $age;
    }
}
?>
</body>
</html>
