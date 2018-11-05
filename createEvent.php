<?php
//Jackie Salim
//This displays the boats owned by the specified owner. The owner last names
//are displayed in a drop down menu and when selected and sumbitted, the names of the boats
//owned by that owner are displayed in a table.

  $pageTitle = "Create New Event";

  include("header.html");
  require_once("conn.php");

  echo '<h1>'.$pageTitle.'</h1>';

  //create form
  echo '<form action="createEvent.php" method="post">';

  // LEFT DIV
  echo '<div style=" border: 2px solid gray; float: left; width: 49%">';

   echo '<div style="float:left; margin-right:20px; padding: 10px">';
    echo '<label for="name" style="display: block">Name</label>';
    echo '<input id="name" type="text" value="" name="name" style="display: block">';
   echo '</div>';

   echo '<div style="float:left; margin-right:20px; padding: 10px;">';
    echo '<label for="date" style="display: block">Date</label>';
    echo '<input id="date" type="date" value="" name="date" style="display: block">';
   echo '</div>';

   echo '<div style="float:left; margin-right:20px; padding: 10px">';
    echo '<label for="time" style="display: block">Time</label>';
    echo '<input id="time" type="time" value="" name="time" style="display: block">';
   echo '</div>';

  echo '</div>';

  // RIGHT DIV
  echo '<div style=" border: 2px solid gray; float: right; width: 49%">';

   echo '<div style="float:left; margin-right:20px; padding: 10px">';
    echo '<label for="name" style="display: block">Name</label>';
    echo '<input id="name" type="text" value="" name="name" style="display: block">';
   echo '</div>';

   echo '<div style="float:left; margin-right:20px; padding: 10px">';
    echo '<label for="date" style="display: block">Date</label>';
    echo '<input id="date" type="date" value="" name="date" style="display: block">';
   echo '</div>';

   echo '<div style="float:left; margin-right:20px; padding: 10px">';
    echo '<label for="time" style="display: block">Time</label>';
    echo '<input id="time" type="time" value="" name="time" style="display: block">';
   echo '</div>';

  echo '</div>';

  echo '</form>';

/*
  //create the drop down maneu
  echo '<select name="ownersLastNames">';
  echo '<option value="empty">-- select an owner --</option>';

  //populate drop down with database info
  foreach($conn->query('SELECT LastName FROM Owner') as $ownersLastNames)
  {
   echo '<option value="'.$ownersLastNames['LastName'].'">'.$ownersLastNames['LastName'].'</option>';
  }
  echo '</select>';

  echo '<br><br>';
  echo '<input type="submit" name="submit" value="Show">';
  echo '&nbsp&nbsp&nbsp';
  echo '<input type="reset" name="reset">';

  echo '</form>';

  //handles button action
  if ($_SERVER['REQUEST_METHOD'] == 'POST')
  {
   $lastname = $_POST['ownersLastNames'];
   $sql = "select BoatName from MarinaSlip,Owner where Owner.LastName = '$lastname' and Owner.OwnerId = MarinaSlip.OwnerNum";

   echo 'Boats owned by '.$lastname.':<br><br>';

   echo '<table border=1>';
   foreach($conn->query($sql) as $row)
   {
    echo '<tr>';
      echo '<td width=100 align="center">';
        echo $row['BoatName'];
      echo '</td>';
    echo '</tr>';
   }//end for each
   echo '</table>';
  }//end if

*/
  include("footer.html");

?>

