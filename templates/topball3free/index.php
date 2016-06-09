<?php 
/**
 * Date         November  11, 2014
 * Copyright    Copyright (C) 2014 10templates.com
 * License  GPL
 */
defined( '_JEXEC' ) or die;

$app = JFactory::getApplication();
$doc = JFactory::getDocument();
$this->language = $doc->language;
$this->direction = $doc->direction;

JHtml::_('bootstrap.framework');

?>
<!DOCTYPE html>
<html xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language; ?>" >
<head>
<jdoc:include type="head" />
<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/template.css" type="text/css" />
<script type="text/javascript" src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/js/menu.js"></script>

<script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/js/jssor/jquery.min.js"></script>
<script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/js/jssor/jssor.slider.mini.js"></script>
<script>
   jQuery(document).ready(function ($) {
        var options = {
            $ArrowNavigatorOptions: {
                $Class: $JssorArrowNavigator$,
                $ChanceToShow: 2
            }
        };
        var jssor_slider1 = new $JssorSlider$('slider1_container', options);
    });
</script>

</head>
<body>

    

<div class="mainCon clearfix">

  <div id="content" role="main">

    <jdoc:include type="modules" name="position-2" style="none" />

   <!-- Carousel
================================================== -->

<div id="slider1_container" style="position: relative; top: 0px; left: 0px; width: 700px; height: 300px;">
    <!-- Slides Container -->
    <div u="slides" style="cursor: move; position: absolute; overflow: hidden; left: 0px; top: 0px; width: 700px; height: 300px;">
        <div><img u="image" src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/images/slider/a1.jpg" /></div>
        <div><img u="image" src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/images/slider/a2.jpg" /></div>
        <div><img u="image" src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/images/slider/a3.jpg" /></div>
    </div>
    <!-- Arrow Navigator Skin Begin -->
        <style>
            .jssora09l, .jssora09r, .jssora09ldn, .jssora09rdn
            {
              position: absolute;
              cursor: pointer;
              display: block;
                overflow:hidden;
                opacity: .4; filter:alpha(opacity=40);
            }
            .jssora09l:hover { opacity: .8; filter:alpha(opacity=80); }
            .jssora09r:hover { opacity: .8; filter:alpha(opacity=80); }
        </style>
        <!-- Arrow Left -->
        <span u="arrowleft" class="jssora09l" style="width: 50px; height: 50px; top: 123px; left: 8px;">
        </span>
        <!-- Arrow Right -->
        <span u="arrowright" class="jssora09r" style="width: 50px; height: 50px; top: 123px; right: 8px">
        </span>
        <!-- Arrow Navigator Skin End -->
</div>

