<?php
  require "includes/conn.php";
  require "includes/auth.php";
  $VIEW_BASE="views";

  if($user['role']!='c')
  header("location: index.php");

  include "$VIEW_BASE/layouts/main_start.php";
  
  include "$VIEW_BASE/components/overlay.php";
  include "$VIEW_BASE/components/feedback.php";

  include "$VIEW_BASE/layouts/main_end.php";
?>