<?php

class Db extends CI_Controller
{
	private function index()
	{
		echo "Hello You";
	}
	public function panggil()
	{
		$this->index();
	}


}
