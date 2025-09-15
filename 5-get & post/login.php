<?php 
$u="admind";
$p="123";

// proses

 $iu = $_POST['username'];
 $ip = $_POST['password'];
 echo "<br>";

// decision / percabangan

if($iu == $u && $ip == $p){
	echo "berhasil login";
	header("Location:dashboard.php");
}else{
	echo "gagal login";
}


 ?>
<!DOCTYPE html>
<html>
<head>
	<title>login</title>
</head>
<body>
	<form action="" method="post">
		<input type="text" name="username"><br>
		<input type="password" name="password" id="password"><br>
		<input type="submit" value="login">
		
	</form>

</body>
</html>