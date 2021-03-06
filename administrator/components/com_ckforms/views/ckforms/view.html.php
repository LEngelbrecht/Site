<?php
/**
 * ckforms View for CK forms Component
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
 * ckforms View
 *
 * @package    CK.Joomla
 * @subpackage Components
 */
class CkformsViewCkforms extends JView
{
	/**
	 * ckforms view display method
	 * @return void
	 **/
	function display($tpl = null)
	{
		$doc =& JFactory::getDocument();
		$css = '.icon-48-ckform {background:url(../administrator/components/com_ckforms/images/logo-banner.png) no-repeat;}';
   		$doc->addStyleDeclaration($css);
	
		$document =& JFactory::getDocument();
		$document->addStyleSheet(JURI::root(true).'/administrator/components/com_ckforms/css/ckforms_min.css');

		JToolBarHelper::title(JText::_( COM_CKFORMS_01 ), 'ckform' );
		JToolBarHelper::publishList();
		JToolBarHelper::unpublishList();
		JToolBarHelper::deleteList();
		JToolBarHelper::editListX();
		JToolBarHelper::addNewX();
		JToolBarHelper::custom('duplicate','copy.png','copy.png', JText::_( COM_CKFORMS_MSG_51 ), true) ;
		JToolBarHelper::custom( 'edit_css', 'css.png', 'css_f2.png', JText::_(COM_CKFORMS_MSG_111), false, false );
		JToolBarHelper::divider();
		JToolBarHelper::custom( 'backup', 'save.png', 'save_f2.png', JText::_(COM_CKFORMS_MSG_112), false, false );
		JToolBarHelper::custom( 'restore', 'save.png', 'save_f2.png', JText::_(COM_CKFORMS_MSG_113), false, false );

		// Get data from the model
		$items = & $this->get( 'Data');
		$pagination =& $this->get('Pagination');

		$this->assignRef('items', $items);
		$this->assignRef('pagination', $pagination);
		
		//$version = new CKFormsVersion();
		//$this->assignRef('version', $version);
		
		parent::display($tpl);
	}
}
