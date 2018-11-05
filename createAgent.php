<?php

//Jackie Salim
//PHP code for the first page. This page displays the boat information
//in a table. It displays the owner's name, Marina name, and Slip number of the boat.

  $pageTitle = "Create New Agent";
  $border = "style=\"border: 1px grey solid; border-radius: 4px\"";

  include("header.html");
  require_once("conn.php");
  //echo $pageTitle;

 echo '<h1>'.$pageTitle.'</h1>';

 echo 'Agent ID: ';
 echo '<input type="text" name="agentID" value=01 style="width: 50px; text-align: center; background-color: #F9F6F6; color: grey" readonly><br><br>';

 echo '<form action="createAgent.php" method="post">';

 echo '<table width="100%">';
  // Row 1
  echo '<tr align="right">';
    echo '<td>';
    echo '<h2>Agent Info</h2>';
    echo '</td>';
    echo '<td>';
    echo '</td>';
    echo '<td>';
    echo '<h2>Address</h2>';
    echo '</td>';
    echo '<td>';
    echo '</td>';
    echo '<td>';
    echo '<h2>Contact</h2>';
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
    echo '<select name="agentType" style="width: 174px">';
    echo '<option value="For Artist">For Artist</option>';
    echo '<option value="For Band">For Band</option>';
    echo '<option value="Other">Other</option>';
    echo '</select><br><br>';
//    echo '<input type="text" name="fname" placeholder="Jane" maxLength="25"'.$border.'><br><br>';
    echo '<input type="text" name="fname" placeholder="Jane" maxLength="25"><br><br>';
    echo '<input type="text" name="minit" placeholder="G" maxLength="1"><br><br>';
    echo '<input type="text" name="lname" placeholder="Doe" maxLength="25">';
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
    echo '<input type="text" name="street" placeholder="123 W Broadway Dr" maxLength="50"><br><br>';
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
    echo '<input type="text" name="zip" placeholder="12345"  maxLength="10">';
    echo '</td>';
    // Column 5
    echo '<td align="right" style="border-left: 1px solid grey; border-top: 1px solid grey; border-bottom: 1px solid grey">';
    echo 'Email :<br><br>';
    echo 'Cell Phone :<br><br>';
    echo 'Office Phone :';
    echo '</td>';
    // Column 6
    echo '<td align="left" style="border-right: 1px solid grey; border-top: 1px solid grey; border-bottom: 1px solid grey">';
    echo '<input type="text" name="email" placeholder="example@email.com" maxLength="30"><br><br>';
    echo '<input type="text" name="cellPhone" placeholder="8151231000" maxLength="10"><br><br>';
    echo '<input type="text" name="officePhone" placeholder="8151231000"  maxLength="10">';
    echo '</td>';
  echo '</tr>';
 echo '</table>';

 echo '<br>';

  echo '<div align="center">';
//    echo '<button type="reset" style="background-color: white; font-size: 16px; padding: 10px 24px; border: 2px solid #333333">Clear</button>';
    echo '<button type="reset" class="button button1">Clear</button>';
    echo '  ';
    echo '<button type="submit" class="button button1">Create</button>';
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

  //handles button action
  if ($_SERVER['REQUEST_METHOD'] == 'POST')
  {
    /*$firstname = $_POST['fName'];
    $lastname = $_POST['lName'];
    $sql = "insert into Owner (FirstName, LastName) values (?, ?)";
    try{
      $stmt = $conn->prepare($sql);
      $stmt->execute(array($firstname, $lastname));
    }
    catch(PDOException $e){
       $message = $e->getMessage();
       echo "<script type='text/javascript'>alert('$message');</script>";
    }*/
    $firstname = $_POST['fname'];
    $middle = $_POST['minit'];
    $lastname = $_POST['lname'];
    $street = $_POST['street'];
    $city = $_POST['city'];
    $state = $_POST['state'];
    $zip = $_POST['zip'];
    $email = $_POST['email'];
    $cellPhone = $_POST['cellPhone'];
    $officePhone = $_POST['officePhone'];
    $agentType = $_POST['agentType'];

    if (empty($firstname) || empty($middle) || empty($lastname) || empty($street) || empty($city) || empty($state)|| empty($zip)|| empty($email)|| empty($officePhone)|| empty($cellPhone)) {
     $border = "style=\"border: 1px red solid; border-radius: 4px\"";
     echo "<script type='text/javascript'>alert('ERROR: All Fields Required\\n\\nPlease fill out all fields');</script>";
    }
    else if (!is_numeric($zip) || !is_numeric($officePhone) || !is_numeric($cellPhone)){
     echo "<script type='text/javascript'>alert('ERROR: Non numeric found in numeric fields\\n\\nPhone numbers and Zip code must be numbers only');</script>";
    }
    else {
     //Not Empty
     $sql = "insert into Agent (FirstName,MiddleInit,LastName,Street,City,State,Zip,Email,OfficeNum,CellNum,Type) values (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
     try{
       $stmt = $conn->prepare($sql);
       $stmt->execute(array($firstname, $middle, $lastname, $street, $city, $state, $zip, $email, $officePhone, $cellPhone, $agentType));
     }
     catch(PDOException $e){
        $message = $e->getMessage();
        echo "<script type='text/javascript'>alert('$message');</script>";
     }

     $msg = "$firstname $middle. $lastname was added";
 //    echo "<script type='text/javascript'>alert('$firstname $lastname was addeded.\n\nAddress:\n$street $city , $state $zip\n\nContact:\nemail: $email\ncell: $cellPhone\noffice: $officePhone\n\nAgent Type: $agentType');</script>";
     echo "<script type='text/javascript'>alert('$msg');</script>";
    }
  }

  include("footer.html");

?>
