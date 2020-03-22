<?php
			session_start();
try {
     $db = new PDO("mysql:host=localhost;dbname=proje_beta;charset=utf8", "root", "");
	$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch ( PDOException $e ){
     print $e->getMessage();
}


if(isset($_GET['page'])){
	$query = $db->query("SELECT * from page WHERE id='".$_GET['page']."'")->fetch(PDO::FETCH_ASSOC);
	
			if($query['banner_show']==0){$c1="";$c2="checked";}else{$c1="checked";$c2="";}
			if($query['sid_menu_con']==0){$a1="";$a2="checked";}else{$a1="checked";$a2="";}
			if($query['gallery_co']==0){$b1="";$b2="checked";}else{$b1="checked";$b2="";}
}
else{
	$query = $db->query("SELECT * from page WHERE home_page_con=1")->fetch(PDO::FETCH_ASSOC); 
}

if(isset($_GET['page']) && isset($_GET['side']) ){
	$query = $db->query("SELECT * from page WHERE id='".$_GET['page']."'")->fetch(PDO::FETCH_ASSOC);
	
}
?>
