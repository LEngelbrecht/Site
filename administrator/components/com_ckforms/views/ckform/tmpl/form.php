<?php defined('_JEXEC') or die('Restricted access'); ?>

<?php 
	jimport( 'joomla.html.editor' ); 

$document =& JFactory::getDocument();
//$document->addScriptDeclaration(JURI::root(true).'/administrator/components/com_ckforms/js/mootabsjpf.js');
		//$document->addScript(JURI::root(true).'/administrator/components/com_ckforms/js/mootabsjpf.js');
$document->addCustomTag('<script type="text/javascript" src="'.JURI::root(true).'/administrator/components/com_ckforms/js/mootabs.js"></script>');
////echo '<script src='."'".$jpfmootabs."' type='text/javascript'></script>";?>

<script type="text/javascript">
window.addEvent('domready', function(){
	var myTabs = new mootabs('tabcontainer');
});
    
function submitbutton(pressbutton)	{
	var form = document.adminForm;

	if (pressbutton == 'cancel') {
		submitform( pressbutton );
		return;
	}

	// do field validation
	if (form.name.value == ""){
		alert( "<?php echo JText::_( COM_CKFORMS_MSG_58, true ); ?>" );
	} else if (form.name.value.match(/[a-zA-Z0-9]*/) != form.name.value) {
		alert( "<?php echo JText::_( COM_CKFORMS_MSG_60, true ); ?>" );
	} else {
		submitform( pressbutton );
	}
}

</script>


