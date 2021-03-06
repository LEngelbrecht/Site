<?php defined('_JEXEC') or die('Restricted access'); ?>

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
		if (form.name.value == "") {
			alert( "<?php echo JText::_( 'COM_CKFORMS_ERROR_NAME', true ); ?>" );
		} else if (form.name.value.match(/[a-zA-Z0-9]*/) != form.name.value) {
			alert( "<?php echo JText::_( 'COM_CKFORMS_ERROR_CARACTERS', true ); ?>" );
		} else if (form.typefield.options[form.typefield.selectedIndex].value == "0") {
			alert( "<?php echo JText::_( 'COM_CKFORMS_ERROR_TYPE', true ); ?>" );		
		} else {
			submitform( pressbutton );
		}
	}

</script>

<form action="index.php" method="post" name="adminForm" id="adminForm">

<input type="hidden" id="t_listHS" name="t_listHS" value="<?php echo $this->ckfield->t_listHS;?>" />
<input type="hidden" id="t_listHRB" name="t_listHRB" value="<?php echo $this->ckfield->t_listHRB;?>" />
 
<div id="tabcontainer">

    <ul class="mootabs_title">
        <li><a href="#fragment-1" class="active"><?php echo JText::_('COM_CKFORMS_GENERAL'); ?></a></li>
        <li><a href="#fragment-2"><?php echo JText::_('COM_CKFORMS_LAYOUT'); ?></a></li>
        <li><a href="#fragment-3"><?php echo JText::_('COM_CKFORMS_ADVANCED'); ?></a></li>
        <li><a href="#fragment-4"><?php echo JText::_('COM_CKFORMS_HELP'); ?></a></li>
    </ul>

	<div id="fragment-1" class="mootabs_panel active"> 

		<table class="admintable ckadmintable"> 
		<tr>
			<td class="key">
				<label for="title"><?php echo JText::_('COM_CKFORMS_NAME'); ?></label>
			</td>
			<td class="value">
				<input class="normalField" type="text" name="name" id="name" maxlength="50" value="<?php echo $this->ckfield->name;?>" />
                <img class="ckform_tooltip ckform_tooltipcss" src="<?php echo JURI::root(true).'/administrator/components/com_ckforms/'; ?>images/help.png" title="<?php echo JText::_( 'COM_CKFORMS_ONLY_CHARACTERS' ); ?>" />
			</td>            
		</tr>
		<tr>
			<td class="key">
				<label for="title"><?php echo JText::_('COM_CKFORMS_LABEL'); ?></label>
			</td>
			<td class="value">
				<input class="normalField" type="text" name="label" id="label" maxlength="250" value="<?php echo $this->ckfield->label;?>" />
			</td>
		</tr>        
        <tr>
			<td class="key">
				<label for="title"><?php echo JText::_('COM_CKFORMS_PUBLISHED'); ?></label>
			</td>
            <td class="value">
            <?php
                echo JHTML::_('select.booleanlist',  'COM_CKFORMS_PUBLISHED', '', $this->ckfield->published);  
            ?>
            </td>        
        </tr>
                        
        <tr>
			<td class="key">
				<label for="title"><?php echo JText::_('COM_CKFORMS_TYPE'); ?></label>
			</td>
            <td class="value">
            	<?php echo $this->listtypes; ?>
            </td>        
        </tr>        
		</table>
            
        <table class="admintable ckadmintable" >    
		<tr id="mandatory_row">
        	<td class="key"><label for="mandatory"><?php echo JText::_('COM_CKFORMS_REQUIRED'); ?></label></td>
			<td class="value"><input name="mandatory" id="mandatory" type="checkbox" value="1" <?php if ($this->ckfield->mandatory == '1') { ?> checked <?php } ?> /></td>
		</tr> 
		<tr id="readonly_row">
        	<td class="key">
				<label for="readonly"><?php echo JText::_('COM_CKFORMS_READ_ONLY'); ?></label>
			</td>
			<td class="value">
				<input name="readonly" id="readonly" type="checkbox" value="1" <?php if ($this->ckfield->readonly == '1') { ?> checked <?php } ?> />
			</td>
		</tr> 

		<tr id="custominfo_row">
			<td class="key">
				<label for="title"><?php echo JText::_('COM_CKFORMS_TIPS_TEXT'); ?></label>
			</td>
			<td class="value">
				<input type="text" class="longfield" name="custominfo" id="custominfo" maxlength="500" value="<?php echo $this->ckfield->custominfo;?>" />
                <img class="ckform_tooltip ckform_tooltipcss" src="<?php echo JURI::root(true).'/administrator/components/com_ckforms/'; ?>images/help.png" title="<?php echo JText::_("COM_CKFORMS_TIPS_TEXT_DESC"); ?>" />
			</td>
		</tr>        

		<tr id="customerror_row">
			<td class="key">
				<label for="title">
					<?php echo JText::_( 'COM_CKFORMS_CUSTOM_ERROR' ); ?>
				</label>
			</td>
			<td class="value">
				<input  class="longfield" type="text" name="customerror" id="customerror" maxlength="500" value="<?php echo $this->ckfield->customerror;?>" />
			</td>
		</tr>        
        </table>
            
        <table class="admintable ckadmintable" id="ckf_length">
        <tr>
			<td class="key">
				<label for="title">
					<?php echo JText::_( 'COM_CKFORMS_MAX_LENGTH' ); ?>
				</label>
			</td>
			<td class="value">
				<input name="t_maxchar" type="text" id="t_maxchar" value="<?php if (Isset($this->ckfield->t_maxchar)) echo $this->ckfield->t_maxchar;?>" maxlength="5" />
			</td>
		</tr>
 		<tr>
			<td class="key">
				<label for="title">
					<?php echo JText::_( 'COM_CKFORMS_MIN_LENGTH' ); ?>
				</label>
			</td>
			<td class="value">
				<input name="t_minchar" type="text" id="t_minchar" value="<?php if (Isset($this->ckfield->t_minchar)) echo $this->ckfield->t_minchar;?>" maxlength="5" />
			</td>
		</tr>
        </table>
        
        <?php // FORM - TEXT ?>
        <table class="admintable ckadmintable" id="ckf_text">
		<tr>
			<td class="key">
				<label for="title">
					<?php echo JText::_( 'COM_CKFORMS_INITIAL_VALUE' ); ?>
				</label>
			</td>
			<td class="value">
				<input class="longfield" type="text" name="t_initvalueT" id="t_initvalueT" value="<?php if (Isset($this->ckfield->t_initvalueT)) echo $this->ckfield->t_initvalueT;?>" />
			</td>
		</tr>
        
        <tr>
			<td class="key">
				<label for="title">
					<?php echo JText::_( 'COM_CKFORMS_TEXT_TYPE' ); ?>
				</label>
			</td>
            <td class="value">
            <?php
                echo $this->texttype;
            ?>
            </td>        
        </tr> 
               
        <tr id="tfillwithtext_row">
			<td class="key">
				<label for="fillwith">
					<?php echo JText::_( 'COM_CKFORMS_FILL_FIELD' ); ?>
				</label>
			</td>
            <td class="value">
            <?php
                echo $this->fillwithtext;
            ?>
            </td>        
        </tr>  
               
        <tr id="tdateformat_row">
			<td class="key">
				<label for="dateformat">
					<?php echo JText::_( 'COM_CKFORMS_DATE_FORMAT' ); ?>
				</label>
			</td>
            <td class="value">
            <?php
                echo $this->dateformat;
            ?>
            </td>        
        </tr>  
		
		<tr id="tdateday_row">
			<td class="key">
				<label for="d_daydate">
					<?php echo JText::_( 'COM_CKFORMS_DAY_DATE' ); ?>
				</label>
			</td>
			<td class="value">
				<input name="d_daydate" id="d_daydate" type="checkbox" value="1" <?php if ($this->ckfield->d_daydate == '1') { ?> checked <?php } ?> />
			</td>
		</tr> 
                                
        </table>
        
        <?php // FORM - HIDDEN ?>
        <table class="admintable ckadmintable" id="ckf_hidden">
		<tr id="filluid_row">
			<td class="key">
				<label for="t_filluid">
					<?php echo JText::_( 'COM_CKFORMS_ADD_UNIQUE_ID' ); ?>
				</label>
			</td>
			<td class="value">
				<input name="t_filluid" id="t_filluid" type="checkbox" value="1" <?php if ($this->ckfield->t_filluid == '1') { ?> checked <?php } ?> />
			</td>
		</tr> 
		<tr>
			<td class="key">
				<label for="t_initvalueH">
					<?php echo JText::_( 'COM_CKFORMS_VALUE' ); ?>
				</label>
			</td>
			<td class="value">
				<input class="field300" type="text" name="t_initvalueH" id="t_initvalueH" value="<?php if (Isset($this->ckfield->t_initvalueH)) echo $this->ckfield->t_initvalueH;?>" />
			</td>
		</tr>                   
        </table>
            
        <?php // FORM - TEXTAREA ?>
        <table class="admintable ckadmintable" id="ckf_textarea">
		<tr>
			<td class="key">
				<label for="title">
					<?php echo JText::_( 'COM_CKFORMS_INITIAL_VALUE' ); ?>
				</label>
			</td>
			<td class="value">
				<input class="field300" type="text" name="t_initvalueTA" id="t_initvalueTA" value="<?php if (Isset($this->ckfield->t_initvalueTA)) echo $this->ckfield->t_initvalueTA;?>" />
			</td>
		</tr>
		<tr>
			<td class="key">
				<label for="mandatory">
					<?php echo JText::_( 'COM_CKFORMS_HTML_EDITOR' ); ?>
				</label>
			</td>
			<td class="value">
				<input name="t_HTMLEditor" id="t_HTMLEditor" type="checkbox" value="1" <?php if (Isset($this->ckfield->t_HTMLEditor)) { if ($this->ckfield->t_HTMLEditor == '1') { ?> checked <?php }} ?>/>
			</td>
		</tr>
                 
 		<tr>
			<td class="key">
				<label for="title">
					<?php echo JText::_( 'COM_CKFORMS_COLUMNS' ); ?>
				</label>
			</td>
			<td class="value">
				<input name="t_columns" type="text" id="t_columns" value="<?php if (Isset($this->ckfield->t_columns)) echo $this->ckfield->t_columns;?>" maxlength="5" />
			</td>
		</tr>
 		<tr>
			<td class="key">
				<label for="title">
					<?php echo JText::_( 'COM_CKFORMS_ROWS' ); ?>
				</label>
			</td>
			<td class="value">
				<input name="t_rows" type="text" id="t_rows" value="<?php if (Isset($this->ckfield->t_rows)) echo $this->ckfield->t_rows;?>"  maxlength="5" />
			</td>
		</tr>
        <tr>
			<td class="key">
				<label for="title">
					<?php echo JText::_( 'COM_CKFORMS_WRAP' ); ?>
				</label>
			</td>
            <td class="value">
            <?php
                echo $this->listwrap;
            ?>
            </td>        
        </tr>                                             
        </table>
                
        <?php // FORM - CHECKBOX ?>
        <table class="admintable ckadmintable" id="ckf_checkbox">
		<tr>
			<td class="key">
				<label for="title">
					<?php echo JText::_( 'COM_CKFORMS_VALUE' ); ?>
				</label>
			</td>
			<td class="value">
				<input class="field300" type="text" name="t_initvalueCB" id="t_initvalueCB" value="<?php if (Isset($this->ckfield->t_initvalueCB)) echo $this->ckfield->t_initvalueCB;?>" />
			</td>
		</tr>                   
		<tr>
			<td class="key">
				<label for="title">
					<?php echo JText::_( 'COM_CKFORMS_CHECKED' ); ?>
				</label>
			</td>
			<td class="value">
				<input name="t_checkedCB" id="t_checkedCB" type="checkbox" value="1" <?php if (Isset($this->ckfield->t_checkedCB)) { if ($this->ckfield->t_checkedCB == '1') { ?> checked <?php }} ?>/>
			</td>
		</tr>  
        </table>
        
        <?php // FORM - RADIOBUTTON ?>
        <table class="admintable ckadmintable" id="ckf_radiobutton">
        <tr>
			<td class="key">
				<label for="title">
					<?php echo JText::_( 'COM_CKFORMS_DISPLAY' ); ?>
				</label>
			</td>
           <td colspan="3">
            <?php
			
			$name = 't_displayRB';
			$attribs = null;
			$selected = $this->ckfield->t_displayRB ? $this->ckfield->t_displayRB : 'INL';
			$id=false;
			$disable = false;
			
			$inl = new stdClass();
			$inl->text = JText::_( 'COM_CKFORMS_IN_LINE' );
			$inl->value = 'INL';
			$lst = new stdClass();
			$lst->text = JText::_( 'COM_CKFORMS_AS_LIST' );
			$lst->value = 'LST';
			
			$arr = array( $inl, $lst );    
			
				echo JHTML::_('select.radiolist',  $arr, $name, $attribs, 'value', 'text', $selected, $id );  
            ?>
            </td>        
        </tr>  
   		<tr>
			<td class="key">
				<label for="title">
					<?php echo JText::_( 'COM_CKFORMS_VALUE' ); ?>
				</label>
			</td>
			<td width="360px">
				<input class="field300" type="text" name="t_valueRB" id="t_valueRB" value="" />
			</td>
			<td width="75" align="right">
				<label for="title">
					<?php echo JText::_( 'COM_CKFORMS_DEFAULT' ); ?>
				</label>
			</td>
			<td>
				<input name="t_defaultRB" id="t_defaultRB" type="checkbox" value="1" />
			</td>
		</tr> 
		<tr>
			<td class="key">
				<label for="title">
					<?php echo JText::_( 'COM_CKFORMS_LABEL' ); ?>
				</label>
			</td>
			<td>
				<input class="field300" type="text" name="t_labelRB" id="t_labelRB" value="" />
			</td>
			<td colspan="2">
            	<input name="add" onclick="addValueToList('t_listRB','t_listHRB','t_valueRB','t_labelRB','t_defaultRB');" type="button" value="Ajouter" />
                &nbsp;<input onclick="resetValues('t_valueRB','t_labelRB','t_defaultRB');" name="reset" type="button" value="Annuler" />
			</td>
		</tr>  
		<tr>
			<td class="key">
				<label for="title">
					<?php echo JText::_( 'COM_CKFORMS_CHECKBOX_LIST' ); ?>
				</label>
			</td>
			<td>
            	<select class="field300" id="t_listRB" name="t_listRB" size="3" multiple onchange="editValueList('t_listRB','t_valueRB','t_labelRB','t_defaultRB')">
  				</select>
			</td>
			<td colspan="2">
                <input onclick="removeOptions('t_listRB','t_listHRB','t_valueRB','t_labelRB','t_defaultRB');" name="del" type="button" value="Effacer" />
			</td>
		</tr>                   
        </table>
                    
        <?php // FORM - SELECT ?>
        <table class="admintable ckadmintable" id="ckf_select">
		<tr>
			<td class="key">
				<label for="title">
					<?php echo JText::_( 'COM_CKFORMS_MULTIPLE_SELECTION' ); ?>
				</label>
			</td>
			<td colspan="3">
				<input name="t_multipleS" id="t_multipleS" type="checkbox" value="1" <?php if (Isset($this->ckfield->t_multipleS)) { if ($this->ckfield->t_multipleS == '1') { ?> checked <?php }} ?>/>
			</td>
		</tr>  
		<tr>
			<td class="key">
				<label for="title">
					<?php echo JText::_( 'COM_CKFORMS_HEIGHT' ); ?>
				</label>
			</td>
			<td>
				<input type="text" name="t_heightS" id="t_heightS" value="<?php if (Isset($this->ckfield->t_heightS)) echo $this->ckfield->t_heightS; ?>" />
			</td>
            <td colspan="2">
            </td>
		</tr>                   
    
		<tr>
			<td class="key">
				<label for="title">
					<?php echo JText::_( 'COM_CKFORMS_VALUE' ); ?>
				</label>
			</td>
			<td width="360px">
				<input class="field300" type="text" name="t_valueS" id="t_valueS" value="" />
			</td>
			<td align="right"  width="75">
				<label for="title">
					<?php echo JText::_( 'COM_CKFORMS_Selected' ); ?>
				</label>
			</td>
			<td>
				<input name="t_defaultS" id="t_defaultS" type="checkbox" value="1" />
			</td>
		</tr> 
		<tr>
			<td class="key">
				<label for="title">
					<?php echo JText::_( 'COM_CKFORMS_LABEL' ); ?>
				</label>
			</td>
			<td>
				<input class="field300" type="text" name="t_labelS" id="t_labelS" value="" />
			</td>
			<td colspan="2">
            	<input name="add" onclick="addValueToList('t_listS','t_listHS','t_valueS','t_labelS','t_defaultS');" type="button" value="Ajouter" />
                &nbsp;<input onclick="resetValues('t_valueS','t_labelS','t_defaultS');" name="reset" type="button" value="Annuler" />
			</td>
            
		</tr>           
		<tr>
			<td class="key">
				<label for="title">
					<?php echo JText::_( 'COM_CKFORMS_CHECKBOX_LIST' ); ?>
				</label>
			</td>
			<td>
            	<select class="field300" id="t_listS" name="t_listS" size="3" multiple onchange="editValueList('t_listS','t_valueS','t_labelS','t_defaultS')">
  				</select>
			</td>
			<td colspan="2">
            	<input onclick="removeOptions('t_listS','t_listHS','t_valueS','t_labelS','t_defaultS');" name="del" type="button" value="Effacer" />
			</td>
		</tr>                   
        </table>
                    
        
        <?php // FORM - FILEUPLOAD ?>
        <table class="admintable ckadmintable" id="ckf_fileupload">
                 
        </table>
                    
        <?php // FORM - Button ?>
        <table class="admintable ckadmintable" id="ckf_button">
        <tr>
			<td class="key">
				<label for="title">
					<?php echo JText::_( 'COM_CKFORMS_TYPE' ); ?>
				</label>
			</td>
            <td>
            <?php
                echo $this->listbuttontype;
            ?>
            </td>        
        </tr>                                             
        </table>
        
        <?php // FORM - FIELD SEPARATOR ?>
        <table class="admintable ckadmintable" id="ckf_fieldsep">
		<tr id="filluid_row">
			<td class="key">
				<label for="t_noborderFS">
					<?php echo JText::_( 'COM_CKFORMS_NO_BORDER' ); ?>
				</label>
			</td>
			<td>
				<input name="t_noborderFS" id="t_noborderFS" type="checkbox" value="1" <?php if ($this->ckfield->t_noborderFS == '1') { ?> checked <?php } ?> />
			</td>
		</tr> 
    	</table>         
    
    </div> 

	<div id="fragment-2" class="mootabs_panel">
        <table class="admintable ckadmintable">
		<tr>
			<td class="key">
				<label for="title">
					<?php echo JText::_( 'COM_CKFORMS_CSS_LABEL' ); ?>
				</label>
			</td>
			<td class="value">
				<input class="normalField" type="text" name="labelCSSclass" id="labelCSSclass" maxlength="50" value="<?php echo $this->ckfield->labelCSSclass;?>" />
			</td>
		</tr>   
		<tr>
			<td class="key">
				<label for="title">
					<?php echo JText::_( 'COM_CKFORMS_CSS_FIELD' ); ?>
				</label>
			</td>
			<td class="value">
				<input class="normalField" type="text" name="fieldCSSclass" id="fieldCSSclass" maxlength="50" value="<?php echo $this->ckfield->fieldCSSclass;?>" />
			</td>
		</tr>   
		<tr>
			<td class="key">
				<label for="title">
					<?php echo JText::_( 'COM_CKFORMS_CSS_CUSTOM_TEXT' ); ?>
				</label>
			</td>
			<td class="value">
				<input class="normalField" type="text" name="customtextCSSclass" id="customtextCSSclass" maxlength="50" value="<?php echo $this->ckfield->customtextCSSclass;?>" />
			</td>
		</tr>   
        </table>
    </div> 

	<div id="fragment-3" class="mootabs_panel">
        <table class="admintable ckadmintable">
            
		<tr>
			<td class="key" nowrap="nowrap">
				<label for="title">
					<?php echo JText::_( 'COM_CKFORMS_FRONTEND_DISPLAY' ); ?>
				</label>
			</td>
			<td class="value">
			<?php 
                echo JHTML::_('select.booleanlist',  'frontdisplay', '', $this->ckfield->frontdisplay);  
            ?>
			</td>
		</tr>
        
        <tr><td colspan="2"><hr /></td></tr>
        
		<tr>
			<td class="key">
				<label for="textseparator">
					<?php echo JText::_( 'COM_CKFORMS_CUSTOM_TEXT' ); ?>
				</label>
			</td>
           	<td class="value">
            <?php		
                $editorDesc = JFactory::getEditor();
                echo $editorDesc->display('customtext',$this->ckfield->customtext, 600, 150, 10, 10);  
            ?>
            </td>
		</tr>                   
        </table>   
    </div>               

	<div id="fragment-4" class="mootabs_panel">    
<?php // Display Help & Tips ?>
            <ul class="ckhelptd">
                <li><?php echo JText::_( 'COM_CKFORMS_ONLY_CHARACTERS' ); ?></li>
                <li><?php echo JText::_( 'COM_CKFORMS_TIPS_TEXT_DESC' ); ?></li>
            </ul>
<?php ?>            
    </div> 

</div>

<input type="hidden" name="option" value="com_ckforms" />
<input type="hidden" name="id" value="<?php echo $this->ckfield->id; ?>" />
<input type="hidden" name="fid" value="<?php echo $this->fid; ?>" />
<input type="hidden" name="ordering" value="<?php echo $this->ckfield->ordering; ?>" />
<input type="hidden" name="task" value="" />
<input type="hidden" name="controller" value="ckfields" />

</form>

<div class="ckformbottom">
	&copy; Copyright CKforms - Adapted by Sysinfomac from CKForms by Cookex <br> 
    CKForms is Free Software released under the GNU/GPL License. 
</div>