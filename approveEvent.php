<?php
//Jackie Salim
//This allows the user to add an Owner

  $pageTitle = "Approve Event";

  include("header.html");
  require_once("conn.php");

  echo '<h1 align="center">'.$pageTitle.'</h1>';

  //create form
  echo '<form action="approveEvent.php" method="post">';

  echo '</form>';

  include("footer.html");
?>
