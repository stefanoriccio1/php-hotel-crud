<?php
  include 'env.php';

  $conn = new mysqli($servername, $username, $password, $dbname);

  if ($conn && $conn->connect_error) {
    echo "Connection failed: " . $conn->connect_error;
    die();
  }

  $sql = "SELECT * from `stanze`";
  $result = $conn ->query($sql);
  //var_dump($result);

  if ($result && $result->num_rows > 0) {
    $rooms = [];
    while($row = $result->fetch_assoc()) {
     //echo 'ID'. ' - ' .$row['id'];
     $rooms[] = $row;
    }
  }
  elseif ($result) {
    echo 'No results';
  }
  else{
    echo 'Query error';
  }

  $conn->close();
?>
