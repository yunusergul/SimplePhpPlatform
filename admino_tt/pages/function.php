<?php
if(isset($_SESSION['log'])){}else{
	
	echo "<script type='text/javascript'>
			window.location = 'index.php';
			</script>";
}
if(isset($_POST['side_del'])){

	$queryittu = $db->prepare("DELETE FROM side_menu WHERE id = :id");
	$delete = $queryittu->execute(array('id' => $_POST['side_id']));
	if ( $delete ){
		
		echo "<script type='text/javascript'>
		window.alert('Silme İşlemi başarılı');
		window.location = 'page_o.php?page=".$_GET['page']."';
		</script>";}
} //side sileme
if(isset($_POST['banner_add'])){
	if(isset($_FILES['banner_dd'])){
   		$hata = $_FILES['banner_dd']['error'];
   		if($hata != 0) {
			echo "<script type='text/javascript'>window.alert('Yüklenirken bir hata gerçekleşmiş.$hata');</script>";
			echo "<script type='text/javascript'>window.location = 'page_o.php?page=".$_GET['page']."';</script>";
   		} 
		else 
		{
         		$tip = $_FILES['banner_dd']['type'];
         		$isim = $_FILES['banner_dd']['name'];
         		$uzanti = explode('.', $isim);
         		$uzanti = $uzanti[count($uzanti)-1];
         		if($tip != 'image/jpeg' || $uzanti != 'jpg') {
					echo "<script type='text/javascript'>window.alert('Yanlızca JPG dosyaları gönderebilirsiniz.');</script>";
					echo "<script type='text/javascript'>window.location = 'page_o.php?page=".$_GET['page']."';</script>";
         		} 
				else 
				{	$a=rand(0,9);$b=rand(0,9);$c=rand(0,9);$d=rand(0,9);$e=time();
				 	$url=$a.$b.$c.$d.$e;
            		$banner_dd = $_FILES['banner_dd']['tmp_name'];
            		copy($banner_dd, '../projebeta/images/' . "$url.jpg");
				 	$queryadd = $db->prepare(" INSERT INTO banner set address=?, page_id=?, banner_name=?, banner_show=?");
					$insert=$queryadd->execute(array("$url.jpg",$_GET['page'],$url,1));
					if ( $insert ){
						$last_id = $db->lastInsertId();
						echo "<script type='text/javascript'>window.alert('Resim yükleme başarılı!');</script>";
						echo "<script type='text/javascript'>window.location = 'page_o.php?page=".$_GET['page']."';</script>";

					}

         		}
      		
   		}
}
}//banner resim ekleme
if(isset($_POST['banner_del'])){
	$queryiu = $db->prepare("DELETE FROM banner WHERE id = :id");
	$delete = $queryiu->execute(array('id' => $_POST['banner_id']));
	if ( $delete ){
		
		echo "<script type='text/javascript'>
		window.alert('Silme İşlemi başarılı');
		window.location = 'page_o.php?page=".$_GET['page']."';
		</script>";}
} //banner resim sileme
if(isset($_POST['gallery_add'])){
	if(isset($_FILES['gallery_tm'])){
   		$hata = $_FILES['gallery_tm']['error'];
   		if($hata != 0) {
			echo "<script type='text/javascript'>window.alert('Yüklenirken bir hata gerçekleşmiş.$hata');</script>";
			echo "<script type='text/javascript'>window.location = 'page_o.php?page=".$_GET['page']."';</script>";
   		} 
		else 
		{
         		$tip = $_FILES['gallery_tm']['type'];
         		$isim = $_FILES['gallery_tm']['name'];
         		$uzanti = explode('.', $isim);
         		$uzanti = $uzanti[count($uzanti)-1];
         		if($tip != 'image/jpeg' || $uzanti != 'jpg') {
					echo "<script type='text/javascript'>window.alert('Yanlızca JPG dosyaları gönderebilirsiniz.');</script>";
					echo "<script type='text/javascript'>window.location = 'page_o.php?page=".$_GET['page']."';</script>";
         		} 
				else 
				{	$a=rand(0,9);$b=rand(0,9);$c=rand(0,9);$d=rand(0,9);$e=time();
				 	$url=$a.$b.$c.$d.$e;
            		$gallery_tm = $_FILES['gallery_tm']['tmp_name'];
            		copy($gallery_tm, '../projebeta/gallery/' . "$url.jpg");
				 	$queryadd = $db->prepare(" INSERT INTO gallery set gallery_scr=?, page_id=?, pic_name=?, on_co=?, side_id=?");
					$insert=$queryadd->execute(array("$url.jpg",$_GET['page'],$url,0,0));
					if ( $insert ){
						$last_id = $db->lastInsertId();
						echo "<script type='text/javascript'>window.alert('Resim yükleme başarılı!');</script>";
						echo "<script type='text/javascript'>window.location = 'page_o.php?page=".$_GET['page']."';</script>";

					}

         		}
      		
   		}
}
}//galeriye resim ekleme
if(isset($_POST['gallery_del'])){
	$querytt = $db->prepare("DELETE FROM gallery WHERE id = :id");
	$delete = $querytt->execute(array('id' => $_POST['id_gallery']));
	if ( $delete ){
		echo "<script type='text/javascript'>
		window.alert('Silme İşlemi başarılı');
		window.location = 'page_o.php?page=".$_GET['page']."';
		</script>";}
} //galeriden resim sileme
if(isset($_POST['delete_button'])){
	$querytt = $db->prepare("DELETE FROM page WHERE id = :id");
	$delete = $querytt->execute(array('id' => $_GET['page']));
	if ( $delete ){
		echo "<script type='text/javascript'>
		window.alert('Silme İşlemi başarılı');
		window.location = 'page_o.php?page=tet1';
		</script>";}
}//sayfayı silme
if(isset($_POST['home_button'])){
	$page_id=$_GET['page'];
	$queryrt = $db->prepare("UPDATE page SET home_page_con = :home_page_con");
		$update = $queryrt->execute(array("home_page_con" => 0));
	$queryrt = $db->prepare("UPDATE page SET home_page_con = :home_page_con where id= :page_id");
		$update = $queryrt->execute(array("home_page_con" => 1,"page_id" => $page_id));
	if ( $update ){
		echo "<script type='text/javascript'>
		window.alert('Güncelleme başarılı');
		window.location = 'page_o.php?page=$page_id';
		</script>";}
}//anasayfa yapma
if(isset($_POST['add_button'])){
	$page_id=$_GET['page'];
	if($_POST['banner']=='Evet'){$banner=1;}else{$banner=0;}
	if($_POST['gallery']=='Evet'){$gallery=1;}else{$gallery=0;}
	if($_POST['side']=='Evet'){$side=1;}else{$side=0;}
	$page_ta_pe= $_POST['page_ta_pe'];
	$page_ta_co= $_POST['page_ta_co'];
	$page_content= $_POST['page_content'];
	$side_name_page= $_POST['side_name_page'];
	$queryadd = $db->prepare("INSERT INTO page set page_name=?, page_description=?, page_content=?, sid_menu_con=?, sid_menu_name=?, gallery_co=?, page_show=?, type=?, banner_show=?, date=?");
	$insert=$queryadd->execute(array($page_ta_pe,$page_ta_co,$page_content,$side,$side_name_page,$gallery,1,0,$banner,date('Y-m-d H:i:s')));
	if ( $insert ){
		$last_id = $db->lastInsertId();
		echo "<script type='text/javascript'>window.alert('insert işlemi başarılı!');</script>";
	}
}//yeni sayfa ekleme
if(isset($_POST['update_button'])){
	$page_id=$_GET['page'];
	if($_POST['banner']=='Evet'){$banner=1;}else{$banner=0;}
	if($_POST['gallery']=='Evet'){$gallery=1;}else{$gallery=0;}
	if($_POST['side']=='Evet'){$side=1;}else{$side=0;}
	$page_ta_pe= $_POST['page_ta_pe'];
	$page_ta_co= $_POST['page_ta_co'];
	$side_name_page= $_POST['side_name_page'];
	if($page_id==4){
		$queryrt = $db->prepare("UPDATE page SET page_name = :page_name, page_description = :page_description, sid_menu_con = :sid_menu_con, sid_menu_name = :sid_menu_name, gallery_co = :gallery_co, banner_show = :banner_show  WHERE id= :page_id");
		$update = $queryrt->execute(array(
		"page_name" => $page_ta_pe,
		"page_description" => $page_ta_co,
		"sid_menu_con" => $side,
		"sid_menu_name" => $side_name_page,
		"gallery_co" => $gallery,
		"banner_show" => $banner,
		"page_id" => $page_id
	));
	}else{
		$page_content= $_POST['page_content'];
		$queryrt = $db->prepare("UPDATE page SET page_name = :page_name, page_description = :page_description, page_content= :page_content, sid_menu_con = :sid_menu_con, sid_menu_name = :sid_menu_name, gallery_co = :gallery_co, banner_show = :banner_show  WHERE id= :page_id");
		$update = $queryrt->execute(array(
		"page_name" => $page_ta_pe,
		"page_description" => $page_ta_co,
		"page_content" => $page_content,
		"sid_menu_con" => $side,
		"sid_menu_name" => $side_name_page,
		"gallery_co" => $gallery,
		"banner_show" => $banner,
		"page_id" => $page_id
	));
		
	}	
		if ( $update ){
		echo "<script type='text/javascript'>
		window.alert('Güncelleme başarılı');
		window.location = 'page_o.php?page=$page_id';
		</script>";}
} //page içerik verisi güncelleme
if(isset($_POST['side_add'])){
	$page_id=$_GET['page'];
	if($_POST['gallery']=='Evet'){$gallery=1;}else{$gallery=0;}
	$side_pe= $_POST['side_pe'];
	$side_peg= $_POST['side_peg'];
	$queryadd = $db->prepare("INSERT INTO side_menu set page_id=?, side_name=?, side_content=?, side_show=?, gallery_co=?, side_date=?");
	$insert=$queryadd->execute(array($page_id,$side_pe,$side_peg,1,$gallery,date('Y-m-d H:i:s')));
	if ( $insert ){
		$last_id = $db->lastInsertId();
		echo "<script type='text/javascript'>window.alert('insert işlemi başarılı!');
		window.location = 'page_o.php?page=".$_GET['page']."'</script>";
	}
	
	
} //yan menü ekle
if(isset($_POST['side_up'])){
	
	

	
	$page_id=$_GET['page'];
	$side_id=$_GET['side'];
	if($_POST['gallery']=='Evet'){$gallery=1;}else{$gallery=0;}
	$side_pe= $_POST['side_pe'];
	$side_peg= $_POST['side_peg'];

		$queryryt = $db->prepare("UPDATE side_menu SET side_name = :side_name, side_content = :side_content,         gallery_co= :gallery_co  WHERE id= :side_id and page_id= :page_id ");
		$updateuu = $queryryt->execute(array(
		"side_name" => $side_pe,
		"side_content" => $side_peg,
		"gallery_co" => $gallery,
		"side_id" => $side_id,
		"page_id" => $page_id
		
		));
		
		
		if ( $updateuu ){
		echo "<script type='text/javascript'>
		window.alert('Güncelleme başarılı');
		window.location = 'side_o.php?page=$page_id&side=$side_id';
		</script>";}
	
	
	
	
	
	
	
	
	
	
	
	
} //yan menü güncelle
if(isset($_POST['side_gallery_add'])){

if(isset($_FILES['gallery_tm'])){
   		$hata = $_FILES['gallery_tm']['error'];
   		if($hata != 0) {
			echo "<script type='text/javascript'>window.alert('Yüklenirken bir hata gerçekleşmiş.$hata');</script>";
			echo "<script type='text/javascript'>window.location = 'page_o.php?page=".$_GET['page']."';</script>";
   		} 
		else 
		{
         		$tip = $_FILES['gallery_tm']['type'];
         		$isim = $_FILES['gallery_tm']['name'];
         		$uzanti = explode('.', $isim);
         		$uzanti = $uzanti[count($uzanti)-1];
         		if($tip != 'image/jpeg' || $uzanti != 'jpg') {
					echo "<script type='text/javascript'>window.alert('Yanlızca JPG dosyaları gönderebilirsiniz.');</script>";
					echo "<script type='text/javascript'>window.location = 'page_o.php?page=".$_GET['page']."';</script>";
         		} 
				else 
				{	$a=rand(0,9);$b=rand(0,9);$c=rand(0,9);$d=rand(0,9);$e=time();
				 	$url=$a.$b.$c.$d.$e;
            		$gallery_tm = $_FILES['gallery_tm']['tmp_name'];
            		copy($gallery_tm, '../projebeta/gallery/' . "$url.jpg");
				 	$queryadd = $db->prepare(" INSERT INTO gallery set gallery_scr=?, page_id=?, pic_name=?, on_co=?, side_id=?");
					$insert=$queryadd->execute(array("$url.jpg",$_GET['page'],$url,1,$_GET['side']));
					if ( $insert ){
						$last_id = $db->lastInsertId();
						echo "<script type='text/javascript'>window.alert('Resim yükleme başarılı!');</script>";
						echo "<script type='text/javascript'>window.location = 'side_o.php?page=".$_GET['page']."&side=".$_GET['side']."';</script>";

					}

         		}
      		
   		}
}
	
	
	
	
}//yan menü resim ekle
if(isset($_POST['side_gallery_del'])){
	$querytt = $db->prepare("DELETE FROM gallery WHERE id = :id");
	$delete = $querytt->execute(array('id' => $_POST['id_gallery']));
	if ( $delete ){
		echo "<script type='text/javascript'>
		window.alert('Silme İşlemi başarılı');
		</script>";
		echo "<script type='text/javascript'>window.location = 'side_o.php?page=".$_GET['page']."&side=".$_GET['side']."';</script>";
	}
} //yan menü resim sil
if(isset($_GET['out'])){


	unset($_SESSION['log']);
	echo "<script type='text/javascript'>
			window.location = 'index.php';
			</script>";

}
?>