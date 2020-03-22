<?php
if($query['sid_menu_con']==1){
echo '<div class="side-bar">
    <div class="clearing"></div>
    <div class="submenu">
      <div class="panel">
        <div class="title">
          <h1>'; if ( $query ){ echo $query['sid_menu_name']; } echo '</h1>
        </div>
        <div class="content">
          <ul>';
            $queryside = $db->query("SELECT * FROM side_menu WHERE page_id=".$query['id']."", PDO::FETCH_ASSOC);
			$ttv = $queryside->rowCount();
			$stv=0;
			if ( $queryside->rowCount() ){
				foreach( $queryside as $rowside){
					$stv++;
					if($rowside['side_show']==1){
						$adi=replace_tr($query['page_name']);
						if($ttv==$stv){$acti='class="-noborder-bottom"';}else{$acti='';}
echo "<li $acti><a href='/projebeta/page/$adi/".$rowside['side_name']."'>".$rowside['side_name']."</a></li>";}}}
			echo'</ul>
        </div>
      </div>
    </div>
    <div class="clearing"></div>
  </div>
  <div class="clearing"></div>';
	}
?>