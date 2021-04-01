<?php

  if(isset($_POST['id'])){
    require "connector.php";
    $userid = $_POST['id'];
    $sqllogin = "SELECT * FROM reports WHERE user_id='$userid'";
    $userq = $conn->query($sqllogin);

    if($userq->num_rows > 0){
      $reportlist = array();

      while($row = $userq->fetch_assoc()){
        array_push($reportlist,$row);
      }

    }
  }

?>
