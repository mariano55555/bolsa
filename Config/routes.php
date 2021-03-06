<?php
/**
 * Routes configuration
 *
 * In this file, you set up routes to your controllers and their actions.
 * Routes are very important mechanism that allows you to freely connect
 * different urls to chosen controllers and their actions (functions).
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.Config
 * @since         CakePHP(tm) v 0.2.9
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */
/**
 * Here, we are connecting '/' (base path) to controller called 'Pages',
 * its action called 'display', and we pass a param to select the view file
 * to use (in this case, /app/View/Pages/home.ctp)...
 */
	//Router::connect('/', array('controller' => 'pages', 'action' => 'display', 'home'));
/**
 * ...and connect the rest of 'Pages' controller's urls.
 */
	Router::connect('/pages/*', array('controller' => 'pages', 'action' => 'display'));

	Router::connect('/admin/Dashboard', array('controller' => 'Users', 'action' => 'dashboard', 'admin' => true));
	Router::connect('/admin/dashboard', array('controller' => 'Users', 'action' => 'dashboard', 'admin' => true));


	Router::connect('/', array('controller' => 'Users', 'action' => 'login'));

	Router::connect('/Inicio/*', array('controller' => 'Users', 'action' => 'home'));
	Router::connect('/inicio/*', array('controller' => 'Users', 'action' => 'home'));

	Router::connect('/Empleos', array('controller' => 'Jobs', 'action' => 'index'));
	Router::connect('/empleos', array('controller' => 'Jobs', 'action' => 'index'));
	Router::connect('/Empresas', array('controller' => 'Companies', 'action' => 'index'));
	Router::connect('/empresas', array('controller' => 'Companies', 'action' => 'index'));

	Router::connect('/Empresas/perfil/*', array('controller' => 'Companies', 'action' => 'view'));
	Router::connect('/empresas/perfil/*', array('controller' => 'Companies', 'action' => 'view'));

	Router::connect('/Contactanos/*', array('controller' => 'Jobs', 'action' => 'contactanos'));
	Router::connect('/contactanos/*', array('controller' => 'Jobs', 'action' => 'contactanos'));

	Router::connect('/filtrar/*', array('controller' => 'Jobs', 'action' => 'search'));
	Router::connect('/Filtrar/*', array('controller' => 'Jobs', 'action' => 'search'));

	//Router::connect('inicio', array('controller' => 'Users', 'action' => 'home'));
	

/**
 * Load all plugin routes. See the CakePlugin documentation on
 * how to customize the loading of plugin routes.
 */
	CakePlugin::routes();

/**
 * Load the CakePHP default routes. Only remove this if you do not want to use
 * the built-in default routes.
 */
	require CAKE . 'Config' . DS . 'routes.php';
