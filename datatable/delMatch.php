<?php 

    if(isset($_GET['matchid'])){
    require_once 'connect.php';

    $matchid = $_GET['matchid'];
    $stmt = $conn->prepare('DELETE FROM match_day WHERE matchid=:matchid');
    $stmt->bindParam(':matchid', $matchid , PDO::PARAM_INT);
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