.<?php

  require "connector.php";

  $sqllogin = "SELECT * FROM reports";
  $userq = $conn->query($sqllogin);

  if($userq->num_rows > 0){
    $reportlist = array();

    while($row = $userq->fetch_assoc()){
      array_push($reportlist,$row);
    }

  }

?>
