<?php
  include_once __DIR__ . '/../env.php';
  include 'database.php';

  if(empty($_POST['beds'])){
    die('Number of beds no inserted');
  }
  if(empty($_POST['room_number'])){
    die('Room number no inserted');
  }
  if(empty($_POST['floor'])){
    die('Floor no inserted');
  }

  $beds = $_POST['beds'];
  $floor = $_POST['floor'];
  $room_number = $_POST['room_number'];

  $sql = "INSERT INTO `stanze` (`beds`, `floor`, `room_number`, `created_at`, `updated_at`) VALUES (?,?,?, NOW(), NOW())";

  $stmt = $conn->prepare($sql);
  $stmt->bind_param("iii", $beds, $floor, $room_number);
  $stmt -> execute();
