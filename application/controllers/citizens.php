<?php defined('SYSPATH') OR die('No direct access allowed.');
/**
 * Handles citizen functions
 *
 * @package MIS
 * @author Craig Roberts
 */

class Citizens_Controller extends Mis_Controller {

	public function index()
	{
		$view = new View('citizens/index');
		$this->template->content = $view;
	}
	
} // End Citizens Controller
