<?php
      $gmail = $_POST['gmail'];
     
      $sql_query = "INSERT INTO tbl_lienhe(gmail) VALUE('".$gmail."')";
      mysqli_query($mysqli,$sql_query);
    
    // if ($mail) {
        $response = array('success' => true);
    //   } else {
    //     $response = array('success' => false);
    //   }

    
      header('Content-Type: application/json');
      echo json_encode($response);
?>