<?php 
include'pages/config.php'; 
include'pages/function.php'; 
include'pages/header.php'; 
include 'pages/menu.php';
include 'pages/banner.php';
?>
<div class="page"><?php /* page divi başlangıcı*/?>
  <div class="primary-col">
    <div class="clearing"></div>
    <div class="generic bdr-bottom-none">
      <div class=" panel">
        <div class="title">
          <h1><?php if ( $querysidc ){ echo $querysidc['side_name']; } ?></h1>
        </div>
        <div class="content">
			<?php if ( $querysidc ){ echo $querysidc['side_content']; } ?>
        </div>
      </div>
    </div>
    <div class="clearing"></div>
  </div>
<?php 
include'pages/side_menu.php';
include'pages/sidegallery.php';
echo"</div>"; /* page divini kapatmak için */
include'pages/footer.php'; 
?>
