<?php 

  $pelajar="azay";
 
  function siswa($nama="azay", $kelas="XI RPL"){
  	global $pelajar; //mengambil variabel dari luar function
    echo "Siswa kelas $kelas yang bernama $pelajar selalu rajin banget.";
  }

  siswa();

 

 ?>