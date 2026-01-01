<?php
  // Including required files
  require "includes/config.php";
  require "includes/conn.php";
  require "includes/auth.php";

  if( // -- If Password Matched
    isset($_POST['passcode']) &&
    isset($_POST['cpasscode']) &&
    ($_POST['cpasscode'] == $_POST['cpasscode'])
  ) {

    // Register Customer
    $ret = register_customer($_POST);
    if($ret['success']) // Check for Success
    header("refresh:3;url=login.php"); // Redirect to Login if succeed (After 3 seconds)
    else header("refresh:3;url=register.php"); // Redirect to Register if failed (After 3 seconds)
    echo $ret['msg']; // Show message

  } else { // -- If Password not Matched

    header("refresh:3;url=register.php"); // Redirect to Register (After 3 seconds)
    echo "Password not Matched"; // Show message

  }
  
?>