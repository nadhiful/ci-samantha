<?php 
 
if (!defined('BASEPATH')) 
     exit('No Direct Access Allowed !'); 
 
class c_user extends CI_Controller { 
 
     function __construct() {  
 
          parent::__construct(); 
         $this->load->helper(array('url', 'form')); 
     } 
// fungsi index saat controller pertamakali dijalankan // 
     function index() { 
         $limit = 10; //
         $offset = 0; //
         $this->load->model('m_user');// 
         $this->data['data_get'] = $this->m_user->ambil($limit, $offset);// 
         $this->data['page'] = 'tbl_user/view';// 
         $this->load->view('harga', $this->data);// 
         
         }

// fungsi tambah jenis    // 
     function tambah_jenis() { 
         $this->data['userid'] = ""; 
         $this->data['fname'] = ""; 
         $this->data['lname'] = ""; 
         $this->data['username'] = ""; 
         $this->data['password'] = ""; 
         
         $this->data['st'] = "tambah"; 
         $this->data['userid'] = ""; 
         $this->data['page'] = 'tbl_user/form'; 
         $this->load->view('harga', $this->data); 
     } 
// fungsi edit // 
     function edit() { 
         $id = $this->uri->segment(3); 
         if ($id == NULL) { 
             redirect('c_user'); 
         } 
         $this->load->model('m_user'); 
         $dt = $this->m_user->edit($id); 
         $this->data['fname'] = $dt->fname; 
         $this->data['lname'] = $dt->lname; 
         $this->data['username'] = $dt->username; 
         $this->data['password'] = $dt->password; 
         $this->data['st'] = "edit"; 
         $this->data['userid'] = $id; 
         $this->data['page'] = 'tbl_user/form'; 
         $this->load->view('harga', $this->data); 
     } 
// fungsi hapus    // 
     function hapus() { 
         $u = $this->uri->segment(3); 
         $this->load->model('m_user'); 
         $this->m_user->hapus($u); 
         redirect('c_user'); 
     } 
// fungsi simpan    // 
     function simpan() { 
        $this->load->library('form_validation');
         $this->form_validation->set_rules('user_name', 'Username', 'trim|required'); 
         $this->form_validation->set_rules('pass_word',  'Password','trim|required|is_numeric|is_natural'); 
         if ($this->form_validation->run() == FALSE) {  
 
 
        if ($this->input->post('submit')) { 
                 $this->data['fname'] = $this->input->post('f_name'); 
                 $this->data['lname'] = $this->input->post('l_name'); 
                 $this->data['username'] = $this->input->post('user_name'); 
                 $this->data['password'] = $this->input->post('pass_word'); 
                 $this->data['userid'] = $this->input->post('userid'); 
                 $this->data['st'] = $this->input->post('st'); 
                 $this->data['page'] = 'tbl_user/form'; 
                 $this->load->view('harga', $this->data); 
             }   
         } else { 
                 $st = $this->input->post('st'); 
                 if ($this->input->post('submit')) { 
                     if ($st == "tambah") { 
                         $this->load->model('m_user'); 
                         $this->m_user->tambah(); 
                         redirect('c_user'); 
                     } else if ($st == "edit") { 
                         $userid = $this->input->post('id'); 
                         $this->load->model('m_user'); 
                         $this->m_user->update($userid); 
                         redirect('c_user'); 
                     } 
                              } 
             } 
         } 
     } 
