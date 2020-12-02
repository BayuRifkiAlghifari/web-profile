<?php
	
	namespace App\Controllers;

	use App\Core\Controller;
	use App\Liblaries\Email;
	use App\Liblaries\Upload;
	use App\Models\Faqs;

	Class Home extends Controller
	{
		public function index()
		{
			// view() untuk load view
			// parent::post('nama')
			// parent::all()
			// parent::post_all()
			// parent::get_all()
			// parent::get('nama')
			// parent::sess(nama)
			// parent::set_session(array)

			$data['app_name'] = 'Welcome';

			view('home', $data);
		}

		/**
		* Send email example
		*/
		public function email()
		{
			// HTML ONLY LOAD
			$out = view_html_only('home', ['app_name' => 'GGWP']);

			Email::host('zonaseller.sudamiskin.com');
			Email::username('test@zonaseller.sudamiskin.com');
			Email::password('@Cimahi123');
			Email::from(['test@zonaseller.sudamiskin.com', 'GGWP']);
			Email::to(['bayurifkialgh@gmail.com', 'GGWP']);
			// Email::reply_to(['test@zonaseller.sudamiskin.com', 'Balas']);
			Email::subject('GGWP');
			Email::body($out);
			Email::send();
		}

		/**
		* 
		* Query builder
		* ORM database example
		* 
		*/
		public function orm()
		{
			$model 	= new Faqs;
			$exe 	= $model->select('*')->limit(1)->get();
			$all 	= $model->all();
			var_dump($exe);
		}

		public function upload_view()
		{
			view('test_upload');
		}

		public function upload_exe()
		{
			Upload::execute('file');
		}
	}