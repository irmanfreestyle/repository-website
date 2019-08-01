<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{		
		$data['title'] = "Beranda | Repository TE Unjani";
		$data['content'] = "main/home";
		
		$this->db->order_by("tgl_upload", "desc");
		$data['files'] = $this->db->get('files')->result();
		
		$this->load->view('main/template', $data);	
	}	

	function search() {		
		$keyword = trim($this->input->get('keyword'));
		$data['title'] = 'Pencarian | Repository TE Unjani';
		$data['content'] = 'main/search';		
		$this->db->select('*');
		$this->db->from('files');

		$this->db->like('judul',urldecode(trim($keyword)));
		$this->db->or_like('kata_kunci',urldecode(trim($keyword)));
		$this->db->or_like('tahun_upload',urldecode(trim($keyword)));
		$this->db->or_like('pengarang',urldecode(trim($keyword)));
		$data['files'] = $this->db->get()->result();


		$this->load->view('main/template', $data);	
	}
	
}
