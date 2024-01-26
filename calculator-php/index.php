<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    
<form action="">
    <input type="text" name="num1" placeholder="Number 1">
    <input type="text" name="num2" placeholder="Number 2"> 
    <select name="operator">
        <option value="">None</option>
        <option value="">Add</option>
        <option value="">Subtract</option>
        <option value="">Multiply</option>
        <option value="">Divide</option>
    </select>
    <br>
    <button type="submit" name="submit" value="submit">Calculate</button>
</form>
<div>
    <p>The answer is:</p>
</div>

<?php
    if (isset($_GET['submit'])) {
        $result1 = $_GET['num1'];
        $result2 = $_GET['num2'];
        $operator = $_GET['operator'];
    
        switch ($operator) {
            case "None":
                echo "You need to select a method!";
            break;
            case "Add":
                echo $result1 + $result2;
            break;
            case "Subtract":
                echo $result1 - $result2;
            break;
            case "Multiply":
                echo $result1 * $result2;
            break;
            case "Divide":
                echo $result1 / $result2;
            break;
        }
    }

    $dayofweek = date("w");

    switch ($dayofweek) {
        case 1:
            echo "<h1>It is Monday!</h1>";
            break;
        case 2:
            echo "<h1>It is Tuesday!</h1>";
            break;
        case 3:
            echo "<h1>It is Wednesday!</h1>";
            break;
        case 4:
            echo "<h1>It is Thursday!</h1>";
            break;
        case 5:
            echo "<h1>It is Friday!</h1>";
            break;
        case 6:
            echo "<h1>It is Saturday!</h1>";
            break;
        case 0:
            echo "<h1>It is Sunday!</h1>";
            break;
    }


?>

</body>
</html>