<?php
  include 'database.php';

  if(empty($_POST['id'])){
    die('ID non esistente');
  }

  $idRoom= $_POST['id'];


  $sql = " DELETE from `stanze` WHERE `id` = $idRoom ";
  $result = $conn ->query($sql);


  if ($result && $result->num_rows > 0) {
    $room = $result->fetch_assoc();

  }
  elseif ($result) {
    echo 'No results';
  }
  else{
    echo 'Query error';
  }

  $conn->close();
?>
