 
<?php
if($_GET['page']!='tet1'){
echo '<div class="row">
<div class="col-3 right"></div>
<div class="col-6 w3-centered">
	<div  class="w3-padding-60 w3-center">		 
 		<div class="w3-row w3-left-align">
			<div class="row">';
	$querygallery = $db->query("SELECT * FROM gallery WHERE page_id=".$query['id']." and on_co=0", PDO::FETCH_ASSOC);
			if ( $querygallery->rowCount() ){
				foreach( $querygallery as $rowgallery){
					echo '<div class="gallery">
					<form action="" method="post" enctype="multipart/form-data"></form>
							<form method="post">
    						<img src="../projebeta/gallery/'.$rowgallery['gallery_scr'].'" name="gallery_tt" width="300" height="200"><input name="id_gallery" type="text" style="Visibility : hidden;" value="'.$rowgallery['id'].'">	
							
  							<div class="desc"><button name="gallery_del" class="w3-button w3-red" style="width: 100%;">Sil</button></div>
						</div></from>
						';}}
echo '<div class="gallery w3-center" style="width: auto;">
					<form action="" method="post" enctype="multipart/form-data"></form>
					<form action="" method="post" enctype="multipart/form-data">
	  				<input type="file" id="gallery_tm" name="gallery_tm" />
					<div class="desc"><button type="submit" id="gallery_add"  name="gallery_add" class="w3-button w3-green" style="width: 100%;">Resim Ekle</button></div></form>
					
						
					</form>
				</div>
			</div>
		</div> 
	</div>
</div>
<div class="col-3 menu right">
</div>
</div>';
}

?>
