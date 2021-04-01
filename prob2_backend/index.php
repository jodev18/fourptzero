<?php session_start();?>
<!DOCTYPE html>
<head>
  <title> User Backend</title>
  <link rel="stylesheet" href="css/styler.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.css" integrity="sha512-oHDEc8Xed4hiW6CxD7qjbnI+B07vDdX7hEPTvn9pSZO1bcRqHp8mj9pyr+8RVC2GmtEfI2Bi9Ke9Ass0as+zpg==" crossorigin="anonymous" />

</head>

<body>
  <?php
  error_reporting(0);
    if(!empty($_POST['username']) && !empty($_POST['u_pass'])){

        require "db/connector.php";
        $user = $_POST['username'];
        $loginpass = $_POST['u_pass'];

        $sqllogin = "SELECT * FROM users WHERE username='$user'";
        $passq = $conn->query($sqllogin);
        if($passq->num_rows > 0){
          while($row = $passq->fetch_assoc()){
              $pass = $row['passkey'];
              $priv = $row['privlevel'];
          }
          if(password_verify($loginpass,$pass)){
            $_SESSION['curr_priv'] = $priv;
            $_SESSION['curr_user'] = $user;
            echo "<script> window.location.href = \"dashboard.php\"; </script>";
          }
          else{
            $message = "Login failed.";
          }

        }
        else{
          $message = "No such user.";
        }
    }


  ?>
  <header class="main-header">
      <h1 class="header-text"> Welcome to FourPtZero!</h1>
  </header>

  <main class="main-content">
    <div class="login-box">
      <div class="login-prompt">
        <span class="login-prompt-text"> <font size="46px">Login</font> <br/> Please enter your username to login. </span>
      </div>
      <form class="login-form" action="index.php" method="post">
        <div class="input-user">
          <label for="username">Username: </label>
          <input type="text" name="username" value="" id="">
        </div>
        <div class="input-pass">
          <label for="u_pass">Password: </label>
          <input type="password" name="u_pass" value="" id="">
        </div>
        <div class="btn-submit-form">
          <input class="btn-submit" type="submit" name="" value="Login">
        </div>
      </form>
      <p> <?php echo $message; ?> <br /> No account yet? <a  href="register.php"> Click here. </a></p>
    </div>
  </main>

</html>
