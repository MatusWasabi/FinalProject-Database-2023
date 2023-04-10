<!DOCTYPE html>
<html lang="eng">
<head>
  <meta cahrset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home</title>
  <link rel="stylesheet" href="styles.css">
  <link href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-css-only@4.4.1/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet" >
  
</head>
<body>
<?php
include 'check_loggedin.php';
?>

<div class="hero">
      <div class="container" style="max-width: 1000px; margin-left: auto; margin-right: auto; :padding-left: 1rem; padding-right: 1rem;"></div>
        <header style="top: 0; left: 0; width: 100%; padding: 30px 100px; position: absolute; display: flex; justify-content: space-between; align-items: center;
          z-index: 100;">
          <h2 class="logo" style="font-size: 2em; color: rgb(0, 138, 92);">Sport</h2>
          <ul class="list-inline">
            <li><a href="index.php">Home</a></li>
            <li><a href="match.php" class="active">Schedule</a></li>
            <li><a href="dataTable.php">List of Athletes</a></li>
            <li><a href="admin/admin.php">Admin Page</a></li>
          </ul>
        </header>

        <div class= "titleWeb" style="bottom: 40px; top: 50px;">
          <h1 id="text">Inter-Colour Sports Competition</h1>
        </div>
    </div>

    <div class="container" style="padding-top: 40px;">
    <div class="row">
      <div class="col-md-12"> <br>
        <h3 class="mt-4">Medal of Honor</h3>
        <table id="myTable" class="table table-striped table-hover border">
          <thead class="table-gray-900">
            <tr>
            <th width="10%">First Team</th>
              <th width="10%">Second Team</th>
              <th width="10%">Type</th>
              <th width="20%">Date</th>
              <th width="20%">Time</th>
              <th width="20%">Round</th>
              <th width="10%">Result</th>
            </tr>
          </thead>
    
        <tbody>
          <?php

            require_once 'connect.php';
            
            $stmt = $conn->query("SELECT * FROM `match_day`");
            $stmt->execute();

            $match_day = $stmt->fetchAll();
            foreach($match_day as $team) {
          
          ?>
            <tr>
              <td><?php echo $team['first_team'] ?></td>
              <td><?php echo $team['second_team'] ?></td>
              <td><?php echo $team['sports_type'] ?></td>
              <td><?php echo $team['day'] ?></td>
              <td><?php echo $team['start_time'] ?></td>
              <td><?php echo $team['round'] ?></td>
              <td><?php echo $team['result'] ?></td>
            </tr>
          <?php
          }
          ?>
        </tbody>
        </table>
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