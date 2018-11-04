<?php

/*
  Purpose: Used to hold a general function to generate select options
  Code borrowed from group project
*/

function generateSelectOptions($queryString, $columnNames, $conn){
  // create an associative array with an index for each column name
  $optionString = array(); // initialize options string
  foreach($columnNames as $columnName){
    $optionString[$columnName] = "";
  }

  try{
    /*
    * Iterate through each row and create an 'option' for each column in that row
    */
    foreach($conn->query($queryString) as $row){
      foreach($columnNames as $columnName){
        $optionString[$columnName] .= "<option>".$row[$columnName]."</option>";
      }
    }
  }
  catch(PDOException $e){
    $errorMessage = "Error, could not read ".$columnName." list".$e->getMessage();
    showAlert($errorMessage);
    return "";
  }

  // now that each optionString has been created, append them all together inorder
  $returnString = "";
  foreach($columnNames as $columnName){
    $returnString .= $optionString[$columnName];
  }
  return $returnString;
}

?>
