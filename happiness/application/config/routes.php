<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	http://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There area two reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router what URI segments to use if those provided
| in the URL cannot be matched to a valid route.
|
*/

$route['default_controller'] = "site";
$route['404_override'] = '';
$route['home'] = 'site/home';
$route['imovel-residencial-santo-andre-sp-vitoria-regia-bairro-campestre'] = 'site/localizacao';
$route['projeto-happiness-santo-andre-sp-abc'] = 'site/projeto';
$route['realizacoes-incorporadora-patriani'] = 'site/realizacoes';
$route['apartamento-de-78m2-com-2-suites-lavabo-com-2-vagas-de-garagem'] = 'site/seu_apartamento';
$route['lazer'] = 'site/lazer';
$route['diferenciais-patriani'] = 'site/diferenciais';
$route['fale-conosco'] = 'site/contato';
$route['dados'] = 'site/lazerView';
$route['lazer/(:any)'] = 'site/lazer/$1';
#$route[''] = '';

/* End of file routes.php */
/* Location: ./application/config/routes.php */