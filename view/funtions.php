<?php
 include "db.php";
$domain_name= explode('/',$_SERVER ['REQUEST_URI'])[1];
 function showAllUsers(){
 // để cho nó hiểu biến $con này đang nằm ở ngoài và khi mình cần, thì global nó vào mới thưc thi đc
 global $con;
// 2 Chuẩn bị câu truy vấn $query
$query="SELECT * FROM users";
// 3 Thực thi câu truy vấn sql để lấy về dữ liệu 
$result= mysqli_query($con,$query);
// $users= [];
// if ($result->num_rows>0){
//     $rowNum=1;
//     while( $row=$result->fetch_assoc()){
//        $users[]=array(
//           "index"=>$rowNum++,
//           "id"=>$row['id'],
//           "username"=>$row['username'],
//           "email"=>$row['email'],
//           "password"=>$row['password'],// tất cả cái này đều show ra màn hình cho người dùng xem
//           "created_at"=>$row['created_at'],  
//           "updated_at"=>$row['updated_at'],
//        );   
//     }

// }
// return $users;
// }
// //showAllUsers();
// //    var_dump($users);
// //  }
//  function createUser(){
//       global $con;
//     if (isset($_POST['submit'])){
//         $username=$_POST['username'];
//         $email=$_POST['email'];
//         $password=$_POST['password'];
//         $queryInsert="INSERT INTO users (username, email,password) VALUE ('$username','$email','$password')";
//         $result=mysqli_query($con,$queryInsert);
//         header("Location:index.php");
//       }  
//  }
//  function editUser(){
//     global $con;
//     if (!isset($_GET['id'])) {
//         header('location:index.php');
//    }
//      $id=$_GET['id']; // lấy id của danh mục sản phẩm 
//     // chuẩn bị câu truy vấn dl
//      $queryCat= "SELECT * FROM users where id =$id";// có nghĩa là query cái danh mục sp mà có id này 
//      // Thực thi câu truy vấn sql để lấy về dữ liệu ban đầu của record của update
//      $result=mysqli_query($con,$queryCat);
//      $categoryRow=$result->fetch_assoc();// chứa sp vào trong cái categoryrow này 
//      // nếu kh tìm thấy dữ liệu --> thông báo lại 

//      if (empty($categoryRow)) {
//        echo "Giá trị id: $id không tồn tại. Vui lòng kiểm tra lại.";
//        header("Location:index.php");
//      }
//      return $categoryRow;
 }

 
 function showAllProducts()
 {
     global $conn;
     $query = "SELECT * FROM products";
     $result = mysqli_query($conn, $query);
     $products = [];
     $rownum = 1;
     $domain_name = explode('/', $_SERVER['REQUEST_URI'])[1];
     if ($result && $result->num_rows > 0) {
         while ($row = $result->fetch_assoc()) {
             $products[] = array(
                 "index" => $rownum++,
                 "id" => $row['id'],
                 "name" => $row['name'],
                 "description" => $row['description'],
                 "price" => $row['price'],
                 "image" => '/' . $domain_name . $row['image'],
                 "view" => $row['view'],
                 "created_at" => $row['created_at'],
                 "updated_at" => $row['updated_at']
             );
         }
     }
     return $products;
 }
 $product = showAllProducts(); 
function createProducts()
{
    global $con;
    if (isset($_POST['submit'])) {
        $name = $_POST['name'];
        $description = $_POST['description'];
        $price = $_POST['price'];
        $image = uploadImage();
        $queryInsert = "INSERT INTO products (name, description,price,image) VALUE('$name','$description','$price','$image')";
        $result = mysqli_query($con, $queryInsert);
        header("Location:index.php");
    }
}
function uploadImage()
{

    $target_dir = __DIR__ . "/images/";
    echo $target_dir;
    $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        return "/images/" . basename($_FILES["fileToUpload"]["name"]);
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}
// function showAllCategories()
// {
//     global $con;
//     $query = "SELECT * FROM categories";
//     // 3 Thực thi câu truy vấn sql để lấy về dữ liệu 
//     $result = mysqli_query($con, $query);

//     $categories = array();
//     if ($result->num_rows > 0) {

//         $rowNum = 1;
//         while ($row = $result->fetch_assoc()) {
//             $categories[] = array(
//                 "index" => $rowNum++,
//                 "id" => $row['id'],
//                 "name" => $row['name'],
//                 "description" => $row['description'],
//                 "created_at" => $row['created_at'],
//                 "updated_at" => $row['updated_at']
//             );
//         }
//     }
//     return $categories;
// }
// function getProduct($id)
// {
//     global $con;z

//     $queryProducts = "SELECT * FROM products where id =$id";
//     $result = mysqli_query($con, $queryProducts);
//     $product = $result->fetch_assoc(); // duyệt tất cả các hàng trên $result và lấy ra 1 cái
//     return $product;
// }
