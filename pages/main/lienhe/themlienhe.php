<?php
    $mysqli = new mysqli("localhost","root","","newsdb");
     $gmail = $_POST['gmail'];
     $id = $_POST['id'];
     
      $sql_query = "INSERT INTO tbl_lienhe(gmail,id_account) VALUE('".$gmail."','".$id."')";
      mysqli_query($mysqli,$sql_query);
    
    // // if ($mail) {
       $response = array('success' => true);
    // // //   } else {
    // // //     $response = array('success' => false);
    // // //   }

    
      header('Content-Type: application/json');
      echo json_encode($response);
?>