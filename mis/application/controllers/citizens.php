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
		
		$views = $this->get_views('citizens');
		foreach ($views as $view_file) {
			$view .= new View($view_file);
		}
		
		$this->template->content = $view;
	}
	
} // End Citizens Controller
