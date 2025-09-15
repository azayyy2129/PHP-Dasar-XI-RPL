<?php 
  session_start();

  if (isset ($_POST['buat'])) {
 	$namasession=$_POST['session'];
  $_SESSION['isi']= $namasession;

  header("location:session.php");

 }
 if (isset ($_POST['hapus'])) {

  session_unset();

  header("location:session.php");

 }

?>
<!DOCTYPE html>
<html>
<head>
	<title>cookie</title>
</head>
<body>
  <h1>Nanti cookie muncul di bawah !</h1>
  <?php if (isset($_SESSION['isi'])): ?>
  <h4>Sekarang makan kue <?= $_SESSION['isi']?></h4>
   <?php endif ?>
  <form method="post" action="">
  	<input type="text" name="session">
  	<button type="submit" name="buat">Buat</button>
  	<button type="submit" name="hapus">Hapus</button>
  </form>

</body>
</html>