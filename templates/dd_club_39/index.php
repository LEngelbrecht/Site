<?php
/**
 *-------------------------------------------
 * Szablon został wypalony w  Diablodesign.
 * www.diablodesign.eu
 * biuro@diablodesign.eu
 * tel.666-977-944
 *-------------------------------------------
 */
defined('_JEXEC') or die;


require_once dirname(__FILE__) . DIRECTORY_SEPARATOR . 'functions.php';


$document = $this;


$templateUrl = $document->baseurl . '/templates/' . $document->template;

Artx::load("Artx_Page");


$view = $this->artx = new ArtxPage($this);


$view->componentWrapper();

JHtml::_('behavior.framework', true);
$app = JFactory::getApplication();
$tplparams	= $app->getTemplate(true)->params;
//on off
$fc = htmlspecialchars($tplparams->get('fc'));
$tc = htmlspecialchars($tplparams->get('tc'));
$yc = htmlspecialchars($tplparams->get('yc'));
$backc = htmlspecialchars($tplparams->get('backc'));
$infoc = htmlspecialchars($tplparams->get('infoc'));
$flashc = htmlspecialchars($tplparams->get('flashc'));
?>
<!DOCTYPE html>
<html dir="ltr" lang="<?php echo $document->language; ?>">
<head>
    <jdoc:include type="head" />
    <link rel="stylesheet" href="<?php echo $document->baseurl; ?>/templates/system/css/system.css" />
    <link rel="stylesheet" href="<?php echo $document->baseurl; ?>/templates/system/css/general.css" />


    
    
    <meta name="viewport" content="initial-scale = 1.0, maximum-scale = 1.0, user-scalable = no, width = device-width" />

    <!--[if lt IE 9]><script src="https://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
    <link rel="stylesheet" href="<?php echo $templateUrl; ?>/css/template.css" media="screen" type="text/css" />
    <!--[if lte IE 7]><link rel="stylesheet" href="<?php echo $templateUrl; ?>/css/template.ie7.css" media="screen" /><![endif]-->
    <link rel="stylesheet" href="<?php echo $templateUrl; ?>/css/template.responsive.css" media="all" type="text/css" />
<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Audiowide&amp;subset=latin" />
<link rel="shortcut icon" href="<?php echo $templateUrl; ?>/favicon.ico" type="image/x-icon" />
    <script>if ('undefined' != typeof jQuery) document._artxJQueryBackup = jQuery;</script>
    <script src="<?php echo $templateUrl; ?>/jquery.js"></script>
    <script>jQuery.noConflict();</script>

    <script src="<?php echo $templateUrl; ?>/script.js"></script>
    <script src="<?php echo $templateUrl; ?>/script.responsive.js"></script>
    <script src="<?php echo $templateUrl; ?>/modules.js"></script>
    <!--bg-->
  
    <link rel="stylesheet" href="<?php echo $templateUrl; ?>/css/style3.css" media="screen" type="text/css" />
    <script src="<?php echo $templateUrl; ?>/js/modernizr.custom.86080.js"></script>
    <style>
	.cb-slideshow li:nth-child(1) span { background-image: url(<?php echo $this->baseurl ?>/<?php echo $this->params->get('foto1'); ?>) }
