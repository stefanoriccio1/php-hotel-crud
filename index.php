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
    <div class="container">
      <div class="row">
        <div class="col-12">
          <h1>Stanze</h1>
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
                    <td><?php echo $room['floor'] ?></td>
                    <td><a href= "">VIEW</a></td>
                    <td><a href= "">UPDATE</a></td>
                    <td>DELETE</td>
                  </tr>
                <?php }
              } ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </body>
</html>