<form action="index.php" method="post" name="adminForm" id="adminForm">
 
    <div id="tabcontainer">
    
        <ul class="mootabs_title">
        	<li><a href="#fragment-1" class="active"><?php echo JText::_( COM_CKFORMS_MSG_61 ); ?></a></li>
          	<li><a href="#fragment-2"><?php echo JText::_( COM_CKFORMS_MSG_62 ); ?></a></li>
          	<li><a href="#fragment-3"><?php echo JText::_( COM_CKFORMS_MSG_63 ); ?></a></li>
          	<li><a href="#fragment-4"><?php echo JText::_( COM_CKFORMS_MSG_64 ); ?></a></li>
            <li><a href="#fragment-5"><?php echo JText::_( COM_CKFORMS_MSG_65 ); ?></a></li>
            <li><a href="#fragment-6"><?php echo JText::_( COM_CKFORMS_MSG_66 ); ?></a></li>
      	</ul>

		<div id="fragment-1" class="mootabs_panel active"> 
		<table class="admintable ckadmintable"> 
		<tr>
			<td class="key">
				<label for="title">
					<?php echo JText::_( COM_CKFORMS_MSG_53 ); ?>:
				</label>
			</td>
			<td class="value">
				<input type="text" name="name" id="name" size="50" maxlength="50" value="<?php echo $this->ckforms->name;?>" />
                <img class="ckform_tooltip ckform_tooltipcss" src="<?php echo JURI::root(true).'/administrator/components/com_ckforms/'; ?>images/help.png" title="<?php echo JText::_( COM_CKFORMS_MSG_67 ); ?>" />
			</td>           
		</tr>
        
		<tr>
			<td class="key">
				<label for="title">
					<?php echo JText::_( COM_CKFORMS_MSG_68 ); ?>:
				</label>
			</td>
			<td class="value">
				<input type="text" name="title" id="title" size="50" maxlength="250" value="<?php echo $this->ckforms->title;?>" />
			</td>
		</tr>        
        <tr>
			<td class="key">
				<label for="title">
					<?php echo JText::_( COM_CKFORMS_MSG_39 ); ?>:
				</label>
			</td>
            <td class="value">
            <?php 
                echo JHTML::_('select.booleanlist',  'published', '', $this->ckforms->published); 
            ?>
            </td>        
        </tr>

        <tr>
			<td class="key">
				<label for="title">
					<?php echo JText::_( COM_CKFORMS_MSG_69 ); ?>:
				</label>
			</td>
            <td class="value">
				<div style="float:left">
					<?php
						$editorDesc = JFactory::getEditor();
						echo $editorDesc->display('description',$this->ckforms->description, 600, 200, 10, 10);  
					?>
				</div>
				<img class="ckform_tooltip ckform_tooltipcss" src="<?php echo JURI::root(true).'/administrator/components/com_ckforms/'; ?>images/help.png" title="<?php echo JText::_( COM_CKFORMS_MSG_69_DESC ); ?>" />
            </td>
        </tr>
		</table>
        </div>
        
		<div id="fragment-2" class="mootabs_panel ui-tabs-hide">
		<table class="admintable ckadmintable"> 
        <tr>
			<td class="key">
				<label for="title">
					<?php echo JText::_( COM_CKFORMS_MSG_70 ); ?> :
				</label>
			</td>
            <td class="value">
                <?php echo JHTML::_('select.booleanlist',  'saveresult', '', $this->ckforms->saveresult); ?>
                <img class="ckform_tooltip ckform_tooltipcss" src="<?php echo JURI::root(true).'/administrator/components/com_ckforms/'; ?>images/help.png" title="<?php echo JText::_( COM_CKFORMS_MSG_71 ); ?>" />
    
            </td>             
        </tr>
        
        <tr>
			<td class="key">
				<label for="title"><?php echo JText::_( COM_CKFORMS_MSG_72 ); ?> :</label>
			</td>
            <td class="value">
				<div style="float:left">
					<?php 
						$editorResult = JFactory::getEditor();
						echo $editorResult->display('textresult',$this->ckforms->textresult, 600, 200, 10, 10);  
					?>
				</div>
                <img class="ckform_tooltip ckform_tooltipcss" src="<?php echo JURI::root(true).'/administrator/components/com_ckforms/'; ?>images/help.png" title="<?php echo JText::_( COM_CKFORMS_MSG_73 ); ?>" />
            </td>
        </tr>
		<tr>
			<td class="key">
				<label for="title">
					<?php echo JText::_( COM_CKFORMS_MSG_74 ); ?> :
				</label>
			</td>
			<td class="value">
				<input class="longfield" type="text" name="redirecturl" id="redirecturl" maxlength="250" value="<?php echo $this->ckforms->redirecturl;?>" />
            	<img class="ckform_tooltip ckform_tooltipcss" src="<?php echo JURI::root(true).'/administrator/components/com_ckforms/'; ?>images/help.png" title="<?php echo JText::_( COM_CKFORMS_MSG_75 ); ?>" />
			</td>
		</tr>        
		<tr>
			<td class="key">
				<label for="title">
					<?php echo JText::_( COM_CKFORMS_MSG_76 ); ?> :
				</label>
			</td>
			<td class="value">
				<?php echo JHTML::_('select.booleanlist',  'redirectdata', '', $this->ckforms->redirectdata); ?>
			</td>
		</tr>        
		</table>        
        </div>
        
        <div id="fragment-3" class="mootabs_panel ui-tabs-hide">
        <table class="admintable x-hide-display ckadmintable" id="cktb3">
        <tr>
			<td class="key" nowrap="nowrap">
				<label for="title">
					<?php echo JText::_( COM_CKFORMS_MSG_77 ); ?>:
				</label>
			</td>
        	<td class="value">
				<?php echo JHTML::_('select.booleanlist',  'emailresult', '', $this->ckforms->emailresult); ?>
            	<img class="ckform_tooltip ckform_tooltipcss" src="<?php echo JURI::root(true).'/administrator/components/com_ckforms/'; ?>images/help.png" title="<?php echo JText::_( COM_CKFORMS_MSG_78 ); ?>" />
            </td>                
        </tr>
		<tr>
			<td class="key" nowrap="nowrap">
				<label for="title">
					<?php echo JText::_( COM_CKFORMS_MSG_79 ); ?>:
				</label>
			</td>
			<td class="value">
				<input class="longfield" type="text" name="emailfrom" id="emailfrom" maxlength="250" value="<?php echo $this->ckforms->emailfrom;?>" />
            	<img class="ckform_tooltip ckform_tooltipcss" src="<?php echo JURI::root(true).'/administrator/components/com_ckforms/'; ?>images/help.png" title="<?php echo JText::_( COM_CKFORMS_MSG_80); ?>" />
			</td>
		</tr> 
		<tr>
			<td class="key" nowrap="nowrap">
				<label for="title">
					<?php echo JText::_( COM_CKFORMS_MSG_81 ); ?>:
				</label>
			</td>
			<td class="value">
				<input class="longfield" type="text" name="emailto" id="emailto" maxlength="250" value="<?php echo $this->ckforms->emailto;?>" />
            	<img class="ckform_tooltip ckform_tooltipcss" src="<?php echo JURI::root(true).'/administrator/components/com_ckforms/'; ?>images/help.png" title="<?php echo JText::_(COM_CKFORMS_MSG_82 ); ?>" />
			</td>
		</tr> 
		<tr>
			<td class="key" nowrap="nowrap">
				<label for="title">
					<?php echo JText::_( COM_CKFORMS_MSG_83 ); ?>:
				</label>
			</td>
			<td class="value">
				<input class="longfield" type="text" name="emailcc" id="emailcc" maxlength="250" value="<?php echo $this->ckforms->emailcc;?>" />
            	<img class="ckform_tooltip ckform_tooltipcss" src="<?php echo JURI::root(true).'/administrator/components/com_ckforms/'; ?>images/help.png" title="<?php echo JText::_( COM_CKFORMS_MSG_82 ); ?>" />
			</td>
		</tr> 
		<tr>
			<td class="key" nowrap="nowrap">
				<label for="title">
					<?php echo JText::_( COM_CKFORMS_MSG_84 ); ?>:
				</label>
			</td>
			<td class="value">
				<input class="longfield" type="text" name="emailbcc" id="emailbcc" maxlength="250" value="<?php echo $this->ckforms->emailbcc;?>" />
            	<img class="ckform_tooltip ckform_tooltipcss" src="<?php echo JURI::root(true).'/administrator/components/com_ckforms/'; ?>images/help.png" title="<?php echo JText::_( COM_CKFORMS_MSG_82 ); ?>" />
			</td>
		</tr> 
		<tr>
			<td class="key" nowrap="nowrap">
				<label for="title">
					<?php echo JText::_( COM_CKFORMS_MSG_85 ); ?>:
				</label>
			</td>
			<td class="value">
				<input class="longfield" type="text" name="subject" id="subject" maxlength="250" value="<?php echo $this->ckforms->subject;?>" />
			</td>
		</tr>    
                          
        <tr>
			<td class="key" nowrap="nowrap">
				<label for="title"><?php echo JText::_( COM_CKFORMS_MSG_86 ); ?>:</label>
			</td>
        	<td class="value">
			<?php echo JHTML::_('select.booleanlist',  'emailresultincfile', '', $this->ckforms->emailresultincfile); ?>
            </td>              
        </tr>
		<tr><td><hr /></td><td><hr /></td></tr>
        <tr>
			<td class="key" nowrap="nowrap">
				<label for="title"><?php echo JText::_( COM_CKFORMS_MSG_87 ); ?>:</label>
			</td>
        	<td class="value">
				<?php echo JHTML::_('select.booleanlist',  'emailreceipt', '', $this->ckforms->emailreceipt); ?>
            	<img class="ckform_tooltip ckform_tooltipcss" src="<?php echo JURI::root(true).'/administrator/components/com_ckforms/'; ?>images/help.png" title="<?php echo JText::_( COM_CKFORMS_MSG_88 ); ?>" />
            </td>              
        </tr>
        <tr>
			<td class="key" nowrap="nowrap">
				<label for="title"><?php echo JText::_( COM_CKFORMS_MSG_89 ); ?>:</label>
			</td>
        	<td class="value">
			<input class="text_area" type="text" name="emailreceiptsubject" id="emailreceiptsubject" maxlength="250" value="<?php echo $this->ckforms->emailreceiptsubject;?>" />
            </td>              
        </tr>
        <tr>
			<td class="key">
				<label for="title"><?php echo JText::_( COM_CKFORMS_MSG_90 ); ?>:</label>
			</td>
            <td class="value">  
				<div style="float:left">
					<?php 
						$editorResultEMR = JFactory::getEditor();
						echo $editorResultEMR->display('emailreceipttext',$this->ckforms->emailreceipttext, 600, 150, 10, 10);  
					?>
				</div>
                <img class="ckform_tooltip ckform_tooltipcss" src="<?php echo JURI::root(true).'/administrator/components/com_ckforms/'; ?>images/help.png" title="<?php echo JText::_( COM_CKFORMS_MSG_90_DESC ); ?>" />
            </td>
        </tr>
        <tr>
			<td class="key" nowrap="nowrap">
				<label for="title"><?php echo JText::_( COM_CKFORMS_MSG_91 ); ?>:</label>
			</td>
        	<td class="value">
			<?php echo JHTML::_('select.booleanlist',  'emailreceiptincfield', '', $this->ckforms->emailreceiptincfield); ?>
            </td>              
        </tr>
        <tr>
			<td class="key" nowrap="nowrap">
				<label for="title"><?php echo JText::_( COM_CKFORMS_MSG_92 ); ?>:</label>
			</td>
        	<td class="value">
			<?php echo JHTML::_('select.booleanlist',  'emailreceiptincfile', '', $this->ckforms->emailreceiptincfile); ?>
            </td>              
        </tr>

       	</table>
    </div>
    
    <div id="fragment-4" class="mootabs_panel ui-tabs-hide">
		<table class="admintable ckadmintable"> 
        <tr>
			<td class="key">
				<label for="title"><?php echo JText::_( COM_CKFORMS_MSG_93 ); ?> :</label>
			</td>
            <td class="value">
                <?php 
                    echo JHTML::_('select.booleanlist',  'captcha', '', $this->ckforms->captcha);  
                ?>
            </td>        
        </tr>
		<tr>
			<td class="key" nowrap="nowrap">
				<label for="title">
					<?php echo JText::_( COM_CKFORMS_MSG_94 ); ?>:
				</label>
			</td>
			<td class="value">
				<input class="text_area" type="text" name="captchacustominfo" id="captchacustominfo" maxlength="255" value="<?php echo $this->ckforms->captchacustominfo;?>" />
			</td>
		</tr>
		<tr>
			<td class="key" nowrap="nowrap">
				<label for="title">
					<?php echo JText::_( COM_CKFORMS_MSG_95 ); ?>:
				</label>
			</td>
			<td class="value">
				<input class="text_area" type="text" name="captchacustomerror" id="captchacustomerror" maxlength="255" value="<?php echo $this->ckforms->captchacustomerror;?>" />
			</td>
		</tr>
        
        <tr><td colspan="2"><hr /></td></tr>
            
		<tr>
			<td class="key" nowrap="nowrap">
				<label for="title">
					<?php echo JText::_( COM_CKFORMS_MSG_96 ); ?>:
				</label>
			</td>
			<td class="value">
				<input class="text_area" type="text" name="formCSSclass" id="formCSSclass" maxlength="50" value="<?php echo $this->ckforms->formCSSclass;?>" />
			</td>
		</tr>
        
        <tr><td colspan="2"><hr /></td></tr>
            
        <tr>
			<td class="key" nowrap="nowrap">
				<label for="title">
					<?php echo JText::_( COM_CKFORMS_MSG_97 ); ?>:
				</label>
			</td>
			<td class="value">
				<input class="text_area" type="text" name="uploadpath" id="uploadpath" maxlength="255" value="<?php echo $this->ckforms->uploadpath;?>" /><br/>
                <?php 
				if ($this->ckforms->uploadpath != null && trim($this->ckforms->uploadpath) != "") 
                {
					if (file_exists ($this->ckforms->uploadpath))					
					{
						echo "<span class=\"txtgreen\">(".JText::_( COM_CKFORMS_MSG_98 )."</span> - ";
						
						if (is_writable ($this->ckforms->uploadpath))
						{
							echo "<span class=\"txtgreen\">".JText::_( COM_CKFORMS_MSG_99 ).")</span>";
						} else {
							echo "<span class=\"txtred\">".JText::_( COM_CKFORMS_ERR_11 )." !".")</span>";
						}
					} else {
						echo "<span class=\"txtred\">(".JText::_( COM_CKFORMS_ERR_12 )." !".")</span>";
					}
                }
				?>
			</td>          
		</tr>
		<tr>
			<td class="key" nowrap="nowrap">
				<label for="title">
					<?php echo JText::_( COM_CKFORMS_MSG_100 ); ?>:
				</label>
			</td>
			<td class="value">
				<input class="text_area" type="text" name="maxfilesize" id="maxfilesize" size="32" maxlength="32" value="<?php echo $this->ckforms->maxfilesize;?>" />
			</td>
		</tr>
        
        <tr><td colspan="2"><hr /></td></tr>
            
		<tr>
			<td class="key" nowrap="nowrap">
				<label for="title">
					<?php echo JText::_( COM_CKFORMS_MSG_101 ); ?>:
				</label>
			</td>
			<td class="value">
			<?php 
                echo JHTML::_('select.booleanlist',  'poweredby', '', $this->ckforms->poweredby);  
            ?>

			</td>
		</tr>
        </table>
    </div>
        
    <div id="fragment-5" class="mootabs_panel ui-tabs-hide">
	<table class="admintable ckadmintable">            
	<tr>
		<td class="key" nowrap="nowrap">
            <label for="title">
                <?php echo JText::_( COM_CKFORMS_MSG_102 ); ?>:
            </label>
		</td>
		<td class="value">
			<?php 
                echo JHTML::_('select.booleanlist',  'displayip', '', $this->ckforms->displayip);  
            ?>
		</td>
	</tr>
	<tr>
		<td class="key" nowrap="nowrap">
            <label for="title">
                <?php echo JText::_( COM_CKFORMS_MSG_103 ); ?>:
            </label>
		</td>
		<td class="value">
		<?php 
        	echo JHTML::_('select.booleanlist',  'displaydetail', '', $this->ckforms->displaydetail);  
        ?>
		</td>
	</tr>
    
	<tr>
		<td class="key" nowrap="nowrap">
            <label for="title">
                <?php echo JText::_( COM_CKFORMS_MSG_104 ); ?>:
            </label>
		</td>
		<td class="value">
		<?php 
        	echo JHTML::_('select.booleanlist',  'autopublish', '', $this->ckforms->autopublish);  
        ?>
		</td>
	</tr>


    <tr>
        <td class="key">
            <label for="title">
                <?php echo JText::_( COM_CKFORMS_MSG_68 ); ?>:
            </label>
        </td>
        <td class="value">
            <input type="text" name="fronttitle" id="fronttitle" size="50" maxlength="250" value="<?php echo $this->ckforms->fronttitle;?>" />
        </td>
    </tr>        

    <tr>
        <td class="key">
            <label for="title">
                <?php echo JText::_( COM_CKFORMS_MSG_EDITOR_DATAS ); ?>:
            </label>
        </td>
        <td class="value">
			<div style="float:left">
				<?php 	
					$editorDesc = JFactory::getEditor();
					echo $editorDesc->display('frontdescription',$this->ckforms->frontdescription, 600, 200, 10, 10);  
				?>
			</div>
			<img class="ckform_tooltip ckform_tooltipcss" src="<?php echo JURI::root(true).'/administrator/components/com_ckforms/'; ?>images/help.png" title="<?php echo JText::_( COM_CKFORMS_MSG_EDITOR_DATAS_DESC ); ?>" />
        </td>
    </tr>

    </table>
    </div>
        
	<div id="fragment-6" class="mootabs_panel ui-tabs-hide">    
