<?php
  require "includes/conn.php";
  require "includes/auth.php";
  $VIEW_BASE="views";

  include "$VIEW_BASE/layouts/main_start.php";
  
  $overlay = ['img' => 'assets/images/cars/cultus.jpg'];
  include "$VIEW_BASE/components/overlay.php";
  include "$VIEW_BASE/components/about_us.php";
  include "$VIEW_BASE/components/contact_us.php";

  include "$VIEW_BASE/layouts/main_end.php";
?>