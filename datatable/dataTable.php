<!DOCTYPE html>
<html lang="eng">
<head>
  <meta cahrset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Data Table</title>
  <link href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-css-only@4.4.1/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet" >
  
</head>
<body>
<?php
include 'check_loggedin.php';
?>

  <div class="jumbotron text-center">
    <h1>04-07 APR. 2023</h1>
    <p>Inter-Colour Sports Competition</p> 
  </div>

  <div class="container">

  
    <ul class="list-inline">
      <li><a href="index.php">หน้าแรก</a></li>
      <li><a href="match.php">ตารางการแข่งขัน</a></li>
      <li><a href="dataTable.php">รายชื่อนักกีฬา</a></li>
      <li><a href="admin.php">Admin Page</a></li>
    </ul>

    <div class="row">
      <div class="col-md-12"> <br>
        <h3 class="mt-4">รายชื่อนักกีฬา</h3>
        <table id="myTable" class="table table-hover table-responsive table-bordered">
          <thead>
            <tr>
              <th width="5%">ID</th>
              <th width="10%">คำนำหน้า</th>
              <th width="35%">ชื่อ</th>
              <th width="40%">นามสกุล</th>
              <th width="10%">ทีมสี</th>
              <th width="10%">กีฬา</th>
            </tr>
          </thead>
        <tbody>
          <?php

            require_once 'connect.php';
            
            $stmt = $conn->query("SELECT * FROM `users`");
            $stmt->execute();

            $users = $stmt->fetchAll();
            foreach($users as $user) {
          
          ?>
            <tr>
              <td><?php echo $user['id'] ?></td>
              <td><?php echo $user['title'] ?></td>
              <td><?php echo $user['name'] ?></td>
              <td><?php echo $user['lastname'] ?></td>
              <td><?php echo $user['color'] ?></td>
              <td><?php echo $user['sport'] ?></td>
            </tr>
          <?php
          }
          ?>
        </tbody>
        </table>
      </div>
    </div>
  </div>

  <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
  <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
  <script>
    $(document).ready( function () {
      $('#myTable').DataTable();
    } );
  </script>

</body>
</html>