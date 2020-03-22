<?php 
include'pages/config.php'; 
include'pages/function.php'; 
include'pages/header.php'; 
include 'pages/menu.php';
include 'pages/banner.php';
?>

<div class="page"><?php /* page divi başlangıcı*/?>
<?php if($query['sid_menu_con']==1){echo '<div class="primary-col">';}?>	
  
    <div class="clearing"></div>
    <div class="generic bdr-bottom-none">
      <div class=" panel">
        <div class="title">
          <h1><?php if ( $query ){ echo $query['page_description']; } ?></h1>
        </div>
        <div class="content">
			<?php if ( $query ){ echo $query['page_content']; } ?>
        </div>
      </div>
    </div>
    <div class="clearing"></div>
<?php if($query['sid_menu_con']==1){echo '</div>';}?>	
<?php 
include'pages/side_menu.php';
include'pages/gallery.php';
echo"</div>"; /* page divini kapatmak için */
include'pages/footer.php'; 
?>
