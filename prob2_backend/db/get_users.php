<?php

  require "connector.php";

  $sqllogin = "SELECT * FROM users";
  $userq = $conn->query($sqllogin);

  if($userq->num_rows > 0){
    $userlist = array();

    while($row = $userq->fetch_assoc()){
      array_push($userlist,$row);
    }

  }

?>
