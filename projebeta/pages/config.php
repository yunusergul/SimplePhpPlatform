<?php
try {
     $db = new PDO("mysql:host=localhost;dbname=proje_beta;charset=utf8", "root", "");
} catch ( PDOException $e ){
     print $e->getMessage();
}
if(isset($_GET['page'])){
	$query = $db->query("SELECT * from page WHERE page_name='".$_GET['page']."'")->fetch(PDO::FETCH_ASSOC);
}
else{
	$query = $db->query("SELECT * from page WHERE home_page_con=1")->fetch(PDO::FETCH_ASSOC); 
}

if(isset($_GET['page']) && isset($_GET['side']) ){
	$query = $db->query("SELECT * from page WHERE page_name='".$_GET['page']."'")->fetch(PDO::FETCH_ASSOC);
	$querysidc = $db->query("SELECT * from side_menu WHERE side_name='".$_GET['side']."'")->fetch(PDO::FETCH_ASSOC);
}
?>
