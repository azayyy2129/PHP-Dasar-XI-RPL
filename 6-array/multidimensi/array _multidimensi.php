<?php
	$studendt = [ 
		   ['01002','azay','XI RPL','cijambe','laki=laki','dodo4.jpg'],
		   ['01003','sulthan','XI RPL','pagaden','laki-laki','dodo3.jpg'],
		   ['01004','husen','XI RPL','cijambe','laki-laki','dodo2.jpg'],
		   ['01003','septi','XI RPL','cibogo','laki-laki','dodo1.jpgA']
		];

	// cara menampilkan array multidimensi
	// var_dump($ds[2][1]);


	 ?>
<!DOCTYPE html>
<html>
<head>
	<title>array multidimensi</title>
</head>
<body>
	<?php foreach ($studendt as $studendt): ?>
     <ul>
     	<li><img src="../photo/<?php echo $studendt['5']; ?>"></li>
     	<li> <?php echo $studendt['0']; ?></li>
     	<li> <?php echo $studendt['1']; ?></li>
     	<li> <?php echo $studendt['2']; ?></li>
     	<li> <?php echo $studendt['3']; ?></li>
     	<li> <?php echo $studendt['4']; ?></li>
     </ul>
	<?php endforeach ?>

</body>
</html>