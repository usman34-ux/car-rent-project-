<?php
  require "includes/conn.php";
  require "includes/auth.php";
  $VIEW_BASE="views";

  include "$VIEW_BASE/layouts/main_start.php";
  
  $overlay = ['img' => 'assets/images/cars/civic.jpg'];
  include "$VIEW_BASE/components/overlay.php";
  include "$VIEW_BASE/components/cars.php";

  include "$VIEW_BASE/layouts/main_end.php";
?>