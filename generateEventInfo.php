<?php

  include("header.html");
  include("conn.php");
  include("eventInfo.css");

  if (isset($_GET['id'])) {
  $id = $_GET['id'];

  $sql = "SELECT EventId,EventName,SeatingCapacity,Notes,BusinessName,FirstName,LastName,Date,StartTime,Status,NumTicketsSold,Singer,PerformerType,PerformerId,Event.Street as Street,Event.City as City,Event.State as State,Event.Zip as Zip FROM Event,EventManager,Vendor WHERE Event.EventManagerId = EventManager.EventManagerId AND Event.VendorId = Vendor.VendorId AND EventId = ".$id;


  foreach($conn->query($sql) as $events)
  {
  echo '<h1 align="center">\''.$events['EventName'].'\' Details</h1>';

 //create form
  echo '<form action="generateReport.php" method="post">';
  // OUTER DIV
  echo '<div align="center">';
  echo '<div style=" border: 2px solid #333333; width: 80%">'; // INNER DIV
   echo '<table width="100%">'; //TABLE
   echo '<div style="float: left; padding: 1em">';
    echo '<label>Event Id : </label>';
    echo '<input style="background: #eeeeee; text-align: center" name="eventId" value="'.$events['EventId'].'" size="3" readonly>';
   echo '</div>';

   echo '<div style="float: right; padding: 1em">';
    echo '<label>Status : </label>';
    echo '<label style="background: #ffff80; text-align: center; width: 80px; display: inline-block">'.$events['Status'].'</label>';
   echo '</div>';

   echo '<tr>';  // ROW 1
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
   echo '</tr>'; // END ROW 1


   echo '<tr>'; // ROW 2
   echo '<td align="right" width="25%">';
    echo '<label>Vendor :</label>';
   echo '</td>';
   echo '<td align="left" width="25%">';
    echo '<label>'.$events['BusinessName'].'</label>';
   echo '</td>';
   echo '<td align="right" width="25%">';
    echo '<label>Performer :</label>';
   echo '</td>';
   echo '<td align="left" width="25%">';
    echo '<label>'.$events['Singer'].'</label>';
   echo '</td>';
   echo '</tr>'; // END ROW 2

   echo '<tr>'; // ROW 3
   echo '<td align="right" width="25%">'; // COL 1 HEADER
    echo '<label>Tickets Sold :</label>';
   echo '</td>';
   echo '<td align="left" width="25%">'; // COL 1 TEXT
    echo '<label>'.$events['NumTicketsSold'].'/'.$events['SeatingCapacity'].'</label>';
   echo '</td>';

   // Grab Performer Contact info from appropriate table
   if($events['PerformerType'] == 'Artist'){
     $singerSql = "select Email, CellNum from Artist where Artist.ArtistId =".$events['PerformerId'];

     foreach($conn->query($singerSql) as $info){

      $parsedInfo = str_split($info['CellNum']);
      $formattedCell = '('.$parsedInfo[0].$parsedInfo[1].$parsedInfo[2].') '.$parsedInfo[3].$parsedInfo[4].$parsedInfo[5].'-'.$parsedInfo[6].$parsedInfo[7].$parsedInfo[8].$parsedInfo[9];

       echo '<td align="right" width="25%">'; // COL 2 HEADER
        echo '<label>Performer Contact :</label>';
       echo '</td>';
       echo '<td align="left" width="25%">'; // COL 2 TEXT
        echo '<label>'.$formattedCell.'<br>'.$info['Email'].'</label>';
       echo '</td>';
     }
   }
   else{
     $singerSql = "select CellNum from Band where Band.BandId =".$events['PerformerId'];

     foreach($conn->query($singerSql) as $info){

     $parsedInfo = str_split($info['CellNum']);
     $formattedCell = '('.$parsedInfo[0].$parsedInfo[1].$parsedInfo[2].') '.$parsedInfo[3].$parsedInfo[4].$parsedInfo[5].'-'.$parsedInfo[6].$parsedInfo[7].$parsedInfo[8].$parsedInfo[9];

       echo '<td align="right" width="25%">'; // COL 2 HEADER
        echo '<label>Performer Contact :</label>';
       echo '</td>';
       echo '<td align="left" width="25%">'; // COL 2 TEXT
        echo '<label>'.$formattedCell.'</label>';
       echo '</td>';
     }
   }
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

  echo '<div style="padding: 2em;"  align="center">';
    echo '<button class="button button1" style="margin: 0 2em" onClick="history.back()" name="foo" value="cancel">Cancel</button>';
    echo '<button type="submit" onClick="window.print()" class="button button1" style="margin: 0 3em" name="foo" value="submit">Print</button>';
  echo '</div>';

  echo '</div>'; // OUTER DIV
  echo '</form>';
  } //FOREACH
 } //END IF

 include('footer.html');
?>
