<?php
?>
<!DOCTYPE html>
<html lang="tr">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <title>Hızlı Geçiş Sistemleri - Turnike Bariyer</title>
  <link rel='stylesheet' href='//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css'>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <style>
    .modal {
      display: flex;
      align-items: center;
      justify-content: center;
    }
    @media (max-width: 768px) {
  .modal-dialog {
    width: 90%;
  }
}
  </style>
</head>
<body>
<!-- partial:index.partial.html -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Modal Header</h4>
      </div>
      <div class="modal-body">
        <p>Some text in the modal.</p>
      </div>
      <div class="modal-footer">
        <div class="input-group">
          <input type="checkbox" id="remember"> Do not show again
        </div>
        <button type="button" class="btn btn-default" data-dismiss="modal">OKUDUM</button>
      </div>
    </div>

  </div>
</div>
<!-- partial -->
  <script src='//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
  <script src='//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js'></script>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.1/jquery.cookie.js'></script>
  <script src="./script.js"></script>
</body>
</html>
