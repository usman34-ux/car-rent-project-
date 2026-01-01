<?php
  require "includes/conn.php";
  require "includes/auth.php";
  $VIEW_BASE="views";

  if($user['role']!='g')
  header('location: index.php');

  if(isset($_POST['email']) && isset($_POST['password'])){
    extract($_POST);
    if($qry = mysqli_query($con, "SELECT * FROM customers WHERE email='$email' AND passcode='$password';")){
      if(mysqli_num_rows($qry) > 0){
        $_user = mysqli_fetch_assoc($qry);
        login($_user['id'], 'c');
        header("location: index.php");
      } elseif ($qry = mysqli_query($con, "SELECT * FROM admins WHERE email='$email' AND passcode='$password';")){
        if(mysqli_num_rows($qry) > 0){
          $_user = mysqli_fetch_assoc($qry);
          login($_user['id'], 'a');
          header("location: index.php");
        } else $err = "Incorrect email or password!";
      } else $err = "Unable to Verify!";
    }
  }

  include "views/layouts/cross_form/cf_start.php";
?>

<form class="center" action="" method="POST">
  <h2>Please Sign In</h2>
  <input type="email" name="email" placeholder="email"/>
  <input type="password" name="password" placeholder="password"/>
  <button type="submit">Login</button>
  <button type="button" onclick="location.href='register.php'">Register Instead</button>
  <?php
    if(isset($err) && !empty($err)){
      ?>
        <h4 style="color: red;"><?=$err?></h4>
      <?php
    } else {
      ?>
        <h2>&nbsp;</h2>
      <?php
    }
  ?>
</form>

<?php
  include "views/layouts/cross_form/cf_end.php";
?>