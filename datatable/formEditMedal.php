<!DOCTYPE html>
<html lang="eng">
<head>
  <meta cahrset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Form Edit Medal</title>
  <link href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-css-only@4.4.1/css/bootstrap.min.css" rel="stylesheet">
  
</head>
  <body>

  <?php

  if(isset($_GET['teamid'])){
    require_once 'connect.php';
    $stmt = $conn->prepare("SELECT* FROM team_medal WHERE teamid=?");
    $stmt->execute([$_GET['teamid']]);
    $row = $stmt->fetch(PDO::FETCH_ASSOC);
      
    if($stmt->rowCount() < 1){
      header('Location: admin.php');
      exit();
    }
  }

  ?>

    <div class="container">
      <div class="row">
        <div class="col-md-4"> <br>
        <h4>แบบฟอร์มแก้ไขข้อมูล</h4>
        <form action="formEditMedal_db.php" method="post">
        <div class="mb-1">
            <label for="color_team" class="col-sm-5 col-form-label"> ทีมสี :  </label>
                <div class="col-sm-10">
                    <input type="radio" name="color_team" value="Red" checked> Red <br>
                    <input type="radio" name="color_team" value="Blue"> Blue <br>
                    <input type="radio" name="color_team" value="Green"> Green <br>
                    <input type="radio" name="color_team" value="Yellow"> Yellow <br>
                </div>
            </div>
            <div class="mb-1">
                <label for="medal_gold" class="col-sm-5 col-form-label"> เหรียญทอง :  </label>
                <div class="col-sm-10">
                    <input type="number" name="medal_gold" required value="<?= $row['medal_gold'];?>">
                </div>
            </div>
            <div class="mb-1">
                <label for="medal_silver" class="col-sm-5 col-form-label"> เหรียญเงิน :  </label>
                <div class="col-sm-10">
                    <input type="number" name="medal_silver" required value="<?= $row['medal_silver'];?>">
                </div>
            </div>
            <div class="mb-1">
                <label for="medal_bronze" class="col-sm-5 col-form-label"> เหรียญทองแดง :  </label>
                <div class="col-sm-10">
                    <input type="number" name="medal_bronze" required value="<?= $row['medal_bronze'];?>">
                </div>
            </div> <br>
            <div class="mb-1">
                <div class="col-sm-5">
                    <input type="hidden" name="teamid" value="<?= $row['teamid'];?>">
                    <button type="submit" name="submit" class="btn btn-primary" >แก้ไขข้อมูล</button>    
                </div>
            </div>
        </form>
        </div>
      </div>
    </div>

  </body>
</html>