<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ebook extends CI_Controller {

	public function index()
	{		
		$data['title'] = "E-Book | Repository TE Unjani";
		$data['content'] = "main/ebook";
		$this->db->where(['kategori'=>'ebook']);
		$data['files'] = $this->db->get('files')->result();
		$this->load->view('main/template', $data);	
	}	
	public function index2()
	{		
		$data['title'] = "E-Book | Repository TE Unjani";
		
		$data['content'] = "main/detail";
		$this->load->view('main/template', $data);	
	}	
	
}
