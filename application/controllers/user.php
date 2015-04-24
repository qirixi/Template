<?php
class User extends CI_Controller{
	public function __construct(){
		session_start();
		parent::__construct();
		$this->load->model('user_model');
	}
	public function add_user(){
 		$this->load->helper('url');
		if($_SESSION['is_admin']!=1){
			echo "你所在用户没有权限";
		}
		
		$this->load->helper('form');
		$this->load->library('form_validation');
		
		$data['title'] = 'Add User';
		$data['active_item']='new_user';
		$data['css_list'] = "compiled/new-user.css";
		$this->form_validation->set_rules('username','username','trim|required');
		
		
		if($this->form_validation->run() === FALSE){
			$this->load->view('template/tp_header',$data);
			$this->load->view('template/tp_navbar');
			$this->load->view('template/tp_sidebar',$data);
			$this->load->view('user/add_user');
			$this->load->view('template/tp_footer');
		}
		else{
			if($this->user_model->adduser()!==FALSE){
				redirect('user/display_user_list');
			}
		}
			
		
	}
	public function user_profile(){
		$this->load->helper("url");
		if($_SESSION['is_admin']!=="1"){
			return;
		}
		
		$data['title'] = 'User profile';
		$data['active_item']='user_profile';
		$data['css_list'] = array("compiled/user-profile.css","font/open_sans.css");
		
		
		$this->load->view('template/tp_header',$data);
		$this->load->view('template/tp_navbar');
		$this->load->view('template/tp_sidebar',$data);
		$this->load->view('user/user_profile');
		$this->load->view('template/tp_footer');
	}
	/*
	public function delete_user($username){
		$this->load->helper('url');
		if($_SESSION['is_admin']!=1){
			echo "你所在用户没有权限";
		}
		if($this->user_model->delete_user($username)!==FALSE){
			redirect('user/display_user_list');
		}
	}
	public function edit_user($username){
		$this->load->helper('url');
		if($_SESSION['is_admin']!=1){
			echo "你所在用户没有权限";
		}
		if($this->user_model->edit_user($username)!==FALSE){
			redirect('user/display_user_list');
		}
	} */
	public function login(){
		$this->load->helper('url');
		if(isset($_SESSION['username'])){
			redirect('user/success');
		}
		$this->load->helper('form');
		$this->load->library('form_validation');
		
		$data['title'] = 'Login';
		$data['css_list'] = "compiled/signin.css";
		
		$this->form_validation->set_rules('username','username','trim|required');
		$this->form_validation->set_rules('passwd','password','trim|required|callback_valid_user_check');
		$data['js_list'] = "jquery.cookie.js";
		
		if($this->form_validation->run() === FALSE){
			$this->load->view('template/tp_header',$data);
			$this->load->view('user/signin');
			$this->load->view('template/tp_footer');
		}
		else{
			$user_info=$this->user_model->verify_user();
			if($user_info!==FALSE){
				$_SESSION['is_admin'] = $user_info->competence;
				$_SESSION['valid_user'] = $user_info->username;
				$_SESSION['department'] = $user_info->department;
				if($_SESSION['is_admin'] ==1 ){
					redirect('user/success');
				}else{
					redirect('user/success');
				}
				
			}
		}
	}
	public function logout(){
		$this->load->helper('url');
		if(isset($_SESSION['valid_user'])){
			session_destroy();
		}
		redirect('user/login');
	}
	public function success(){
		$this->load->helper('url');
		
		$data['css_list'] = "compiled/index.css";
		
		$this->load->view('template/tp_header',$data);
		$this->load->view('template/tp_navbar');
		$this->load->view('template/tp_sidebar');
		$this->load->view('template/tp_main_container');
		$this->load->view('template/tp_footer');
	}
	function valid_user_check(){
		if($this->user_model->verify_user()===FALSE){
			$this->form_validation->set_message('valid_user_check', '用户名或密码错误');
			return FALSE;
		}
		return TRUE;
	}
	function check_old_passwd(){
		if($this->user_model->check_old_passwd()===FALSE){
			$this->form_validation->set_message('check_old_passwd', '原密码错误');
			return FALSE;
		}
		return TRUE;
	}
	public function display_user_list(){
		$this->load->helper("url");
		if($_SESSION['is_admin']!=="1"){
			return;
		}
		
		$data['title'] = 'Show user list';
		$data['active_item']='user_list';
		$data['css_list'] = "compiled/user-list.css";
		
		
		$this->load->view('template/tp_header',$data);
		$this->load->view('template/tp_navbar');
		$this->load->view('template/tp_sidebar',$data);
		$this->load->view('user/display_user');
		$this->load->view('template/tp_footer');
	}
	/*
	public function change_passwd(){
		$this->load->helper('url');
		$this->load->helper('form');
		$this->load->library('form_validation');
		
		$data['title'] = 'change password';
		$data['menu_item']="8";
		
		$this->form_validation->set_rules('old_passwd','原密码','trim|required|min_length[5]|max_length[12]||callback_check_old_passwd');
		$this->form_validation->set_rules('new_passwd','新密码','trim|required|min_length[5]|max_length[12]|matches[repeat_new_passwd]');
		$this->form_validation->set_rules('repeat_new_passwd','重复密码','trim|required|min_length[5]|max_length[12]');
		$this->form_validation->set_message('required', '%s不能为空');
		$this->form_validation->set_message('min_length', '%s长度不能小于5');
		$this->form_validation->set_message('max_length', '%s长度不能大于12');
		$this->form_validation->set_message('matches', '前后密码不一致');
		
		if($this->form_validation->run() === FALSE){
			$this->load->view('templates/header',$data);
			$this->load->view('templates/template_user');
			$this->load->view('user/change_passwd');
			$this->load->view('templates/footer');
		}
		else{
			$user_info=$this->user_model->change_passwd();
			if($user_info!==FALSE){
				$this->load->view('templates/header',$data);
				$this->load->view('templates/template_user');
				$this->load->view('user/success');
				$this->load->view('templates/footer');
			}
		}
	} */

}