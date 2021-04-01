<?php

require "connector.php";

if(!empty($_GET['id'])){
    $id_rem = $_GET['id'];

    //Promise I won't do this on production
    $sql = "DELETE FROM users WHERE id=$id_rem";

    if ($conn->query($sql) === TRUE) {
        echo "<script> alert('Removed user.'); </script>";
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
