<?php defined('SYSPATH') or die('No direct script access.');
/**
 * Group model
 *
 * @package    MIS
 * @author     Craig Roberts
 * @license    http://www.gnu.org/licenses/gpl-3.0-standalone.html
 */

class Group_Model extends ORM {

	protected $has_and_belongs_to_many = array('users', 'roles');

} // End Group Model
