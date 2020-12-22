<?php	


class AController extends CI_controler
{
		public function __construct()
	{
		parent::__construct();

		$this->load->model('AModel');
	}


	public function index($url_nim ='',$url_jur ='')
	{
		$this->load->model('AModel');
	}	
	 public function tambahh()
	 {
	 	$this ->load->view('tabel_a/v_tableA')
	 }
	 public function tableA 
		{
		$data = [
			'id_004'=> $this->input->post('id_004'),
			'merek'=> $this->input->post('merek'),
			'jenis'=> $this->input->post('jenis'),
			'stok'=> $this->input->post('stok')
		];
		$this->m_mahasiswa->create($data);
		redirect('mahasiswa/index','refresh');
		print_r($data);
}
}
}