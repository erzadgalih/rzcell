<?php
include "../../../config/database.php"; 
$zad = mysqli_fetch_array(mysqli_query($koneksi, "select * from rz_brg where kd_brg='$_GET[kd_brg]'"));
$zad2 = array( 'na_brg'    		=>  $zad['na_brg'],
			   'satuan'    		=>  $zad['satuan'],
               'h_beli'    		=>  $zad['h_beli'],);
 echo json_encode($zad2);
