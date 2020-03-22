<?php
if(isset($_GET['page'])){
	if($_GET['page']=='tet1'){
		echo'<div class="col-6">
      <div  class="w3-padding-64 w3-center">
	  	<form method="post">
      <div class="w3-left-align w3-padding-large">
	  	<p>Sayfa Adı</p><input name="page_ta_pe" type="text" >
        <p>Başlık</p><input name="page_ta_co" type="text" >
		<p>Yan Menü Adı</p><input name="side_name_page" type="text" >
      </div>
      
      <div class="w3-left-align w3-padding-large">
        <p>İçerik</p><textarea name="page_content" ></textarea>
      </div>
 <div class="w3-row w3-left-align">

  <div class="w3-third w3-container">
	  <h3>Banner</h3>
    <p>
  <input class="w3-radio" type="radio" name="banner" value="Evet" checked>
  <label>Evet</label></p>
  <p>
  <input class="w3-radio" type="radio" name="banner" value="Hayır">
  <label>Hayır</label></p>
  </div>
  <div class="w3-third w3-container">
	  <h3>Yan Menü</h3>
    <p>
  <input class="w3-radio" type="radio" name="side" value="Evet" checked>
  <label>Evet</label></p>
  <p>
  <input class="w3-radio" type="radio" name="side" value="Hayır">
  <label>Hayır</label></p>

  </div>
  <div class="w3-third w3-container">
	  <h3>Galeri</h3>
    <p>
  <input class="w3-radio" type="radio" name="gallery" value="Evet" checked>
  <label>Evet</label></p>
  <p>
  <input class="w3-radio" type="radio" name="gallery" value="Hayır">
  <label>Hayır</label></p>

  </div>
 <div class="w3-container w3-center" style="width:100%">
	 <button name="add_button" type="submit" class="w3-bar-item w3-button w3-teal" style="width:100%">Sayfayı Ekle</button>
  </div>
</form>
</div> 
    </div>
</div>';
	}//yeni sayfa ekleme
	else{
		if ( $query ){
			echo'
	<div class="col-6">
      <div  class="w3-padding-64 w3-center">
	  <form  method="post">
      <div class="w3-left-align w3-padding-large" >
	  	<p>Sayfa Adı</p><input name="page_ta_pe" type="text"  value="'.$query['page_name'].'" >
        <p>Başlık</p><input name="page_ta_co" type="text"  value="'.$query['page_description'].'" >
		<p>Yan Ad</p><input name="side_name_page" type="text"  value="'.$query['sid_menu_name'].'" >
      </div>
      
      <div class="w3-left-align w3-padding-large">';
		if(!($_GET['page']==4)){ echo'<p>İçerik</p><textarea id="page_content" name="page_content">'.$query['page_content'].'</textarea>';}		
        
	echo'
      </div>
 <div class="w3-row w3-left-align">
	
  <div class="w3-third w3-container">
	  <h3>Banner</h3>
    <p>
  <input class="w3-radio" type="radio" name="banner" value="Evet" '.$c1.'>
  <label>Evet</label></p>
  <p>
  <input class="w3-radio" type="radio" name="banner" value="Hayır" '.$c2.'>
  <label>Hayır</label></p>
  </div>
  <div class="w3-third w3-container">
	  <h3>Yan Menü</h3>
    <p>
  <input class="w3-radio" type="radio" name="side" value="Evet" '.$a1.'>
  <label>Evet</label></p>
  <p>
  <input class="w3-radio" type="radio" name="side" value="Hayır" '.$a2.'>
  <label>Hayır</label></p>

  </div>
  <div class="w3-third w3-container">
	  <h3>Galeri</h3>
    <p>
  <input class="w3-radio" type="radio" name="gallery" value="Evet" '.$b1.'>
  <label>Evet</label></p>
  <p>
  <input class="w3-radio" type="radio" name="gallery" value="Hayır" '.$b2.'>
  <label>Hayır</label></p>

  </div>
 <div class="w3-container w3-center" style="width:100%">
	<div class="w3-bar" style="width:100%">
  <button name="update_button" type="submit" class="w3-bar-item w3-button w3-teal" style="width:50%">Güncelle</button>
  <button name="cel_button" type="submit" class="w3-bar-item w3-button w3-red" style="width:50%">İptal Et</button>
</div>
<div class="w3-bar" style="width:100%">';
	if($query['home_page_con']==1){
		echo'<button name="delete_button" type="submit" class="w3-bar-item w3-button w3-deep-orange" style="width:100%">Sayfayı ve Yan Elemanları Sil</button>';
	}else{
		echo '<button name="delete_button" type="submit" class="w3-bar-item w3-button w3-deep-orange" style="width:50%">Sayfayı ve Yan Elemanları Sil</button>
  <button name="home_button" type="submit" class="w3-bar-item w3-button w3-purple" style="width:50%">Anasayfa Yap</button>';
	}
echo'
  
</div>

  </div>
</form>
</div> 
    </div>
</div>';
			  
		
		}
		
	}//sayfa düncelleme
}
?>






