<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class adm extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->library('pagination');
        $this->load->model('Models','m');
    }
	function cek_log(){
	    if($this->session->userdata("log")!="lgn-adm"){
	        redirect(base_url()."log");
	    }
	}
	/** --Cek Sidebar Active-- **/
	function sidebar()
	{
	    $this->cek_log();
		$data['dashboard'] = "";
		$data['hasil']  = "";
		$this->session->set_userdata($data);
	}
	/** --Cek Sidebar Active-- **/
	public function index()
	{
		$this->sidebar();
		$data['dashboard']="active";
		$this->session->set_userdata($data);

		$this->load->view('adm/index',$data);
	}
	public function hasil()
	{
		$this->sidebar();
		$data['hasil']="active";
		$this->session->set_userdata($data);

    $select = $this->db->select('*');
    $select = $this->db->order_by('waktu','DESC');
		$data['read'] = $this->m->Get_All('mou',$select);

		$this->load->view('adm/hasil',$data);
	}
  function delete_hasil($id)
	{
		$where=array(
			'id'		=>	$id
		);
		$this->m->Delete($where, 'mou');

    redirect(base_url().'adm/hasil');
	}
	public function cetak($id)
	{
		$this->sidebar();
		$data['hasil']="active";
		$this->session->set_userdata($data);

    $select = $this->db->select('*');
    $select = $this->db->where('id',$id);
		$data['read'] = $this->m->Get_All('mou',$select);

		$this->load->view('adm/cetak',$data);
	}
	public function prodi()
	{
		$this->sidebar();
		$data['hasil']="active";
		$this->session->set_userdata($data);

    $select = $this->db->select('*');
    $select = $this->db->order_by('waktu','DESC');
		$data['read'] = $this->m->Get_All('prodi',$select);

		$this->load->view('adm/prodi',$data);
	}
	function delete_prodi($id)
	{
		$where=array(
			'id'		=>	$id
		);
		$this->m->Delete($where, 'prodi');

    redirect(base_url().'adm/prodi');
	}
	public function cetak_loc($id)
	{
		$this->sidebar();
		$data['hasil']="active";
		$this->session->set_userdata($data);

    $select = $this->db->select('*');
    $select = $this->db->where('id',$id);
		$data['read'] = $this->m->Get_All('prodi',$select);

		$this->load->view('adm/cetak_loc',$data);
	}
}
