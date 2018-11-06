<?php

  #pageTitle = "Event Info";
  include("header.html");
  include("conn.php");

  $id = $_GET['id'];

  echo '<div>';
  echo '<form method="post" action="approveEvent.php">';
  $sql = "SELECT EventName FROM Event WHERE EventId = ".$id;
  foreach($conn->query($sql) as $events)
  {
  echo '<div>';
  echo '<label for="eventName">Event Name: </label>';
  echo '<label name="eventName">'.$events['EventName'].'</label>';
  echo '</div>';

  echo '<div>';
  
  echo '</div>';
  }


  echo '</form>';
  echo '</div>';
?>
