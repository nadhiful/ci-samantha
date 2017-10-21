<?php 
 
if (!defined('BASEPATH')) 
     exit('No Direct Access Allowed !'); 
 
class c_harga extends CI_Controller { 
 
     function __construct() {  
         parent::__construct(); 
         $this->load->helper(array('url', 'form'));
         
         $this->load->model('m_harga'); 
     } 
// fungsi index saat controller pertamakali dijalankan // 
     function index() { 
         
  
  //pengaturan pagination
   $config = array();
    $config["base_url"] = site_url('c_harga/index');
    $config["total_rows"] = $this->m_harga->hitung();
     $config["per_page"] = 5;
     $config["uri_segment"] = 3;
 
      $this->pagination->initialize($config);
      
        $this->data['title'] ='INDEX HARGA';  
        $this->data['number']         = (int)$this->uri->segment(3) +1;
        $this->data["query"] = $this->m_harga->batas($config["per_page"], $this->uri->segment(3));
        $this->data["halaman"] = $this->pagination->create_links();
        $this->data['title']='INDEX HARGA';
       $this->data['page'] = 'tbl_harga/view'; 
       $this->load->view('harga', $this->data); 
}
   
// fungsi tambah jenis    // 
     function tambah_jenis() { 
         $this->data['kode_harga'] = ""; 
         $this->data['harga_beli'] = "";
         $this->data['harga_jual'] = ""; 
         $this->data['st'] = "tambah"; 
         $this->data['id_harga'] = "";
         $this->data['title']='TAMBAH DATA HARGA'; 
         $this->data['page'] = 'tbl_harga/form'; 
         $this->load->view('harga', $this->data); 
     } 
// fungsi edit // 
     function edit() { 
         $id = $this->uri->segment(3); 
         if ($id == NULL) { 
             redirect('c_harga'); 
         } 
         $this->load->model('m_harga'); 
         $dt = $this->m_harga->edit($id); 
         $this->data['kode_harga'] = $dt->kode_harga; 
         $this->data['harga_beli'] = $dt->harga_beli;
         $this->data['harga_jual'] = $dt->harga_jual; 
         $this->data['st'] = "edit"; 
         $this->data['id_harga'] = $id;
         $this->data['title']='EDIT HARGA'; 
         $this->data['page'] = 'tbl_harga/form'; 
         $this->load->view('harga', $this->data); 
     } 
//fungsi autocomplete//

//fungsi cari//
function cari(){
        if($this->input->post('cari'))
        {
            $keyword = $this->input->post('cari');
            
            $this->session->set_userdata(
                        array('keyword' => $this->input->post('cari',TRUE))
                    );
        }
 
 $config['base_url'] = site_url('c_harga/cari');
 $config['total_rows'] = $this->m_harga->tampil();
 $config['per_page'] = $this->config->item('per_page');
 $config['uri_segment']= 3;
 $config['num_links']= 9;
 $this->pagination->initialize($config);
        
        $this->data['number']       = (int)$this->uri->segment(3) +1;
        $this->data["query"]        = $this->m_harga->caridata($config['per_page'], $this->uri->segment(3));
        //$this->data["halaman"]      = $this->pagination->create_links();
   $this->data['title']='HASIL PENCARIAN'; 
   $this->data['page'] = 'tbl_harga/cari'; 
   $this->load->view('harga', $this->data); 
 }
//fungsi autocomplete//
/**function search()
   {
        
	  $this->data['title']='TAMBAH HARGA';
	  $this->data['page']='tbl_harga/form';
	  $this->load->view('harga',$this->data);
   }**/
   
// fungsi hapus    // 
     function hapus() { 
         $u = $this->uri->segment(3); 
         $this->load->model('m_harga'); 
         $this->m_harga->hapus($u); 
         redirect('c_harga'); 
     }
// fungsi simpan    // 
     function simpan() { 
        $this->load->library('form_validation');
         $this->form_validation->set_rules('kd_harga', 'Kode Harga', 'trim|required'); 
         $this->form_validation->set_rules('har_beli',  'Harga Beli','trim|required|is_numeric|is_natural'); 
         if ($this->form_validation->run() == FALSE) {  
 
 
        if ($this->input->post('submit')) { 
                 $this->data['kode_harga'] = $this->input->post('kd_harga'); 
                 $this->data['id_harga'] = $this->input->post('id_harga'); 
                 $this->data['st'] = $this->input->post('st'); 
                 $this->data['harga_beli'] = $this->input->post('har_beli'); 
                 $this->data['harga_jual'] = $this->input->post('har_jual'); 
                 $this->data['page'] = 'tbl_harga/form';
                 $this->load->view('harga', $this->data); 
             }   
         } else { 
                 $st = $this->input->post('st'); 
                 if ($this->input->post('submit')) { 
                     if ($st == "tambah") { 
                         $this->load->model('m_harga'); 
                         $this->m_harga->tambah(); 
                         redirect('c_harga'); 
                     } else if ($st == "edit") { 
                         $id_harga = $this->input->post('id'); 
                         $this->load->model('m_harga'); 
                         $this->m_harga->update($id_harga); 
                         redirect('c_harga'); 
                     } 
                              } 
             } 
         } 
    }