<?php

//Jackie Salim
//PHP code for the first page. This page displays the boat information
//in a table. It displays the owner's name, Marina name, and Slip number of the boat.

  $pageTitle = "Create Agent";

  include("header.html");
  require_once("conn.php");
  //echo $pageTitle;
 echo '<br>';

 echo '<form action="createAgent.php" method="post">';

 echo '<table width="100%">';
  // Row 1
  echo '<tr align="right">';
    echo '<td>';
    echo '<h1>Agent Info</h1>';
    echo '</td>';
    echo '<td>';
    echo '</td>';
    echo '<td>';
    echo '<h1>Address</h1>';
    echo '</td>';
    echo '<td>';
    echo '</td>';
    echo '<td>';
    echo '<h1>Contact</h1>';
    echo '</td>';
  echo '</tr>';
  // Row 2
  echo '<tr>';
    // Column 1
    echo '<td align="right">';
    echo '<select>';
    echo '<option value="Agent">Agent</option>';
    echo '</select><br><br>';
    echo 'First Name :<br><br>';
    echo 'Middle Initial :<br><br>';
    echo 'Last Name :';
    echo '</td>';
    // Column 2
    echo '<td align="left">';
    echo '<br><br>';
    echo '<input type="text" name="fname"><br><br>';
    echo '<input type="text" name="minit"><br><br>';
    echo '<input type="text" name="lname">';
    echo '</td>';
    // Column 3
    echo '<td align="right">';
    echo 'Street :<br><br>';
    echo 'City :<br><br>';
    echo 'State :<br><br>';
    echo 'ZIP :';
    echo '</td>';
    // Column 4
    echo '<td align="left">';
    echo '<input type="text" name="street"><br><br>';
    echo '<input type="text" name="city"><br><br>';
    echo '<input type="text" name="state"><br><br>';
    echo '<input type="text" name="zip">';
    echo '</td>';
    // Column 5
    echo '<td align="right">';
    echo 'Email :<br><br>';
    echo 'Cell Phone :<br><br>';
    echo 'Office Phone :';
    echo '</td>';
    // Column 6
    echo '<td align="left">';
    echo '<input type="text" name="email"><br><br>';
    echo '<input type="text" name="cellPhone"><br><br>';
    echo '<input type="text" name="officePhone">';
    echo '</td>';
  echo '</tr>';
 echo '</table>';

 echo '<br>';

  echo '<div align="center">';
    echo '<button type="reset">Clear</button>';
    echo '<button type="submit">Create</button>';
  echo '</div>';

 echo '</form>';
/*
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
*/
  include("footer.html");

?>
