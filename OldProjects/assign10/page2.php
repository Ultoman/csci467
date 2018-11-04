<?php
//Jackie Salim
//This displays the boats owned by the specified owner. The owner last names
//are displayed in a drop down menu and when selected and sumbitted, the names of the boats
//owned by that owner are displayed in a table.

  $pageTitle = "Owner Boat Information";

  include("header.php");
  require_once("conn.php");

  echo 'Select an Owner:<br>';
  //create form
  echo '<form action="page2.php" method="post">';

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


  include("footer.html");

?>

