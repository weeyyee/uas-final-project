<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {


	public function index()
	{
		var_dump($this->session->userdata());
		$this->load->view('home');
	}

				
	public function profil()
	{	
		$this->load->view('profil');
	}

	public function daftar()
	{

		$this->load->library('form_validation');
		$this->load->model('users_m');

		$this->form_validation->set_rules('email', 'Email', 'required|valid_email');
		$this->form_validation->set_rules('password', 'Password', 'required');

		if($this->form_validation->run() == TRUE){
		
			$data = [
				'email'=> $this->input->post('email'),
				'password'=> $this->input->post('password'),
				'tanggal_daftar'=> date('Y-m-d H:i:s'),
			];

			$this->users_m->buatAkun($data);

			$this->session->set_flashdata('pesan', 'Pendaftaran berhasil, silahkan masuk melalui menu login');

		}

		$this->load->view('daftar');

	}


	public function login()
	{
		$this->load->library('form_validation');
		$this->load->model('users_m'); 

		$this->form_validation->set_rules('email', 'Email', 'required|valid_email');
		$this->form_validation->set_rules('password', 'Password', 'required');

		if($this->form_validation->run() == TRUE){

			$user = $this->users_m->cekLogin($this->input->post('email'), $this->input->post('password'));
			if($user){
				//Buat sesi jika data ditemukan
				$sessionData = [
					'isLogin' => TRUE,
					'id' => $user->id,
					'email' => $user->email,
				];

				$this->session->set_userdata($sessionData);

				return redirect('/', 'refresh');
			
			} else{
				$this->session->set_flashdata('pesan', 'Email dan password salah');
			}


		}

		$this->load->view('login');
	}
	

	public function logout()
	{
		$this->session->sess_destroy();
		$this->session->set_flashdata('pesan', 'Anda sudah logout dari sistem');
		redirect('home/login', 'refresh');
	}


	public function biodata()
	{
		$this->load->model('users_m');
		$data['user'] = $this->users_m->getUser($this->session->userdata('id'));
	
		$this->load->library('form_validation');
		$this->form_validation->set_rules('nama','Nama Lengkap','required');
		$this->form_validation->set_rules('hp','Nomor HP','required');
		$this->form_validation->set_rules('alamat','Alamat Tinggal','required');

		if($this->form_validation->run() == TRUE) {

		$data =[
			'nama' => $this->input->post('nama'),
			'hp' => $this->input->post('hp'),
			'alamat' => $this->input->post('alamat'),
		];
	
		$this->users_m->simpanBiodata($this->session->userdata('id'), $data);
		$data['user'] = $this->users_m->getUser($this->session->userdata('id'));
	
		}

		$this->load->view('biodata', $data);
	}

	public function cetak ()
	{
		$this->load->model('users_m');
		$data['user'] = $this->users_m->getUser($this->session->userdata('id'));

		$this->load->view('cetak', $data);
	}	


}


