<?php
 include __DIR__ . '/../partials/header.php';
 include __DIR__ . '/../partials/footer.php';
?>

<div class="container">
  <div class="row">
    <div class="col-12">
      <form action="server.php" method="POST">
        <div class="form-group">
          <label for="room_number">Numero Stanza</label>
          <input class="form-control" type="text" name="room_number" value="">
        </div>
        <div class="form-group">
          <label for="floor">Piano</label>
          <input class="form-control" type="text" name="floor" value="">
        </div>
        <div class="form-group">
          <label for="beds">Numero Letti</label>
          <input  class="form-control"type="text" name="beds" value="">
        </div>
        <div class="form-group">
          <input class="form-control" type="hidden" name="id" value="">
          <input class="form-control" class= "btn btn-submit" type="submit" value="Salva">
        </div>
      </form>
    </div>
  </div>
</div>
