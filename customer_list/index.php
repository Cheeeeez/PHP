<!doctype html>
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
<table border="0">
    <caption><h1>Danh sách khách hàng</h1></caption>
    <tr>
        <th>STT</th>
        <th>Tên</th>
        <th>Ngày sinh</th>
        <th>Địa chỉ</th>
        <th>Ảnh</th>
    </tr>
    <?php
    $customerList = array(
        "1" => array("ten" => "Mai Văn Hoàn", "ngaysinh" => "1983-08-20", "diachi" => "Hà Nội", "anh" => "images/img1.jpg"),
        "2" => array("ten" => "Nguyễn Văn Nam", "ngaysinh" => "1983-08-21", "diachi" => "Bắc Giang", "anh" => "images/img2.jpg"),
        "3" => array("ten" => "Nguyễn Thái Hòa", "ngaysinh" => "1983-08-22", "diachi" => "Nam Định", "anh" => "images/img3.jpg"),
        "4" => array("ten" => "Trần Đăng Khoa", "ngaysinh" => "1983-08-17", "diachi" => "Hà Tây", "anh" => "images/img4.jpg"),
        "5" => array("ten" => "Nguyễn Đình Thi", "ngaysinh" => "1983-08-19", "diachi" => "Hà Nội", "anh" => "images/img5.jpg")
    );

    foreach ($customerList as $key => $value) {
        echo "<tr>";
        echo "<td>" . $key . "</td>";
        echo "<td>" . $value['ten'] . "</td>";
        echo "<td>" . $value['ngaysinh'] . "</td>";
        echo "<td>" . $value['diachi'] . "</td>";
        echo "<td><div class='thumbnail'><img src='" . $value['anh'] . "'></div></td>";
        echo "</tr>";
    }
    ?>
</table>

</body>
</html>