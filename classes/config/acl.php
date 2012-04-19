<?php defined('SYSPATH') or die('No direct access allowed.');

return array(
/**
* currently supported drivers are file and redis
* when file driver is selected, specify the path
* when redis driver is selected, specify ip and port
* leave empty for irrelevant elements.
**/
	'driver'	=>	'redis',
	'path'		=>	'/tmp/acl.data',
	'ip'		=>	'',
	'port'		=>	'',
);
