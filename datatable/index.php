


<!DOCTYPE html>
<html lang="eng">
<head>
  <meta cahrset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home</title>
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
      <li><a href="index.php">หน้าแรก</a></li>
      <li><a href="match.php">ตารางการแข่งขัน</a></li>
      <li><a href="dataTable.php">รายชื่อนักกีฬา</a></li>
      <li><a href="admin/admin.php">Admin Page</a></li>
    </ul>

    <div class="row">
      <div class="col-md-12"> <br>
        <h3 class="mt-4">เหรียญรางวัล</h3>
        <table id="myTable" class="table table-hover table-responsive table-bordered">
          <thead>
            <tr>
              <th width="20%">ทีม</th>
              <th width="30%">เหรียญทอง</th>
              <th width="30%">เหรียญเงิน</th>
              <th width="30%">เหรียญทองแดง</th>
              <th width="30%">ทั้งหมด</th>
            </tr>
          </thead>
        <tbody>
          <?php

            require_once 'connect.php';
            
            $stmt = $conn->query("SELECT * FROM `team_medal`");
            $stmt->execute();

            $team_medal = $stmt->fetchAll();
            foreach($team_medal as $team) {
          
          ?>
            <tr>
              <td><?php echo $team['color_team'] ?></td>
              <td><?php echo $team['medal_gold'] ?></td>
              <td><?php echo $team['medal_silver'] ?></td>
              <td><?php echo $team['medal_bronze'] ?></td>
              <td><?php echo $team['medal_total'] ?></td>
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
  
  </div>

</body>
</html>