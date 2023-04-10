<?php 

    if(isset($_GET['id'])){
    require_once 'connect.php';

    $id = $_GET['id'];
    $stmt = $conn->prepare('DELETE FROM users WHERE id=:id');
    $stmt->bindParam(':id', $id , PDO::PARAM_INT);
    $stmt->execute();
    
    echo '
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">';
    
    if($stmt->rowCount() ==1){
        echo '<script>
            setTimeout(function() {
                swal({
                    title: "ลบข้อมูลสำเร็จ",
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