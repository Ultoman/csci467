<?php

  $pageTitle = "Create New Agent";
  $border = "style=\"border: 1px grey solid; border-radius: 4px\"";
  include("header.html");
  include("main.css");
  require_once("conn.php");

 echo '<h1 align="center">'.$pageTitle.'</h1>';

 echo '<form action="createAgent.php" method="post">';

 // OUTER DIV
 echo '<div style="display: flex; justify-content: space-around">';

 // AGENT INFO DIV
 echo '<div style="border: 2px solid #333333; width: 30%">';
 echo '<table class="input-table">';
  // Header
    echo '<h1 align="center">Agent Info</h1>';
  // Row 1
  echo '<tr>';
    // Column 1
    echo '<td align="right" width="50%">';
    echo 'Agent Type<span style="color: red">*</span> :<br><br>';
    echo 'First Name<span style="color: red">*</span> :<br><br>';
    echo 'Middle Initial<span style="color: red">*</span> :<br><br>';
    echo 'Last Name<span style="color: red">*</span> :';
    echo '</td>';
    // Column 2
    echo '<td align="left" width="50%">';
    echo '<br>';
    echo '<select required name="agentType" style="width: 174px">';
    echo '<option value="" disabled selected>-- select an Agent Type --</option>';
    echo '<option value="For Artist">For Artist</option>';
    echo '<option value="For Band">For Band</option>';
    echo '<option value="Other">Other</option>';
    echo '</select><br><br>';
    echo '<input required type="text" name="fname" placeholder="Jane" maxLength="25"><br><br>';
    echo '<input required type="text" name="minit" placeholder="G" maxLength="1"><br><br>';
    echo '<input required type="text" name="lname" placeholder="Doe" maxLength="25">';
    echo '<br><br>';
    echo '</td>';
  echo '</tr>';
 echo '</table>';
 echo '</div>'; // End of Agent Info div
    // Address DIV
 echo '<div style="border: 2px solid #333333; width: 30%">';
 echo '<table class="input-table">';
  // Header
    echo '<h1 align="center">Address</h1>';
  // Row 1
  echo '<tr>';
    // Column 1
    echo '<td align="right" width="50%">';
    echo 'Street<span style="color: red">*</span> :<br><br>';
    echo 'City<span style="color: red">*</span> :<br><br>';
    echo 'State<span style="color: red">*</span> :<br><br>';
    echo 'ZIP<span style="color: red">*</span> :';
    echo '</td>';
    // Column 2
    echo '<td align="left" width="50%">';
    echo '<input required type="text" name="street" placeholder="123 W Broadway Dr" maxLength="50"><br><br>';
    echo '<input required type="text" name="city" placeholder="City" maxLength="20"><br><br>';
    echo '<select required name="state" style="width: 174px">';
    echo '<option value="" disabled selected>-- select a State --</option>';
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
    echo '<input required type="text" name="zip" placeholder="12345"  maxLength="10">';
    echo '</td>';
  echo '</tr>';
  echo '</table>';
  echo '</div>';

  // Contact DIV
  echo '<div style="border: 2px solid #333333; width: 30%">';
  echo '<table class="input-table">';
  // Header
  echo '<h1 align="center">Contact</h1>';
  // Row 1
  echo '<tr>';
    // Column 1
    echo '<td align="right" width="50%">';
    echo 'Email<span style="color: red">*</span> :<br><br>';
    echo 'Cell Phone<span style="color: red">*</span> :<br><br>';
    echo 'Office Phone<span style="color: red">*</span> :';
    echo '</td>';
    // Column 2
    echo '<td align="left" width="50%">';
    echo '<input required type="text" name="email" placeholder="example@email.com" maxLength="30"><br><br>';
    echo '<input required type="text" name="cellPhone" placeholder="8151231000" maxLength="10"><br><br>';
    echo '<input required type="text" name="officePhone" placeholder="8151231000"  maxLength="10">';
    echo '</td>';
  echo '</tr>';
  echo '</table>';
  echo '</div>';
 // End of OUTER DIV
 echo '</div>';

  echo '<div style="padding: 2em" align="center">';
    echo '<button type="reset" class="button button1" style="margin: 0 2em">Clear</button>';
    echo '<button type="submit" class="button button1" style="margin: 0 2em">Create</button>';
  echo '</div>';

 echo '</form>';

  //handles button action
  if ($_SERVER['REQUEST_METHOD'] == 'POST')
  {
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

    $zzip = str_replace(' ', '', $zip);
    $ffirst = str_replace(' ', '', $firstname);
    $llast = str_replace(' ', '', $lastname);
    $ccity = str_replace(' ', '', $city);

    if (empty($firstname) || empty($middle) || empty($lastname) || empty($street) || empty($city) || empty($state)|| empty($zip)|| empty($email)|| empty($officePhone)|| empty($cellPhone)) {
     $border = "style=\"border: 1px red solid; border-radius: 4px\"";
     echo "<script type='text/javascript'>alert('ERROR: All Fields Required\\n\\nPlease fill out all fields');</script>";
    }
    else if (!is_numeric($zzip) || !is_numeric($officePhone) || !is_numeric($cellPhone)){
     echo "<script type='text/javascript'>alert('ERROR: Non numeric found in numeric fields\\n\\nPhone numbers and Zip code must be numbers only');</script>";
    }
    else if (!ctype_alpha($middle) || strpbrk($ffirst, '1234567890') || strpbrk($llast, '1234567890') || strpbrk($ccity, '1234567890')){
     echo "<script type='text/javascript'>alert('ERROR: Numeric found in non numeric fields\\n\\nNames and City must be alphabetic letters only\\nCity: $city\\nName: $firstname $middle $lastname');</script>";
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
     echo "<script type='text/javascript'>alert('$msg');</script>";
    }
  }

  include("footer.html");

?>
