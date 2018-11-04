<?php
//Jackie Salim
//This allows the user to add an Owner

  $pageTitle = "Add Owner";

  include("header.php");
  require_once("conn.php");

  echo 'Add a new Owner:<br>';

  //create form
  echo '<form action="page1.php" method="post">';

  echo '<input type="text" name="fName" id="fName" placeholder="First Name"><br>';
  echo '<input type="text" name="lName" id="lName" placeholder="Last Name"><br>';

  echo '<br>';
  echo '<input type="submit" name="submit" value="Add">';
  echo '&nbsp&nbsp&nbsp';
  echo '<input type="reset" name="reset">';

  echo '</form>';

  //handles button action
  if ($_SERVER['REQUEST_METHOD'] == 'POST')
  {
    $firstname = $_POST['fName'];
    $lastname = $_POST['lName'];

    $sql = "insert into Owner (FirstName, LastName) values (?, ?)";

    try{
      $stmt = $conn->prepare($sql);
      $stmt->execute(array($firstname, $lastname));
    }
    catch(PDOException $e){
       $message = $e->getMessage();
       echo "<script type='text/javascript'>alert('$message');</script>";
    }
  }

  include("footer.html");
?>
