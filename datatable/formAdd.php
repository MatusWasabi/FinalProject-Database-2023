<!DOCTYPE html>
<html lang="eng">
<head>
    <meta cahrset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Add</title>
    <link href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-css-only@4.4.1/css/bootstrap.min.css" rel="stylesheet">
  
</head>
<body>

    <div class="container">
        <div class="row"> <br> 
            <div class="col-md-4"> <br>
            <h4>แบบฟอร์มเพิ่มข้อมูล</h4>
            <form action="formAdd_db.php" method="post"> 
                <div class="mb-1">
                    <label for="title" class="col-sm-5 col-form-label"> คำนำหน้า :  </label>
                    <div class="col-sm-10">
                        <input type="radio" name="title" value="นาย" checked> นาย <br>
                        <input type="radio" name="title" value="นาง"> นาง <br>
                        <input type="radio" name="title" value="นางสาว"> นางสาว <br>
                    </div>
                </div>
                <div class="mb-1">
                    <label for="name" class="col-sm-5 col-form-label"> ชื่อ :  </label>
                    <div class="col-sm-10">
                        <input type="text" name="name" class="form-control" required minlength="3" placeholder="ชื่อ">
                    </div>
                </div>
                <div class="mb-1">
                    <label for="lastname" class="col-sm-5 col-form-label"> นามสกุล :  </label>
                    <div class="col-sm-10">
                        <input type="text" name="lastname" class="form-control" required minlength="3" placeholder="นามสกุล">
                    </div>
                </div>
                <div class="mb-1">
                    <label for="color" class="col-sm-5 col-form-label"> ทีมสี :  </label>
                    <div class="col-sm-10">
                        <input type="radio" name="color" value="Red" checked> Red <br>
                        <input type="radio" name="color" value="Blue"> Blue <br>
                        <input type="radio" name="color" value="Green"> Green <br>
                        <input type="radio" name="color" value="Yellow"> Yellow <br>
                    </div>
                </div>
                <div class="mb-1">
                    <label for="sport" class="col-sm-5 col-form-label"> กีฬา :  </label>
                    <div class="col-sm-10">
                        <input type="radio" name="sport" value="Football" checked> Football <br>
                        <input type="radio" name="sport" value="Volleyball"> Volleyball <br>
                        <input type="radio" name="sport" value="Basketball"> Basketball <br>
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