<?php
//Jackie Salim
//This allows the user to add an Owner

  $pageTitle = "Choose Event to Approve";
  include("main.css");
  include("header.html");
  include("approveEvent.css");
  require_once("conn.php");

  echo '<h1 align="center">'.$pageTitle.'</h1>';

  // OUTER DIV
  echo '<div align="center">';
  echo '<table>';
    // Header Row
    echo '<tr>';
    echo '<th>Event Id</th>';
    echo '<th>Event Name</th>';
    echo '<th>Band/Artist</th>';
    echo '<th>Vendor</th>';
    echo '<th>Date</th>';
    echo '<th> </th>';
    echo '</tr>';
    foreach($conn->query('SELECT EventId,EventName,SeatingCapacity,BusinessName,FirstName,LastName,Date,StartTime,Status,Singer,Event.Street,Event.City,Event.State,Event.Zip FROM Event,EventManager,Vendor WHERE Event.EventManagerId = EventManager.EventManagerId AND Event.VendorId = Vendor.VendorId AND status != "approved"') as $events)
    {
    // Event Row
    echo '<form action="eventInfo.php" method="get">';
    echo '<tr>';
    echo '<td style="text-align: center">';
    echo '<input name="id" value="'.$events['EventId'].'" style="background: #eeeeee; text-align: center" size="3" readonly>';
    echo '</td>';
    echo '<td>';
    echo '<label>'.$events['EventName'].'</label>';
    echo '</td>';
    echo '<td>';
    echo '<label>'.$events['Singer'].'</label>';
    echo '</td>';
    echo '<td>';
    echo '<label>'.$events['BusinessName'].'</label>';
    echo '</td>';
    echo '<td>';
    echo '<label>'.$events['Date'].'</label>';
    echo '</td>';
    echo '<td style="text-align: center">';
    echo '<button type="submit" class="button button1">View</button>';
    echo '</td>';
    echo '</tr>';
    echo '</form>';
    }
    echo '</select>';
    echo '</table>';
  echo '</div>';



 if ($_SERVER['REQUEST_METHOD'] == 'POST')
  { /*
    $busname = $_POST['businessName'];
    $firstname = $_POST['repFirstName'];
    $lastname = $_POST['repLastName'];
    $street = $_POST['street'];
    $city = $_POST['city'];
    $state = $_POST['state'];
    $zip = $_POST['zip'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $vendorType = $_POST['vendorType'];

    if (empty($busname) || empty($firstname) || empty($lastname) || empty($street) || empty($city) || empty($state)|| empty($zip)|| empty($email)|| empty($phone)) {
     $border = "style=\"border: 1px red solid; border-radius: 4px\"";
     echo "<script type='text/javascript'>alert('ERROR: All Fields Required\\n\\nPlease fill out all fields');</script>";
    }
    else if (!is_numeric($zip) || !is_numeric($phone)){
     echo "<script type='text/javascript'>alert('ERROR: Non numeric found in numeric fields\\n\\nPhone numbers and Zip code must be numbers only');</script>";
    }
    else {
     $sql = "insert into Vendor (BusinessName, Street, City, State, Zip, Type, RepFirstName, RepLastName, RepEmail, RepCellNum) values (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
     try{
       $stmt = $conn->prepare($sql);
       $stmt->execute(array($busname, $street, $city, $state, $zip, $vendorType, $firstname, $lastname, $email, $phone));
     }
     catch(PDOException $e){
        $message = $e->getMessage();
        echo "<script type='text/javascript'>alert('$message');</script>";
     }

     $msg = addslashes("$busname was added");
     echo "<script type='text/javascript'>alert('$msg');</script>";
    }*/

  }


  include("footer.html");
?>
