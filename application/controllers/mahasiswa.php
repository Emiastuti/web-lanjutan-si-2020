<?php
 

class mahasiswa extends CI_controller{

	public function __construct()
	{
		parent::__construct();

		$this->load->model('m_mahasiswa');

		if(!$this->session->userdata('nama_pengguna')){
			redirect('login/index');
		}
	}


	public function index($url_nim ='',$url_jur ='')
	{
//	   $data['tbl_mahasiswa'] = $this->db->get('mahasiswa')->result();

	     $data['tbl_mahasiswa'] = $this->m_mahasiswa->getAll();

	     $this->load->view('template/header');


		$this->load->view('mahasiswa/v_index',$data);
	}
	public function jurusan()
	{
		echo 'd3sistem informasi';
	}
	
	
		public function tambah()
    {
    	$this->load->view('template/header');
	   $this->load->view('mahasiswa/v_tambah');
	}
	public function simpan_data()
	{
		$data = [
			'Nim'=> $this->input->post('nim'),
			'Nama'=> $this->input->post('nama'),
			'Alamat'=> $this->input->post('alamat')
		];
		$this->m_mahasiswa->create($data);
		redirect('mahasiswa/index','refresh');

	}
	public function hapus($input_nim){
	//	echo $input_Nim;
		$this->m_mahasiswa->delete ($input_nim);
		redirect('mahasiswa/index');
	}
	public function edit($input_nim)
	{
		$this->load->view('template/header');
		//ambil data dari nim imput
		$data['data_nim'] = $this->m_mahasiswa->getWhere($input_nim);
		return $this->load->view('mahasiswa/v_edit',$data);
	}
	public function update(){
		
			$Nim = $this->input->post('nim');
			$Nama = $this->input->post('nama');
			$Alamat = $this->input->post('alamat');
 
			$data = array(
				'nim'      => $Nim,
				'nama'     => $Nama,
				'alamat'   => $Alamat,
			);

			$where = array(
				'nim' => $Nim);

		$this->m_mahasiswa->update($where,$data,'mahasiswa');
		redirect('mahasiswa/index');

	}

}
