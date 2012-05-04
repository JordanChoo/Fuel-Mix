<?php
/**
 * Mixpanel
 *
 * Fuel-Mix allows you to leverage MixPanel's powerful API 
 * tool to allow you to track events for your application
 *
 * @package		MixPanel
 * @version		0.5
 * @author		Jordan Choo
 * @license		MIT License
 * @link		http://github.com/JordanChoo/Fuel-Mix
 */

namespace Mixpanel;

class Mixpanel
{

	public $token;
	public $host = 'http://api.mixpanel.com/';

	//Initialize the package
	public function _init()
	{
		//Load the API token from the config file
		$this->token = \Config::get('token');
		//$this->token = $token_string;
	}

	public static function event($event, $properties = array())
	{
		//Get the event and properties
		$params = array(
				'event' => $event, 
				'properties' => $properties,
			);

		if(!isset($params['properties']['token']))
		{
			$params['properties']['token'] = $this->token;
		}

		//The URL that is to be sent
		$url = $this->host.'track/?data='.base64_encode(json_encode($params));
		//send the data in the background
		exec("curl '".$url."' >/dev/null 2>&1 &");
	}

}