<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class All_model extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
		$this->load->database('default');
	}

	private function getConn($conn) {
		if(!is_bool($conn)) {
			return $conn;
		} else {
			return $this->db;
		}
	}

	public function insert($table, $data, $conn = false) {
		$conn = $this->getConn($conn);
		$conn->insert($table, $data);
		return $conn->insert_id();
	}

	public function access_users_login($mobile,$password){
        $data = array('mobile' => $mobile,'password' => md5($password));
		$query=$this->db->where($data);
		$login=$this->db->get('tbl_users');
		if($login!=NULL){
		   return $login->row();
		}
	}

	public function update_blog($data,$userId){
		$this->db->where('id', $userId);
        $this->db->update('tbl_blog', $data);
	}
}
?>