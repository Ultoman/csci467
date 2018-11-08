<?php

  $pageTitle = "Create New Band";
  $border = "style=\"border: 1px grey solid; border-radius: 4px\"";
  include("header.html");
  include("main.css");
  require_once("conn.php");

 echo '<h1 align="center">'.$pageTitle.'</h1>';

 echo '<form action="createBand.php" method="post">';

 // OUTER DIV
 echo '<div style="display: flex; justify-content: space-around">';

 // AGENT INFO DIV
 echo '<div style="border: 2px solid #333333; width: 45%">';
 echo '<table class="input-table">';
  // Header
    echo '<h1 align="center">Band Info</h1>';
  // Row 1
  echo '<tr>';
    // Column 1
    echo '<td align="right" width="50%">';
    echo 'Band Name<span style="color: red">*</span> :<br><br>';
    echo 'Leader Name<span style="color: red">*</span> :<br><br>';
    echo 'Other Members :';
    echo '<br><br><br><br><br><br><br><br><br><br>';
    echo '</td>';
    // Column 2
    echo '<td align="left" width="50%">';
    echo '<br>';
    echo '<input required type="text" name="bandname" maxLength="20"><br><br>';
    echo '<input required type="text" name="leadername" maxLength="41"><br><br>';
    echo '<input type="text" name="othermember1"  maxLength="41"><br><br>';
    echo '<input type="text" name="othermember2"  maxLength="41"><br><br>';
    echo '<input type="text" name="othermember3"  maxLength="41"><br><br>';
    echo '<input type="text" name="othermember4"  maxLength="41"><br><br>';
    echo '<input type="text" name="othermember5"  maxLength="41">';
    echo '<br><br><br>';
    echo '</td>';
  echo '</tr>';
 echo '</table>';
 echo '</div>'; // End of Band Info div

 // Address DIV
 echo '<div style="border: 2px solid #333333; width: 45%">';
 echo '<table class="input-table">';
  // Header
    echo '<h1 align="center">Additional Info</h1>';
  // Row 1
  echo '<tr>';
    // Column 1
    echo '<td align="right" width="50%">';
    echo 'Concert Rate Per Event<span style="color: red">*</span> :<br><br>';
    echo 'Leader Phone<span style="color: red">*</span> :<br><br>';
    echo 'Agent<span style="color: red">*</span> :<br><br>';
//    echo 'Notes :<br><br><br><br>';
    echo '</td>';
    // Column 2
    echo '<td align="left" width="50%">';
    echo '<input required id="concertRate" type="number" step="0.01" min="0" value="" name="concertRate" style="display: block; width: 174px"><br>';
    echo '<input required type="text" name="leaderphone" placeholder="8151231000" maxLength="10"><br><br>';
    echo '<select required name="agent" style="width: 174px; height: 22px">';
    echo '<option value="" disabled selected>-- select an Agent --</option>';
    foreach($conn->query('SELECT AgentId,FirstName,LastName,Type FROM Agent where Type = \'for band\'') as $agents)
    {
    echo '<option value="' .$agents['AgentId']. '">'.$agents['FirstName']." ".$agents['LastName'].'</option>';
    }
    echo '</select><br><br>';
    echo '</td>';
  echo '</tr>';
  echo '<tr>';
   echo '<td colspan="2" align="center">';
    echo '<label for="notes" style="display: block">Special Notes</label>';
    echo '<textarea id="notes" name="notes" style="display: block" rows="6" cols="50"></textarea>';
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
    $band = $_POST['bandname'];
    $leader = $_POST['leadername'];
    $member1 = $_POST['othermember1'];
    $member2 = $_POST['othermember2'];
    $member3 = $_POST['othermember3'];
    $member4 = $_POST['othermember4'];
    $member5 = $_POST['othermember5'];
    $rate = $_POST['concertRate'];
    $leaderphone = $_POST['leaderphone'];
    $notes = $_POST['notes'];
    $agent = $_POST['agent'];

    $phone = str_replace(' ', '', $leaderphone);

    if (empty($band) || empty($leader) || empty($rate) || empty($phone) || empty($agent)) {
     echo "<script type='text/javascript'>alert('ERROR: All Fields Required\\n\\nPlease fill out all fields');</script>";
    }
    else if (!is_numeric($phone)){
     echo "<script type='text/javascript'>alert('ERROR: Non numeric found in numeric fields\\n\\nPhone number must be numbers only');</script>";
    }
    else {
     //Not Empty
     $counter = 2;
     if(!empty($member1)){ $counter++; }
     if(!empty($member2)){ $counter++; }
     if(!empty($member3)){ $counter++; }
     if(!empty($member4)){ $counter++; }
     if(!empty($member5)){ $counter++; }

     $sql = "insert into Band (BandName, RatePerEvent, Notes, CellNum, Leader, Member1, Member2, Member3, Member4, Member5, MemberCount, AgentId) values (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
     try{
       $stmt = $conn->prepare($sql);
       $stmt->execute(array($band, $rate, $notes, $phone, $leader, $member1, $member2, $member3, $member4, $member5, $counter, $agent));
     }
     catch(PDOException $e){
        $message = $e->getMessage();
        echo "<script type='text/javascript'>alert('$message');</script>";
     }

     $msg = "$band was added as a Band";
     echo "<script type='text/javascript'>alert('$msg');</script>";
    }
  }

  include("footer.html");

?>
