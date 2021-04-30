<?php

class Indek_model extends CI_Model
{
	public function get_data()
	{
		$cars = array(
			array('Volvo', 22, 18, 'Red')
			, array('BMW', 15, 13, 'Blue')
			, array('Saab', 5, 2, 'Black')
			, array('Land Rover', 17, 15, 'White')
			, array('Lamborgini', 10, 14, 'Gold')
			, array('Avanza', 10, 14, 'Silver')
		);

		return $cars;
	}
}