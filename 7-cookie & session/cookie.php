<?php 
 if (isset ($_POST['buat'])) {
 	$namaKue=$_POST['kue'];
  setcookie('kue', $namaKue , time() + 3600);

  header("location:cookie.php");

 }
 if (isset ($_POST['hapus'])) {
 	$namaKue=$_POST['kue'];
  setcookie('kue',"", time() - 3600);

  header("location:cookie.php");

 }

?>
<!DOCTYPE html>
<html>
<head>
	<title>cookie</title>
</head>
<body>
  <h1>Nanti cookie muncul di bawah !</h1>
  <?php if (isset($_COOKIE['kue'])): ?>
  <h4>Sekarang makan kue <?= $_COOKIE['kue']?></h4>
   <?php endif ?>
  <form method="post" action="">
  	<input type="text" name="kue">
  	<button type="submit" name="buat">Buat</button>
  	<button type="submit" name="hapus">Hapus</button>
  </form>

</body>
</html>