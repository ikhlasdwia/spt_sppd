<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Admin extends CI_Controller{  //pertamakali di jalankan, mengaktifkan model

    function __construct(){
      parent::__construct();   

      // jika belum login redirect ke login
        if ($this->session->userdata('logged')<>1) {
            redirect(site_url('auth'));
        }

      $this->load->model('Model_admin');
      $this->load->database('spt_sppd');
        $this->load->helper('url');
    }

    public function index()
    {
      $data['record'] = $this->Model_admin->tampil_admin();
      $this->template->load('template/main','admin',$data);
    }

    function tambah_admin()
    {
      $this->template->load('template/main','tambah_admin');
    }

    function aksi_tambah_admin()
    {
      if($this->input->post('simpan')){
      
        if(!empty($_FILES['foto']['name']))
        {
            $config['upload_path'] = 'assets/image/upload/';
            $config['allowed_types'] = 'jpg|jpeg|png|gif';
            $config['file_name'] = $_FILES['foto']['name'];
            $config['max_size'] = '1000';
          $config['max_width']  = '3000';
          $config['max_height']  = '3000';
                
                //Load upload library and initialize configuration
                $this->load->library('upload',$config);
                $this->upload->initialize($config);
                
                if($this->upload->do_upload('foto')){
                    $uploadData = $this->upload->data();
                    $foto = $uploadData['file_name'];
                }else{
                    $foto = '';
                }
            }else{
                $foto = '';
            }
            
        $data = array(
        'id_admin'  => $this->input->post('id_admin'),
        'username'  => $this->input->post('username'),
        'password'  => $this->input->post('password'),
        'level'  => $this->input->post('level'),
        'nama' => $this->input->post('nama'),
        'email' => $this->input->post('email'),
        'foto' => $foto
        );
        $this->Model_admin->save('tb_admin',$data);
        redirect(base_url().'Admin');
      }
    }

    public function detail_admin($id_admin)
    {
        $data['row'] = $this->Model_admin->tampil_detail_admin($id_admin)->row_array();
        $this->template->load('template/main','detail_admin', $data);
    }

    function edit_admin($id_admin)
    {
      $data['admin'] = $this->Model_admin->tampil_edit_admin($id_admin)->row_array();
      $this->template->load('template/main','edit_admin',$data);
    }

    function aksi_edit_admin()
    {
      if($this->input->post('simpan')){
      
        //if(!empty($_FILES['foto_upload']['name'])){
                $config['upload_path'] = 'assets/image/upload/';
                $config['allowed_types'] = 'jpg|jpeg|png|gif';
                $config['file_name'] = $_FILES['foto']['name'];
                $config['max_size'] = '1000';
          $config['max_width']  = '3000';
          $config['max_height']  = '3000';
                
                //Load upload library and initialize configuration
                $this->load->library('upload',$config);
                $this->upload->initialize($config);
                
                if($this->upload->do_upload('foto')){
                    $uploadData = $this->upload->data();
                    $foto = $uploadData['file_name'];
                }else{
                    $foto = '';
                }
            //}else{
                //$foto = '';
            //}

        $data = array(
        'id_admin'  => $this->input->post('id_admin'),
        'username'  => $this->input->post('username'),
        'password'  => $this->input->post('password'),
        'level'  => $this->input->post('level'),
        'nama' => $this->input->post('nama'),
        'email' => $this->input->post('email'),
        'foto' => $foto
        );
        $id=$this->input->post('id_admin');
        $this->Model_admin->save_update('tb_admin',$id,$data);
        redirect('admin');
      }
    }

    function tampil_admin()
    {
        $admin=$this->Model_admin->tampil_admin();
      $data['admin']=$admin;
      $this->template->load('template/main','admin',$data);
    }

    function hapus_admin($id_admin)
    {
      $this->Model_admin->hapus_admin('tb_admin',$id_admin);  
      redirect('admin');
    }
}