<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends MY_Controller {
	function __construct(){
		parent:: __construct();
		$this->load->model('GetModel','fetch');
	}

	public function index()
	{
		// $slides=$this->fetch->getInfo('hero_slider');
		// $projects=$this->fetch->getInfo('projects');
		// $schemes=$this->fetch->getInfo('schemes');
		// $prods=$this->fetch->getInfoByLim('products',4);
		// $services=$this->fetch->getInfoByLim('services',4);
		// $events=$this->fetch->getInfoByOrder('events');
		// $gallery=$this->fetch->getInfoByOrder('gallery');
		// $states=$this->fetch->getInfo('states');
		// $roles=$this->fetch->getInfo('reg_roles');
		// $gallery_count=$this->fetch->record_count('gallery');
		// if($gallery_count>6){
		// 	$gallery_count=6;
		// }
		// $feedbacks=$this->fetch->getInfoByOrder('feedbacks');
		// $web=$this->fetch->getWebProfile('webprofile');

		// $this->load->view('header',['title'=>'Home','slides'=>$slides,
		// 				'events'=>$events,
		// 				'projects'=>$projects,
		// 				'roles'=>$roles,
		// 				'prods'=>$prods,
		// 				'schemes'=>$schemes,
		// 				'services'=>$services,
		// 				'states'=>$states,
		// 				'gallery'=>$gallery,
		// 				'web'=>$web,
		// 				'feedbacks'=>$feedbacks,
		// 				'lim'=> $gallery_count
		// 				]
		// 			);
		$this->load->view('header');
		$this->load->view('index');
		$this->load->view('footer');
	}

	public function about()
	{
		// $web=$this->fetch->getWebProfile('webprofile');
		// $prods=$this->fetch->getInfoByLim('products',4);
		// $services=$this->fetch->getInfoByLim('services',4);
		// $states=$this->fetch->getInfo('states');
		// $roles=$this->fetch->getInfo('reg_roles');
		// $this->load->view('header',['title'=>'About Us',
		// 							'roles'=>$roles,
		// 							'states'=>$states,
		// 							'prods'=>$prods,
		// 							'services'=>$services,
		// 							'web'=>$web
		// 							]);
		$this->load->view('header');
		$this->load->view('about');
		$this->load->view('footer');
	}

	public function services()
	{
		$this->load->view('header');
		$this->load->view('services');
		$this->load->view('footer');
	}

	public function trainings()
	{
		$this->load->view('header');
		$this->load->view('trainings');
		$this->load->view('footer');
	}

	public function contact()
	{
		$this->load->view('header');
		$this->load->view('contact');
		$this->load->view('footer');
	}

	public function Privacy()
	{
		// $web=$this->fetch->getWebProfile('webprofile');
		// $prods=$this->fetch->getInfoByLim('products',4);
		// $services=$this->fetch->getInfoByLim('services',4);
		// $states=$this->fetch->getInfo('states');
		// $roles=$this->fetch->getInfo('reg_roles');
		// $this->load->view('header',['title'=>'Privacy Policy',
		// 							'roles'=>$roles,
		// 							'states'=>$states,
		// 							'prods'=>$prods,
		// 							'services'=>$services,
		// 							'web'=>$web
		// 							]);
		$this->load->view('header');
		$this->load->view('policies');
		$this->load->view('footer');
	}

	
	public function PartnerReg()
	{
		$this->form_validation->set_rules('pname', 'Name', 'required');
		$this->form_validation->set_rules('phone', 'Phone', 'required|min_length[10]|max_length[10]|regex_match[/^[0-9]{10}$/]');
		if($this->form_validation->run() == true){
			$data=$this->input->post();
			$data['date']=date('Y-m-d');
			$this->load->model('AddModel','save');
			$status= $this->save->saveInfo($data, 'partner_reg');
			if($status){
				$this->session->set_flashdata('success','Thank you for registering ! We will contact you soon.' );
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
