<?php

class CModel extends CI_Model
{
	private $tabel = 'c_tabel';

	public function semuaData()
	{
		return $this->db->get($this->tabel)->result();
	}