.cb-slideshow li:nth-child(2) span {
    background-image: url(<?php echo $this->baseurl ?>/<?php echo $this->params->get('foto2'); ?>);
    -webkit-animation-delay: 6s;
    -moz-animation-delay: 6s;
    -o-animation-delay: 6s;
    -ms-animation-delay: 6s;
    animation-delay: 6s;
}
.cb-slideshow li:nth-child(3) span {
    background-image: url(<?php echo $this->baseurl ?>/<?php echo $this->params->get('foto3'); ?>);
    -webkit-animation-delay: 12s;
    -moz-animation-delay: 12s;
    -o-animation-delay: 12s;
    -ms-animation-delay: 12s;
    animation-delay: 12s;
}
.cb-slideshow li:nth-child(4) span {
    background-image: url(<?php echo $this->baseurl ?>/<?php echo $this->params->get('foto4'); ?>);
    -webkit-animation-delay: 18s;
    -moz-animation-delay: 18s;
    -o-animation-delay: 18s;
    -ms-animation-delay: 18s;
    animation-delay: 18s;
}
.cb-slideshow li:nth-child(5) span {
    background-image: url(<?php echo $this->baseurl ?>/<?php echo $this->params->get('foto5'); ?>);
    -webkit-animation-delay: 24s;
    -moz-animation-delay: 24s;
    -o-animation-delay: 24s;
    -ms-animation-delay: 24s;
    animation-delay: 24s;
}
.cb-slideshow li:nth-child(6) span {
    background-image: url(<?php echo $this->baseurl ?>/<?php echo $this->params->get('foto6'); ?>);
    -webkit-animation-delay: 30s;
    -moz-animation-delay: 30s;
    -o-animation-delay: 30s;
    -ms-animation-delay: 30s;
    animation-delay: 30s;
}
	</style>
    <!--end bg-->
    <?php $view->includeInlineScripts() ?>
    <script>if (document._artxJQueryBackup) jQuery = document._artxJQueryBackup;</script>
        <?php if ($backc == 1) { ?> <!--scroling head-->
<script src="<?php echo $templateUrl; ?>/js/scroling.js"></script>
<script type="text/javascript">
$(function() {
	$(window).scroll(function() {
		if($(this).scrollTop() != 0) {
			$('#toTop').fadeIn();	
		} else {
			$('#toTop').fadeOut();
		}
	});
 
	$('#toTop').click(function() {
		$('body,html').animate({scrollTop:0},800);
	});	
});
</script>
<!--end scroling--><?php } ?>
</head>
<body>
<!--License Number :<?php echo $this->params->get('license'); ?>-->
<?php if ($backc == 1) { ?><div id="toTop"><p><?php echo $this->params->get('scroll'); ?></p></div><?php } ?>
        <ul class="cb-slideshow">
            <li><span>Image 01</span><div><h3><?php echo $this->params->get('tx1'); ?></h3></div></li>
            <li><span>Image 02</span><div><h3><?php echo $this->params->get('tx2'); ?></h3></div></li>
            <li><span>Image 03</span><div><h3><?php echo $this->params->get('tx3'); ?></h3></div></li>
            <li><span>Image 04</span><div><h3><?php echo $this->params->get('tx4'); ?></h3></div></li>
            <li><span>Image 05</span><div><h3><?php echo $this->params->get('tx5'); ?></h3></div></li>
            <li><span>Image 06</span><div><h3><?php echo $this->params->get('tx6'); ?></h3></div></li>
        </ul>
<div id="dd-main">
<header class="dd-header"><?php echo $view->position('position-30', 'dd-nostyle'); ?>

    <div class="dd-shapes">
        <div class="dd-textblock dd-object575026886">
        <div class="dd-object575026886-text-container">
        <div class="dd-object575026886-text"></div>
    </div>
    
</div><div class="dd-textblock dd-object852270677">
        <div class="dd-object852270677-text-container">
        <div class="dd-object852270677-text"><div class="headerinfo"><?php echo $this->params->get('header'); ?></div><p style="text-align: justify;"><?php echo $view->position('headerinfo', 'dd-nostyle'); ?><?php if ($infoc == 1) { ?><img style="margin-right: 5px; float: left;" src="<?php echo $this->params->get('person'); ?>" alt="dj" width="121" height="128" /><?php echo $this->params->get('text1'); ?><?php } ?><span class="Apple-style-span" style="line-height: normal; color: rgb(196, 196, 196); font-family: Arial, 'Arial Unicode MS', Helvetica, sans-serif; font-size: 13px;"><br /></span></p><div class="css_btn_class"><a href="<?php echo $this->params->get('header_title_link'); ?>"><?php echo $this->params->get('button_title'); ?></a></div></div>
    </div>
    
