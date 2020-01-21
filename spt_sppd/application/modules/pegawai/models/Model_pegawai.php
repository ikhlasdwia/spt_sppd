<?php

class Model_pegawai extends CI_Model {
	
	public $table="tb_pegawai";

	function save($tabel,$data)
	{
		$this->db->insert($tabel,$data);
	}

	function tampil_pegawai()
	{
		$query=$this->db->order_by('id_pegawai','DESC')->get('tb_pegawai');
		return $query->result();
	}

	function save_update($table,$id,$data)
	{
		$this->db->where('id_pegawai',$id);
		$this->db->update($table,$data);
	}

	function tampil_edit_pegawai($id)
	{
		return $this->db->get_where('tb_pegawai',array('id_pegawai' => $id));
	}

	function tampil_detail_pegawai($id)
	{
		return $this->db->get_where('tb_pegawai',array('id_pegawai' => $id));
	}

	function hapus_pegawai($table,$id){
		$this->db->where('id_pegawai',$id);
		$this->db->delete($table);
		}	
	}


?>