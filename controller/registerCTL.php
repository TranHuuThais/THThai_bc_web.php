<?php
include_once "../dbconnect.php";
include_once "../functions.php";
include_once "../controller/registerCTL.php";
include "../view/includes/head.php";

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit_register'])) {
    // Kiểm tra xem khóa "name" có tồn tại trong mảng $_POST hay không
    $name = isset($_POST["name"]) ? $_POST["name"] : "";
    $email = isset($_POST["email"]) ? $_POST["email"] : "";
    $password = isset($_POST["password"]) ? $_POST["password"] : "";
    $address = isset($_POST["address"]) ? $_POST["address"] : "";
    $phone = isset($_POST["phone"]) ? $_POST["phone"] : "";

    // Validate

    // Mã hóa mật khẩu trước khi lưu vào cơ sở dữ liệu

    // Gọi hàm register để thêm người dùng mới vào cơ sở dữ liệu
    if (register($name, $email, $password, $address, $phone)) {
        // Đăng ký thành công
        header("location: login.php");
        exit();
    } else {
        // Đăng ký thất bại
        echo "Đăng ký không thành công!";
    }
}
?>
