<?php

  $pageTitle = "Choose an Event to Approve";
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
    echo '<th>Vendor</th>';
    echo '<th>Date</th>';
    echo '<th> </th>';
    echo '</tr>';
    foreach($conn->query('SELECT EventId,EventName,SeatingCapacity,BusinessName,FirstName,LastName,Date,StartTime,Status,Singer,Event.Street,Event.City,Event.State,Event.Zip FROM Event,EventManager,Vendor WHERE Event.EventManagerId = EventManager.EventManagerId AND Event.VendorId = Vendor.VendorId AND status = "created"') as $events)
    {
    // Event Row
    echo '<form action="eventInfo.php" method="get">';
    echo '<tr>';
    echo '<td style="text-align: center">';
    echo '<input name="id" value="'.$events['EventId'].'" style="background: #eeeeee; text-align: center" size="3" readonly>';
    echo '</td>';
    echo '<td>';
    echo '<label name="eventname">'.$events['EventName'].'</label>';
    echo '</td>';
    echo '<td>';
    echo '<label>'.$events['Singer'].'</label>';
    echo '</td>';
    echo '<td>';
    echo '<label>'.$events['BusinessName'].'</label>';
    echo '</td>';
    echo '<td>';
    echo '<label>'.$events['Date'].'</label>';
    echo '</td>';
    echo '<td style="text-align: center">';
    echo '<button type="submit" class="button button1">View</button>';
    echo '</td>';
    echo '</tr>';
    echo '</form>';
    }
    echo '</select>';
    echo '</table>';
  echo '</div>';
  echo '<br><br>';

if ($_SERVER['REQUEST_METHOD'] == "POST")
  {
    if ($_POST['foo'] == 'cancel')
    {
    }
    else{
     $id = $_POST['eventId'];
     $eventname = $_POST['eventname'];

      $sql = "UPDATE Event SET Status = 'approved' WHERE EventId = ".$id;
      try{
        $conn->query($sql);
      }
      catch(PDOException $e){
         $message = $e->getMessage();
         echo "<script type='text/javascript'>alert('$message');</script>";
      }
      $msg = addslashes("Event '$eventname' was approved");
      echo "<script type='text/javascript'>alert('$msg');</script>";

      header("Refresh:0");
    }
  }


  include("footer.html");
?>
