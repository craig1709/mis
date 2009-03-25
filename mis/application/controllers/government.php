<?php defined('SYSPATH') OR die('No direct access allowed.');
/**
 * Handles government functions
 *
 * @package MIS
 * @author Craig Roberts
 */

class Government_Controller extends Mis_Controller {

	public function index()
	{
		$view = new View('government/index');
		$this->template->content = $view;
	}
	
} // End Government Controller
