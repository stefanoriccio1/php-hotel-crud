<?php
  include 'database.php';

  if(!empty($_POST['id'])){
    die('ID no inserted')
  }

  $idRoom = $_POST['id'];
  $beds = $_POST['beds'];
  $floor = $_POST['floor'];
  $room_number = $_POST['room_number'];


  $sql = " SELECT * from `stanze` WHERE `id` = $idRoom ";
  $result = $conn ->query($sql);


  if ($result && $result->num_rows > 0) {
    $room = $result->fetch_assoc();

  }
  else{
    die('incorrect ID');
  }

  $sql = "UPDATE  `stanze` SET `room_number`= , `beds`= , `floor`=  WHERE `id`= $idRoom";
 ?>
