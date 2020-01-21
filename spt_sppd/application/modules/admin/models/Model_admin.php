<?php

class Model_admin extends CI_Model {
	
	public $table="tb_admin";

	function save($tabel,$data)
	{
		$this->db->insert($tabel,$data);
	}

	function tampil_admin()
	{
		$query=$this->db->order_by('id_admin','DESC')->get('tb_admin');
		return $query->result();
	}

	function save_update($table,$id,$data)
	{
		$this->db->where('id_admin',$id);
		$this->db->update($table,$data);
	}

	function tampil_edit_admin($id)
	{
		return $this->db->get_where('tb_admin',array('id_admin' => $id));
	}

	function tampil_detail_admin($id)
	{
		return $this->db->get_where('tb_admin',array('id_admin' => $id));
	}

	function hapus_admin($table,$id){
		$this->db->where('id_admin',$id);
		$this->db->delete($table);
		}	
	}


?>