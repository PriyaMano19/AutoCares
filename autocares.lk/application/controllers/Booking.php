<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Booking extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function __construct(){
            parent::__construct();
           $this->load->model('Booking_model');
    }
	public function index()
	{
		if ($this->uri->segment(3)) {
			$shop_id =  $this->uri->segment(3);
		}
		else{
			$shop_id = $this->session->shop_id;
		}
	
		$data['shop'] = $this->Booking_model->shop($shop_id);
		$data['services'] = $this->Booking_model->services($shop_id);

		$this->load->view('layout/head');
		$this->load->view('layout/header');
		$this->load->view('booking/index', $data);
		$this->load->view('layout/footer');
	}

	public function Validation(){
		$this->form_validation->set_rules('name', 'Name', 'required');
		$this->form_validation->set_rules('v_no', 'Vehicle Number', 'required');
		$this->form_validation->set_rules('mobile', 'Mobile Number', 'required|numeric|max_length[10]');
		$this->form_validation->set_rules('service', 'Service', 'required');
		$this->form_validation->set_rules('time', 'Time', 'required');

		$shop_id = $this->input->post('shop_id');

		$this->session->set_userdata('shop_id', $shop_id);

		if ($this->form_validation->run() == FALSE){
                $this->index();
        }
        else{
            $name = $this->input->post('name');
            $v_no = $this->input->post('v_no');
            $mobile = $this->input->post('mobile');
            $email = $this->input->post('email');
            $service = $this->input->post('service');
            $time = $this->input->post('time');

            $this->Booking_model->insert($shop_id,$name,$v_no,$mobile,$service,$time,$email);
            $this->session->set_flashdata('booking_success', "<div class='alert alert-success'>Your Booking has been Updated. We will contact soon!!</div>");
            //redirect('Home');
			redirect('Booking/index');
        }
	}
}
