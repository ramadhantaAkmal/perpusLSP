<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class model_buku extends CI_Model {
	function read(){
		$this->db->order_by('judul_buku', 'desc');
		return $this->db->get('data_buku')->result_array();
	}
	
	function create(){
		$id = rand(10000,99999);
		$judul = $this->input->post('judul_buku');
		$penulis = $this->input->post('penulis_buku');
		$tahun = $this->input->post('tahun_buku');
	
		
	$data =[
		'id_buku' => $id,
		'judul_buku' => $judul,
		'penulis_buku' => $penulis,
		'tahun_buku' => $tahun,
	];
	
	$this->db->insert('data_buku', $data);
	if($this->db->affected_rows()>0){
		$this->session->set_flashdata('pesan','Data Ditambah');
			redirect('perpus_controller/admin','refresh');
	}	
	}
	
	function get_row($id){
		return $this->db->get_where('data_buku',['id_buku'=>$id])->row_array();
	}
	
	
	function update(){
		
		$data = [
			'judul_buku' => $this->input->post('judul_buku'),
			'penulis_buku' => $this->input->post('penulis_buku'),
			'tahun_buku' => $this->input->post('tahun_buku'),
		];
		$this->db->where('id_buku', $this->input->post('id_buku'));
		$this->db->update('data_buku', $data);
		if($this->db->affected_rows() > 0){
			$this->session->set_flashdata('pesan', 'Diubah');
			redirect('perpus_controller/admin','refresh');
		}
	}
	
	function hapus($id){
		$this->db->where('id_buku', $id);
		$this->db->delete('data_buku');
		if($this->db->affected_rows() > 0){
			$this->session->set_flashdata('pesan', 'Dihapus');
			redirect('perpus_controller/admin','refresh');
		}
	}
}