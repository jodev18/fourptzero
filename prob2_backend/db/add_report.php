<?php

require "connector.php";

if(!empty($_POST['user_id']) && !empty($_POST['report_content'])){
    $userid = $_POST['user_id'];
    $content = $_POST['report_content'];

    //Promise I won't do this on production
    $sql = "INSERT INTO reports (user_id,content) VALUES ($userid,'$content')";

    if ($conn->query($sql) === TRUE) {
        echo "<script> alert('Report saved.'); </script>";
        echo "<script> window.history.back(); </script>";
    }
    else{
      echo "Error: " . $sql . "<br>" . $conn->error;
    }

}
else{
  echo "<script> window.history.back(); </script>";
}


?>
