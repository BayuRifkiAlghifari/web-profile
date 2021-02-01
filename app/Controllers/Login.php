<?php
	
	namespace App\Controllers;

	use App\Core\Controller;
	use App\Liblaries\Auth;
	use App\Liblaries\Sesion;

	Class Login extends Controller
	{
		public function index()
		{
			Sesion::cekLogin();

			view('home-admin', [
				'page' => 'admin/login',
			]);
		}

		public function auth()
		{
			Sesion::cekLogin();

			$username = parent::post('username');
			$password = parent::post('password');

			Auth::table('user');
			Auth::user_field('user_name');
			Auth::password_field('user_password');
			
			$exe = Auth::login($username, $password);

			if($exe['status'] > 0)
			{
				redirect(base_url . 'admin/about');
			}
			else
			{
				alert('login failed');

				redirect_back();
			}
		}

		public function logout()
		{
			Sesion::cekLogin();

			Auth::logout();

			redirect(base_url . 'admin/login');
		}
	}