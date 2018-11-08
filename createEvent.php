<?php

  $pageTitle = "Create New Event";

  include("header.html");
  require_once("conn.php");

  echo '<h1 align="center">'.$pageTitle.'</h1>';

  //create form
  echo '<form action="createEvent.php" method="post">';

 // OUTER DIV
 echo '<div style="display: flex; justify-content: space-around">';

  // LEFT DIV
  echo '<div style=" border: 2px solid #333333; width: 40%">';

   echo '<div style="margin-right:20px; padding-top: 5%; padding-left: 10%">';
    echo '<label for="name" style="display: block">Event Name<span style="color: red">*</span></label>';
    echo '<input required id="name" type="text" name="name" size="40" style="display: block">';
   echo '</div>';

   echo '<div style="float: left; margin-right:20px; padding-left: 10%; padding-top: 10px">';
    echo '<label for="seatingCap" style="display: block">Seating Capacity<span style="color: red">*</span></label>';
    echo '<input required id="seatingCap" type="number" min="0" value="" name="seatingCap" style="display: block; width: 120px">';
   echo '</div>';

   echo '<div style="margin-right:20px; padding: 10px">';
    echo '<label for="manager" style="display: block">Manager<span style="color: red">*</span></label>';
    echo '<select required name="manager" style="display: block; width: 174px; height: 22px">';
    echo '<option value="" disabled selected>-- select a Manager --</option>';
    foreach($conn->query('SELECT EventManagerId,FirstName,LastName FROM EventManager') as $managers)
    {
    echo '<option value="' .$managers['EventManagerId']. '">'.$managers['FirstName']." ".$managers['LastName'].'</option>';
    }
    echo '</select>';
   echo '</div>';

   echo '<div style="float: left; margin-right:20px; padding-left: 10%">';
    echo '<label for="vendor" style="display: block">Vendor<span style="color: red">*</span></label>';
    echo '<select required name="vendor" style="display: block; width: 174px; height: 22px">';
    echo '<option value="" disabled selected>-- select a Vendor --</option>';
    //Fill select with vendors - value:VendorId, display:BusinessName
    foreach($conn->query('SELECT VendorId,BusinessName FROM Vendor') as $vendors)
    {
    echo '<option value="' .$vendors['VendorId']. '">'.$vendors['BusinessName'].'</option>';
    }
    echo '</select>';
   echo '</div>';

   // BAND or ARTIST select
   echo '<div style="float: left; margin-right:20px; padding-left: 10px">';
    echo '<label for="artistSelect" style="display: block">Performer<span style="color: red">*</span></label>';

    echo '<select required name="artistSelect" style="display: block; width: 174px; height: 22px">';
    echo '<option value="" disabled selected>-- select a Performer --</option>';
      foreach($conn->query('SELECT BandName,BandId FROM Band') as $bandname)
      {
       echo '<option value="'.$bandname['BandName'].','.$bandname['BandId'].','.'Band">'.$bandname['BandName'].' - BAND</option>';
      }
      foreach($conn->query('SELECT FirstName,LastName,ArtistId FROM Artist') as $artistname)
      {
       echo '<option value="'.$artistname['FirstName'].' '.$artistname['LastName'].','.$artistname['ArtistId'].','.'Artist">'.$artistname['FirstName'].' '.$artistname['LastName'].' - ARTIST</option>';
      }
    echo '</select>';
   echo '</div>'; // select DIV end

   echo '<div style="float:left; padding-top: 10px; padding-left: 10%; padding-bottom: 5%">';
    echo '<label for="notes" style="display: block">Special Notes</label>';
    echo '<textarea id="notes" name="notes" style="display: block" rows="4" cols="50"></textarea>';
   echo '</div>';

  echo '</div>'; // LEFT DIV END

  // RIGHT DIV
  echo '<div style=" border: 2px solid #333333; width: 40%">';

   echo '<div style="float: left; margin-right:20px; padding-top: 5%; padding-left: 10%">';
    echo '<label for="date" style="display: block">Date<span style="color: red">*</span></label>';
    echo '<input required id="date" type="date" value="" name="date" style="display: block">';
   echo '</div>';

   echo '<div style="margin-right:20px; padding-top: 5%">';
    echo '<label for="time" style="display: block">Time<span style="color: red">*</span></label>';
    echo '<input required id="time" type="time" value="" name="time" style="display: block">';
   echo '</div>';

   echo '<div style="float: left; margin-right:20px; padding-left: 10%; padding-top: 10px">';
    echo '<label for="street" style="display: block">Street<span style="color: red">*</span></label>';
    echo '<input required type="text" name="street" placeholder="123 Broadway Dr" size="35" maxLength="50"><br><br>';
   echo '</div>';

   echo '<div style="margin-right:20px; padding-top: 10px">';
    echo '<label for="city" style="display: block">City<span style="color: red">*</span></label>';
    echo '<input required type="text" name="city" placeholder="City" size="15" maxLength="20"><br><br>';
   echo '</div>';

   echo '<div style="float: left; margin-right:20px; padding-left: 10%">';
   echo '<label for="state" style="display: block">State<span style="color: red">*</span></label>';
    echo '<select required name="state" style="width:174px">';
    echo '<option value="">-- select a State --</option>';
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

  echo '<div style="margin-right:20px;">';
  echo '<label for="zip" style="display: block">ZIP<span style="color: red">*</span></label>';
    echo '<input required type="text" name="zip" placeholder="12345" maxLength="10">';
  echo '</div>';

  echo '</div>'; // RIGHT DIV END

  echo '</div>'; // OUTER DIV END

  echo '<div style="padding: 2em;" align="center">';
    echo '<button type="reset" class="button button1" style="margin: 0 2em">Clear</button>';
    echo '<button type="submit" class="button button1" style="margin: 0 2em">Create</button>';
  echo '</div>';

  echo '</form>';

