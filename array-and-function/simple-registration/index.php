<?php
$users = getAllUsers('data.json');
function getAllUsers($filename)
{
    return getData($filename);
}


function getData($filename)
{
    $JSONData = file_get_contents($filename);
    return $arrData = json_decode($JSONData, true);
}

function saveJSONData($filename, $data)
{
    try {
        array_push($GLOBALS['users'], $data);
        $newJsonData = json_encode($GLOBALS['users']);
        file_put_contents($filename, $newJsonData);
        echo "Data is saved.";
    } catch (Exception $e) {
        echo "Error: ", $e->getMessage();
    }
}

$nameErr = $emailErr = $phoneErr = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["name"])) {
        $nameErr = "Name is required";;
    } else {
        $name = ($_POST["name"]);
    }

    if (empty($_POST["email"])) {
        $emailErr = "Email is required";;
    } else {
        $email = ($_POST["email"]);
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailErr = "Invalid email format";
        }
    }

    if (empty($_POST["phone"])) {
        $phoneErr = "Phone is required";;
    } else {
        $phone = ($_POST["phone"]);
    }

    $user = array(
        'name' => $name,
        'email' => $email,
        'phone' => $phone
    );

    if (isset($name) && isset($email) && isset($phone)) {
        saveJSONData('data.json', $user);
    }
}


?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        span {
            color: red;
        }

        legend {
            padding-bottom: 10px;
            font-size: 20px;
        }

        form input {
            margin-left: 10px;
        }
    </style>
</head>
<body>
<h2>Registration Form</h2>
<form method="post" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
    <fieldset>
        <legend>Sign-up</legend>
        Name:&nbsp;&nbsp;<input type="text" name="name">
        <span class="error">*<?php echo $nameErr ?></span>
        <br><br>
        E-mail: <input type="text" name="email">
        <span class="error">*<?php echo $emailErr ?></span>
        <br><br>
        Phone:&nbsp;&nbsp;<input type="text" name="phone">
        <span class="error">*<?php echo $phoneErr ?></span>
        <br><br>
        <input type="submit" name="submit" value="Register">
        <p><span class="error">* required field.</span></p>
    </fieldset>
</form>
<h2>Registration list</h2>
<table border="1">
    <tr>
        <th>Name</th>
        <th>Email</th>
        <th>Phone</th>
    </tr>
    <?php foreach ($users as $user): ?>
        <tr>
            <td><?php echo $user["name"] ?></td>
            <td><?php echo $user ["email"] ?></td>
            <td><?php echo $user ["phone"] ?></td>
        </tr>
    <?php endforeach; ?>

</table>
</body>
</html>