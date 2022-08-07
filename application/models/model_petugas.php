<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class model_petugas extends CI_Model {
	function read(){
		$this->db->order_by('nama_petugas', 'desc');
		return $this->db->get('data_petugas')->result_array();
	}
	
	function create(){
		$id = rand(10000,99999);
		$username = $this->input->post('username');
		$password = $this->input->post('password');
        $nama = $this->input->post('nama_petugas');
		$nik = $this->input->post('nik_petugas');
        $jabatan = $this->input->post('jabatan_petugas');
        $alamat = $this->input->post('alamat_petugas');
		$notelp = $this->input->post('no_telp_petugas');
            $data =[
				'username' => $username,
				'password' => $password,
                'id_petugas' => $id,
                'nik_petugas' => $nik,
                'nama_petugas' => $nama,
                'jabatan_petugas' => $jabatan,
                'alamat_petugas' => $alamat,
                'no_telp_petugas' => $notelp, 
            ];
        
		$id_avail = $this->db->get_where('data_petugas',['id_petugas'=> $id])->row_array();
		
        if($id == $id_avail){
            $this->session->set_flashdata('pesan','id/nama anggota sudah ada');
                redirect('perpus_controller/admin','refresh');
        }else{
            $this->db->insert('data_petugas', $data);
            $this->session->set_flashdata('pesan','Ditambah');
                redirect('perpus_controller/admin','refresh');
        }	
	}
	
	function get_row($id){
		return $this->db->get_where('data_petugas',['id_petugas'=>$id])->row_array();
	}
	
    function update(){
		$data = [
			'nik_petugas' => $nik,
            'nama_petugas' => $nama,
            'jabatan_petugas' => $jabtan,
            'alamat_petugas' => $alamat,
            'no_telp_petuas' => $notelp, 
		];
		$this->db->where('id_petugas', $this->input->post('id_petugas'));
		$this->db->update('data_petugas', $data);
		if($this->db->affected_rows() > 0){
			$this->session->set_flashdata('pesan', 'Data Diupdate');
			redirect('perpus_controller/admin','refresh');
		}
	}

	function hapus($id){
		$this->db->where('id_petugas', $id);
		$this->db->delete('data_petugas');
		if($this->db->affected_rows() > 0){
			$this->session->set_flashdata('pesan', 'Data Dihapus');
			redirect('perpus_controller/admin','refresh');
		}
	}
}