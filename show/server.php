<?php
  $sql = "SELECT * from `stanze` WHERE 'id' = 1";
  $result = $conn ->query($sql);
  //var_dump($result);

  if ($result && $result->num_rows > 0) {
    $room = $result->fetch_assoc();
    var_dump($room)

  }
  elseif ($result) {
    echo 'No results';
  }
  else{
    echo 'Query error';
  }

  $conn->close();
?>
