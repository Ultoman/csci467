<?php

//Jackie Salim
//PHP code for the first page. This page displays the boat information
//in a table. It displays the owner's name, Marina name, and Slip number of the boat.

  $pageTitle = "Boat Information";

  include("header.php");
  require_once("conn.php");
  //echo $pageTitle;

 echo '<table align="center" border=1>';
     echo '<tr>';
       echo '<td width="100" align="center">';
           echo 'Boat Name';
       echo '</td>';
       echo '<td width="100" align="center">';
         echo 'First Name';
       echo '</td>';
       echo '<td width="100" align="center">';
         echo 'Last Name';
       echo '</td>';
       echo '<td width="150" align="center">';
         echo 'Marina Name';
       echo '</td>';
       echo '<td width="100" align="center">';
         echo 'Slip Number';
       echo '</td>';
     echo '</tr>';

  foreach($conn->query('SELECT BoatName,FirstName,LastName,Name,SlipNum FROM Marina,MarinaSlip,Owner') as $row)
  {
   echo '<tr>';
     echo '<td align="center">';
         echo $row['BoatName'];
     echo '</td>';
     echo '<td align="center">';
         echo $row['FirstName'];
     echo '</td>';
     echo '<td align="center">';
         echo $row['LastName'];
     echo '</td>';
     echo '<td align="center">';
         echo $row['Name'];
     echo '</td>';
     echo '<td align="center">';
         echo $row['SlipNum'];
     echo '</td>';
   echo '</tr>';
  }

  include("footer.html");

?>
