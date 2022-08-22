<?php
 //ຖ້າມີຄ່າສົ່ງມາຈາກຟອມ
    if(isset($_POST['name']) && isset($_POST['surname'])){
    //ໄຟລ໌ເຊື່ອມຕໍ່ຖານຂໍ້ມູນ

     // sweet alert 
    echo '
    <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">';

    if($result){
        echo '<script>
             setTimeout(function() {
              swal({
                  title: "ເພີ່ມຂໍ້ມູນສຳເລັດ",
                  type: "success"
              }, function() {
                  window.location = "index.php"; //ໜ້າທີ່ຕ້ອງການໃຫ້ກະໂດດໄປ
              });
            }, 1000);
        </script>';
    }else{
       echo '<script>
             setTimeout(function() {
              swal({
                  title: "ເກີດຂໍ້ຜິດພາດ",
                  type: "error"
              }, function() {
                  window.location = "index.php"; //ໜ້າທີ່ຕ້ອງການໃຫ້ກະໂດດໄປ
              });
            }, 1000);
        </script>';
    }
    $conn = null; //close connect db
    } //isset
    ?>