<?php


class Oop extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('mahasiswa_model');
	}
	public function index()
	{
		$data = array(
			'konten' => $this->mahasiswa_model->get_data()
		);
		$this->load->view('cetak_mahasiswa', $data);
	}

}