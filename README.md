#Fuel-Mix

Fuel-Mix is a FuelPHP package that allows you to send events to [MixPanel Analytics](http://mixpanel.com/) using their PHP API.

##Getting Started

1. Git clone the package into your deafult Package directory.

2. Rename the folder to Mixpanel.

3. Copy the mixpanel.php config file into your apps default config folder.

4. Set the token value to the API token that MixPanel assigned to you.

5. Have fun!

##Tutorial

Here's a quick tutorial on how to use the package inside of your classes.
```
//Instantiate a MixPanel obj
$metrics = new Mixpanel\Mixpanel;

//Send the event and its properties to MixPanel
$metrics->track('Purchased', array(
  	'item' => 'candy',
		'type' => 'Wonderbar',
		'distinct_id' => \Session::key('session_id');
	));

```
**When sending properties make sure to send a unique identifier, whether it's an _IP address_ or a _distinct_id_**