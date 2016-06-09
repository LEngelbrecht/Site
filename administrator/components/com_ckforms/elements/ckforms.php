<?php
// No direct access to this file
defined('_JEXEC') or die;
 
// import the list field type
jimport('joomla.form.helper');
JFormHelper::loadFieldClass('list');
 
/**
 * HelloWorld Form Field class for the HelloWorld component
 */
class JFormFieldckforms extends JFormFieldList
{
	/**
	 * The field type.
	 *
	 * @var		string
	 */
	protected $type = 'ckforms';
 
	/**
	 * Method to get a list of options for a list input.
	 *
	 * @return	array		An array of JHtml options.
	 */
	protected function getOptions() 
	{
		$db = JFactory::getDBO();
		$query = $db->getQuery(true);
		$query->select('id,greetings');
		$query->from('#__ckforms');
		$query = 'SELECT a.id, a.name AS text '
		. ' FROM #__ckforms AS a'
		. ' WHERE a.published = 1'
		. ' ORDER BY a.name'
		;
		$db->setQuery( $query );
		$messages = $db->loadObjectList();
		
		$options = array();
		if ($messages)
		{
			foreach($messages as $message) 
			{
				$options[] = JHtml::_('select.option', $message->id, $message->text);
			}
		}
		$options = array_merge(parent::getOptions(), $options);
		return $options;
	}
}
