<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends MY_Controller {
	function __construct(){
		parent:: __construct();
		$this->load->model('GetModel','fetch');
	}

	public function index()
	{	
		$response=array();
		$response['web']=$this->fetch->getWebProfile('webprofile');
		$response['trainings']=$this->fetch->getInfoByLim('trainings',3);
		$response['feedbacks']=$this->fetch->getInfo('feedbacks');
		$response['clients']=$this->fetch->getInfo('clients');
		// var_dump('<pre>',$response);exit;
		$this->load->view('header',$response);
		$this->load->view('index');
		$this->load->view('footer');
	}

	public function about()
	{
		$response=array();
		$response['web']=$this->fetch->getWebProfile('webprofile');
		$response['clients']=$this->fetch->getInfo('clients');
		$this->load->view('header' , $response);
		$this->load->view('about');
		$this->load->view('footer');
	}

	public function services()
	{
		$response=array();
		$response['web']=$this->fetch->getWebProfile('webprofile');
		$response['clients']=$this->fetch->getInfo('clients');
		$this->load->view('header' , $response);
		$this->load->view('services');
		$this->load->view('footer');
	}

	public function trainings()
	{
		$response=array();
		$response['web']=$this->fetch->getWebProfile('webprofile');
		$response['clients']=$this->fetch->getInfo('clients');
		$response['trainings']=$this->fetch->getInfo('trainings');
		$this->load->view('header' , $response);
		$this->load->view('trainings');
		$this->load->view('footer');
	}

	public function contact()
	{
		$response=array();
		$response['web']=$this->fetch->getWebProfile('webprofile');
		$response['clients']=$this->fetch->getInfo('clients');
		$this->load->view('header' , $response);
		$this->load->view('contact');
		$this->load->view('footer');
	}

	public function privacy()
	{
		$response=array();
		$response['web']=$this->fetch->getWebProfile('webprofile');
		$response['clients']=$this->fetch->getInfo('clients');
		$this->load->view('header' , $response);
		$this->load->view('policies');
		$this->load->view('footer');
	}

	
	public function enquiry(){
		$this->form_validation->set_rules('name', 'Name', 'required');
		$this->form_validation->set_rules('email', 'Email', 'required');
		$this->form_validation->set_rules('message', 'Message', 'required');
		
		if($this->form_validation->run() == true){
			$guest_email=$this->input->post('email');
			$to = $this->fetch->getWebProfile()->email;
			
			$msg ="You have a new enquiry from- \n\r Name:".$this->input->post('name')." \n\r E-mail:".$this->input->post('email')." \n\r  Message:".$this->input->post('message');
			$subject = "Aller - New Enquiry";
			$headers = "From:" . $guest_email;
			// mail($to, $subject, $msg, $headers);
			mail($to, $subject, $msg);
			
			$data = $this->input->post();
			$this->load->model('AddModel','save');
			$status= $this->save->saveInfo($data,'enquiries');

			if($status){
				$this->session->set_flashdata('success','Thank you for sending us a message. Our team will reach out to you shortly.' );
				redirect('/');
			}
			else{
				$this->session->set_flashdata('failed','Something went wrong. Please try again in some time.' );
				redirect('/');
			}
		
		}
		else{
			$this->session->set_flashdata('failed',strip_tags(validation_errors()));
			redirect('/');
		}
	}

}
