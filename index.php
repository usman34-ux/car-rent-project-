<?php
  require "includes/conn.php";
  require "includes/auth.php";
  $VIEW_BASE="views";

  include "$VIEW_BASE/layouts/main_start.php";
  
  include "$VIEW_BASE/components/overlay.php";
  include "$VIEW_BASE/components/how_it_works.php";
  include "$VIEW_BASE/components/cars_prev.php";
  include "$VIEW_BASE/components/members.php";
  include "$VIEW_BASE/components/about_us.php";
  include "$VIEW_BASE/components/services.php";
  include "$VIEW_BASE/components/contact_us.php";
  include "$VIEW_BASE/components/testimonials.php";

  include "$VIEW_BASE/layouts/main_end.php";
?>