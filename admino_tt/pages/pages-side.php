<?php
if(isset($_GET['side']) and isset($_GET['page'])){
	if($_GET['side']=='tet1'){
		echo'<div class="col-6">
	<form method="post">
      <div  class="w3-padding-64 w3-center">
      <div class="w3-left-align w3-padding-large">
        <p>Başlık</p><input type="text" name="side_pe" >
      </div>
      
      <div class="w3-left-align w3-padding-large">
        <p>İçerik</p><textarea name="side_peg"></textarea>
      </div>
		 
 <div class="w3-row w3-left-align">
	  <div class="w3-third w3-container">
	  <h3>Galeri</h3>
    <p>
  <input class="w3-radio" type="radio" name="gallery" value="Evet" checked>
  <label>Evet</label></p>
  <p>
  <input class="w3-radio" type="radio" name="gallery" value="Hayır">
  <label>Hayır</label></p>

  </div>
  <div class="w3-third w3-container">
  </div>
  <div class="w3-third w3-container">
  </div>

 <div class="w3-container w3-center" style="width:100%">
	<div class="w3-bar" style="width:100%">
  <button name="side_add" class="w3-bar-item w3-button w3-teal" style="width:100%">Sayfayı Ekle</button>
</div>
	 
  </div>

</div> 
    </div>
	</form>
</div>';
	}//yeni sayfa ekleme
	else{
		$querysidc = $db->query("SELECT * from side_menu WHERE page_id='".$_GET['page']."' and id='".$_GET['side']."'")->fetch(PDO::FETCH_ASSOC);
		if($querysidc['gallery_co']==0){$f1="";$f2="checked";}else{$f1="checked";$f2="";}
		if ( $querysidc ){
			echo'<div class="col-6">
	<form method="post">
      <div  class="w3-padding-64 w3-center">
      <div class="w3-left-align w3-padding-large">
        <p>Başlık</p><input type="text" value="'.$querysidc['side_name'].'" name="side_pe" >
      </div>
      
      <div class="w3-left-align w3-padding-large">
        <p>İçerik</p><textarea name="side_peg">'.$querysidc['side_content'].'</textarea>
      </div>
		 
 <div class="w3-row w3-left-align">
	  <div class="w3-third w3-container">
	  <h3>Galeri</h3>
    <p>
  <input class="w3-radio" type="radio" name="gallery" value="Evet" '.$f1.'>
  <label>Evet</label></p>
  <p>
  <input class="w3-radio" type="radio" name="gallery" value="Hayır" '.$f2.'>
  <label>Hayır</label></p>

  </div>
  <div class="w3-third w3-container">
  </div>
  <div class="w3-third w3-container">
  </div>

 <div class="w3-container w3-center" style="width:100%">
	<div class="w3-bar" style="width:100%">
  <button name="side_up" class="w3-bar-item w3-button w3-teal" style="width:50%">Güncelle</button>
  <button class="w3-bar-item w3-button w3-red" style="width:50%">İptal Et</button>
</div>
	 <button name="side_del" class="w3-bar-item w3-button w3-deep-orange" style="width:100%">Sayfayı Sil</button>
  </div>

</div> 
    </div>
	</form>
</div>';
			  
		
		}
		
	}//sayfa düncelleme
}
?>