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
    <div class="container">
    <div class="row">
    <div class="col-md-12"> <br>
    <h3>ລາຍການສະມາຊິກ <a href="formAdd.php" class="btn btn-info">+ເພີ່ມຂໍ້ມູນ</a> </h3>
    <table class="table table-striped  table-hover table-responsive table-bordered">
        <thead>
        <tr>
            <th width="5%">ລຳດັບ</th>
            <th width="40%">ຊື່</th>
            <th width="45%">ນາມສະກຸນ</th>
            <th width="5%">ແກ້ໄຂ</th>
            <th width="5%">ລົບ</th>
        </tr>
        </thead>
        <tbody>
        <?php
        //ຄິວຣີ່ຂໍ້ມູນມາສະແດງໃນຕາຕະລາງ
        require_once 'connect.php';

        foreach($result as $k) {
        ?>
        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td><a href="formEdit.php?id=<?= $k['id'];?>" class="btn btn-warning btn-sm">ແກ້ໄຂ</a></td>
            <td><a href="del.php?id=<?= $k['id'];?>" class="btn btn-danger btn-sm" onclick="return confirm('ຢືນຢັນການລົບຂໍ້ມູນ !!');">ລົບ</a></td>
        </tr>
        <?php } ?>
        </tbody>
        </table>
        </div>
        </div>
        </div>
        <center>CRUD by ajansomxai</center>
    </body>
</html>