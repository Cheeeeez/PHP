<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<div class="content">
    <form method="post">
        <h1>Input number of prime numbers want to print</h1>
        <input type="text" name="number">
        <input type="submit">
    </form>
</div>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $number = $_POST["number"];
    include "../print_prime_number/src/check_prime.php";
    $count = 0;
    $N = 2;
    echo $number . " Số nguyên tố đầu tiên là: <br>";
    while ($count < $number) {
        if (isPrimeNumber($N)) {
            echo $N . " ";
            $count++;
        }
        $N++;
    }
}
?>
</body>
</html>