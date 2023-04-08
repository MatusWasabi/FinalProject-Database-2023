
<!DOCTYPE html>
<html lang="eng">
<head>
  <meta cahrset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Page</title>
  <link href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-css-only@4.4.1/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet" >
  
</head>
<body>

  <div class="jumbotron text-center">
    <h1>04-07 APR. 2023</h1>
    <p>Inter-Colour Sports Competition</p> 
  </div>

  <div class="container">

    <ul class="list-inline">
      <li><a href="../index.php">หน้าแรก</a></li>
      <li><a href="../match.php">ตารางการแข่งขัน</a></li>
      <li><a href="../dataTable.php">รายชื่อนักกีฬา</a></li>
      <li><a href="admin.php">Admin Page</a></li>
      <li><a href="logout.php">Logout</a></li>
    </ul>

    <div class="row">
      <div class="col-md-12"> <br>
        <h3 class="mt-4">รายชื่อนักกีฬา <a href="formAdd.php" class="btn btn-info">+เพิ่มข้อมูล</a></h3>
        <table id="myTable1" class="table table-hover table-responsive table-bordered">
          <thead>
            <tr>
              <th width="5%">ID</th>
              <th width="10%">คำนำหน้า</th>
              <th width="35%">ชื่อ</th>
              <th width="40%">นามสกุล</th>
              <th width="10%">ทีมสี</th>
              <th width="10%">กีฬา</th>
              <th width="5%">แก้ไข</th>
              <th width="5%">ลบ</th>
            </tr>
          </thead>
        <tbody>
          <?php

            require_once '../connect.php';

            if(!(isset($_SESSION['username']))) {header("location: login.php");}


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
              <td><a href="formEdit.php?id=<?php echo $user['id']; ?>" class="btn btn-warning btn-sm">แก้ไข</a></td>
              <td><a href="del.php?id=<?php echo $user['id']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('ยืนยันการลบข้อมูล !!');">ลบ</a></td>
            </tr>
          <?php
          }
          ?>
        </tbody>
        </table>
      </div>

      <div class="col-md-12"> <br>
        <h3 class="mt-4">ตารางการแข่งขัน <a href="formAddMatch.php" class="btn btn-info">+เพิ่มข้อมูล</a></h3>
        <table id="myTable2" class="table table-hover table-responsive table-bordered">
          <thead>
            <tr>
              <th width="5%">ID</th>
              <th width="10%">ทีมที่หนึ่ง</th>
              <th width="10%">ทีมที่สอง</th>
              <th width="10%">ประเภทกีฬา</th>
              <th width="20%">วันที่แข่งขัน</th>
              <th width="20%">เวลาเริ่มการแข่งขัน</th>
              <th width="20%">รอบ</th>
              <th width="10%">ผลการแข่งขัน</th>
              <th width="5%">แก้ไข</th>
              <th width="5%">ลบ</th>
            </tr>
          </thead>
        <tbody>
          <?php
          

          require_once '../connect.php';
            
            $stmt = $conn->query("SELECT * FROM `match_day`");
            $stmt->execute();

            $match_day = $stmt->fetchAll();
            foreach($match_day as $team) {
          
          ?>
            <tr>
              <td><?php echo $team['matchid'] ?></td>
              <td><?php echo $team['first_team'] ?></td>
              <td><?php echo $team['second_team'] ?></td>
              <td><?php echo $team['sports_type'] ?></td>
              <td><?php echo $team['day'] ?></td>
              <td><?php echo $team['start_time'] ?></td>
              <td><?php echo $team['round'] ?></td>
              <td><?php echo $team['result'] ?></td>
              <td><a href="formEditMatch.php?matchid=<?php echo $team['matchid']; ?>" class="btn btn-warning btn-sm">แก้ไข</a></td>
              <td><a href="delMatch.php?matchid=<?php echo $team['matchid']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('ยืนยันการลบข้อมูล !!');">ลบ</a></td>
            </tr>
          <?php
          }
          ?>
        </tbody>
        </table>
      </div>

      <div class="col-md-12"> <br>
        <h3 class="mt-4">เหรียญรางวัล <a href="formAddMedal.php" class="btn btn-info">+เพิ่มข้อมูล</a></h3>
        <table id="myTable4" class="table table-hover table-responsive table-bordered">
          <thead>
            <tr>
              <th width="5%">ID</th>
              <th width="20%">ทีม</th>
              <th width="30%">เหรียญทอง</th>
              <th width="30%">เหรียญเงิน</th>
              <th width="30%">เหรียญทองแดง</th>
              <th width="30%">ทั้งหมด</th>
              <th width="5%">แก้ไข</th>
              <th width="5%">ลบ</th>
            </tr>
          </thead>
        <tbody>
          <?php

require_once '../connect.php';
            
            $stmt = $conn->query("SELECT * FROM `team_medal`");
            $stmt->execute();

            $team_medal = $stmt->fetchAll();
            foreach($team_medal as $team) {
          
          ?>
            <tr>
              <td><?php echo $team['teamid'] ?></td>
              <td><?php echo $team['color_team'] ?></td>
              <td><?php echo $team['medal_gold'] ?></td>
              <td><?php echo $team['medal_silver'] ?></td>
              <td><?php echo $team['medal_bronze'] ?></td>
              <td><?php echo $team['medal_total'] ?></td>
              <td><a href="formEditMedal.php?teamid=<?php echo $team['teamid']; ?>" class="btn btn-warning btn-sm">แก้ไข</a></td>
              <td><a href="delMedal.php?teamid=<?php echo $team['teamid']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('ยืนยันการลบข้อมูล !!');">ลบ</a></td>
            </tr>
          <?php
          }
          ?>
        </tbody>
        </table>
      </div>
    </div>
    </div>
  </div>

  <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
  <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
  <script>
    $(document).ready( function () {
      $('#myTable1').DataTable();
    } );
  </script>
  <script>
    $(document).ready( function () {
      $('#myTable2').DataTable();
    } );
  </script>
  <script>
    $(document).ready( function () {
      $('#myTable4').DataTable();
    } );
  </script>

</body>
</html>