<?php // Display Help & Tips ?>
			<div class="help_title"><?php echo JText::_( COM_CKFORMS_HELP_GENERAL ); ?></div>
            <ul class="ckhelptd">
                <li><?php echo JText::_( COM_CKFORMS_HELP_NAME_BD ); ?></li>
			</ul>
			<div class="help_title"><?php echo JText::_( COM_CKFORMS_HELP_RESULT ); ?></div>
			<ul class="ckhelptd">
                <li><?php echo JText::_( COM_CKFORMS_HELP_SAVE_DATAS ); ?></li>
                <li><?php echo JText::_( COM_CKFORMS_HELP_INCLUDE_DATAS ); ?></li>
                <li><?php echo JText::_( COM_CKFORMS_HELP_CONTENT_AFTER); ?></li>
			</ul>
			<div class="help_title"><?php echo JText::_( COM_CKFORMS_HELP_EMAIL ); ?></div>
			<ul class="ckhelptd">
                <li><?php echo JText::_( COM_CKFORMS_HELP_URL_REDIRECT ); ?></li>
                <li><?php echo JText::_( COM_CKFORMS_CONFIRM_SEND ); ?></li>
                <li><?php echo JText::_( COM_CKFORMS_CONFIRM_CONTENT ); ?></li>             
            </ul>
			<div class="help_title"><?php echo JText::_( COM_CKFORMS_HELP_ADVANCED ); ?></div>
			<ul class="ckhelptd">
                <li><?php echo JText::_( COM_CKFORMS_HELP_CAPTCHA ); ?></li>
                <li><?php echo JText::_( COM_CKFORMS_HELP_FOLDER ); ?></li>
                <li><?php echo JText::_( COM_CKFORMS_HELP_FILE_SIZE ); ?></li>
            </ul>
			<div class="help_title"><?php echo JText::_( COM_CKFORMS_HELP_DATA ); ?></div>
			<ul class="ckhelptd">
                <li><?php echo JText::_( COM_CKFORMS_HELP_DATA_AUTOPUBLISH ); ?></li>
                <li><?php echo JText::_( COM_CKFORMS_HELP_DATA_CONTENT ); ?></li>
            </ul>
<?php ?>            
    </div> 
            
</div>

<input type="hidden" name="option" value="com_ckforms" />
<input type="hidden" name="id" value="<?php echo $this->ckforms->id; ?>" />
<input type="hidden" name="task" value="" />
<input type="hidden" name="controller" value="ckforms" />

</form>

<div class="ckformbottom">
	&copy; Copyright CKforms - Adapted by Sysinfomac from CKForms by Cookex <br> 
    CKForms is Free Software released under the GNU/GPL License. 
</div>