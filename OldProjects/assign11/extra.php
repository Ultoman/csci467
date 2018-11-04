<?php
//Jackie Salim
//This allows the user to update the description and next service date for a chosen service request

  $pageTitle = "Update Service Request";

  require_once("conn.php");
  require_once("selections.php");
  require_once("Request.php");

  //sql statement to populate the drop down
  $serviceRequestSelect = generateSelectOptions("select concat(ServiceID, '. ', BoatName, '- ', Description) as name from MarinaSlip,ServiceRequest where MarinaSlip.SlipID = ServiceRequest.SlipID order by ServiceID", array("name"), $conn);
  $tableVisibility = "visibility: hidden";

  $request = new Request($conn);

 // check if there has been a post
  if($_SERVER['REQUEST_METHOD'] == 'POST'){

    if(isset($_POST['submitted']) && $_POST['submitted'] == "1"){

      $sql = "update ServiceRequest set Description = '".$_POST['description']."', NextServiceDate = '".$_POST['nextDate']."' where ServiceID = '".$_POST['serviceID']."'";

      try{
       //run the query
       $conn->query($sql);

       //display an alert message to notify the user of success
       $message = "Service Request #".$_POST['serviceID']." Updated";
       $m2 = "Description: ".$_POST['description'];
       $m3 = "Next Service Date: ".$_POST['nextDate'];
       echo "<script type='text/javascript'>alert('$message\\n\\n$m2\\n$m3');</script>";
      }
      catch(PDOException $e){
        echo $e->getMessage();
      }

    }

    //if they are just changing what is selected in the drop down
    if(isset($_POST['selected']) && $_POST['selected'] == "1"){
      $tableVisibility = "";
      $request->setRequest($_POST['selectRequest']);
    }

  }


  include("header.php");
  include("page3.html");
  include("footer.html");
?>
