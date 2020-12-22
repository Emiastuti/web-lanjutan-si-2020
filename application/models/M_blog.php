<?php


class M_blog extends CI_Model
{
	
	private $table = 'blog';

	public function getAll()
	{
		return $this->db->get($this->table)->result();
	}
}