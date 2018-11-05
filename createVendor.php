<?php
//Jackie Salim
//This displays services that have been done on the specified boat.
//If no service has been done, an appropriate message is displayed.

  $pageTitle = "Boat Service Information";

  include("header.html");
  require_once("conn.php");

  echo '<br>Vendor ID: ';
  echo '<input type="text" name="vendorID" value=01 style="width: 50px; text-align: center; background-color: #F9F6F6; color: grey" readonly><br><br>';

  //create form
  echo '<form action="createVendor.php" method="post">';

 //OUTER DIV
 echo '<div>';

 //VENDOR div and table
 echo '<div style="padding: 10px; border: 2px solid gray; float: left; width: 30%">';
  echo '<table>';
   // Row 1
   echo '<tr>';
     echo '<td colspan="2" align="center">';
     echo '<h1>Vendor</h1>';
     echo '</td>';
   echo '</tr>';
   //Row 2
   echo '<tr>';
    // Column 1
    echo '<td align="right" style="padding-left: 20px">';
    echo 'Vendor Type :<br><br>';
    echo 'Business Name :<br><br>';
    echo 'Representative First Name :<br><br>';
    echo 'Representative Last Name :<br><br>';
    echo '</td>';
     // Column 2
    echo '<td align="left">';
    echo '<br>';
    echo '<select name="vendorType" style="width: 174px">';
    echo '<option value="concertHall">Concert Hall</option>';
    echo '<option value="equipment">Equipment</option>';
    echo '<option value="setup">Setup</option>';
    echo '<option value="lighting">Lighting</option>';
    echo '<option value="sound">Sound</option>';
    echo '<option value="cleanup">Cleanup</option>';
    echo '<option value="security">Security</option>';
    echo '<option value="food">Foods</option>';
    echo '<option value="operating">Operating</option>';
    echo '<option value="advertisement">Advertisement</option>';
    echo '<option value="other">Others</option>';
    echo '</select><br><br>';
    echo '<input type="text" name="businessName" placeholder="Joe\'s Catering Service" maxLength="50"><br><br>';
    echo '<input type="text" name="repFirstName" placeholder="John" maxLength="25"><br><br>';
    echo '<input type="text" name="repLastName" placeholder="Doe" maxLength="25"><br><br>';
    echo '<br>';
    echo '</td>';
   echo '</tr>';
  echo '</table>';
 echo '</div>';

 //ADDRESS div and table
 echo '<div style="padding: 10px; border: 2px solid gray; float: left; width: 30%; margin-left: 30px">';
  echo '<table>';
   // Row 1
   echo '<tr align="center">';
     echo '<td colspan="2">';
     echo '<h1>Address</h1>';
     echo '</td>';
   echo '</tr>';
   //Row 2
   echo '<tr>';
    // Column 1
    echo '<td align="right" style="padding-left: 90px">';
    echo '<br>';
    echo 'Street :<br><br>';
    echo 'City :<br><br>';
    echo 'State :<br><br>';
    echo 'ZIP :';
    echo '<br><br>';
    echo '</td>';
    // Column 4
    echo '<td align="left">';
    echo '<br>';
    echo '<input type="text" name="street" placeholder="123 Broadway Dr" maxLength="50"><br><br>';
    echo '<input type="text" name="city" placeholder="City" maxLength="20"><br><br>';
    echo '<select name="state" style="width: 174px">';
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
    echo '<input type="text" name="zip" placeholder="12345" maxLength="10">';
    echo '<br><br>';
    echo '</td>';
   echo '</tr>';
  echo '</table>';
 echo '</div>';

 //CONTACT div and table
 echo '<div style="padding: 10px; border: 2px solid gray; float: right; width: 30%">';
  echo '<table>';
   // Row 1
   echo '<tr align="center">';
     echo '<td colspan="2">';
     echo '<h1>Contact</h1>';
     echo '</td>';
   echo '</tr>';
   // Row 2
   echo '<tr>';
      // Column 1
    echo '<td align="right" style="padding-left: 90px">';
    echo '<br><br>';
    echo 'Email :<br><br>';
    echo 'Phone :<br><br>';
    echo '<br><br>';

    echo '</td>';
    // Column 2
    echo '<td align="left">';
    echo '<br><br>';
    echo '<input type="text" name="email" placeholder="example@email.com" maxLength="40"><br><br>';
    echo '<input type="text" name="phone" placeholder="8151231000" maxLength="10"><br><br>';
    echo '<br><br>';
    echo '</td>';
   echo '</tr>';

  echo '</table>';
 echo '</div>';

 echo '</div>'; //end main div

  echo '<div align="center">';
   echo '<table width="100%" style="padding-top: 20px">';
    echo '<tr><td align="center">';
    echo '<button type="reset">Clear</button>';
    echo '  ';
    echo '<button type="submit">Create</button>';
   echo '</td></tr>';
   echo '</table>';
  echo '</div>';

echo '</form>';

/*
  //create the drop down maneu
  echo '<select name="boatnames">';
  echo '<option value="empty">-- select a boat --</option>';

  //populate drop down with database info
  foreach($conn->query('SELECT BoatName FROM MarinaSlip') as $boatname)
  {
   echo '<option value="'.$boatname['BoatName'].'">'.$boatname['BoatName'].'</option>';
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
   $nameboat = $_POST['boatnames'];
   $sql = "select CategoryDescription from MarinaSlip,ServiceCategory,ServiceRequest where MarinaSlip.BoatName = '$nameboat' and ServiceRequest.SlipId = MarinaSlip.SlipId and ServiceCategory.CategoryNum = ServiceRequest.CategoryNum";

   echo 'Service done on '.$nameboat.':<br><br>';


   $q = $conn->query($sql);
   $cnt = $q->rowCount();

   if($cnt == 0)
   {
    echo '--No service has been done--';
   }
   else
   {
     echo '<table border=1>';


     while($row=$q->fetch(PDO::FETCH_ASSOC))
     {
      echo '<tr>';
        echo '<td style="padding: 0px 5px 0px 5px;">';
          echo $row['CategoryDescription'];
        echo '</td>';
      echo '</tr>';
     }//end while

     echo '</table>';
   }//end else

  }//end if
*/
  include("footer.html");

?>

