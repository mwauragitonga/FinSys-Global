<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Finsys_controller extends CI_Controller
{

	/**
	 *This is the web development for FinSys Company Website
	 *created by U70XDN
	 * 20/10/2019
	 * KAende sana
	 */
	function __construct()
	{
		parent::__construct();
		$this->data ['title'] = "FinSys | Home";
		$this->data ['description'] = "";

		$this->load->model('FinSys_model');
		$this->load->library('upload');
		//$this->load->library("bcrypt");
	}

	public function index()
	{
		$this->load->view('index');

	}

	public function projects()
	{
		$this->load->view('projects');
	}

	public function about()
	{
		$this->load->view('about');
	}

	public function blog()
	{
		$this->load->view('blog');
	}

	public function contact()
	{
		$this->load->view('contact');
	}
	public function partnerships()
	{
		$this->load->view('partners');

	}
	public function services()
	{
		$this->load->view('services/services');
	}
	public function networking()
	{
		$this->load->view('services/networking');

	}

	public function cyberSecurity()
	{
		$this->load->view('services/cyberSecurity');

	}

	public function unifiedCommunications()
	{
		$this->load->view('services/unifiedCommunications');

	}

	public function businessApps()
	{
		$this->load->view('services/businessApplications');

	}
	public function consultancy()
	{
		$this->load->view('services/professionalServices');
	}
		public function infosec()
	{
		$this->load->view('services/infosec');
	}
	public function datacentre()
	{
		$this->load->view('services/datacentre');
	}public function cloud()
	{
		$this->load->view('services/cloud');
	}
	public function serviceProvider()
	{
		$this->load->view('services/serviceProvider');
	}
	public function email(){
		//$mail = "info@finsys-group.com";
		$mail = "mwauragitonga12@gmail.com";
		//get form details from user
		$fullname = $this->input->post("fName");
		$email = $this->input->post("email");
		$message = $this->input->post("message");
		$title = "INQUIRY FROM: ";


			//mail configurations
		$this->load->library('email');
		$config['protocol'] = 'smtp';
		$config['smtp_host'] = 'finsys.co.ke';
		$config['smtp_port'] = '465';
		$config['smtp_user'] = 'comms@finsys.co.ke';
		$config['smtp_pass'] = 'K0Junga$';
		$config['smtp_crypto'] = 'ssl';
		$config['charset'] = 'iso-8859-1';
		$config['wordwrap'] = TRUE;
		$this->email->initialize($config);
		$this->email->set_newline("\r\n");
		$this->email->set_mailtype("html");
		$this->email->from($email);
		$this->email->to($mail);
		$this->email->subject($title. " ". $fullname);
		$this->email->message($message);

		try {
			$this->email->send();
			$message= 'Email Sent, We will be in touch ASAP.';
			$data= array(
				'message'=>$message
			);
			$this->load->view('contact.php', $data);
		} catch (Exception $e) {
			$message= 'Email not sent! Please try again.';
			$data= array(
				'message'=>$message
			);
			$this->load->view('contact.php', $data);
		}
	}
}
