<?php
class User_model extends CI_Model{
	public function __construct(){
		$this->load->database();
	}
	/* public function adduser(){
		$data = array(
			'username'=>$this->input->post('username'),
			'department'=>$this->input->post('department'),
			'passwd'=>$this->input->post('passwd'),
			'competence'=>'0'
		);
		return $this->db->insert('user',$data);
	}
	public function delete_user($username){
		return $this->db->delete('user', array('username' => $username));
	}
	public function edit_user($username){
		$this->db->where('username', $username);
		return $this->db->update('user', array('passwd' => $this->input->post('passwd')));
	} 
	public function update_user($username){
		$data = array(
			'department'=>$this->input->post('department'),
			'passwd'=>$this->input->post('passwd'),
			'competence'=>$this->input->post('competence')
		);
		
		$this->db->where('username', $username);
		$this->db->update('user', $data);
	}*/
	public function verify_user()
	{
		$q = $this
		->db
		->where('username', $this->input->post('username'))
		->where('passwd', $this->input->post('passwd'))
		->limit(1)
		->get('user');
	
		if ( $q->num_rows > 0 ) {
			// person has account with us
			return $q->row();
		}
		return false;
	}
	
	/* public function check_old_passwd(){
		$this->db->where('username', $_SESSION['valid_user']);
		$this->db->where('passwd',  $this->input->post('old_passwd'));
		$this->db->limit(1);
		if($this->db->count_all_results('user') == 0){
			return false;
		}
		return true;
	}
	public function change_passwd(){
		$this->db->where('username', $_SESSION['valid_user']);
		return $this->db->update('user', array('passwd' => $this->input->post('new_passwd')));
	}
	public function get_user_list(){
		$query = $this->db->get("user");
		return $query->result_array();
	} */
}