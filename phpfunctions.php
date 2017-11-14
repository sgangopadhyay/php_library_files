<?php
### PROGRAM : IMPORTANT PHP FUNCTIONS
### CREATED BY : SUMAN GANGOPADHYAY
### DATE CREATED : 14-Nov-2017
### DATE EDITED :

# Function to Calculate the total number of Records in a Table using PHP PDO
function TotalRecordsInTable($ip, $database, $port=3306, $user, $password, $id, $table){
  try {
    $conn = new PDO("mysql:host=$ip;dbname=$database;port=$port", $user, $password);
    $sql = "SELECT `$id` FROM `$table`";
    $res = $conn->query($sql);
    return $res->rowCount();
  } catch (PDOException $e) {
    echo $e;
  }
}
#










?>
