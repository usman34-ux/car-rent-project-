<?php
  // Including Required Files
  require "includes/conn.php";
  require "includes/auth.php";

  // Logout
  logout();
  header("location: index.php")
?>