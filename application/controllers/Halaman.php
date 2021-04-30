<?php

class Halaman extends CI_Controller
{
	function view()
	{
		$data['judul'] = 'Judul Halaman';
		$data['konten'] = 'HALAMAN INI DIPANGGIL DARI CONTROLLER HALAMAN';

		$this->load->view('hal_view', $data);
	}
}