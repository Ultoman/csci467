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
    echo '<td align="right" style="border-left: 1px solid grey; border-top: 1px solid grey; border-bottom: 1px solid grey">';
    echo 'Agent Type :<br><br>';
    echo 'First Name :<br><br>';
    echo 'Middle Initial :<br><br>';
    echo 'Last Name :';
    echo '</td>';
    // Column 2
    echo '<td align="left" style="border-right: 1px solid grey; border-top: 1px solid grey; border-bottom: 1px solid grey">';
    echo '<br>';
    echo '<select style="width: 174px">';
    echo '<option value="forArtist">For Artist</option>';
    echo '<option value="forBand">For Band</option>';
    echo '<option value="other">Other</option>';
    echo '</select><br><br>';
    echo '<input type="text" name="fname"><br><br>';
    echo '<input type="text" name="minit"><br><br>';
    echo '<input type="text" name="lname">';
    echo '<br><br>';
    echo '</td>';
    // Column 3
    echo '<td align="right" style="border-left: 1px solid grey; border-top: 1px solid grey; border-bottom: 1px solid grey">';
    echo 'Street :<br><br>';
    echo 'City :<br><br>';
    echo 'State :<br><br>';
    echo 'ZIP :';
    echo '</td>';
    // Column 4
    echo '<td align="left" style="border-right: 1px solid grey; border-top: 1px solid grey; border-bottom: 1px solid grey">';
    echo '<input type="text" name="street"><br><br>';
    echo '<input type="text" name="city"><br><br>';
    echo '<select style="width: 174px">';
    echo '<option value="AL">Alabama</option>';
    echo '<option value="AK">Alaska</option>';
    echo '<option value="AZ">Arizona</option>';
    echo '<option value="AR">Arkansas</option>';
    echo '<option value="CA">California</option>';
    echo '<option value="CO">Colorado</option>';
    echo '<option value="CT">Connecticut</option>';
    echo '<option value="DE">Delaware</option>';
    echo '<option value="DC">District Of Columbia</option>';
    echo '<option value="FL">Florida</option>';
    echo '<option value="GA">Georgia</option>';
    echo '<option value="HI">Hawaii</option>';
    echo '<option value="ID">Idaho</option>';
    echo '<option value="IL">Illinois</option>';
    echo '<option value="IN">Indiana</option>';
    echo '<option value="IA">Iowa</option>';
    echo '<option value="KS">Kansas</option>';
    echo '<option value="KY">Kentucky</option>';
    echo '<option value="LA">Louisiana</option>';
    echo '<option value="ME">Maine</option>';
    echo '<option value="MD">Maryland</option>';
    echo '<option value="MA">Massachusetts</option>';
    echo '<option value="MI">Michigan</option>';
    echo '<option value="MN">Minnesota</option>';
    echo '<option value="MS">Mississippi</option>';
    echo '<option value="MO">Missouri</option>';
    echo '<option value="MT">Montana</option>';
    echo '<option value="NE">Nebraska</option>';
    echo '<option value="NV">Nevada</option>';
    echo '<option value="NH">New Hampshire</option>';
    echo '<option value="NJ">New Jersey</option>';
    echo '<option value="NM">New Mexico</option>';
    echo '<option value="NY">New York</option>';
    echo '<option value="NC">North Carolina</option>';
    echo '<option value="ND">North Dakota</option>';
    echo '<option value="OH">Ohio</option>';
    echo '<option value="OK">Oklahoma</option>';
    echo '<option value="OR">Oregon</option>';
    echo '<option value="PA">Pennsylvania</option>';
    echo '<option value="RI">Rhode Island</option>';
    echo '<option value="SC">South Carolina</option>';
    echo '<option value="SD">South Dakota</option>';
    echo '<option value="TN">Tennessee</option>';
    echo '<option value="TX">Texas</option>';
    echo '<option value="UT">Utah</option>';
    echo '<option value="VT">Vermont</option>';
    echo '<option value="VA">Virginia</option>';
    echo '<option value="WA">Washington</option>';
    echo '<option value="WV">West Virginia</option>';
    echo '<option value="WI">Wisconsin</option>';
    echo '<option value="WY">Wyoming</option>';
    echo '</select><br><br>';
    echo '<input type="text" name="zip">';
    echo '</td>';
    // Column 5
    echo '<td align="right" style="border-left: 1px solid grey; border-top: 1px solid grey; border-bottom: 1px solid grey">';
    echo 'Email :<br><br>';
    echo 'Cell Phone :<br><br>';
    echo 'Office Phone :';
    echo '</td>';
    // Column 6
    echo '<td align="left" style="border-right: 1px solid grey; border-top: 1px solid grey; border-bottom: 1px solid grey">';
    echo '<input type="text" name="email"><br><br>';
    echo '<input type="text" name="cellPhone"><br><br>';
    echo '<input type="text" name="officePhone">';
    echo '</td>';
  echo '</tr>';
 echo '</table>';

 echo '<br>';

  echo '<div align="center">';
    echo '<button type="reset">Clear</button>';
    echo '  ';
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
