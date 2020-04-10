<!DOCTYPE HTML>
<html>
<head>
    <style>
        .error {
            color: #FF0000;
        }
        table{
            border-collapse: collapse;
            width: 100%;
        }
        td, th{
            border: solid 1px #ccc;
        }
        form{
            width: 450px;
        }
    </style>
</head>
<body>
<?php
include "Student.php";
function loadRegistrations($filename){
    $jsondata = file_get_contents($filename);
    var_dump($jsondata);
    echo "<br>";
    $arr_data = json_decode($jsondata,true);
    var_dump($arr_data);
    echo "<br>";
    $student2 = new Student2('nana','4','4');
    $data = [
        "name" => $student2->getName(),
        "email" => $student2->getEmail(),
        "phone" => $student2->getPhone()
    ];
    array_push($arr_data,$data);
    var_dump($arr_data);
    echo "<br>";
    $newJsonData = json_encode($arr_data);
    var_dump($newJsonData);
    $a = file_put_contents($filename,$newJsonData,FILE_APPEND);
    var_dump($a);
    }

function saveDataJSON($filename, $name, $email, $phone)
{
    try {
        $contact = array(
            'name' => $name,
            'email' => $email,
            'phone' => $phone
        );
        // converts json data into array
        $arr_data = loadRegistrations($filename);
        // Push user data to array
        array_push($arr_data, $contact);
        //Convert updated array to JSON
        $jsondata = json_encode($arr_data, JSON_PRETTY_PRINT);
        //write json data into data.json file
        file_put_contents($filename, $jsondata);
        echo "Lưu dữ liệu thành công!";
    } catch (Exception $e) {
        echo 'Lỗi: ', $e->getMessage(), "\n";
    }
}

$nameErr = NULL;
$emailErr = NULL;
$phoneErr = NULL;
$name = NULL;
$email = NULL;
$phone = NULL;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $has_error = false;

    if (empty($name)) {
        $nameErr = "Tên đăng nhập không được để trống!";
        $has_error = true;
    }

    if (empty($email)) {
        $emailErr = "Email không được để trống!";
        $has_error = true;
    } else {
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailErr = "Định dạng email sai (xxx@xxx.xxx.xxx)!";
            $has_error = true;
        }
    }

    if (empty($phone)) {
        $phoneErr = " Số điện thoại không được để trống!";
        $has_error = true;
    }

    if ($has_error === false) {
        saveDataJSON("data.json", $name, $email, $phone);
        $name = NULL;
        $email = NULL;
        $phone = NULL;
    }
}

?>

<h2>Registration Form</h2>
<form method="post">
    <fieldset>
        <legend>Details</legend>
        Name: <input type="text" name="name" value="<?php echo $name; ?>">
        <span class="error">* <?php echo $nameErr; ?></span>
        <br><br>
        E-mail: <input type="text" name="email" value="<?php echo $email; ?>">
        <span class="error">* <?php echo $emailErr; ?></span>
        <br><br>
        Phone: <input type="text" name="phone" value="<?php echo $phone; ?>">
        <span class="error">*<?php echo $phoneErr; ?></span>
        <br><br>
        <input type="submit" name="submit" value="Register">
        <p><span class="error">* required field.</span></p>
    </fieldset>
</form>

<?php
$registrations = loadRegistrations('data.json',FILE_APPEND);
?>
<h2>Registration list</h2>
<table>
    <tr>
        <th>Name</th>
        <th>Email</th>
        <th>Phone</th>
    </tr>
    <?php foreach ($registrations as $index => $registration): ?>
        <tr>
            <td><?echo $registration['name'] ?></td>
            <td><?echo $registration['email'] ?></td>
            <td><?echo $registration['phone'] ?></td>
        </tr>
    <?php endforeach; ?>
</table>
</body>
</html>