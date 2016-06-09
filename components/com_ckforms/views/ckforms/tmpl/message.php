<?php // no direct access
defined('_JEXEC') or die('Restricted access'); ?>

<h1 class="ckformtitle" <?php echo $this->params->get( 'pageclass_sfx' ); ?>"><?php echo $this->ckforms->title; ?></h1>

<?php if (strcmp ( $this->ckforms->textresult , "" ) != 0) { ?>
	<div class="contentpaneopen<?php echo $this->params->get( 'pageclass_sfx' ); ?>" id="ckformcontainer">
		<?php echo $this->ckforms->textresult; ?>
	</div>
<?php } ?>
