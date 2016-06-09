<?php defined('_JEXEC') or die('Restricted access'); ?>

<form action="index.php" method="post" name="adminForm">
<div id="editcell">
	<table class="adminlist">
	<thead>
		<tr>
            <th width="3%">
                <?php echo JText::_(COM_CKFORMS_MSG_43 ); ?>
            </th>
			<th width="3%">
				<input type="checkbox" name="toggle" value="" onclick="checkAll(<?php echo count( $this->items ); ?>);" />
			</th>			
			<th width="40%">
				<?php echo JText::_( COM_CKFORMS_MSG_68 ); ?>
			</th>
			<th width="20%">
				<?php echo JText::_( COM_CKFORMS_MSG_53 ); ?>
			</th>
            <th width="5%" nowrap="nowrap">
                <?php echo JHTML::_('grid.sort', JText::_( COM_CKFORMS_MSG_39 ), 'published', @$lists['order_Dir'], @$lists['order'] ); ?>
            </th>
			<th width="5%" nowrap="nowrap">
				<?php echo JText::_( COM_CKFORMS_MSG_114); ?>
			</th>
			<th width="5%" nowrap="nowrap">
				<?php echo JText::_( COM_CKFORMS_MSG_115 ); ?>
			</th>
			<th width="10%" nowrap="nowrap">
				<?php echo JText::_( COM_CKFORMS_MSG_46 ); ?>
			</th>
			<th width="15%" nowrap="nowrap">
				<?php echo JText::_( COM_CKFORMS_MSG_116 ); ?>
			</th>
			<th width="15%" nowrap="nowrap">
				<?php echo JText::_( COM_CKFORMS_MSG_117 ); ?>
			</th>
			<th width="3%">
				<?php echo JText::_( COM_CKFORMS_MSG_44 ); ?>
			</th>
		</tr>			
	</thead>
	<?php
	$k = 0;
	$n=count( $this->items );
	for ($i=0; $i < $n; $i++)
	{
		$row = &$this->items[$i];
		$published	= JHTML::_('grid.published', $row, $i );
		$checked 	= JHTML::_('grid.id',   $i, $row->id );
		$link 		= JRoute::_( 'index.php?option=com_ckforms&controller=ckforms&task=edit&cid[]='. $row->id );
		$fields		= JRoute::_( 'index.php?option=com_ckforms&controller=ckfields&fid='. $row->id );
		$savedData 	= JRoute::_( 'index.php?option=com_ckforms&controller=ckdata&fid='. $row->id );

		?>
		<tr class="<?php echo "row$k"; ?>">
			<td>
				<?php echo $i+1; ?>
			</td>
			<td>
				<?php echo $checked; ?>
			</td>
			<td>
				<a href="<?php echo $link; ?>"><?php echo $row->title; ?></a>
			</td>
			<td>
				<a href="<?php echo $link; ?>"><?php echo $row->name; ?></a>
			</td>
            <td align="center">
                <?php echo $published;?>
            </td>
            <td nowrap="nowrap">
            	<a href="<?php echo $fields; ?>"><img src="<?php echo JURI::root(); ?>includes/js/ThemeOffice/mainmenu.png" border="0" /></a>
                &nbsp;
				<a href="<?php echo $fields; ?>"><?php echo $row->nbfields; ?></a>
            </td>
			<td>
				<?php echo $row->username; ?>
			</td>
			<td nowrap="nowrap">
				<?php echo $row->created; ?>
			</td>
			<td nowrap="nowrap">
            <?php 
				if ($row->saveresult == '1')
				{
			?>
				<a href="<?php echo $savedData; ?>"><?php echo JText::_( COM_CKFORMS_MSG_118); ?></a>
            <?php 
				} else {
			?>
            	&nbsp;
            <?php 
				}
			?>
			</td>			
           	<td>
				<?php echo $row->hits; ?>
			</td>
           	<td>
				<?php echo $row->id; ?>
			</td>
		</tr>
		<?php
		$k = 1 - $k;
	}
	?>
    
    
    <tfoot>
    <tr>
      <td colspan="11"><?php echo $this->pagination->getListFooter(); ?></td>
    </tr>
  	</tfoot>
    
	</table>
</div>

<input type="hidden" name="option" value="com_ckforms" />
<input type="hidden" name="task" value="" />
<input type="hidden" name="boxchecked" value="0" />
<input type="hidden" name="controller" value="ckforms" />
</form>

<div class="ckformbottom">
	&copy; Copyright CKforms - Adapted by Sysinfomac from CKForms by Cookex <br> 
    CKForms is Free Software released under the GNU/GPL License. 
</div>