<?php
  include 'database.php';

  $idRoom= $_GET['id'];

  $sql = "SELECT * from `stanze` WHERE `id` = $idRoom";
  $result = $conn ->query($sql);


  if ($result && $result->num_rows > 0) {
    $room = $result->fetch_assoc();
    var_dump($room);

  }
  elseif ($result) {
    echo 'No results';
  }
  else{
    echo 'Query error';
  }

  $conn->close();
?>
