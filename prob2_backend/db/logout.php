<?php session_start();
session_destroy();
session_unset();
echo "<script> alert('Logged out.'); </script>";
echo "<script> window.location.href = \"../index.php\"; </script>"; ?>
