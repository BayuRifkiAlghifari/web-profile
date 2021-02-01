<?php
	
	namespace App\Controllers;

	use App\Core\Controller;

	Class Home extends Controller
	{
		public function index()
		{
			view('home', [
				'page' => 'about',
			]);
		}

		public function page($page)
		{
			view('home', [
				'page' => $page,
			]);
		}
	}