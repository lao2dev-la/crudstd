<?php 
if(isset($_GET['id'])){
require_once 'connect.php';
//ປະກາດຕົວແປຮັບຄ່າຈາກ param method get
$id = $_GET['id'];
$stmt = $conn->prepare('DELETE FROM tbl_member WHERE id=:id');
$stmt->bindParam(':id', $id , PDO::PARAM_INT);
$stmt->execute();

//  sweet alert 
echo '
    <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">';

  if($stmt->rowCount() > 0){
        echo '<script>
             setTimeout(function() {
              swal({
                  title: "ລົບຂໍ້ມູນສຳເລັດ",
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
$conn = null;
} //isset
?>