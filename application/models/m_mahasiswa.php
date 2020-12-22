<?php  


class m_mahasiswa extends CI_Model
{
	private $table ='mahasiswa';

	public function getAll()
	{
		return $this->db->get($this->table)
		->result();
	}
	public function create($object)
	{
		return $this->db->insert($this->table,$object);
	}
	public function delete($input_nim)
	{

		$this->db->delete($this->table,['Nim' => $input_nim]);
	}
	public function getWhere($input_nim)
	{
		return $this->db->get_Where($this->table,['Nim' => $input_nim])->row_object();
	}
	public function update($where,$data,$table)
	{
		$this->db->where($where);
		$this->db->update($table,$data);
	}


}
 
