<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Pegawai extends CI_Controller{  //pertamakali di jalankan, mengaktifkan model

    function __construct(){
      parent::__construct();     
      $this->load->model('Model_pegawai');
      $this->load->database('spt_sppd');
        $this->load->helper('url');
    }

    public function index()
    {
      $data['pegawai'] = $this->Model_pegawai->tampil_pegawai();
      $this->template->load('template/main','pegawai',$data);
    }

    function tambah_pegawai()
    {
      $this->template->load('template/main','tambah_pegawai');
    }

    function aksi_tambah_pegawai()
    {
        $data = array(
        'id_pegawai'  => $this->input->post('id_pegawai'),
        'nip'  => $this->input->post('nip'),
        'nama_pegawai' => $this->input->post('nama_pegawai'),
        'pangkat' => $this->input->post('pangkat'),
        'jabatan'  => $this->input->post('jabatan')
        );
        $this->Model_pegawai->save('tb_pegawai',$data);
        redirect(base_url().'Pegawai');
    }

    
    function edit_pegawai($id_pegawai)
    {
      $data['pegawai'] = $this->Model_pegawai->tampil_edit_pegawai($id_pegawai)->row_array();
      $this->template->load('template/main','edit_pegawai',$data);
    }

    function aksi_edit_pegawai()
    {
      $data = array(
        'id_pegawai'  => $this->input->post('id_pegawai'),
        'nip'  => $this->input->post('nip'),
        'nama_pegawai' => $this->input->post('nama_pegawai'),
        'pangkat' => $this->input->post('pangkat'),
        'jabatan'  => $this->input->post('jabatan')
        );
        $id=$this->input->post('id_pegawai');
        $this->Model_pegawai->save_update('tb_pegawai',$id,$data);
        redirect('pegawai');
    }

    function tampil_pegawai()
    {
        $pegawai=$this->Model_pegawai->tampil_pegawai();
      $data['pegawai']=$pegawai;
      $this->template->load('template/main','pegawai',$data);
    }

    public function detail_pegawai($id_pegawai)
    {
        $data['anggota'] = $this->Model_pegawai->tampil_detail_pegawai($id_pegawai)->row_array();
        $this->template->load('template/main','detail_pegawai', $data);
    }

    function hapus_pegawai($id_pegawai)
    {
      $this->Model_pegawai->hapus_pegawai('tb_pegawai',$id_pegawai);  //anggota nama table
      redirect('pegawai');
    }
  }