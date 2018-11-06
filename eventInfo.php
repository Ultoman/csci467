<?php

  include("header.html");
  include("conn.php");

  $pageTitle = "Approve Event";

  if (isset($_GET['id'])) {
  $id = $_GET['id'];

  $sql = "SELECT EventId,EventName,SeatingCapacity,Notes,BusinessName,FirstName,LastName,Date,StartTime,Status,Singer,Event.Street as Street,Event.City as City,Event.State as State,Event.Zip as Zip FROM Event,EventManager,Vendor WHERE Event.EventManagerId = EventManager.EventManagerId AND Event.VendorId = Vendor.VendorId AND EventId = ".$id;

  echo '<h1 align="center">'.$pageTitle.'</h1>';

  foreach($conn->query($sql) as $events)
  {
  //create form
  echo '<form action="eventInfo.php" method="post">';
  // OUTER DIV
  echo '<div style="display: flex; justify-content: space-around">';
  // LEFT DIV
  echo '<div style=" border: 2px solid #333333; width: 40%">';
   echo '<div style="margin-right:20px; padding-top: 5%; padding-left: 10%">';
    echo '<label style="float: left; display: block">Event Id :</label>';
    echo '<input name="eventId" value="'.$events['EventId'].'">';
   echo '</div>';
   echo '<div style="margin-right:20px; padding-left: 10%; padding-top: 10px">';
    echo '<label style="float: left; display: block">Event Name :</label>';
    echo $events['EventName'];
   echo '</div>';
   echo '<div style="margin-right:20px; padding-left: 10%; padding-top: 10px">';
    echo '<label style="float: left; display: block">Seating Capacity :</label>';
    echo $events['SeatingCapacity'];
   echo '</div>';
   echo '<div style="margin-right:20px; padding-left: 10%; padding-top: 10px">';
    echo '<label style="float: left; display: block">Manager:</label>';
    echo $events['FirstName'].' '.$events['LastName'];
   echo '</div>';
   echo '<div style="margin-right:20px; padding-left: 10%; padding-top: 10px">';
    echo '<label style="float: left; display: block">Vendor:</label>';
    echo $events['BusinessName'];
   echo '</div>';
   echo '<div style="margin-right:20px; padding-left: 10%; padding-top: 10px">';
    echo '<label style="float: left; display: block">Singer:</label>';
    echo $events['Singer'];
   echo '</div>'; // radio/select DIV end
   echo '<div style="margin-right:20px;  padding-left: 10%; padding-top: 10px">';
    echo '<label for="notes" style="display: block">Special Notes</label>';
    echo '<textarea id="notes" name="notes" style="display: block; background: #eeeeee" rows="4" cols="50" readonly>'.$events['Notes'].'</textarea>';
   echo '</div>';
  echo '</div>'; // LEFT DIV END
  // RIGHT DIV
  echo '<div style=" border: 2px solid #333333; width: 40%">';
   echo '<div style="margin-right:20px; padding-top: 5%; padding-left: 10%">';
    echo '<label for="date" style="display: block">Date</label>';
    echo $events['Date'];
   echo '</div>';
   echo '<div style="margin-right:20px; padding-top: 5%">';
    echo '<label for="time" style="display: block">Time</label>';
    echo $events['StartTime'];
   echo '</div>';
   echo '<div style="float: left; margin-right:20px; padding-left: 10%; padding-top: 10px">';
    echo '<label for="street" style="display: block">Street</label>';
    echo $events['Street'];
   echo '</div>';
   echo '<div style="margin-right:20px; padding-top: 10px">';
    echo '<label for="city" style="display: block">City</label>';
    echo $events['City'];
   echo '</div>';
   echo '<div style="float: left; margin-right:20px; padding-left: 10%">';
   echo '<label for="state" style="display: block">State</label>';
   echo $events['State'];
  echo '</div>';
  echo '<div style="margin-right:20px;">';
  echo '<label for="zip" style="display: block">ZIP</label>';
    echo $events['Zip'];
  echo '</div>';
  echo '</div>'; // RIGHT DIV END
  echo '</div>'; // OUTER DIV END
  echo '<div style="padding: 2em;" align="center">';
    echo '<button type="reset" class="button button1" style="margin: 0 2em">Clear</button>';
    echo '<button type="submit" class="button button1" style="margin: 0 2em">Approve</button>';
  echo '</div>';
  echo '</form>';
  }
  }

if ($_SERVER['REQUEST_METHOD'] == "POST")
  {
    $id = $_POST['eventId'];
    echo $id;
     $sql = "UPDATE Event SET Status = 'approved' WHERE EventId = ".$id;
     try{
       $conn->query($sql);
     }
     catch(PDOException $e){
        $message = $e->getMessage();
        echo "<script type='text/javascript'>alert('$message');</script>";
     }
     $msg = addslashes("Event '$id' was approved");
     echo "<script type='text/javascript'>alert('$msg');</script>";
  }

?>
