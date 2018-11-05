<?php
//Jackie Salim
//PHP code for the first page. This page displays the boat information
//in a table. It displays the owner's name, Marina name, and Slip number of the boat.
  $pageTitle = "Create Agent";
  include("header.html");
  require_once("conn.php");

  //echo $pageTitle;
  echo '<br>';

  echo '<table align="center" border=1>';
     echo '<tr>';
       echo '<td width="150" align="center">';
         echo 'Agent Type';
       echo '</td>';
       echo '<td width="100" align="center">';
           echo 'First Name';
       echo '</td>';
       echo '<td width="100" align="center">';
         echo 'Middle Initial';
       echo '</td>';
       echo '<td width="100" align="center">';
         echo 'Last Name';
       echo '</td>';
       echo '<td width="150" align="center">';
         echo 'Street';
       echo '</td>';
       echo '<td width="150" align="center">';
         echo 'City';
       echo '</td>';
       echo '<td width="150" align="center">';
         echo 'State';
       echo '</td>';
       echo '<td width="150" align="center">';
         echo 'Zip';
       echo '</td>';
       echo '<td width="150" align="center">';
         echo 'Email';
       echo '</td>';
       echo '<td width="100" align="center">';
         echo 'Cell Number';
       echo '</td>';
       echo '<td width="150" align="center">';
         echo 'Office Number';
       echo '</td>';
     echo '</tr>';

  foreach($conn->query('SELECT FirstName,MiddleInit,LastName,Street,City,State,Zip,Email,OfficeNum,CellNum,Type FROM Agent') as $row)
  {
   echo '<tr>';
     echo '<td align="center">';
         echo $row['Type'];
     echo '</td>';
     echo '<td align="center">';
         echo $row['FirstName'];
     echo '</td>';
     echo '<td align="center">';
         echo $row['MiddleInit'];
     echo '</td>';
     echo '<td align="center">';
         echo $row['LastName'];
     echo '</td>';
     echo '<td align="center">';
         echo $row['Street'];
     echo '</td>';
     echo '<td align="center">';
         echo $row['City'];
     echo '</td>';
     echo '<td align="center">';
         echo $row['State'];
     echo '</td>';
     echo '<td align="center">';
         echo $row['Zip'];
     echo '</td>';
     echo '<td align="center">';
         echo $row['Email'];
     echo '</td>';
     echo '<td align="center">';
         echo $row['CellNum'];
     echo '</td>';
     echo '<td align="center">';
         echo $row['OfficeNum'];
     echo '</td>';
   echo '</tr>';
  }

?>
