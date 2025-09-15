<!DOCTYPE html>
<html>
<head>
	<title>percabangan nilai 2</title>
</head>
<body>
    <?php
    $nilai = 81;
    if ($nilai >= 80) {
    	echo "nilai anda $nilai,anda lulus";
    } elseif ($nilai >= 60) {
    	echo "nilai anda $nilai,anda remedial";
    }else {
    	echo "nilai anda $nilai,anda tidak lulus";
    }


     ?>
</body>
</html>