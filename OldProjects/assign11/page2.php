<?php
//Jackie Salim
//This allows the user to create a new service request

  $pageTitle = "Create new Service Request";

  $boatSelect = "select BoatName from MarinaSlip";
  $serviceSelect = "select CategoryDescription from ServiceCategory";


  include("header.php");
  require_once("conn.php");

  echo 'Create a new Service Request:<br>';

  //create form
  echo '<form action="page2.php" method="post">';

  echo '<select name="selectBoat" id="selectBoat"><br>';
  echo'<option>-- Select a Boat --</option>';
  foreach($conn->query($boatSelect) as $row){
   echo'<option>'.$row['BoatName'].'</option>';
  }
  echo '</select><br>';

  echo '<select name="selectService" id="selectService"><br>';
  echo'<option>-- Select a Service --</option>';
  foreach($conn->query($serviceSelect) as $srow){
   echo'<option>'.$srow['CategoryDescription'].'</option>';
  }
  echo '</select><br><br>';

  echo '<input type="submit" name="submit" value="Create">';
  echo '&nbsp&nbsp&nbsp';
  echo '<input type="reset" name="reset">';

  echo '</form>';

  //handles button action
  if ($_SERVER['REQUEST_METHOD'] == 'POST')
  {
    $serviceDesc = $_POST['selectService'];
    $boatName = $_POST['selectBoat'];

    $sql = "select SlipID from MarinaSlip where BoatName = '".$boatName."'";
    $q = $conn->query($sql);
    $row = $q->fetch(PDO::FETCH_ASSOC);

    $slipID = $row['SlipID'];

    $sqlstmt = "insert into ServiceRequest (SlipID, Description) values (?, ?)";

    try{
      $stmt = $conn->prepare($sqlstmt);
      $stmt->execute(array($slipID, $serviceDesc));
      $message = "Created new Service Request for ".$boatName;
      $message2 = "Description: ".$serviceDesc;
      echo "<script type='text/javascript'>alert('$message \\n\\n$message2');</script>";

    }
    catch(PDOException $e){
       $message = $e->getMessage();
       echo "<script type='text/javascript'>alert('$message');</script>";
    }
  }

  include("footer.html");
?>
