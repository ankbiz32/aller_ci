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

	
	public function enquiry()
	{
		// var_dump('<pre>',$_POST);exit;
		// $this->form_validation->set_rules('email', 'E-mail', 'required|min_length[10]|max_length[10]|regex_match[/^[0-9]{10}$/]');
		$this->form_validation->set_rules('name', 'Name', 'required');
		$this->form_validation->set_rules('email', 'E-mail', 'required');
		$this->form_validation->set_rules('message', 'Message', 'required');
		if($this->form_validation->run() == true){
			$data=$this->input->post();
			$data['message']=substr($data['message'],0,300);
			$data['date']=date('Y-m-d');
			$this->load->model('AddModel','save');
			$status= $this->save->saveInfo($data, 'enquiries');
			if($status){
				$this->session->set_flashdata('success','Thank you for contacting us ! We will get back to you soon.' );
				redirect('Home');
			}
			else{
				$this->session->set_flashdata('failed','Error !');
				redirect('Home');
			}
		}
		else{
			$this->session->set_flashdata('failed',strip_tags(trim(validation_errors())));
			redirect('Home');
		} 
	}
	

}
