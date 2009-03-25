<?php defined('SYSPATH') or die('No direct script access.');
/**
 * User model
 *
 * @package    MIS
 * @author     Craig Roberts
 * @license    http://www.gnu.org/licenses/gpl-3.0-standalone.html
 */

class User_Model extends ORM {

	protected $has_and_belongs_to_many = array('groups');
	
	public function unique_key($id = NULL)
	{
		if ( ! empty($id) AND is_string($id) AND ! ctype_digit($id) )
		{
			return 'username';
		}
 	
 		return parent::unique_key($id);

	}

} // End User Model
