<html>
<body>
<form method="POST" action="/keshavmuzik/true.php">
<input type="text" name="rt">
<input type="submit">
</form>
</body>
</html>
<?php
if($_SERVER['REQUEST_METHOD']=='POST')
{
  $t=$_POST['rt'];
  echo ' <div class="alert alert-warning alert-dismissible fade show" role="alert">
  <strong>Holy guacamole!</strong> you are successful' .$t.' 
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
  <span aria-hidden="true">&times;</span>
  </button>
</div> ';
}
?>