<?php
/**
 * ckfield View for CK forms Component
 * 
 * @package    CK.Joomla
 * @subpackage Components
 * @link http://www.cookex.eu
 * @license		GNU/GPL
 */

// Check to ensure this file is included in Joomla!
defined('_JEXEC') or die();

jimport( 'joomla.application.component.view' );

/**
 * ckfield View
 *
 * @package    CK.Joomla
 * @subpackage Components
 */
class CkformsViewCkfield extends JView
{
	/**
	 * display method of ckfield view
	 * @return void
	 **/
	function display($tpl = null)
	{
		//get the field data
		$ckfield 	=& $this->get('Data');
		$isNew  	= ($ckfield->id < 1);
		
		$doc =& JFactory::getDocument();
		$css = '.icon-48-ckform {background:url(../administrator/components/com_ckforms/images/logo-banner.png) no-repeat;}';
   		$doc->addStyleDeclaration($css);
	
		$text = $isNew ? JText::_( COM_CKFORMS_MSG_47 ) : JText::_(COM_CKFORMS_MSG_48 );
		JToolBarHelper::title(JText::_( COM_CKFORMS_MSG_49 ).': <small><small>[ ' . $text.' ]</small></small>' , 'ckform' );
		
		JToolBarHelper::save();
		JToolBarHelper::apply('apply');
		if ($isNew)  {
			JToolBarHelper::cancel();
		} else {
			// for existing items the button is renamed `close`
			JToolBarHelper::cancel( 'cancel', 'Close' );
		}

		JRequest::setVar( 'hidemainmenu', 1 );

		$document =& JFactory::getDocument();

		//$document->addScript(JURI::root(true).'/administrator/components/com_ckforms/js/mootabs.js');
		$document->addScript(JURI::root(true).'/administrator/components/com_ckforms/js/ckforms.js');

		$document->addStyleSheet(JURI::root(true).'/administrator/components/com_ckforms/css/mootabs.css');
		$document->addStyleSheet(JURI::root(true).'/administrator/components/com_ckforms/css/ckforms.css');		
		$document->addCustomTag('<script type="text/javascript" src="'.JURI::root(true).'/administrator/components/com_ckforms/js/mootabs.js"></script>');
		$this->assignRef('ckfield',$ckfield);
		
		$typelist[0]         = JHTML::_('select.option',  '0', '- '.JText::_( 'COM_CKFORMS_SELECT_TYPE' ).' -', 'id', 'cattitle' );
		$typelist[1]         = JHTML::_('select.option',  'text', JText::_( 'COM_CKFORMS_TEXT' ), 'id', 'cattitle' );
		$typelist[2]         = JHTML::_('select.option',  'hidden', JText::_( 'COM_CKFORMS_HIDDEN' ), 'id', 'cattitle' );
		$typelist[3]         = JHTML::_('select.option',  'textarea', JText::_( 'COM_CKFORMS_TEXTAREA' ), 'id', 'cattitle' );
		$typelist[4]         = JHTML::_('select.option',  'checkbox', JText::_( 'COM_CKFORMS_CHECKBOX' ), 'id', 'cattitle' );
		$typelist[5]         = JHTML::_('select.option',  'radiobutton', JText::_( 'COM_CKFORMS_RADIO_BUTTON' ), 'id', 'cattitle' );
		$typelist[6]         = JHTML::_('select.option',  'select', JText::_( 'COM_CKFORMS_SELECT' ), 'id', 'cattitle' );
		$typelist[7]         = JHTML::_('select.option',  'fileupload', JText::_( 'COM_CKFORMS_FILE_UPLOAD' ), 'id', 'cattitle' );
		$typelist[8]         = JHTML::_('select.option',  'button', JText::_( 'COM_CKFORMS_BUTTON' ), 'id', 'cattitle' );
		$typelist[9]         = JHTML::_('select.option',  'fieldsep', JText::_( 'COM_CKFORMS_FIELD_SEPARATOR' ), 'id', 'cattitle' );
		$lists['type']      = JHTML::_('select.genericlist', $typelist, 'typefield', 'onchange="typeFieldChange()" class="inputbox" size="1"','id', 'cattitle', $ckfield->typefield );

      	//-- push data to template
      	$this->assignRef( 'listtypes',   $lists['type']);

		$dateformat[0]       = JHTML::_('select.option',  '0', '- '.JText::_( 'COM_CKFORMS_DEFAULT' ).' -', 'id', 'cattitle' );
		$dateformat[1]         = JHTML::_('select.option',  'US', 'mm/dd/yyyyy', 'id', 'cattitle' );
		$dateformat[2]         = JHTML::_('select.option',  'EUR', 'dd/mm/yyyy', 'id', 'cattitle' );
		$lists['dateformat']      = JHTML::_('select.genericlist', $dateformat, 'd_format', 'class="inputbox" size="1"','id', 'cattitle', $ckfield->d_format );

      	//-- push data to template
      	$this->assignRef( 'dateformat',   $lists['dateformat']);

		$fillwithtext[0]       = JHTML::_('select.option',  'inival', JText::_( 'COM_CKFORMS_INITIAL_VALUE' ), 'id', 'cattitle' );
		$fillwithtext[1]         = JHTML::_('select.option',  'usrname',JText::_( 'COM_CKFORMS_CONNECTED_NAME' ), 'id', 'cattitle' );
		$fillwithtext[2]         = JHTML::_('select.option',  'usrusername',JText::_( 'COM_CKFORMS_CONNECTED_USERNAME' ), 'id', 'cattitle' );
		$fillwithtext[3]         = JHTML::_('select.option',  'usremail',JText::_( 'COM_CKFORMS_CONNECTED_EMAIL' ), 'id', 'cattitle' );
		$lists['fillwithtext']      = JHTML::_('select.genericlist', $fillwithtext, 'fillwith', 'class="inputbox" size="1"','id', 'cattitle', $ckfield->fillwith );

      	//-- push data to template
      	$this->assignRef( 'fillwithtext',   $lists['fillwithtext']);

      	//-- push data to template
      	$this->assignRef( 'dateformat',   $lists['dateformat']);
	  	
		$wraplist[0]         = JHTML::_('select.option',  'default', JText::_( 'COM_CKFORMS_DEFAULT' ), 'id', 'cattitle' );
		$wraplist[1]         = JHTML::_('select.option',  'off', JText::_( 'COM_CKFORMS_OFF' ), 'id', 'cattitle' );
		$wraplist[2]         = JHTML::_('select.option',  'virtual', JText::_( 'COM_CKFORMS_VIRTUAL' ), 'id', 'cattitle' );
		$wraplist[3]         = JHTML::_('select.option',  'physical', JText::_( 'COM_CKFORMS_PHYSICAL' ), 'id', 'cattitle' );
        $lists['wrap']      = JHTML::_('select.genericlist', $wraplist, 't_wrap', 'class="inputbox" size="1"','id', 'cattitle', $ckfield->t_wrap );
		
		$this->assignRef( 'listwrap',   $lists['wrap']);

		$texttypelist[0]         = JHTML::_('select.option',  'text', JText::_( 'COM_CKFORMS_TEXT' ), 'id', 'cattitle' );
		$texttypelist[1]         = JHTML::_('select.option',  'password', JText::_( 'COM_CKFORMS_PASSWORD' ), 'id', 'cattitle' );
		$texttypelist[2]         = JHTML::_('select.option',  'email', JText::_( 'COM_CKFORMS_EMAIL' ), 'id', 'cattitle' );
		$texttypelist[3]         = JHTML::_('select.option',  'date', JText::_( 'COM_CKFORMS_DATE' ), 'id', 'cattitle' );
		$texttypelist[4]         = JHTML::_('select.option',  'number', JText::_( 'COM_CKFORMS_NUMBER' ), 'id', 'cattitle' );
		$texttypelist[5]         = JHTML::_('select.option',  'url', JText::_( 'COM_CKFORMS_URL' ), 'id', 'cattitle' );
        $lists['texttype']      = JHTML::_('select.genericlist', $texttypelist, 't_texttype', 'onchange="typeFieldTextChange()" class="inputbox" size="1"','id', 'cattitle', $ckfield->t_texttype );
		
		$this->assignRef( 'texttype',   $lists['texttype']);
 
		$buttontypelist[0]         = JHTML::_('select.option',  'submit', JText::_( 'COM_CKFORMS_SUBMIT' ), 'id', 'cattitle' );
		$buttontypelist[1]         = JHTML::_('select.option',  'reset', JText::_( 'COM_CKFORMS_RESET' ), 'id', 'cattitle' );
 		$lists['buttontype']      = JHTML::_('select.genericlist', $buttontypelist, 't_typeBT', 'class="inputbox" size="1"','id', 'cattitle', $ckfield->t_typeBT );
		
		$this->assignRef( 'listbuttontype',   $lists['buttontype']);
		
		$fid = JRequest::getVar( 'fid', -1 );
		$this->assignRef('fid',$fid);
		
		parent::display($tpl);
	}
}
