<?php
defined('BASEPATH') OR exit('No direct script access allowed');


$route['default_controller'] = 'home/login';
// ***** If Route is 'home', redirect to 'home/login'***
$route['home'] = 'home/login';
// ***** If Route is 'home', redirect to 'home/login'***

/*Login*/
$route['login'] = 'home/login';


/*Resetpassword*/
$route['resetpassword'] = 'home/resetpassword';

/*Register*/
$route['register'] = 'home/register';

/*verifypasswordcode*/
$route['verifypasswordcode'] = 'home/verifypasswordcode';

/*newpassword*/
$route['newpassword'] = 'home/newpassword';

/*Custom 404 Routing*/
$route['404'] = 'custom404';
$route['404_override'] = 'custom404';
/********************/





$route['translate_uri_dashes'] = FALSE;
