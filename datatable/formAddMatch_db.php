<?php

    if(isset($_POST['first_team']) && isset($_POST['second_team']) && isset($_POST['sports_type']) && isset($_POST['day']) && isset($_POST['start_time']) && isset($_POST['round']) && isset($_POST['result'])){

    require_once 'connect.php';

    $first_team = $_POST['first_team'];
    $second_team = $_POST['second_team'];
    $sports_type = $_POST['sports_type'];
    $day = $_POST['day'];
    $start_time = $_POST['start_time'];
    $round = $_POST['round'];
    $result = $_POST['result'];

    $stmt = $conn->prepare("INSERT INTO match_day (first_team, second_team, sports_type, day, start_time, round, result)
    VALUES (:first_team, :second_team, :sports_type, :day, :start_time, :round, :result)");
    $stmt->bindParam(':first_team', $first_team, PDO::PARAM_STR);
    $stmt->bindParam(':second_team', $second_team, PDO::PARAM_STR);
    $stmt->bindParam(':sports_type', $sports_type , PDO::PARAM_STR);
    $stmt->bindParam(':day', $day , PDO::PARAM_STR);
    $stmt->bindParam(':start_time', $start_time , PDO::PARAM_STR);
    $stmt->bindParam(':round', $round , PDO::PARAM_STR);
    $stmt->bindParam(':result', $result , PDO::PARAM_STR);
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
