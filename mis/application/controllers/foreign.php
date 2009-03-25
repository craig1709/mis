<?php defined('SYSPATH') OR die('No direct access allowed.');
/**
 * Handles intermicronational functions
 *
 * @package MIS
 * @author Craig Roberts
 */

class Foreign_Controller extends Mis_Controller {

	public function index()
	{
		$view = new View('foreign/index');
		
		$views = $this->get_views('foreign');
		foreach ($views as $view_file) {
			$view .= new View($view_file);
		}
		
		$this->template->content = $view;
	}
	
} // End Foreign Controller
