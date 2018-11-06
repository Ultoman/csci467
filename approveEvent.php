<?php
//Jackie Salim
//This allows the user to add an Owner

  $pageTitle = "Approve Event";

  include("main.css");
  include("header.html");
  require_once("conn.php");

  echo '<h1 align="center">'.$pageTitle.'</h1>';

  //create form
  echo '<form action="approveEvent.php" method="post">';
  // OUTER DIV
  echo '<div align="center">';
  echo '<table>';
    // Header Row
    echo '<tr>';
    echo '<th>Event Name</th>';
    echo '<th>Band/Artist</th>';
    echo '<th>Vendor</th>';
    echo '<th></th>';
    echo '</tr>';
    foreach($conn->query('SELECT EventId,EventName FROM Event WHERE Status = "created"') as $events)
    {
    // Event Row
    echo '<tr>';
    echo '<option value="' .$events['EventId']. '">'.$events['EventName'].'</option>';
    echo '</tr>';
    }
    echo '</table>';
  echo '</div>';

  echo '<div style="padding: 2em;" align="center">';
    echo '<button type="reset" class="button button1" style="margin: 0 2em">Clear</button>';
    echo '<button type="submit" class="button button1" style="margin: 0 2em">Choose Event</button>';
  echo '</div>';

  echo '</form>';

  include("footer.html");
?>
