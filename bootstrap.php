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

//Enable auto-loader to find
Autoloader::add_namespace('MixPanel', __DIR__.'/classes/');

//Get the appropriate files
Autoloader::add_classes(array(
		'Mixpanel\\Mixpanel' => __DIR__.'/classes/mixpanel.php'
	));