<?php
$keyword = $_POST['keyword']; 

ob_start();
include "sup.php";
$html = ob_get_contents(); 
ob_end_clean();


echo json_encode(array('hasil'=>$html));
?>