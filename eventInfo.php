<?php

  include("header.html");
  include("conn.php");
  include("eventInfo.css");

  if (isset($_GET['id'])) {
  $id = $_GET['id'];

  $sql = "SELECT EventId,EventName,SeatingCapacity,Notes,BusinessName,FirstName,LastName,Date,StartTime,Status,Singer,Event.Street as Street,Event.City as City,Event.State as State,Event.Zip as Zip FROM Event,EventManager,Vendor WHERE Event.EventManagerId = EventManager.EventManagerId AND Event.VendorId = Vendor.VendorId AND EventId = ".$id;


  foreach($conn->query($sql) as $events)
  {
  echo '<h1 align="center">Approve \''.$events['EventName'].'\' Event</h1>';
 //create form
  echo '<form action="approveEvent.php" method="post">';
  // OUTER DIV
  echo '<div align="center">';
  echo '<div style=" border: 2px solid #333333; width: 80%">'; // INNER DIV
   echo '<table width="100%">'; //TABLE
   echo '<div style="float: left; padding: 1em">';
    echo '<label>Event Id :</label>';
    echo '<input style="background: #eeeeee; text-align: center" name="eventId" value="'.$events['EventId'].'" size="3" readonly>';
   echo '</div>';
   echo '<tr>'; // ROW 1
   echo '<td align="right" width="25%">'; // COL 1 HEADER
    echo '<label>Seating Capacity :</label>';
   echo '</td>';
   echo '<td align="left" width="25%">'; // COL 1 TEXT
    echo '<label>'.$events['SeatingCapacity'].'</label>';
   echo '</td>';
   echo '<td align="right" width="25%">'; // COL 2 HEADER
    echo '<label>Manager :</label>';
   echo '</td>';
   echo '<td align="left" width="25%">'; // COL 2 TEXT
    echo '<label>'.$events['FirstName']." ".$events['LastName'].'</label>';
   echo '</td>';
   echo '</tr>'; // END ROW 1

   echo '<tr>'; // ROW 2
   echo '<td align="right" width="25%">';
    echo '<label>Vendor :</label>';
   echo '</td>';
   echo '<td align="left" width="25%">';
    echo '<label>'.$events['BusinessName'].'</label>';
   echo '</td>';
   echo '<td align="right" width="25%">';
    echo '<label>Singer :</label>';
   echo '</td>';
   echo '<td align="left" width="25%">';
    echo '<label>'.$events['Singer'].'</label>';
   echo '</td>';
   echo '</tr>'; // END ROW 2

   echo '<tr>';  // ROW 3
   echo '<td align="right" width="25%">';
    echo '<label>Date :</label>';
   echo '</td>';
   echo '<td align="left" width="25%">';
    echo '<label>'.$events['Date'].'</label>';
   echo '</td>';
   echo '<td align="right" width="25%">';
    echo '<label>Time :</label>';
   echo '</td>';
   echo '<td align="left" width="25%">';
    echo '<label>'.$events['StartTime'].'</label>';
   echo '</td>';
   echo '</tr>'; // END ROW 3

   echo '<tr>';  // ROW 4
   echo '<td align="right" width="25%">';
    echo '<label>Address :</label>';
   echo '</td>';
   echo '<td align="left" width="25%">';
    echo '<label>'.$events['Street'].', '.$events['City'].', '.$events['State'].', '.$events['Zip'].'</label>';
   echo '</td>';
   echo '<td align="right" width="25%">';
    echo '<label>Special Notes :</label>';
   echo '</td>';
   echo '<td align="left" width="25%">';
    echo '<label>'.$events['Notes'].'</label>';
   echo '</td>';
   echo '</tr>'; // END ROW 4
  echo '</table>'; // END TABLE
  echo '</div>'; // INNER DIV

  echo '<div style="padding: 2em;" align="center">';
    echo '<button class="button button1" style="margin: 0 2em" onClick="history.back()" name="foo" value="cancel">Cancel</button>';
    echo '<button type="submit" class="button button1" style="margin: 0 2em">Approve</button>';
  echo '</div>';

  echo '</div>'; // OUTER DIV
  echo '</form>';

  } //FOREACH
  } //END IF
/*
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
*/

 include('footer.html');
?>
