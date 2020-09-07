<?php
defined('BASEPATH') OR exit('No direct script access allowed');


$route['default_controller'] = 'welcome';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
//$route['yourmodule/some-route'] = "yourcontroller/yourmethod";
$route['student/test/(:any)'] = 'student/run/$1';