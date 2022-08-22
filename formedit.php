<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <title>CRUD by ajansomxai</title>
  </head>
  <body>
    <?php
    
    ?>
    <div class="container">
      <div class="row">
        <div class="col-md-4"> <br>
          <h4>ຟອມແກ້ໄຂຂໍ້ມູນ</h4>
          <form action="formedit_db.php" method="post">
            <div class="mb-1">
              <label for="name" class="col-sm-2 col-form-label"> ຊື່ :  </label>
              <div class="col-sm-10">
                <input type="text" name="name" class="form-control" required value="<?= $row['name'];?>" minlength="3">
              </div>
            </div>
            <div class="mb-1">
              <label for="name" class="col-sm-2 col-form-label"> ນາມສະກຸນ :  </label>
              <div class="col-sm-10">
                <input type="text" name="surname" class="form-control" required value="<?= $row['surname'];?>" minlength="3">
              </div>
            </div>
            <input type="hidden" name="id" value="<?= $row['id'];?>">
            <button type="submit" class="btn btn-primary">ແກ້ໄຂຂໍ້ມູນ</button>
          </form>
        </div>
      </div>
    </div>
  </body>
</html>