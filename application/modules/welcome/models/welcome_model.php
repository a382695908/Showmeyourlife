<?php
class Welcome_model extends CI_Model
{
function __construct()
	{
		parent::__construct();
		$this->load->library('ion_auth');
}
	function posting()
	{
	$user = $this->ion_auth->user()->row();
	$data['name'] = $user->username;
	$data['post'] = $this->input->post('posting');
	$this->db->insert('posts', $data);
	}
}