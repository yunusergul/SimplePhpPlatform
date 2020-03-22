
<div class="col-3 menu right">
  <ul>
	  <li class="w3-center" style="height: 46px;">Yan Menü </li>
	  <?php if( $_GET['page']=='tet1'){}else{
$queryside = $db->query("SELECT * FROM side_menu WHERE page_id=".$query['id']."", PDO::FETCH_ASSOC);
			if ( $queryside->rowCount() ){    
				foreach( $queryside as $rowside){
					echo'<form method="post">
	  
	  <li style="height: 46px;">'.$rowside['side_name'].' <button name="side_del" class="w3-red w3-button w3-tiny  w3-right" >X</button> <a href="/admino_tt/side_o.php?page='.$query['id'].'&side='.$rowside['id'].'" class="w3-blue-grey w3-button w3-tiny  w3-right" >İncele</a><input name="side_id" class="w3-input" style="Visibility : hidden; width: 0px;" value="'.$rowside['id'].'" type="text"></li>
	 </form>';}
			
			}echo '<form method="post">
	  <li style="height: 46px;  width: 100%; "><a style=" width: 100%; " href="/admino_tt/side_o.php?page='.$query['id'].'&side=tet1" class="w3-blue-grey w3-button w3-tiny  w3-right" >Yeni Sayfa Ekle</a></li>
	 </form>';}

?>
	  
  		</ul>
</div>