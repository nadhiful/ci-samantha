<?php 
 
if (!defined('BASEPATH')) 
     exit('No Direct Access Allowed !'); 
 
class c_trans extends CI_Controller { 
 
     function __construct() {  
 
 

         parent::__construct(); 
         $this->load->helper(array('url', 'form'));
         $this->load->model('m_trans'); 
     } 
// fungsi index saat controller pertamakali dijalankan // 
     
     
     function index() { 
      
$config['base_url'] = site_url('c_trans/index/'); 
$config['total_rows'] = $this->m_trans->hitung(); 
$config['per_page'] =3; 
$config['full_tag_open'] = '<div><ul class="pagination pagination-demo">'; 
$config['full_tag_close'] = '</ul></div>'; 
$config['first_link'] = true; 
$config['last_link'] = true; 
$config['first_tag_open'] = '<li>'; 
$config['first_tag_close'] = '</li>'; 
$config['prev_link'] = '&larr; SEBELUMNYA'; 
$config['prev_tag_open'] = '<li class="prev">'; 
$config['prev_tag_close'] = '</li>'; 
$config['next_link'] = 'SELANJUTNYA &rarr;'; 
$config['next_tag_open'] = '<li>'; 
$config['next_tag_close'] = '</li>'; 
$config['last_tag_open'] = '<li>'; 
$config['last_tag_close'] = '</li>'; 
$config['cur_tag_open'] = '<li class="active"><a href="#">'; 
$config['cur_tag_close'] = '</a></li>'; 
$config['num_tag_open'] = '<li>'; 
$config['num_tag_close'] = '</li>'; 
$config['uri_segment'] = 3;
$this->data['title'] ='INDEX TRANSAKSI';   
$this->pagination->initialize($config); 
$this->data['number']=$this->uri->segment(3)+1; 
		$this->data['query']=$this->m_trans->batas($config['per_page'],$this->uri->segment(3));
        $this->data['page'] = 'tbl_trans/view'; 
        $this->load->view('harga', $this->data);
     } 
// fungsi tambah jenis    // 
    function tambah_jenis() { 
         $this->data['kode_harga'] = "";
         $this->data['tanggal'] = "";
         $this->data['nomor'] = "";
		 $this->data['beli']="";	
         $this->data['harga'] = "";
		 $this->data['st'] = "tambah"; 
         $this->data['id_trans'] = "";
         $this->data['title']='TAMBAH TRANSAKSI'; 
         $this->data['page'] = 'tbl_trans/form'; 
		 $this->load->view('harga', $this->data); 
     } 
    
// fungsi hapus    // 
     function hapus() { 
         $u = $this->uri->segment(3); 
         $this->load->model('m_trans'); 
         $this->m_trans->hapus($u); 
         redirect('c_trans'); 
     }
//fungsi cari//
function cari(){
    $this->load->model('m_trans');
        if($this->input->post('cari'))
        {
            $keyword = $this->input->post('cari');
            
            $this->session->set_userdata(
                        array('keyword' => $this->input->post('cari',TRUE))
                    );
        }
 
 $config['base_url'] = site_url('c_trans/cari');
 $config['total_rows'] = $this->m_trans->tampil();
 $config['per_page'] = $this->config->item('per_page');
 $config['uri_segment']= 3;
 $config['num_links']= 9;
 $this->pagination->initialize($config);
        $this->data['number']       = (int)$this->uri->segment(3) +1;
        $this->data["query"]        = $this->m_trans->caridata($config['per_page'], $this->uri->segment(3));
        $this->data['title']='HASIL PENCARIAN'; 
   $this->data['page'] = 'tbl_trans/cari'; 
   $this->load->view('harga', $this->data);
}
		
// fungsi simpan    // 
     function simpan() { 
        $this->load->library('form_validation');
         $this->form_validation->set_rules('kd_harga', 'Kode Harga', 'trim|required');
          if ($this->form_validation->run() == FALSE) {  
          if ($this->input->post('submit')) { 
                 $this->data['kode_harga'] = $this->input->post('kd_harga'); 
                 $this->data['id_harga'] = $this->input->post('id_harga');
                 $this->data['tanggal'] = $this->input->post('tanggal'); 
                 $this->data['nomor'] = $this->input->post('angka');
				 $this->data['beli'] = $this->input->post('select2');
                 $this->data['harga'] = $this->input->post('select');
                 $this->data['st'] = $this->input->post('st'); 
                 $this->data['page'] = 'tbl_trans/form'; 
                 $this->load->view('harga', $this->data); 
             }   
         } else { 
                 $st = $this->input->post('st'); 
                 if ($this->input->post('submit')) { 
                     if ($st == "tambah") { 
                         $this->load->model('m_trans'); 
                         $this->m_trans->tambah(); 
                         redirect('c_trans'); 
                     } else if ($st == "edit") { 
                         $id_trans = $this->input->post('id'); 
                         $this->load->model('m_trans'); 
                         $this->m_trans->update($id_trans); 
                         redirect('c_trans'); 
                     } 
                              } 
             } 
         }


       
     } 