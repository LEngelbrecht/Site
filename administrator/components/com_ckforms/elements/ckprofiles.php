<?php
// No direct access to this file
defined('_JEXEC') or die;
 
// import the list field type
jimport('joomla.form.helper');
JFormHelper::loadFieldClass('list');
 
/**
 * HelloWorld Form Field class for the HelloWorld component
 */
class JFormFieldCkprofiles extends JFormFieldList
{
	/**
	 * The field type.
	 *
	 * @var		string
	 */
	protected $type = 'ckprofiles';
 
	/**
	 * Method to get a list of options for a list input.
	 *
	 * @return	array		An array of JHtml options.
	 */
	protected function getOptions() 
	{
		$db = JFactory::getDBO();
		$query = "SELECT concat('f',a.id) as id, concat(a.name,' default') AS text "
		. ' FROM #__ckforms AS a'
		. ' WHERE a.published = 1'
		. ' ORDER BY a.name'
		;
		$db->setQuery( $query );
		$forms = $db->loadObjectList( );

		$query = "SELECT concat('p',a.id) as id, a.name AS text "
		. ' FROM #__ckprofiles AS a'
		. ' WHERE a.published = 1'
		. ' ORDER BY a.name'
		;
		$db->setQuery( $query );
		$options = $db->loadObjectList( );
		$messages = array_merge($forms, $options);
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

?>
