<?php

	use App\Core\Route;

	$app 			= new Route;

	/** 
	* 	@var
	*  
	*	$app->add( 'Alamat web', 
	*				'Class yang ada dicontroller contoh `Ggwp\Anjay` or `Anjay`', 
	*				'Method class `index`', 
	* 				'Method request `post, get, put, delete`');
	*   @param
	*   Ketik '/:id/id2/id3' pada alamat web untuk mengirimkan parameter
	*/

	// Router
	$app->add('/', 						'\Home');
	$app->add('/page/:page', 			'\Home', 			'page');

	$app->add('/admin/login', 			'\Login');
	$app->add('/admin/login/post', 		'\Login', 			'auth', 'post');

	$app->add('/admin', 				'\Admin\Page', 		'index');
	$app->add('/admin/:page', 			'\Admin\Page', 		'page');

	// About
	$app->add('/admin/about/create', 	'\Admin\About', 	'create', 'post');
	$app->add('/admin/about/update', 	'\Admin\About', 	'update', 'post');
	$app->add('/admin/about/delete', 	'\Admin\About', 	'delete', 'delete');

	// Project
	$app->add('/admin/project/create', 	'\Admin\Project', 	'create', 'post');
	$app->add('/admin/project/update', 	'\Admin\Project', 	'update', 'post');
	$app->add('/admin/project/delete', 	'\Admin\Project', 	'delete', 'delete');

	$app->run('/');
