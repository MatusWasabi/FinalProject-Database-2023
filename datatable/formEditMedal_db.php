<?php

if(isset($_POST['color_team']) && isset($_POST['medal_gold']) && isset($_POST['medal_silver']) && isset($_POST['medal_bronze']) && isset($_POST['submit']) && isset($_POST['teamid'])) {
    
require_once 'connect.php';

$teamid = $_POST['teamid'];
$color_team = $_POST['color_team'];
$medal_gold = $_POST['medal_gold'];
$medal_silver = $_POST['medal_silver'];
$medal_bronze = $_POST['medal_bronze'];
$medal_total = $medal_gold+$medal_silver+$medal_bronze;

$stmt = $conn->prepare("UPDATE team_medal SET color_team=:color_team, medal_gold=:medal_gold, medal_silver=:medal_silver, medal_bronze=:medal_bronze, medal_total=:medal_total WHERE teamid=:teamid");
$stmt->bindParam(':teamid', $teamid , PDO::PARAM_INT);
$stmt->bindParam(':color_team', $color_team, PDO::PARAM_STR);
$stmt->bindParam(':medal_gold', $medal_gold , PDO::PARAM_INT);
$stmt->bindParam(':medal_silver', $medal_silver , PDO::PARAM_INT);
$stmt->bindParam(':medal_bronze', $medal_bronze , PDO::PARAM_INT);
$stmt->bindParam(':medal_total', $medal_total , PDO::PARAM_INT);
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