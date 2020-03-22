<div class="col-3 right">
  <div class="aside w3-pale-blue" >
	  <h2 >Banner</h2>
    <div class="menu w3-left-align" >
  		<ul>
		<?php
			
			if( $_GET['page']=='tet1'){}else{
			$querybanner = $db->query("SELECT * FROM banner WHERE page_id=".$query['id']."", PDO::FETCH_ASSOC);
			if ( $querybanner->rowCount() ){
				foreach( $querybanner as $rowbanner){
					$tir="'";
					echo '<form method="post">
   			<li style="height: 46px;">'.$rowbanner['address'].'<button name="banner_del" type="submit" class="w3-red w3-button w3-tiny  w3-right" >X</button> <a class="w3-blue-grey w3-button w3-tiny  w3-right" href="../projebeta/images/'.$rowbanner['address'].'" >İncele</a><input name="banner_id" class="w3-input" style="Visibility : hidden; width: 0px;" value="'.$rowbanner['id'].'" type="text"></li>
			</form>
						';}} echo '<form method="post" enctype="multipart/form-data">	
   			<li style="height: 46px;"><input type="file" name="banner_dd" /><button type="submit" name="banner_add" class="w3-lime w3-button w3-tiny w3-right" >+</button></li></form>';}
			
		?>
			
  		</ul>
</div>
  </div>
</div>