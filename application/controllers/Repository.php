<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Repository extends CI_Controller {

	public function index()
	{		
		$data['title'] = "Repository | Repository TE Unjani";
		$data['content'] = "main/repository";		
		$data['files'] = $this->db->query("select * from files where kategori = 'jurnal' or kategori = 'skripsi'")->result();
		$this->load->view('main/template', $data);	
	}	
	
}
