<?php

	function view($view, $data = [])
	{
		// Array key to new variable
		extract($data, EXTR_PREFIX_SAME, "wddx");

		require_once '../app/Views/' . $view . '.php';
	}

	function view_html_only($view, $data = [])
	{
		ob_start();

		view($view, $data);

		return ob_get_clean();
	}

	function alert($alert)
	{
		echo "<script>alert('{$alert}')</script>";
	}

	function load_helper($helper, $data = [])
	{
		// Array key to new variable
		extract($data, EXTR_PREFIX_SAME, "wddx");

		$data 					= [];

		require_once '../app/Helper/' . $helper . '.php';
	}

	function load_config($config, $data = [])
	{
		// Array key to new variable
		extract($data, EXTR_PREFIX_SAME, "wddx");

		$data 					= [];

		require_once '../app/Config/' . $config . '.php';
	}

	function nominal($number)
	{
	    $nominal 	= number_format($number,0,',','.');
	    
	    return $nominal;
	}