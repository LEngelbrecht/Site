<?php
/**
* @package td_esgat Template
* @author joomlatd
* @file-default
*/

defined('_JEXEC') or die;
?>

	
<div id="wrapper">

<?php 		
include 'blocks/slider.php';
?>
<?php if($loadMenuModule == '1'):?>
<?php require_once dirname(__FILE__).'/nav.php'; ?>
<?php endif;?>
<?php 
include 'blocks/breadcrumbs.php';	
include 'blocks/top.php';
include 'blocks/main.php';
include 'blocks/info.php';	

?>

</div>	

<?php 
include 'blocks/bottom.php'; 
?>
