<!DOCTYPE html>
<html>
<head>
	<title>tugas percabangan</title>
</head>
<body>
 <?php
    $nilai = -2;
    if ($nilai > 100) {
    	echo "nilai : $nilai";
    	echo "<br>";
    	echo "predikat tidak valid";
    	echo "<br>";
    	echo "keterangan : tidak valid ";
    }elseif($nilai >=90) {
    	echo "nilai : $nilai";
    	echo "<br>";
    	echo "predikat A";
    	echo "<br>";
    	echo "keterangan : lulus";
    }elseif ($nilai >= 80) {
    	echo "nilai : $nilai";
    	echo "<br>";
    	echo "predikat B";
    	echo "<br>";
    	echo "keterangan : lulus";
    }elseif ($nilai >= 70) {
    	echo "nilai : $nilai";
    	echo "<br>";
    	echo "predikat C";
    	echo "<br>";
    	echo "keterangan : lulus";
    }elseif ($nilai >= 60) {
    	echo "nilai : $nilai";
    	echo "<br>";
    	echo "predikat D";
    	echo "<br>";
    	echo "keterangan : tidak lulus";
    }elseif ($nilai >= 50) {
    	echo "nilai : $nilai";
    	echo "<br>";
    	echo "predikat E";
    	echo "<br>";
    	echo "keterangan : tidak lulus";
    }elseif($nilai >= 0) {
    	echo "nilai : $nilai";
    	echo "<br>";
    	echo "predikat E";
    	echo "<br>";
    	echo "keterangan : tidak lulus";
    }elseif($nilai <= -1) {
    	echo "nilai : $nilai";
    	echo "<br>";
    	echo "predikat tidak valid";
    	echo "<br>";
    	echo "keterangan : tidak valid";
    }

   ?>
</body>
</html>