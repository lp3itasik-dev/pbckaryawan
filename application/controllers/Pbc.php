<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pbc extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Models','m');
    }
	/** --Presensi-- **/
	public function index()
	{
		$this->load->view('pbc/presensi/index.php');
	}
  public function Input(){
    $data=array(
      'nama'		  =>	$this->input->post('nama'),
      'jabatan'		=>	$this->input->post('jabatan'),
      'cabang'		=>	$this->input->post('cabang'),
      'ttd'      	=>	$this->input->post('signature'),
      'waktu'	    =>	date('Y-m-d H:i:s'),
    );
    $this->m->Save($data, 'mou');
    $data['nama']=$this->input->post('nama');
    echo $this->input->post('signature');
    $this->load->view('pbc/presensi/sukses.php',$data);
  }
 
}
