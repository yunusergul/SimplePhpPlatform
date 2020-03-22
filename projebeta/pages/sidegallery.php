<?php
if($querysidc['gallery_co']==1){
	echo '<div class="clearing">&nbsp;</div>
							<div class="page">';
	$querygallery = $db->query("SELECT * FROM gallery WHERE page_id=".$query['id']." and side_id=".$querysidc['id']." and on_co=1", PDO::FETCH_ASSOC);
			if ( $querygallery->rowCount() ){
				 $p=0;
				foreach( $querygallery as $rowgallery){
					$p++;
					if($p==5){$p=0; echo '<div class="clearing">&nbsp;</div>';}
					echo '<div class="responsive">
  							<div class="gallery">
								<a target="_blank" href="gallery/'.$rowgallery['gallery_scr'].'">
									<img src="gallery/'.$rowgallery['gallery_scr'].'" width="300" height="200">
    							</a>
  							</div>
						</div>';}}
echo '</div><div class="clearing">&nbsp;</div>';

}
?>


