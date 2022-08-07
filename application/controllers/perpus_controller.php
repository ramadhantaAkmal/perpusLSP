<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Perpus_controller extends CI_Controller {
	
public function __construct(){
	parent::__construct();
		$this->load->helper('url');
		$this->load->library('session');
	}
	
	public function index(){
		$data['buku'] = $this->model_buku->read();
		$this->load->view('header', $data);
		$this->load->view('home');
		$this->load->view('footer');
		if(isset($_POST['tambah'])){
			$this->model_transaksi->create();
		}
	}
	
	
	public function login(){
		$this->load->view('header');
		$this->load->view('login');
		$this->load->view('footer');
		if(isset($_POST['login'])){
			$this->_login();
		}
	}
	
	private function _login(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$jabat = 'admin';
		$user = $this->db->get_where('data_petugas',['username'=> $username])->row_array();
		
		if($user){
			if(password_verify($password, $user['password'])){
				if($jabat == $user['jabatan_petugas']){
					$this->session->set_userdata('login','1');
					$this->session->set_userdata('username', $user['username']);
					redirect('','refresh');
				}else{
					$this->session->set_userdata('login','3');
					$this->session->set_userdata('username', $user['username']);
					redirect('','refresh');
				}
				
			}
		}else{
			$this->session->set_flashdata('salah_login','1');
			redirect('perpus_controller/login','refresh');
		}
	}
	
	public function logout(){
		session_destroy();
		redirect('perpus_controller/login','refresh');
	}
	
	public function admin(){	
	 if($this->session->userdata('login')=='1'){
		$data['buku'] = $this->model_buku->read();
		$data['petugas'] = $this->model_petugas->read();
		$data['anggota'] = $this->model_anggota->read();
		$data['transaksi'] = $this->model_transaksi->read();
		$this->load->view('header', $data);
		$this->load->view('admin');
		$this->load->view('footer');
		if(isset($_POST['tambah_buku'])){
			$this->model_buku->create();
		}elseif(isset($_POST['tambah_petugas'])){
			$this->model_petugas->create();
		}else{
		}
	 }else{
			$this->session->set_flashdata('belum_login','2');
			redirect('perpus_controller/login','refresh');
	 }
	}
	
	public function editBuku($id){
	 if($this->session->userdata('login')=='1'){
		$data['buku'] = $this->model_buku->get_row($id);
		$this->load->view('header', $data);
		$this->load->view('edit_buku');
		$this->load->view('footer');
		if(isset($_POST['edit'])){
				$this->model_buku->update();
			}
	 }else{
			
			$this->session->set_flashdata('belum_login','2');
			redirect('perpus_controller/login','refresh');
	 }
	}
	
	public function editPetugas($id){
	 if($this->session->userdata('login')=='1'){
		$data['petugas'] = $this->model_petugas->get_row($id);
		$this->load->view('header', $data);
		$this->load->view('edit_petugas');
		$this->load->view('footer');
		if(isset($_POST['edit'])){
				$this->model_petugas->update();
			}
	 }else{
			
			$this->session->set_flashdata('belum_login','2');
			redirect('perpus_controller/login','refresh');
	 }
	}
	
	public function editAnggota($id){
	 if($this->session->userdata('login')=='1'){
		$data['anggota'] = $this->model_anggota->get_row($id);
		$this->load->view('header', $data);
		$this->load->view('edit_anggota');
		$this->load->view('footer');
		if(isset($_POST['edit'])){
				$this->model_anggota->update();
			}
	 }else{
			
			$this->session->set_flashdata('belum_login','2');
			redirect('perpus_controller/login','refresh');
	 }
	}
	
	public function bukuHapus($id){
		$this->model_buku->hapus($id);
	}
	
	public function petugasHapus($id){
		$this->model_petugas->hapus($id);
	}
	
	public function anggotaHapus($id){
		$this->model_anggota->hapus($id);
	}
	
	public function transaksiHapus($id){
		$this->model_transaksi->hapus($id);
	}
	
	
	public function laporan(){
	 if($this->session->userdata('login')=='1' || $this->session->userdata('login')=='3'){
		$data['transaksi'] = $this->model_transaksi->read();
		$this->load->view('header', $data);
		$this->load->view('laporan');
		$this->load->view('footer');
	 }else{
			
			$this->session->set_flashdata('belum_login','2');
			redirect('perpus_controller/login','refresh');
	 }
	}
	
	public function laporanUpdate($id){
		$laporan = $this->db->get_where('data_transaksi',['id_transaksi'=> $id])->row_array();
		if ($laporan['status']== 'BELUM'){
			$this->model_transaksi->update($id);
		}
		
	}
	
	
	public function register(){
		$data['anggota'] = $this->model_anggota->read();
		$this->load->view('header', $data);
		$this->load->view('register');
		$this->load->view('footer');
		if(isset($_POST['register'])){
			$this->model_anggota->create();
		}
	}
	
	
}
