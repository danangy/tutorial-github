<?php

class Mahasiswa_model extends CI_model
{
	public function get_data()
	{
		$mahasiswa = array(
			array(1, 171240000987, 'Abdillah', 'Faqih', 'Laki-Laki')
			, array(2, 171240000988, 'Ahmad', 'Syarif', 'Laki-Laki')
			, array(3, 171240000989, 'Ummi', 'Qulsum', 'Perempuan')
			, array(4, 171240000990, 'Abdu', 'Somat', 'Laki-Laki')

		);
		return $mahasiswa;
	}
}
