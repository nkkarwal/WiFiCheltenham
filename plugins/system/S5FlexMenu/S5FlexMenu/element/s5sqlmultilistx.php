<?php



// Ensure this file is being included by a parent file

defined('_JEXEC') or die( 'Restricted access' );



/**

 * Radio List Element

 *

 * @since      Class available since Release 1.2.0

 */

class JFormFieldS5SQLMultiListX extends JFormFieldList

{

	/**

	 * Element name

	 *

	 * @access	protected

	 * @var		string

	 */

	protected $type = 'S5SQLMultiListX';

	function getOptions() {
		$options = array();

		for($i = 1; $i <= 40; $i++){
			$opt = new stdClass;
			$opt->text = 's5_menu'.$i;
			$opt->value = 's5_menu'.$i;
			$options[] = $opt;
		}

		return $options;
	}
} 

?>