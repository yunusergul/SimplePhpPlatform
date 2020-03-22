<div class="header-wrap">
  <div class="header">
    <div class="logo">
      <h1>dbzen</h1>
    </div>
    <div class="menu">
      <ul>
		  <?php
		  $querymenu = $db->query("SELECT * FROM page ORDER BY page.id ASC ", PDO::FETCH_ASSOC);
			if ( $querymenu->rowCount() ){
				foreach( $querymenu as $rowmenu ){
					$adi=replace_tr($rowmenu['page_name']);
					$kadi=replace_tr($query['page_name']);
					$adii=$rowmenu['page_name'];
					if($rowmenu['page_show']==1){echo "<li><a href='/projebeta/page/$adi'";
						if($adi==$kadi){echo"class='active'";}
						echo">$adii</a></li>";}}} ?>
      </ul>
    </div>
  </div>
</div>