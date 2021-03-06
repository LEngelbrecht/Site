<?php
/**
 * Ck forms default controller
 * 
 * @package    CK.Joomla
 * @subpackage Components
 * @link http://www.cookex.eu
 * @license		GNU/GPL
 */

jimport('joomla.application.component.controller');

/**
 * Ck forms Component Controller
 *
 * @package	CkForms
 */
class CkformsController extends JController
{
	/**
	 * Method to display the captcha to validate the form
	 *
	 * @access	public
	 */
	function captcha()
	{
		
		

		
		include("components/com_ckforms/captcha/securimage.php");
			
		$document = &JFactory::getDocument();
		$doc = &JDocument::getInstance('raw');
		$document = $doc;
				
		$img = new Securimage();
		//$img->ttf_file = Juri::root(false)."components/com_ckforms/captcha/AHGBold.ttf";
		$bckgrd_img=Juri::root(false)."components/com_ckforms/captcha/bg6.png";
		$dir_img=dirname(__FILE__) ."/captcha/backgrounds/";
		$img->background_directory = $dir_img;
		$img->captcha_type=rand(0,1); // tirage type de captcha
		$img->show();
	}

	function  display()
	{
		$model = $this->getModel('ckforms');
		$model->addHits();
		
		$_SESSION['ck_send_once'.JRequest::getCmd('id')] = "1";
		$_SESSION['ck_cache_page_'.JRequest::getCmd('id')] = md5(JRequest::getURI());
		
		parent::display();
	}

	/**
	 * save a record (and redirect to main page)
	 * and send emails
	 * @return void
	 */
	function send()
	{		
		$model = $this->getModel('ckforms');
		$ckform = $model->getData();		

		if ($ckform->captcha == 1)
		{
			include("components/com_ckforms/captcha/securimage.php");
			
			$img = new Securimage();
			
			$valid = $img->check($_POST['ck_captcha_code']);			
			
			if($valid == false) {
				JError::raiseWarning( 0, JText::_( COM_CKFORMS_ERR_01));
				
				$this->display();
				return false;
			}
		}
		if (isset($_SESSION['ck_send_once'.$ckform->id]))
		{
			unset($_SESSION['ck_send_once'.$ckform->id]);		
		} else {
			JError::raiseWarning( 0, JText::_( COM_CKFORMS_ERR_02 ));
			return false;		
		}

		unset($_SESSION['securimage_code_value']);

		$post = JRequest::get('post', JREQUEST_ALLOWHTML);	
		
		$model->saveData($post);				

		if (isset($_SESSION['ck_cache_page_'.$ckform->id]))
		{
			$cacheid = $_SESSION['ck_cache_page_'.$ckform->id];
			$cache = &JFactory::getCache();
			$cacheresult = $cache->remove($cacheid, 'page'); 
		}
		
		$msg = JText::sprintf(COM_CKFORMS_MSG_01, 1);
		
		if ( isset($ckform->redirecturl) && $ckform->redirecturl != "") {
			
			$params = '';
			
			if ($ckform->redirectdata == 1)
			{
				foreach ($post as $key => $value) {
					$params = $params . '&'. $key.'='.htmlentities($value);
				}
				if (strlen($params) > 0 && strpos($ckform->redirecturl, '?') === false)
				{
					$params = '?'.substr($params, 1); 
				}
			}
			$this->setRedirect($ckform->redirecturl.$params);
			
			
		} else if ((isset($ckform->redirecturl) == false || $ckform->redirecturl == "")
			&& ((isset($ckform->textresult) == false || $ckform->textresult == ""))) {
			$this->setRedirect(JURI::base(), $msg);
		}
		
		JRequest::setVar( 'view', 'ckforms' );
		JRequest::setVar( 'layout', 'message'  );
		
		parent::display();

	}
}
?>
