<?php
$result = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["number1"]) && isset($_POST["number2"]) && isset($_POST["operation"])) {
        $number1 = $_POST["number1"];
        $number2 = $_POST["number2"];
        $operation = $_POST["operation"];

        if ($operation == "+") {
            $result = $number1 + $number2;
        } else if ($operation == "-") {
            $result = $number1 - $number2;
        } else if ($operation == "*") {
            $result = $number1 * $number2;
        } else if ($operation == "/") {
            if ($number2 == 0) {
                $result = "Error: Division by zero";
            } else {
                $result = $number1 / $number2;
            }
        }

        $result = number_format((float)$result, 2, '.', '');
    }
}
?>

<!DOCTYPE html>
<html>
    <head>
    <link rel="stylesheet" href="mystyle.css">
    </head>
    <h1>Simple PHP calculator</h1>
    <br><br>
    <form method="POST">
        <input type="number" name="number1">
        <input type="number" name="number2">
        <select name="operation">
            <option value="+">+</option>
            <option value="-">-</option>
            <option value="*">*</option>
            <option value="/">/</option>
        </select>
        <input type="submit" value="Calculate">
    </form> 
    <br><br>
    <h4>Result: <?php echo $result ?></h4>
</html>
