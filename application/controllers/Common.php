<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Common extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Common_m');
		$this->load->library('Smtpmail');
		define('encription_key',132456.5);
		if (isset($_SESSION['id'])) {
			header('Location: '.base_url().'klconfig/dashboard');
		}

		if($this->config->item("apply_ip") == 1){
		
			$this->load->library('Ip_restrict');
			$this->ip_restrict->restrict();

		}
	}
	public function index()
	{
		$this->load->view('klconfig/index');
	}
	public function login()
	{
		$data = file_get_contents('php://input');
		$json = json_decode($data, true);
		$email = $json['email'];
		$password = md5($json['password']);


		$result=$this->Common_m->getAllDataWithCondition("users","email='$email' AND password='$password'");

		$count = count($result);
		$status = array();
		if($count>0)
		{	
			$name = $result[0]->name;
			$id = $result[0]->id;
			$date = date('Y-m-d H:i:s');
			$sessionData = array(
				'id'  => $id,
				'name'  => $name,
				'email'  => $email
			);
			$this->session->set_userdata($sessionData);
			$status['status']='success';
		}
		else
		{
			$status['status']='failed';
		}
		print_r(json_encode($status));
	}
	public function logout()
	{
		$this->session->unset_userdata('id');
		$this->session->unset_userdata('name');
		$this->session->unset_userdata('email');
		header('Location: '.base_url().'klconfig');
	}
}
