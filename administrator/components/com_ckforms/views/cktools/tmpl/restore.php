<?php defined('_JEXEC') or die('Restricted access'); ?>

<form action="index.php" method="post" name="adminForm" id="adminForm" enctype="multipart/form-data">

<p><? echo JText::_( COM_CKFORMS_MSG_125 ); ?></p>
<p><? echo JText::_( COM_CKFORMS_MSG_126 ); ?></p>
<p><? echo JText::_( COM_CKFORMS_MSG_127 ); ?></p>

<input name="backupfile" type="file" size="100" />

<input type="hidden" name="option" value="com_ckforms" />
<input type="hidden" name="task" value="" />
<input type="hidden" name="controller" value="cktools" />

</form>

<div class="ckformbottom">
	&copy; Copyright CKforms - Adapted by Sysinfomac from CKForms by Cookex <br> 
    CKForms is Free Software released under the GNU/GPL License. 
</div>