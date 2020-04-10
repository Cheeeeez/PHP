<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form method="post" action="<?php echo $_SERVER["PHP_SELF"] ?>">
    1. <input type="submit" value="Print the rectangle" name="rectangle"><br><br>
    2. <input type="submit" value="Print the square triangle" name="square_triangle"><br><br>
    3. <input type="submit" value="Print isosceles triangle" name="isosceles_triangle"><br><br>
</form>

<div class="result">
    <?php
    function printRectangle($height, $width)
    {
        for ($i = 1; $i <= $height; $i++) {
            for ($j = 1; $j <= $width; $j++) {
                echo "*" . " ";
            }
            echo "<br>";;
        }
    }

    function printSquareTriangle($height)
    {
        for ($i = 1; $i <= $height; $i++) {
            for ($j = 1; $j <= $i; $j++) {
                echo "*" . " ";
            }
            echo "<br>";
        }

        echo "<br>";

        for ($k = $height; $k > 0; $k--) {
            for ($l = 1; $l <= $k; $l++) {
                echo "*" . " ";
            }
            echo "<br>";
        }
    }

    function printIsoscelesTriangle($height)
    {
        $l = 0;
        for ($i = $height; $i > 0; $i--) {
            for ($j = 1; $j < $i; $j++) {
                echo "&nbsp;&nbsp;";
            }
            for ($k = 0; $k <= $l; $k++) {
                echo "*";
            }
            echo "<br>";
            $l += 2;
        }
    }

    if (isset($_POST["rectangle"])) {
        printRectangle(5, 7);
    }

    if (isset($_POST["square_triangle"])) {
        printSquareTriangle(5);
    }

    if (isset($_POST["isosceles_triangle"])) {
        printIsoscelesTriangle(5);
    }
    ?>
</div>
</body>
</html>
