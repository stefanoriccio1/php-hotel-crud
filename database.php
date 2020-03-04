<?php
  include 'env.php';

  $conn = new mysqli($servername, $username, $password, $dbname);

  if ($conn && $conn->connect_error) {
    echo "Connection failed: " . $conn->connect_error;
    die();
  }

  $sql "SELECT * from `stanze`";
  $result = $conn ->query($sql);

  if ($result && $result->num_rows > 0) {

  }
  elseif {
    echo 'No results';
  }
  else{
    echo 'Query error';
  }
?>
