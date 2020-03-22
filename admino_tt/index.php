<?php include'pages/config.php';
if(isset($_POST['kadi']) and isset($_POST['sifre'])){
	$kadi = $_POST["kadi"];
	$sifre = $_POST["sifre"];
	if(!$kadi || !$sifre){
		echo "Boş alan bırakmayın";
	}else{
		$cek = $db->query("select * from user_log where user_name = '$kadi' && user_psw = '$sifre' ",PDO::FETCH_ASSOC);
		if($cek->rowCount()){
			echo "<script type='text/javascript'>
			window.alert('Hoşgeldiniz');
			window.location = 'page_o.php?page=tet1';
			</script>";

			$_SESSION['log'] = '1';
		}else{
	echo "<script type='text/javascript'>
		window.alert('Kullanıcı Adı veya şifre hattalı');

		</script>";
}
}
}
 
?>
<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/w3.css">
	<link rel="stylesheet" href="css/sty.css">
</head>
<body>
	
<center>
<div class="w3-container " align="center" style="width:50%"> 
  <div class="w3-card w3-section"> 
    <header class="w3-container  w3-2017-shaded-spruce">
      <h1>Admin Girişi</h1>
	  </header>
	 <img src="img/img_avatar3.png" class="w3-margin w3-circle" alt="Avatar" style="width:50%">
    <div class="w3-container">
      	<label>Kullanıcı Adı</label>
		<form  method="post" class="w3-container">
		<input name="kadi" class="w3-input" type="text">
		<label>Şifre</label>
		<input name="sifre" class="w3-input" type="password">
    </div>
		<div class="w3-container">	&nbsp;</div>
    <footer class="w3-container w3-2017-shaded-spruce">
      <div class="w3-container w3-section">
        <button type="submit" name="giris" class="w3-button w3-2017-greenery">Giriş Yap</button>
        <button type="submit" name="cikis" class="w3-button w3-2017-tawny-port">Çıkış Yap</button>
		  </form>
		
      </div>
    </footer>
  </div>
</div>

</center>















</body>
</html>
<?php /* }else{echo "<script>window.location = 'kull_ek.php'</script>";} */?>