</div><div class="dd-textblock dd-object792982593">
        <div class="dd-object792982593-text-container">
      
    </div>
    
</div>
            </div>



<div class="dd-textblock dd-textblock-1767563433">
       <?php if ($fc == 1) { ?> <div class="dd-textblock-1767563433-text-container">
        <div class="dd-textblock-1767563433-text"><a href="<?php echo $this->params->get('facebook'); ?>" target="_blank" class="dd-facebook-tag-icon"></a></div>
    </div><?php } ?>
    
</div><div class="dd-textblock dd-textblock-2112859684">
        <?php if ($tc == 1) { ?><div class="dd-textblock-2112859684-text-container">
        <div class="dd-textblock-2112859684-text"><a href="<?php echo $this->params->get('twitter'); ?>" target="_blank" class="dd-twitter-tag-icon"></a></div>
    </div><?php } ?>
    
</div><div class="dd-textblock dd-textblock-9408119">
        <?php if ($yc == 1) { ?><div class="dd-textblock-9408119-text-container">
        <div class="dd-textblock-9408119-text"><a href="<?php echo $this->params->get('youtube'); ?>" target="_blank" class="dd-youtube-tag-icon"></a></div>
    </div><?php } ?>
    
</div>
<a href="#" class="dd-logo dd-logo-59500341">
    <img src="<?php echo $this->params->get('logo'); ?>" alt="logo" />
</a>
<div class="dd-textblock dd-object1992741322">
    <form class="dd-search" name="Search" action="<?php echo $document->baseurl; ?>/index.php" method="post">
    <input type="text" value="" name="searchword" />
        <input type="hidden" name="task" value="search" />
<input type="hidden" name="option" value="com_search" />
<input type="submit" value="" name="search" class="dd-search-button" />
        </form>
</div>
                       <?php if ($flashc == 1) { ?> <div id="dd-flash-area">
                    <div id="dd-flash-container">
                    <object width="566" height="528" id="dd-flash-object" data="<?php echo $templateUrl; ?>/images/flash.swf" type="application/x-shockwave-flash">
                        <param name="quality" value="high" />
                    	<param name="scale" value="exactfit" />
                    	<param name="wmode" value="transparent" />
                    	<param name="flashvars" value="color1=0xFFFFFF&amp;alpha1=.50&amp;framerate1=24&amp;loop=true&amp;wmode=transparent" />
                        <param name="swfliveconnect" value="true" />
                        <!--[if !IE]>-->
                        <object type="application/x-shockwave-flash" data="<?php echo $templateUrl; ?>/images/flash.swf" width="566" height="528">
                            <param name="quality" value="high" />
                    	    <param name="scale" value="exactfit" />
                            <param name="wmode" value="transparent" />
                                                    	    <param name="flashvars" value="color1=0xFFFFFF&amp;alpha1=.50&amp;framerate1=24&amp;loop=true&amp;wmode=transparent" />
                            <param name="swfliveconnect" value="true" />
                        <!--<![endif]-->
                          	<div class="dd-flash-alt"><a href="http://www.adobe.com/go/getflashplayer"><img src="http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif" alt="Get Adobe Flash player" /></a></div>
                        <!--[if !IE]>-->
                        </object>
                        <!--<![endif]-->
                    </object>
                    </div>
                    </div><?php } ?>
<?php if ($view->containsModules('position-1', 'position-28', 'position-29')) : ?>
<nav class="dd-nav">
    <div class="dd-nav-inner">
    
<?php if ($view->containsModules('position-28')) : ?>
<div class="dd-hmenu-extra1"><?php echo $view->position('position-28'); ?></div>
<?php endif; ?>
<?php if ($view->containsModules('position-29')) : ?>
<div class="dd-hmenu-extra2"><?php echo $view->position('position-29'); ?></div>
<?php endif; ?>
<?php echo $view->position('position-1'); ?>
 
        </div>
    </nav>
