<?php defined('SYSPATH') or die('No direct script access.');
/**
 * Role model
 *
 * @package    MIS
 * @author     Craig Roberts
 * @license    http://www.gnu.org/licenses/gpl-3.0-standalone.html
 */

class Role_Model extends ORM {

	protected $has_and_belongs_to_many = array('groups');

} // End Role Model
