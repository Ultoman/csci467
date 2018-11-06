<?php
//Jackie Salim
//This displays the boats owned by the specified owner. The owner last names
//are displayed in a drop down menu and when selected and sumbitted, the names of the boats
//owned by that owner are displayed in a table.

  $pageTitle = "Create New Event";

  include("header.html");
  require_once("conn.php");

  echo '<h1 align="center">'.$pageTitle.'</h1>';

  //create form
  echo '<form action="createEvent.php" method="post">';

 // OUTER DIV
 echo '<div style="display: flex; justify-content: space-between">';

  // LEFT DIV
  echo '<div style=" border: 2px solid #333333; width: 40%">';

   echo '<div style="margin-right:20px; padding: 10px">';
    echo '<label for="name" style="display: block">Event Name</label>';
    echo '<input id="name" type="text" value="" name="name" size="40" style="display: block">';
   echo '</div>';

   echo '<div style="float: left; margin-right:20px; padding: 10px;">';
    echo '<label for="seatingCap" style="display: block">Seating Capacity</label>';
    echo '<input id="seatingCap" type="number" min="0" value="" name="seatingCap" style="display: block; width: 70px">';
   echo '</div>';

   echo '<div style="margin-right:20px; padding: 10px">';
    echo '<label for="manager" style="display: block">Manager</label>';
    echo '<select name="manager" style="display: block; width: 174px; height: 22px">';
    echo '<option value="empty">-- select a manager --</option>';
    foreach($conn->query('SELECT EventManagerId,FirstName,LastName FROM EventManager') as $managers)
    {
    echo '<option value="' .$managers['EventManagerId']. '">'.$managers['FirstName']." ".$managers['LastName'].'</option>';
    }
    echo '</select>';
   echo '</div>';

   echo '<div style="float: left; margin-right:20px; padding: 10px">';
    echo '<label for="vendor" style="display: block">Vendor</label>';
    echo '<select name="vendor" style="display: block; width: 174px; height: 22px">';
    echo '<option value="empty">-- select an owner --</option>';
    //Fill select with vendors - value:VendorId, display:BusinessName
    foreach($conn->query('SELECT VendorId,BusinessName FROM Vendor') as $vendors)
    {
    echo '<option value="' .$vendors['VendorId']. '">'.$vendors['BusinessName'].'</option>';
    }
    echo '</select>';
   echo '</div>';

   echo '<div style="float: left; margin-right:20px; padding: 10px">';
    echo '<form action="" method="post">';
    echo '<input type="radio" name="performer" value="bandChecked" checked="checked"> Band';
    echo '<input type="radio" name="performer" value="artistChecked"> Artist';
    echo '</form>';
   echo '</div>';
   echo '<div>';
   if (isset($_POST['performer'])) {
    if ($_POST["performer"] == "bandChecked") {
    echo '<select name="band" style="display: block; width: 174px; height: 22px">';
    echo '<option value="1">Band 1</option>';
    echo '</select>';
    }
    else if ($_POST['performer'] == "artistChecked") {
    echo '<select name="artist" style="display: block; width: 174px; height: 22px">';
    echo '<option value="2">Artist 1</option>';
    echo '</select>';
    }
    else {
    echo '<label style="display: block">Choose an option</label>';
    }
   }
   echo '</div>';


  echo '</div>'; // LEFT DIV END

  // RIGHT DIV
  echo '<div style=" border: 2px solid #333333; width: 40%">';

   echo '<div style="float: left; margin-right:20px; padding: 10px">';
    echo '<label for="date" style="display: block">Date</label>';
    echo '<input id="date" type="date" value="" name="date" style="display: block">';
   echo '</div>';

   echo '<div style="margin-right:20px; padding: 10px">';
    echo '<label for="time" style="display: block">Time</label>';
    echo '<input id="time" type="time" value="" name="time" style="display: block">';
   echo '</div>';

   echo '<div style="float: left; margin-right:20px; padding: 10px">';
    echo '<label for="street" style="display: block">Street</label>';
    echo '<input type="text" name="street" placeholder="123 Broadway Dr" size="35" maxLength="50"><br><br>';
   echo '</div>';

   echo '<div style="margin-right:20px; padding: 10px">';
    echo '<label for="city" style="display: block">City</label>';
    echo '<input type="text" name="city" placeholder="City" size="20" maxLength="20"><br><br>';
   echo '</div>';

   echo '<div style="margin-right:20px; padding: 10px">';
   echo '<label for="state" style="display: block">State</label>';
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
  echo '</div>';

  echo '<div style="margin-right:20px; padding: 10px">';
  echo '<label for="zip" style="display: block">ZIP</label>';
    echo '<input type="text" name="zip" placeholder="12345" maxLength="10">';
  echo '</div>';

  echo '</div>'; // RIGHT DIV END

  echo '</div>'; // OUTER DIV END

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
  if ($_SERVER['REQUEST_METHOD'] == "POST")
  {
    $name = $_POST['name'];
    $seatingCap = $_POST['seatingCap'];
    $street = $_POST['street'];
    $city = $_POST['city'];
    $state = $_POST['state'];
    $zip = $_POST['zip'];
    $date = $_POST['date'];
    $time = $_POST['time'];
    $vendor = $_POST['vendor'];
    $band = $_POST['band'];
    $artist = $_POST['artist'];
    $manager = $_POST['manager'];

    if (empty($name) || empty($seatingCap) || empty($date) || empty($street) || empty($city) || empty($state)|| empty($zip)|| empty($time)|| $vendor == "empty" || $band == "empty" || $artist == "empty" || $manager == "empty") {
     $border = "style=\"border: 1px red solid; border-radius: 4px\"";
     echo "<script type='text/javascript'>alert('ERROR: All Fields Required\\n\\nPlease fill out all fields');</script>";
    }
    else if (!is_numeric($zip)){
     echo "<script type='text/javascript'>alert('ERROR: Non numeric found in numeric fields\\n\\nPhone numbers and Zip code must be numbers only');</script>";
    }
    else {
     $sql = "insert into Event (Street, City, State, Date, StartTime, Status, SeatingCapacity, Notes, BandId, ArtistId, EventManagerId, VendorId) values (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
     try{
       $stmt = $conn->prepare($sql);
       $stmt->execute(array($street, $city, $state, $date, $time, "created", $seatingCap, "Created", $band, $artist, $manager, $vendor));
     }
     catch(PDOException $e){
        $message = $e->getMessage();
        echo "<script type='text/javascript'>alert('$message');</script>";
     }

     $msg = addslashes("$busname was added");
     echo "<script type='text/javascript'>alert('$msg');</script>";
    }
  }

  include("footer.html");

?>

