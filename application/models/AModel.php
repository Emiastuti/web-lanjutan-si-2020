<?php 	


class AModel extends CI_model
{
	
	private $tabel = 'tabel_a';

	public function getall
	{
		return $this->db->get($this->tabel)
		            ->result();
	}
		public function create($object)
	{
		return $this->db->insert($this->table,$object);
	}


}
 ?>