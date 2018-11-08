<?php

  $pageTitle = "Generate Event Detail Report";
  include("main.css");
  include("header.html");
  include("approveEvent.css");
  require_once("conn.php");

  echo '<h1 align="center">'.$pageTitle.'</h1>';

  // OUTER DIV
  echo '<div align="center">';
  echo '<table>';
    // Header Row
    echo '<tr>';
    echo '<th>Event Id</th>';
    echo '<th>Event Name</th>';
    echo '<th>Band/Artist</th>';
    echo '<th> </th>';
    echo '</tr>';
    foreach($conn->query('SELECT EventId,EventName,SeatingCapacity,BusinessName,FirstName,LastName,Date,StartTime,Status,Singer,Event.Street,Event.City,Event.State,Event.Zip FROM Event,EventManager,Vendor WHERE Event.EventManagerId = EventManager.EventManagerId AND Event.VendorId = Vendor.VendorId') as $events)
    {
    // Event Row
    echo '<form action="generateEventInfo.php" method="get">';
    echo '<tr>';
    echo '<td style="text-align: center">';
    echo '<input name="id" value="'.$events['EventId'].'" style="background: #eeeeee; text-align: center" size="3" readonly>';
    echo '</td>';
    echo '<td>';
    echo '<label>'.$events['EventName'].'</label>';
    echo '</td>';
    echo '<td>';
    echo '<label>'.$events['Singer'].'</label>';
    echo '</td>';
    echo '<td style="text-align: center">';
    echo '<button type="submit" class="button button1">Generate</button>';
    echo '</td>';
    echo '</tr>';
    echo '</form>';
    }
    echo '</select>';
    echo '</table>';
  echo '</div>';

  echo '<br><br>';

  include("footer.html");
?>
