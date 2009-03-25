<?php defined('SYSPATH') OR die('No direct access allowed.');
/**
 * Parent controller
 *
 * @package MIS
 * @author Craig Roberts
 */

class Mis_Controller extends Template_Controller {

	public function __construct()
	{
		parent::__construct();
		
		$this->auth = new Auth;
		
		if (!$this->auth->logged_in() && uri::segment(1) !== 'login') {
			url::redirect('login');
		}
		
		if ($this->auth->logged_in()) {
			$this->template->menu = array
			(
				'Overview' => 'overview',
				'Nation' => array
					(
						'Government' => 'government',
						'Legislation' => 'legislation',
						'Politics' => 'politics',
						'Justice' => 'justice',
						'Citizens' => 'citizens',
						'Foreign Relations' => 'foreign',
						'Economy' => 'economy',
						'Military' => 'military',
						'Culture' => 'culture',
						'Settings' => 'settings'
					),
				'Logout' => 'logout'
			);
			
			$this->template->menu = array
			(
				'Overview' => 'overview',
				'Government' => 'government',
				'Legislation' => 'legislation',
				'Politics' => 'politics',
				'Justice' => 'justice',
				'Citizens' => 'citizens',
				'Foreign Relations' => 'foreign',
				'Economy' => 'economy',
				'Military' => 'military',
				'Culture' => 'culture',
				'Settings' => 'settings',
				'Logout' => 'logout'
			);
		} else {
			$this->template->menu = array
			(
				'Apply' => 'apply',
				'Login' => 'login'
			);
		}
	}

} // End Mis Controller
