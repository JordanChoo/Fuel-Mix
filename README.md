#Fuel-Mix

Fuel-Mix is a FuelPHP package that allows you to send events to [MixPanel Analytics](http://mixpanel.com/) using their PHP API.

##Getting Started

1. Git clone the package into your deafult Package directory

2. Rename the folder to Mixpanel

3. Copy the mixpanel.php config file into your apps default config 

4. Set the token value to the API token that MixPanel assigned to you

5. have Fun!

##Tutorial
```
$metrics = new Mixpanel\Mixpanel;

$metrics->track('Purchased', array(
  	'item' => 'candy',
		'type' => 'Wonderbar',
		'ip' => \Session::key('session_id');
	));

```