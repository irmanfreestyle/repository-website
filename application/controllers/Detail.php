<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Detail extends CI_Controller {

	public function index()
	{
		$data['title'] = "Repository TE Unjani";
		$data['content'] = "main/detail";

		$id_file = $this->input->get('id_file');;
		$this->db->where(['id_file'=>$id_file]);
		$data['file'] = $this->db->get('files')->result()[0];
		$data['files'] = $this->db->get('files')->result();
		$data['data_files'] = $this->db->get_where('file_files', ['id_file' => $id_file])->result();

		$this->load->view('main/template', $data);	
	}
	
}
