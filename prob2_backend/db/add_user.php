<?php

require "connector.php";

if(!empty($_POST['n_user']) && !empty($_POST['n_pass'])){
    $new_user = $_POST['n_user'];
    $new_pass = $_POST['n_pass'];
    $hashed = password_hash($new_pass,PASSWORD_DEFAULT);

    if(empty($_POST['priv'])){
      $pp = 2;

      //Promise I won't do this on production
      $sql = "INSERT INTO users(username,passkey,privlevel) VALUES ('$new_user','$hashed',$pp)";

      if ($conn->query($sql) === TRUE) {
          echo "<script> alert('User registered.'); </script>";
					echo "<script> window.location.href = \"../index.php\"; </script>";
      }
      else{
        echo "Error: " . $sql . "<br>" . $conn->error;
      }
    }
}
else{
  echo "<script> window.history.back(); </script>";
}


?>
