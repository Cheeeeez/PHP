<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        .content {
            width: 300px;
            padding-left: 10px;
        }

        label {
            width: 100px;
            float: left;
            padding: 5px;
        }

        select, input {
            margin: 0 0 20px;
            width: 180px;
            padding: 5px;
        }

        .result {
            padding-left: 10px;
            color: blue;
        }
    </style>
</head>
<body>
<div class="content">
    <form method="post">
        <h1>Currency Converter</h1>
        <label>Số lượng:</label>
        <input type="text" name="amount" min="0">
        <label>Từ:</label>
        <select name="from">
            <option value="USD">Đô la Mỹ (USD)</option>
            <option value="JPY">Yên Nhật (JPY)</option>
            <option value="VND">Việt Nam Đồng (VND)</option>
        </select>
        <label>Sang:</label>
        <select name="to">
            <option value="VND">Việt Nam Đồng (VND)</option>
            <option value="USD">Đô la Mỹ (USD)</option>
            <option value="JPY">Yên Nhật (JPY)</option>
        </select>
        <label>&nbsp;</label>
        <input type="submit" value="Chuyển đổi">
    </form>
</div>
<div class="result">
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        define("USD", "USD");
        define("VND", "VND");
        define("JPY", "JPY");
        $amount = $_POST["amount"];
        $fromCurrency = $_POST["from"];
        $toCurrency = $_POST["to"];
    }
    switch ($fromCurrency) {
        case USD:
            if ($toCurrency == VND) {
                echo $amount . "USD = " . $amount * 23000 . "VND";
            } elseif ($toCurrency == USD) {
                echo $amount . "USD = " . $amount * 1 . 'USD';
            } elseif ($toCurrency == JPY) {
                echo $amount . "USD = " . $amount * 108 . "JPY";
            }
            break;
        case VND:
            if ($toCurrency == USD) {
                echo $amount . "VND = " . $amount / 23000 . "USD";
            } elseif ($toCurrency == VND) {
                echo $amount . "VND = " . $amount * 1 . "VND";
            } elseif ($toCurrency == JPY) {
                echo $amount . "VND = " . $amount / 217 . "VND";
            }
            break;
        case JPY:
            if ($toCurrency == VND) {
                echo $amount . "JPY = " . $amount * 217 . "VND";
            } elseif ($toCurrency == USD) {
                echo $amount . "JPY = " . $amount / 108 . 'USD';
            } elseif ($toCurrency == JPY) {
                echo $amount . "JPY = " . $amount * 1 . "JPY";
            }
            break;

    }
    ?>
</div>

</body>
</html>