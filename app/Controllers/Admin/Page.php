<?php
	
	namespace App\Controllers\Admin;

	use App\Core\Controller;
	use App\Liblaries\Sesion;

	Class Page extends Controller
	{
		public function index()
		{
			Sesion::cekBelum();

			view('home-admin', [
				'page' => 'admin/about',
			]);
		}

		public function page($page)
		{
			Sesion::cekBelum();
			
			view('home-admin', [
				'page' => 'admin/' . $page,
			]);	
		}
	}