<?php endif; ?>

                    
</header>
<div class="dd-sheet clearfix">
            <?php echo $view->position('position-15', 'dd-nostyle'); ?>
<?php echo $view->positions(array('position-16' => 33, 'position-17' => 33, 'position-18' => 34), 'dd-block'); ?>
<div class="dd-layout-wrapper">
                <div class="dd-content-layout">
                    <div class="dd-content-layout-row">
                        <div class="dd-layout-cell dd-content">
<?php
  echo $view->position('position-19', 'dd-nostyle');
  if ($view->containsModules('position-2'))
    echo artxPost($view->position('position-2'));
  echo $view->positions(array('position-20' => 50, 'position-21' => 50), 'dd-article');
  echo $view->position('position-12', 'dd-nostyle');
  echo artxPost(array('content' => '<jdoc:include type="message" />', 'classes' => ' dd-messages'));
  echo '<jdoc:include type="component" />';
  echo $view->position('position-22', 'dd-nostyle');
  echo $view->positions(array('position-23' => 50, 'position-24' => 50), 'dd-article');
  echo $view->position('position-25', 'dd-nostyle');
?>



                        </div>
                        <?php if ($view->containsModules('position-7', 'position-4', 'position-5')) : ?>
<div class="dd-layout-cell dd-sidebar1">
<?php echo $view->position('position-7', 'dd-block'); ?>
<?php echo $view->position('position-4', 'dd-block'); ?>
<?php echo $view->position('position-5', 'dd-block'); ?>




                        </div>
<?php endif; ?>

                        <?php if ($view->containsModules('position-6', 'position-8', 'position-3')) : ?>
<div class="dd-layout-cell dd-sidebar2">
<?php echo $view->position('position-6', 'dd-block'); ?>
<?php echo $view->position('position-8', 'dd-block'); ?>
<?php echo $view->position('position-3', 'dd-block'); ?>


                        </div>
<?php endif; ?>
                    </div>
                </div>
            </div>
<?php echo $view->positions(array('position-9' => 33, 'position-10' => 33, 'position-11' => 34), 'dd-block'); ?>
<?php echo $view->position('position-26', 'dd-nostyle'); ?>


    </div>
<footer class="dd-footer">
  <div class="dd-footer-inner">
<div class="dd-content-layout">
    <div class="dd-content-layout-row">
    <div class="dd-layout-cell layout-item-0" style="width: 33%">
<?php if ($view->containsModules('position-31')) : ?>
    <?php echo $view->position('position-31', 'dd-nostyle'); ?>
<?php else: ?>
        <p style="text-align: left;">&nbsp; &nbsp; &nbsp;<span style="color: rgb(255, 255, 255);"><br /></span></p>
    <?php endif; ?>
</div><div class="dd-layout-cell layout-item-0" style="width: 67%">
<?php if ($view->containsModules('position-32')) : ?>
    <?php echo $view->position('position-32', 'dd-nostyle'); ?>
<?php else: ?>
        <p style="text-align: left;"><span style="font-size: 12px; text-shadow: #171717 0px 0px 12px; color: #FFFFFF;">&nbsp; &nbsp; <span style="color: rgb(255, 255, 255);">Copyright by</span>&nbsp;<span style="color: #9ECF20;"><?php echo $this->params->get('footer'); ?>&nbsp;</span>&nbsp;<?php echo date("Y");?>. All right reserved.</span><span style="color: rgb(255, 255, 255);"><br /></span></p>
    <?php endif; ?>
</div>
    </div>
</div>

    <p class="dd-page-footer">
        <span id="dd-footnote-links">Designed by <a href="http://www.diablodesign.eu" target="_blank">www.diablodesign.eu</a>.</span>
    </p>
  </div>
</footer>

</div>


<?php echo $view->position('debug'); ?>
</body>
</html>