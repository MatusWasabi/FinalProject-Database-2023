<!DOCTYPE html>
<html lang="eng">
<head>
  <meta cahrset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Form Add Match</title>
  <link href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-css-only@4.4.1/css/bootstrap.min.css" rel="stylesheet">
  
</head>
<body>

  <div class="container">
    <div class="row"> <br> 
      <div class="col-md-4"> <br>
      <h4>แบบฟอร์มเพิ่มข้อมูล</h4>
      <form action="formAddMatch_db.php" method="post"> 
        <div class="mb-1">
          <label for="first_team" class="col-sm-5 col-form-label"> ทีมที่หนึ่ง :  </label>
          <div class="col-sm-10">
            <input type="radio" name="first_team" value="Red" checked> Red <br>
            <input type="radio" name="first_team" value="Blue"> Blue <br>
            <input type="radio" name="first_team" value="Green"> Green <br>
            <input type="radio" name="first_team" value="Yellow"> Yellow <br>
          </div>
        </div>
        <div class="mb-1">
          <label for="second_team" class="col-sm-5 col-form-label"> ทีมที่สอง :  </label>
          <div class="col-sm-10">
            <input type="radio" name="second_team" value="Red" checked> Red <br>
            <input type="radio" name="second_team" value="Blue"> Blue <br>
            <input type="radio" name="second_team" value="Green"> Green <br>
            <input type="radio" name="second_team" value="Yellow"> Yellow <br>
          </div>
        </div>
        <div class="mb-1">
          <label for="sports_type" class="col-sm-5 col-form-label"> ประเภทกีฬา :  </label>
          <div class="col-sm-10">
            <input type="radio" name="sports_type" value="Football" checked> Football <br>
            <input type="radio" name="sports_type" value="Volleyball"> Volleyball <br>
            <input type="radio" name="sports_type" value="Basketball"> Basketball <br>
          </div>
        </div>
        <div class="mb-1">
          <label for="day" class="col-sm-5 col-form-label"> วันที่แข่งขัน :  </label>
          <div class="col-sm-10">
            <input type="date" name="day" data-date-format="YYYY-MM-DD" min="2023-04-01" max="2023-04-07" class="form-control" value="2023-04-01">
          </div>
        </div>
        <div class="mb-1">
          <label for="start_time" class="col-sm-7 col-form-label"> เวลาเริ่มการแข่งขัน :  </label>
          <div class="col-sm-10">
            <input type="time" name="start_time" min="09:00" max="18:00" class="form-control">
          </div>
        </div>
        <div class="mb-1">
          <label for="round" class="col-sm-5 col-form-label"> รอบ :  </label>
          <div class="col-sm-10">
            <input type="radio" name="round" value="รองแรก" checked> รองแรก <br>
            <input type="radio" name="round" value="รองชนะเลิศ"> รองชนะเลิศ <br>
            <input type="radio" name="round" value="ชิงชนะเลิศ"> ชิงชนะเลิศ <br>
          </div>
        </div>
        <div class="mb-1">
          <label for="result" class="col-sm-5 col-form-label"> ผลการแข่งขัน :  </label>
          <div class="col-sm-10">
            <input type="radio" name="result" value="Red" checked> Red <br>
            <input type="radio" name="result" value="Blue"> Blue <br>
            <input type="radio" name="result" value="Green"> Green <br>
            <input type="radio" name="result" value="Yellow"> Yellow <br>
          </div>
        </div> <br>
        <div class="mb-1">
            <div class="col-sm-5">
            <button type="submit" class="btn btn-primary">เพิ่มข้อมูล</button>    
            </div>
        </div>
        </form>
      </div> 
    </div>
  </div>

</body>
</html>