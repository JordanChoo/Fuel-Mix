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
	public function __construct()
	{
        //Load the config file\
        $config = \Config::load('mixpanel', true);
		//Load the API token from the config file
		$this->token = $config['token'];
        //Load the host URL from the config file
        $this->host = $config['host'];
	}

	public function track($event, $properties = array()) {

        $params = array(
            'event' => $event,
            'properties' => $properties
            );
        

        if (!isset($params['properties']['token'])){
            $params['properties']['token'] = $this->token;
        }
        $url = $this->host . 'track/?data=' . base64_encode(json_encode($params));
        //you still need to run as a background process
        exec("curl '" . $url . "' >/dev/null 2>&1 &"); 
    }

}