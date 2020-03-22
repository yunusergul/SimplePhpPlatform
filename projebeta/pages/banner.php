<?php 
if ( $query ){ 
	if($query['banner_show']==1){
echo'<div class="banner-wrap">
  <div class="banner">
    <div class="banner-img">
		<div id="carousel">
			<div id="slides">
				<ul>';
		$querybanner = $db->query("SELECT * FROM banner WHERE page_id=".$query['id']."", PDO::FETCH_ASSOC);
			if ( $querybanner->rowCount() ){
				foreach( $querybanner as $rowbanner ){
					if($rowbanner['banner_show']==1){echo "<li><img src='images/".$rowbanner['address']."'/></li>";}}}	
echo'</ul>
		<div class="clear"></div>
			</div>
			<div class="clear"></div>
			<div id="buttons"> <a href="#" id="prev">prev</a> <a href="#" id="next">next</a>
			<div class="clear"></div>
			</div>
		</div>
	</div>
  </div>
  <div class="clearing"></div>
</div>';
	}else{}} 
?>