/*
 Handle POST - Form submission
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
    $singer = $_POST['artistSelect'];
    $manager = $_POST['manager'];
    $notes = $_POST['notes'];

    $zzip = str_replace(' ', '', $zip);
    $ccity = str_replace(' ', '', $city);
    $nname = str_replace(' ', '', $name);

    if (empty($name) || empty($seatingCap) || empty($date) || empty($street) || empty($city) || empty($state)|| empty($zip)|| empty($time)|| $vendor == "empty" || $singer == "empty" || $manager == "") {
     $border = "style=\"border: 1px red solid; border-radius: 4px\"";
     echo "<script type='text/javascript'>alert('ERROR: All Fields Required\\n\\nPlease fill out all fields');</script>";
    }
    else if (!is_numeric($zzip)){
     echo "<script type='text/javascript'>alert('ERROR: Non numeric found in numeric fields\\n\\nPhone numbers and Zip code must be numbers only');</script>";
    }
    else if (strpbrk($ccity, '1234567890')){
     echo "<script type='text/javascript'>alert('ERROR: Numeric found in non numeric fields\\n\\nNames and City must be alphabetic letters only \\nCity: $city\\nName: $name');</script>";
    }
    else {
     $performerParts = explode(',', $singer);
     //$performerParts[0] = Band/Artist name
     //$performerParts[1] = Band/Artist ID
     //$performerParts[2] = "Band" or "Artist"

     $sql = "insert into Event (EventName, Street, City, State, Zip, Date, StartTime, Status, SeatingCapacity, Notes, NumTicketsSold, Singer, PerformerType, PerformerId, EventManagerId, VendorId) values (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
     try{
       $stmt = $conn->prepare($sql);
       $stmt->execute(array($name, $street, $city, $state, $zip, $date, $time, "created", $seatingCap, $notes, 0, $performerParts[0], $performerParts[2], $performerParts[1], $manager, $vendor));
     }
     catch(PDOException $e){
        $message = $e->getMessage();
        echo "<script type='text/javascript'>alert('$message');</script>";
     }

     $msg = addslashes("Event '$name' was added");
     echo "<script type='text/javascript'>alert('$msg');</script>";
    }
  }

  include("footer.html");

?>

