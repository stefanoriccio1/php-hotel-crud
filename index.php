<?php
include 'database.php';
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <link rel="stylesheet" href="dist/app.css">
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <table class="table">
      <thead>
        <tr>
          <th>ID</th>
          <th>Floor</th>
          <th></th>
          <th></th>
          <th></th>
        </tr>
      </thead>
      <tbody>
        <?php
        if(!empty($rooms)){
          foreach ($rooms as $room) { ?>
            <tr>
              <td><?php echo $room['id'] ?></td>
              <td><?php echo $floor['id'] ?></td>
              <td><a href= "">VIEW</a></td>
              <td><a href= "">UPDATE</a></td>
              <td>DELETE</td>
            </tr>
          <?php }
        } ?>
      </tbody>
    </table>
  </body>
</html>
