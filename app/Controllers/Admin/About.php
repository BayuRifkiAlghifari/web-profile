<?php
	
	namespace App\Controllers\Admin;

	use App\Core\Controller;
	use App\Liblaries\Sesion;
	use App\Liblaries\Upload;
	use App\Models\About as Abouts;

	Class About extends Controller
	{
		public function create()
		{
			Sesion::cekBelum();

			// Data
			$data = parent::post_all();

			// Image
			if($_FILES['file']['name'] !== '')
			{
				$data = array_merge($data, ['about_image' => Upload::execute('file', ['folder' => 'about/', 'max_size' => 500000000])]);
			}

			Abouts::create($data);

			redirect_back();
		}

		public function update()
		{
			Sesion::cekBelum();

			// Data
			$data = parent::post_all();

			// Image
			if($_FILES['file']['name'] !== '')
			{
				$data = array_merge($data, ['about_image' => Upload::execute('file', ['folder' => 'about/', 'max_size' => 500000000])]);
			}

			Abouts::update(['about_id' => $data['about_id']], $data);

			redirect_back();
		}

		public function delete()
		{
			Sesion::cekBelum();

			// Data
			$data = parent::post_all();

			Abouts::delete(['about_id' => $data['about_id']]);

			redirect_back();
		}
	}