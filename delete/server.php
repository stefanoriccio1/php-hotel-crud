<?php
  include 'database.php';

  if(empty($_POST['id'])){
    die('ID non esistente');
  }

  $idRoom= $_POST['id'];

  //controllo esistenza ID
  $sql = " DELETE from `stanze` WHERE `id` = $idRoom ";
  $result = $conn ->query($sql);


  if ($result && $result->num_rows == 0) {
    die('incorrect ID');
  }

 //se esite lo cancelliamo

  $sql = " DELETE from `stanze` WHERE `id` = $idRoom ";
  $result = $conn ->query($sql);


  if ($result) {
    header("Location: $basePath?roomNumber= $idRoom");
  }
  else{
    echo 'Sorry, something went wrong';
  }

  $conn->close();
?>
