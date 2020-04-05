<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include "src/calculator.php";
    define("ADDITION", "+");
    define("SUBTRACTION", "-");
    define("MULTIPLICATION", "*");
    define("DIVISION", "/");
    $firstNumber = $_REQUEST["first_number"];
    $secondNumber = $_REQUEST["second_number"];
    $operation = $_REQUEST["operation"];

    $calculator = new Calculator();

}
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>
<body>
<div id="content">
    <h1>Simple Calculator</h1>
    <form method="post">
        <fieldset>
            <legend>Calculator</legend>
            <label>First operand:</label>
            <input type="text" name="first_number">
            <label>Operator:</label>
            <select name="operation">
                <option value="+">Addition</option>
                <option value="-">Subtraction</option>
                <option value="*">Multiplication</option>
                <option value="/">Division</option>
            </select>
            <label>Second operand:</label>
            <input type="text" name="second_number">
            <label>&nbsp;</label>
            <input type="submit" value="Calculate">
        </fieldset>
    </form>
</div>
<?php
switch ($operation) {
    case ADDITION:
        echo "Result: " . $calculator->sum($firstNumber, $secondNumber);
        break;
    case SUBTRACTION:
        echo "Result: " . $calculator->sub($firstNumber, $secondNumber);
        break;
    case MULTIPLICATION:
        echo "Result: " . $calculator->mul($firstNumber, $secondNumber);
        break;
    case DIVISION:
        try {
            echo "Result: " . $calculator->division($firstNumber, $secondNumber);
        } catch (Exception $e) {
            echo $e->getMessage();
        }
        break;
}
?>
</body>
</html>