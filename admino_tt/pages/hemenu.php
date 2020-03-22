<div class="headerr w3-card">
  <div class="dropdown">
	    <?php
	  if($_GET['page']=='tet1'){
		  echo '<button class="dropbtn">Yeni Sayfa Ekle</button>';
	  }else{
	  $queryyyc = $db->query("SELECT * FROM page where id=".$_GET['page']."")->fetch(PDO::FETCH_ASSOC);
	  if ( $queryyyc ){echo'<button class="dropbtn">'.$queryyyc['page_name'].'</button>';}}?>
  <div class="dropdown-content">
    <?php
	  $querycc = $db->query("SELECT * FROM page", PDO::FETCH_ASSOC);
	  if ( $querycc->rowCount() ){
     	foreach( $querycc as $row ){
          echo '<a href="page_o.php?page='.$row['id'].'">'.$row['page_name'].'</a>';
     	}
	  }
	?>
    <a href="page_o.php?page=tet1">Yeni Sayfa Ekle</a>
	  <a href="page_o.php?out=34">Çıkış</a>
  </div>
</div>
</div>
