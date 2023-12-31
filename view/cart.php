<?php
session_start();
include_once "../dbconnect.php";

// Kiểm tra sự tồn tại của $_GET["id"]
if (isset($_GET["id"]) && !empty($_GET["id"])) {
    $id = $_GET["id"];

    // Sử dụng Prepared Statements để tránh SQL Injection
    $stmt = $conn->prepare("SELECT * FROM products WHERE id = ?");
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $result = $stmt->get_result();

    // Kiểm tra xem có dữ liệu trả về hay không
    if ($result !== false && $result->num_rows > 0) {
        $product_cat = $result->fetch_assoc();

        // Kiểm tra sự tồn tại của $_SESSION["cart"]
        if (!isset($_SESSION["cart"])) {
            $_SESSION["cart"] = array();
        }

        // Kiểm tra xem sản phẩm đã tồn tại trong giỏ hàng hay chưa
        if (array_key_exists($id, $_SESSION["cart"])) {
            $_SESSION["cart"][$id]["quantity"] += 1;
        } else {
            $product_cat["quantity"] = 1;
            $_SESSION["cart"][$id] = $product_cat;
        }

        // Tính toán tổng số lượng và tổng giá trị
        $totalQuantity = 0;
        $totalAmount = 0;
        foreach ($_SESSION["cart"] as $item) {
            $totalQuantity += $item["quantity"];
            $totalAmount += $item["quantity"] * $item["price"];
        }

        // Lưu tổng số lượng và tổng giá trị vào session
        $_SESSION["totalQuantity"] = $totalQuantity;
        $_SESSION["totalAmount"] = $totalAmount;

        $stmt->close();

        // Chuyển hướng đến trang shopping.php
        header("location: shopping.php");
        exit();
    } else {
        $stmt->close();
        echo "Không tìm thấy sản phẩm.";
    }
} else {
    echo "Thiếu thông số id.";
}
?>