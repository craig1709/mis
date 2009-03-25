<?php defined('SYSPATH') OR die('No direct access allowed.');
/**
 * Displays the user's Overview page
 *
 * @package MIS
 * @author Craig Roberts
 */

class Overview_Controller extends Mis_Controller {

	public function index()
	{
		$view = new View('overview/index');
		$view->fullname = $this->auth->get_field('fullname');
		print_r($this->auth->get_roles());die();
		$this->template->content = $view;
	}
	
} // End Overview Controller
