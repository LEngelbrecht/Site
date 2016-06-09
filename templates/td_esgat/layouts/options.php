<?php
/**
* @package td_esgat Template
* @author joomlatd
* @file- Template Options
*/
defined('_JEXEC') or die;
$totop = $this->params->get("totop", 1);
$totopText = $this->params->get("totopText", "Go to Top");
$loadMenuModule = $this->params->get('loadMenuModule','1');
$showBackTop = $this->params->get('showBackTop','1');
$menucolors = $this->params->get('menucolors','dark');
$logoImage = $this->params->get('logoImage');
$logoText = $this->params->get('logoText');
$logotype = $this->params->get('logotype','image');
$sitename = $app->getCfg('sitename');
?>
<?php if ($this->params->get('jquery') == "1") { ?>
<script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/js/jquery.min.js"></script> 
<?php } ?>  

<?php 
if($totop == 1){?>
<script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/js/scrolltotop.js"></script> 
<script type="text/javascript">
jQuery(document).ready(function() {
jQuery(document.body).SLScrollToTop({
'text':			'<?php echo $totopText ?>',
'title':		'<?php echo $totopText ?>',
'className':	'scrollToTop',
'duration':		500
});
});</script>
<?php } ?>
