<?php

if(isset($_POST['title']) && isset($_POST['name']) && isset($_POST['lastname']) && isset($_POST['color']) && isset($_POST['sport']) && isset($_POST['id'])) {
    
require_once 'connect.php';

$id = $_POST['id'];
$title = $_POST['title'];
$name = $_POST['name'];
$lastname = $_POST['lastname'];
$color = $_POST['color'];
$sport = $_POST['sport'];

$stmt = $conn->prepare("UPDATE users SET title=:title, name=:name, lastname=:lastname, color=:color, sport=:sport WHERE id=:id");
$stmt->bindParam(':id', $id , PDO::PARAM_INT);
$stmt->bindParam(':title', $title, PDO::PARAM_STR);
$stmt->bindParam(':name', $name, PDO::PARAM_STR);
$stmt->bindParam(':lastname', $lastname , PDO::PARAM_STR);
$stmt->bindParam(':color', $color, PDO::PARAM_STR);
$stmt->bindParam(':sport', $sport, PDO::PARAM_STR);
$stmt->execute();
 
    echo '
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">';
 
 if($stmt->rowCount() >= 0){
        echo '<script>
             setTimeout(function() {
              swal({
                  title: "แก้ไขข้อมูลสำเร็จ",
                  type: "success"
              }, function() {
                  window.location = "admin/admin.php";
              });
            }, 1000);
        </script>';
    }else{
        echo '<script>
             setTimeout(function() {
              swal({
                  title: "เกิดข้อผิดพลาด",
                  type: "error"
              }, function() {
                  window.location = "admin/admin.php"; 
              });
            }, 1000);
        </script>';
    }

$conn = null; 
} 

?>