<?php
	
	namespace App\Controllers\Admin;

	use App\Core\Controller;
	use App\Liblaries\Sesion;
	use App\Liblaries\Upload;
	use App\Models\Project as Projects;

	Class Project extends Controller
	{
		public function create()
		{
			Sesion::cekBelum();

			// Data
			$data = parent::post_all();

			// Image
			if($_FILES['file']['name'] !== '')
			{
				$data = array_merge($data, ['project_image' => Upload::execute('file', ['folder' => 'project/', 'max_size' => 500000000])]);
			}

			Projects::create($data);

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
				$data = array_merge($data, ['project_image' => Upload::execute('file', ['folder' => 'project/', 'max_size' => 500000000])]);
			}

			Projects::update(['project_id' => $data['project_id']], $data);

			redirect_back();
		}

		public function delete()
		{
			Sesion::cekBelum();

			// Data
			$data = parent::post_all();

			Projects::delete(['project_id' => $data['project_id']]);

			redirect_back();
		}
	}