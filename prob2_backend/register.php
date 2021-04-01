<!DOCTYPE html>
<head>
  <title> User Backend</title>
  <link rel="stylesheet" href="css/styler.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.css" integrity="sha512-oHDEc8Xed4hiW6CxD7qjbnI+B07vDdX7hEPTvn9pSZO1bcRqHp8mj9pyr+8RVC2GmtEfI2Bi9Ke9Ass0as+zpg==" crossorigin="anonymous" />

</head>

  <header class="main-header">
      <h1 class="header-text"> Welcome to FourPtZero!</h1>
  </header>
<body>
  <main class="main-content">
    <div class="login-box">
      <div class="login-prompt">
        <span class="login-prompt-text"> <font size="46px">Register</font> <br/> Please enter your new username and password to join. </span>
      </div>
      <form class="login-form" action="db/add_user.php" method="post">
        <div class="input-user">
          <label for="n_user">New Username: </label>
          <input type="text" name="n_user" value="" id="">
        </div>
        <div class="input-pass">
          <label for="n_pass">New Password: </label>
          <input type="password" name="n_pass" value="" id="">
        </div>
        <div class="btn-submit-form">
          <input class="btn-submit" type="submit" name="" value="Login">
        </div>
      </form>
      <?php echo "<p>$message</p>"; ?>
      <p> Already have an account? <a  href="index.php"> Click here. </a></p>
    </div>
  </main>

</html>
