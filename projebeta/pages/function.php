<?php
function replace_tr($text) {
   $text = trim($text);
   $search = array('Ç','ç','Ğ','ğ','ı','İ','Ö','ö','Ş','ş','Ü','ü',' ');
   $replace = array('c','c','g','g','i','i','o','o','s','s','u','u','-');
   $new_text = str_replace($search,$replace,$text);
   return $new_text;
} 

if(isset($_POST["name"])){
	$name_co=$_POST["name"];
	$email_co=$_POST["email"];
	$subject_co=$_POST["subject"];
	$feedback_co=$_POST["feedback"];
	$date=date('Y-m-d H:i:s');
	if( !empty($name_co) && !empty($email_co) && !empty($subject_co) && !empty($feedback_co)){
		if ( filter_var($email_co, FILTER_VALIDATE_EMAIL) ){ 
   			$querycont = $db->prepare("INSERT INTO contact SET user_name = ?,user_mail = ?,user_subject = ?,user_content= ?,log_con=?,date=?");
			$insert = $querycont->execute(array("$name_co","$email_co","$subject_co","$feedback_co","0","$date"));
			if ( $insert ){
				$last_id = $db->lastInsertId();
				echo "<script type='text/javascript'>window.alert('Mesaj başarılı bir şekilde gönderildi');</script>";
			}else{
				echo "<script type='text/javascript'>window.alert('Bir hata oluştu tekrar deneyiniz');</script>";
			}
		} else {
   			echo "<script type='text/javascript'>window.alert('Geçerli bir eposta giriniz.');</script>";
		}
	}else{
		echo "<script type='text/javascript'>window.alert('Boş alan bırakmayınız');</script>";
	}
}

?>