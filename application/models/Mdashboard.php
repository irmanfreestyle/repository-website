<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Mdashboard extends CI_Model {
        function getFile() {            
            $this->db->order_by("tgl_upload", "desc");
            return $this->db->get('files')->result();
        }
		
	}