<!-- Carousel end
================================================== -->

    <?php if ($this->countModules('position-9')) : ?>
    <div class="banners">
        <jdoc:include type="modules" name="position-9" style="none" />
    </div>
    <?php endif; ?>

    <!-- Begin Content -->
    <div class="insider">
      <jdoc:include type="message" />
      <jdoc:include type="component" />
      <jdoc:include type="modules" name="position-3" style="none" />
    </div>
    <!-- End Content -->

    <footer class="clearfix">
      <section>
        <?php if ($this->countModules('position-4')) : ?>
          <jdoc:include type="modules" name="position-4" style="xhtml" />
        <?php endif; ?>
      </section>
      <section>
        <?php if ($this->countModules('position-5')) : ?>
          <jdoc:include type="modules" name="position-5" style="xhtml" />
        <?php endif; ?>
      </section>
     </footer>

  </div>

  <div class="rightCont">

   
    <?php if ($this->params->get('youTu') == 'ON') { ?>
    <div class="moduletable youT">
      
	  
	  <h3>YouTube videos</h3>
      <aside>
        <object>
          <param name="movie" value="//www.youtube.com/v/<?php echo $this->params->get('youtubeVid1');?>?version=3"></param>
          <param name="allowFullScreen" value="true"></param>
          <param name="allowscriptaccess" value="always"></param>
          <embed src="//www.youtube.com/v/<?php echo $this->params->get('youtubeVid1');?>?version=3" type="application/x-shockwave-flash" allowscriptaccess="always" allowfullscreen="true"></embed>
        </object>
      </aside>

      <aside>
        <object>
          <param name="movie" value="//www.youtube.com/v/<?php echo $this->params->get('youtubeVid2');?>?version=3"></param>
          <param name="allowFullScreen" value="true"></param>
          <param name="allowscriptaccess" value="always"></param>
          <embed src="//www.youtube.com/v/<?php echo $this->params->get('youtubeVid2');?>?version=3" type="application/x-shockwave-flash" allowscriptaccess="always" allowfullscreen="true"></embed>
        </object>
      </aside>

      <aside>
        <object>
          <param name="movie" value="//www.youtube.com/v/<?php echo $this->params->get('youtubeVid3');?>?version=3"></param>
          <param name="allowFullScreen" value="true"></param>
          <param name="allowscriptaccess" value="always"></param>
          <embed src="//www.youtube.com/v/<?php echo $this->params->get('youtubeVid3');?>?version=3" type="application/x-shockwave-flash" allowscriptaccess="always" allowfullscreen="true"></embed>
        </object>
      </aside>
    </div>
    <?php } ?>

    <?php if ($this->countModules('position-7')) : ?>
      <jdoc:include type="modules" name="position-7" style="xhtml" />
    <?php endif; ?>

    <?php if ($this->countModules('rightSide')) : ?>
      <jdoc:include type="modules" name="rightSide" style="xhtml" />
    <?php endif; ?> 

  </div>


 </div>
 <?php if ($this->params->get('FBlikebox') == 'ON') { ?>
  <div class="panel">
  <div class="moduletable">
  <h3>Facebook</h3>
  <iframe src="//www.facebook.com/plugins/likebox.php?href=http%3A%2F%2Fwww.facebook.com%2F<?php echo $this->params->get( 'fbpath' ); ?>&amp;width=287&amp;height=<?php echo $this->params->get( 'fbheight' ); ?>&amp;colorscheme=<?php echo $this->params->get( 'fbColorScheme' ); ?>&amp;show_faces=<?php echo $this->params->get( 'fbfaces' ); ?>&amp;border_color=<?php echo $this->params->get( 'fbborder' ); ?>&amp;stream=<?php echo $this->params->get( 'fbstream' ); ?>&amp;header=<?php echo $this->params->get( 'fbheader' ); ?>" scrolling="no" frameborder="0" style="border:#<?php echo $this->params->get( 'fbborder' ); ?>; background:#<?php echo $this->params->get( 'fbbackground' ); ?>; overflow:hidden; width:287px; height:<?php echo $this->params->get( 'fbheight' ); ?>px;" allowTransparency="true"></iframe>
  </div>
  </div>
  <a class="trigger" href="#"></a>
  <?php } ?>

  <div class="blackTick">

  <h1><a href=""><?php echo $app->getCfg('sitename'); ?></a></h1>

  <?php if ($this->countModules('position-1')) : ?>
      <div class="nav10 grad1">
        <jdoc:include type="modules" name="position-1" style="none" />
      </div>
    <?php endif; ?>

  <?php if ($this->countModules('leftSide')) : ?>
    <jdoc:include type="modules" name="leftSide" style="xhtml" />
  <?php endif; ?>
  <div class="moduletable">
      <div class="socBox clearfix">
		<?php if ($this->params->get('facebook-ic') == !null) { ?>
            <a href="<?php echo $this->params->get('facebook-ic');?>" target="_blank" class="fbic"></a>
        <?php } ?>
        <?php if ($this->params->get('twitter-ic') == !null) { ?>
            <a href="<?php echo $this->params->get('twitter-ic');?>" target="_blank" class="twic"></a>
        <?php } ?>
        <?php if ($this->params->get('google-ic') == !null) { ?>
            <a href="<?php echo $this->params->get('google-ic');?>" target="_blank" class="goic"></a>
        <?php } ?>
        <?php if ($this->params->get('skype-ic') == !null) { ?>
            <a href="callto://<?php echo $this->params->get('skype-ic');?>" class="skypeic"></a>
        <?php } ?>
        <?php if ($this->params->get('flickr-ic') == !null) { ?>
            <a href="<?php echo $this->params->get('flickr-ic');?>" target="_blank" class="flickic"></a>
        <?php } ?>
        <?php if ($this->params->get('youtube-ic') == !null) { ?>
            <a href="<?php echo $this->params->get('youtube-ic');?>" target="_blank" class="youtubeic"></a>
        <?php } ?>
        <?php if ($this->params->get('rss-ic') == !null) { ?>
            <a href="<?php echo $this->params->get('rss-ic');?>" target="_blank" class="rssic"></a>
        <?php } ?>
        <?php if ($this->params->get('pinterest-ic') == !null) { ?>
            <a href="<?php echo $this->params->get('pinterest-ic');?>" target="_blank" class="pinterestic"></a>
        <?php } ?>
        <?php if ($this->params->get('insta-ic') == !null) { ?>
            <a href="<?php echo $this->params->get('insta-ic');?>" target="_blank" class="instaic"></a>
        <?php } ?>
      </div>
    </div>
    <?php include('js/' . 'bottom.css.php') ?>
</div>
</body>
</html>