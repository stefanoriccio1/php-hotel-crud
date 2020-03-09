<?php
  include_once __DIR__ . '/../env.php';
  include 'database.php';

  if(empty($_POST['id'])){
    die('Id no inserted');
  }
  if(empty($_POST['beds'])){
    die('Number of beds no inserted');
  }
  if(empty($_POST['room_number'])){
    die('Room number no inserted');
  }
  if(empty($_POST['floor'])){
    die('Floor no inserted');
  }

  $idRoom = $_POST['id'];
  $beds = $_POST['beds'];
  $floor = $_POST['floor'];
  $room_number = $_POST['room_number'];


  $sql = " SELECT * FROM `stanze` WHERE `id` = '$idRoom' ";
  $result = $conn ->query($sql);

  if ($result && $result->num_rows > 0) {
    $room = $result->fetch_assoc();
  }
  else{
    die('incorrect ID');
  }

  $sql = "UPDATE `stanze` SET `room_number` = ?, `beds` = ?, `floor`=?  WHERE `id`= ?";

  $stmt = $conn->prepare($sql);

  $stmt->bind_param("iiii", $room_number, $beds, $floor, $idRoom);
  $stmt->execute();



  //$sql = "UPDATE  `stanze` SET `room_number`= $room_number, `beds`= $beds , `floor`=$floor  WHERE `id`= $idRoom";

  //$result = $conn ->query($sql);

  if($stmt->affected_rows > 0){
    header("Location: $basePath/show/show.php?id=$idRoom");
  }
  else{
    echo 'KO';
  }
 ?>
