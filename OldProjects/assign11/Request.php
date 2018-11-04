<?php
/*
  Purpose of file: Contain object data for a request
  Code borrowed from group project
*/

  require_once("selections.php");

  class Request {
    public $ServiceID = 0;
    public $SlipID = 0;
    public $CategoryNum = 0;
    public $Description = "";
    public $Status = "";
    public $EstHours = 0;
    public $SpentHours = 0;
    public $NextServiceDate = "";

    private $conn;

    // constructor takes a PDOConnection object
    function __construct($conn){
      $this->conn = $conn;
    }

    // uses the ID to get the entire service request data.
    public function setRequest($lNameCommafName){
      // divide the input string
      list($ID, $NameInfo) = explode('.', $lNameCommafName);

      // create a sql select statement to query the data
      $selectSQL = "select * from ServiceRequest where ServiceID = ".$ID;

      // now wrap the query in a try catch block
      try{
        $dataArray = $this->conn->query($selectSQL);
        // make sure there is only one row in the array
        if(count($dataArray) != 1){
          showAlert("An invalid number of rows were returned, bad query!");
        }
        else{
          foreach ($dataArray as $data){
            $this->ServiceID = $data['ServiceID'];
            $this->SlipID = $data['SlipID'];
            $this->CategoryNum = $data['CategoryNum'];
            $this->Description = $data['Description'];
            $this->Status = $data['Status'];
            $this->EstHours = $data['EstHours'];
            $this->SpentHours = $data['SpentHours'];
            $this->NextServiceDate = $data['NextServiceDate'];
          }
        }
      }
      catch (PDOException $e){
        showAlert($e->getMessage());
      }
      catch(Exception $e){
        showAlert($e->getMessage());
      }
    }
  }
?>

