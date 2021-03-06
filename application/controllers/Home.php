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
		$response['vid']=$this->fetch->getInfo('video');
		$response['projects']=$this->fetch->getInfoByLim('portfolio', 3);
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

	public function projects()
	{
		$response=array();
		$response['web']=$this->fetch->getWebProfile('webprofile');
		$response['clients']=$this->fetch->getInfo('clients');
		$response['portfolio']=$this->fetch->getInfoByOrder('portfolio');
		$this->load->view('header' , $response);
		$this->load->view('portfolio_all');
		$this->load->view('footer');
	}

	public function project($id)
	{
		$response=array();
		$response['web']=$this->fetch->getWebProfile('webprofile');
		$response['clients']=$this->fetch->getInfo('clients');
		$response['project']=$this->fetch->getInfoById($id,'portfolio');
		$this->load->view('header' , $response);
		$this->load->view('portfolio');
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
		$this->form_validation->set_rules('some_info_for_sending_this_msg', 'Email', 'required');
		$this->form_validation->set_rules('message', 'Message', 'required');
		
		if($this->input->post('email')){
			$this->session->set_flashdata('failed','Some error occured!');
			redirect('/');
		}
		else{
			if($this->form_validation->run() == true){
				$guest_email=$this->input->post('some_info_for_sending_this_msg');
				$to = $this->fetch->getWebProfile()->email;

				$data = $this->input->post();
				$data['name']=substr(strip_tags($data['name']),0,50);
				$data['email']=substr(strip_tags($data['some_info_for_sending_this_msg']),0,50);
				unset($data['some_info_for_sending_this_msg']);
				$data['message']=substr(strip_tags($data['message']),0,300);

				// Regex for filtering spam words
				preg_match('/(http|www|ftp|mailto|porn|nude|sex|click|hot)/', $data['message'], $matches);

				if($matches){
					$this->session->set_flashdata('failed','Some error occured!');
					redirect('/');
				}
				else{

					$url = "https://www.google.com/recaptcha/api/siteverify";
					$load = [
						'secret' => RECAPTCHA_SECRET_KEY,
						'response' => $_POST['token'],
						// 'remoteip' => $_SERVER['REMOTE_ADDR']
					];

					$opt = array(
						'http' => array(
						'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
						'method'  => 'POST',
						'content' => http_build_query($load)
						)
					);

					$context  = stream_context_create($opt);
					$resp = file_get_contents($url, false, $context);

					$res = json_decode($resp, true);
					if($res['success'] == true) {
						unset($data['token']);
						$msg ="You have a new enquiry from- \n\r Name:".$data['name']." \n\r E-mail:".$data['some_info_for_sending_this_msg']." \n\r  Message:".$data['message'];
						$subject = "Aller Tech - New Enquiry";
						$headers = "From:" . $guest_email;
						// mail($to, $subject, $msg, $headers);
						mail($to, $subject, $msg);
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
					else {
						$this->session->set_flashdata('failed','Some error occured!');
						redirect('/');
					}


				
				}
			}
			else{
				$this->session->set_flashdata('failed',strip_tags(validation_errors()));
				redirect('/');
			}
		}
	}

}
