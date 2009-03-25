<?php defined('SYSPATH') OR die('No direct access allowed.');
/**
 * Handles login functions
 *
 * @package MIS
 * @author Craig Roberts
 */

class Login_Controller extends Mis_Controller {

	public function index()
	{
		if ($this->auth->logged_in()) {
			url::redirect('overview');
		}
	
		$view = new View('login');
		
		if (isset($_POST['username']) && isset($_POST['password'])) {
			$username = $_POST['username'];
			$password = $_POST['password'];
			
			if ($this->auth->login($username, $password)) {
				url::redirect('overview');
			} else {
				$view->error_message = 'Login failed. Please check your username and password and that you have permission to login.';
			}
		}
	
		$this->template->content = $view;
	}
	
} // End Login Controller
