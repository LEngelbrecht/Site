<?php
defined('_JEXEC') or die;
// detecting site title
$app = JFactory::getApplication();
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language; ?>" >
<head>
<meta charset="utf-8">        
<jdoc:include type="head" />
<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/css/bootstrap.css" type="text/css" media="all" />
<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/css/font-awesome.min.css" type="text/css" media="all" /> 
<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/css/template.css" type="text/css" media="all" />
<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/css/modules.css" type="text/css" media="all" />
<?php if ($this->params->get('langDirection') == "2") { ?>
<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/css/style-rtl.css" type="text/css" media="all" />
<?php } ?>    
<script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/js/bootstrap.js"></script> 
<!-- Admin Options -->
<?php include 'layouts/options.php'; ?> 
</head>
<body>
<?php include 'layouts/default.php'; ?> 
</body>


</html>