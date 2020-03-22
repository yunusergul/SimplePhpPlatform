<?php	if(isset($_FILES['gallery_tm'])){
		echo "denme";
   		$hata = $_FILES['gallery_tm']['error'];
   		if($hata != 0) {
      		echo 'Yüklenirken bir hata gerçekleşmiş.';
   		} 
		else 
		{
      		$boyut = $_FILES['gallery_tm']['size'];
      		if($boyut > (1024*1024*3)){
         		echo 'Dosya 3MB den büyük olamaz.';
      		} 
			else 
			{
         		$tip = $_FILES['gallery_tm']['type'];
         		$isim = $_FILES['gallery_tm']['name'];
         		$uzanti = explode('.', $isim);
         		$uzanti = $uzanti[count($uzanti)-1];
         		if($tip != 'image/jpeg' || $uzanti != 'jpg') {
            		echo 'Yanlızca JPG dosyaları gönderebilirsiniz.';
         		} 
				else 
				{
            		$gallery_tm = $_FILES['gallery_tm']['tmp_name'];
            		copy($gallery_tm, '../projebeta/gallery/' . $_FILES['gallery_tm']['name']);
            		echo 'Dosyanız upload edildi!';
         }
      }
   }
}
?>