<?php
//Jackie Salim
//This displays services that have been done on the specified boat.
//If no service has been done, an appropriate message is displayed.

  $pageTitle = "Boat Service Information";

  include("header.php");
  require_once("conn.php");

  echo 'Select a Boat:<br>';
  //create form
  echo '<form action="page3.php" method="post">';

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

  include("footer.html");

?>

