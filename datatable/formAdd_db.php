<?php

    if(isset($_POST['title']) && isset($_POST['name']) && isset($_POST['lastname']) && isset($_POST['color']) && isset($_POST['sport'])){

    require_once 'connect.php';

    $title = $_POST['title'];
    $name = $_POST['name'];
    $lastname = $_POST['lastname'];
    $color = $_POST['color'];
    $sport = $_POST['sport'];

    $stmt = $conn->prepare("INSERT INTO users (title, name, lastname, color, sport)
    VALUES (:title, :name, :lastname, :color, :sport)");
    $stmt->bindParam(':title', $title, PDO::PARAM_STR);
    $stmt->bindParam(':name', $name, PDO::PARAM_STR);
    $stmt->bindParam(':lastname', $lastname , PDO::PARAM_STR);
    $stmt->bindParam(':color', $color, PDO::PARAM_STR);
    $stmt->bindParam(':sport', $sport, PDO::PARAM_STR);
    $result = $stmt->execute();
    
    echo '
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">';

    if($result){
        echo '<script>
             setTimeout(function() {
              swal({
                  title: "เพิ่มข้อมูลสำเร็จ",
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