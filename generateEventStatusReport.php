<?php
//Jackie Salim
//This displays the boats owned by the specified owner. The owner last names
//are displayed in a drop down menu and when selected and sumbitted, the names of the boats
//owned by that owner are displayed in a table.
  $pageTitle = "Generate Detail Report";
  include("header.html");
  require_once("conn.php");

 echo '<h1 align="center">'.$pageTitle.'</h1>';

  //create form
  echo '<form action="generateEventStatusReport.php" method="post">';
  //create the drop down maneu

  echo '<div align="center">';
  echo '<label for="events" style="display: block">Select an Event:<label>';
  echo '<select name="events" style="display: block">';
  echo '<option value="empty">-- select an Event --</option>';
  //populate drop down with database info
  foreach($conn->query('SELECT EventName,EventId FROM Event') as $event)
  {
   echo '<option value="'.$event['EventId'].'">'.$event['EventName'].'</option>';
  }
  echo '</select>';
  echo '</div>';
  echo '<br><br>';

  echo '<div style="padding: 2em" align="center">';
    echo '<button type="reset" class="button button1" style="margin: 0 2em">Clear</button>';
    echo '<button type="submit" class="button button1" style="margin: 0 2em">Create</button>';
  echo '</div>';

  echo '</form>';

  //handles button action
  if ($_SERVER['REQUEST_METHOD'] == 'POST')
  {
   $eventId = $_POST['events'];
   $sql = "select * from Event where EventId = '$eventId'";

  echo '<div style="padding: 2em" align="center">';
   echo '<table border="1" style="border-collapse: collapse" >';
    echo '<tr>';
     echo '<th>';
      echo 'Id';
     echo '</th>';
     echo '<th>';
      echo 'Name';
     echo '</th>';
     echo '<th>';
      echo 'Date';
     echo '</th>';
     echo '<th>';
      echo 'Start Time';
     echo '</th>';
     echo '<th>';
      echo 'Seating Capacity';
     echo '</th>';
     echo '<th>';
      echo 'Singer';
     echo '</th>';
     echo '<th>';
      echo 'Notes';
     echo '</th>';
    echo'</tr>';
   foreach($conn->query($sql) as $row)
   {
    echo '<tr>';
      echo '<td width=100 align="center">';
        echo $row['EventId'];
      echo '</td>';
      echo '<td width=100 align="center">';
        echo $row['EventName'];
      echo '</td>';
      echo '<td width=100 align="center">';
        echo $row['Date'];
      echo '</td>';
      echo '<td width=100 align="center">';
        echo $row['StartTime'];
      echo '</td>';
      echo '<td width=100 align="center">';
        echo $row['SeatingCapacity'];
      echo '</td>';
      echo '<td width=100 align="center">';
        echo $row['Singer'];
      echo '</td>';
      echo '<td width=100 align="center">';
        echo $row['Notes'];
      echo '</td>';
    echo '</tr>';
   }//end for each
   echo '</table>';
  echo '</div>';

  echo '<div style="padding: 2em" align="center">';
   echo '<button class="button button1" onClick="window.print()">Print</button>';
  echo '</div>';

  }//end if
  include("footer.html");
?>
