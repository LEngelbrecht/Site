<?php 
defined('_JEXEC') or die;
?>
<!-- Menu horizontal -->
<header id="header">
<div id="trueHeader">
<div class="menu-horizontal menu-white">
<div class="container">
<div class="row">
			<!-- Symbolic or typographic logo -->
			<div class="mh-logo">
			<?php if($logotype !== 'showboth'): ?>
				<?php if($logotype == 'image') :?>
					<a href="<?php echo JURI::root(true);?>" title="<?php echo $sitename;?>"><img src="<?php echo JURI::root(true).'/'.$logoImage;?>" alt="<?php echo $sitename;?>"></a>
				<?php else: ?>
					<?php if(!empty($logoText)) : ?>
						<h1><a href="<?php echo JURI::root(true);?>"><?php echo $logoText;?></a></h1>
					<?php else : ?>
						<h1><a href="<?php echo JURI::root(true);?>"><?php echo $sitename;?></a></h1>
					<?php endif;?>
				<?php endif;?>
				
			<?php else : ?>
				<?php if(!empty($logoImage)) :?>
					<a href="<?php echo JURI::root(true);?>" title="<?php echo $sitename;?>"><img src="<?php echo JURI::root(true).'/'.$logoImage;?>" alt="<?php echo $sitename;?>"></a>
				<?php endif;?>
				<?php if(!empty($logoText)) : ?>
					<h1><a href="<?php echo JURI::root(true);?>"><?php echo $logoText;?></a></h1>
				<?php else : ?>
					<h1><a href="<?php echo JURI::root(true);?>"><?php echo $sitename;?></a></h1>
				<?php endif;?>
			<?php endif;?>
			</div>


			<!-- Menu toggle -->
			<input type="checkbox" id="toggle" />
			<label for="toggle" class="toggle"></label>


			<!-- Menu items -->
			<div class="menu">
				<?php if($this->countModules('mainmenu')) :?>
				<!-- Menu items -->
				<jdoc:include type="modules" name="mainmenu" style="none" />

				<?php endif;?>
			</div>

</div>
</div>
</div>
</div>
</header>