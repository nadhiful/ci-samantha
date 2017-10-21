<?php 
 
if (!defined('BASEPATH')) 
     exit('No Direct Access Allowed !'); 
 
class c_stok extends CI_Controller { 
 
     function __construct() {  
 
 

         parent::__construct(); 
         $this->load->helper(array('url', 'form')); 
        $this->load->model('m_stok');
     } 
// fungsi index saat controller pertamakali dijalankan // 
     function index() { 
    $config = array();
    $config["base_url"] = site_url('c_stok/index');
    $config["total_rows"] = $this->m_stok->hitung();
    $config["per_page"] = 5;
   $config["uri_segment"] = 3;
 
      $this->pagination->initialize($config);
      
       
        $this->data['number']         = (int)$this->uri->segment(3) +1;
        $this->data["query"] = $this->m_stok->batas($config["per_page"], $this->uri->segment(3));
        $this->data["halaman"] = $this->pagination->create_links();
       
        $this->data['title'] ='INDEX STOK';  
        $this->data['page'] = 'tbl_stok/view'; 
        $this->load->view('harga', $this->data);
     } 
// fungsi tambah jenis    // 
     function tambah_jenis() { 
        // $this->data['kd_barang'] = ""; 
         $this->data['kd_barang'] = $this->m_stok->getKodeBarang(); 
         $this->data['beli'] = "";
         $this->data['nama'] ="";
         $this->data['st'] = "tambah"; 
         $this->data['title']='TAMBAH STOK'; 
         $this->data['page'] = 'tbl_stok/form'; 
         $this->load->view('harga', $this->data); 
     } 
     
// fungsi edit // 
     function edit() { 
         $id = $this->uri->segment(3); 
         if ($id == NULL) { 
             redirect('c_stok'); 
         } 
         $dt = $this->m_stok->edit($id); 
         $this->data['beli'] = $dt->beli;
         $this->data['nama']=$dt->nama;
         $this->data['st'] = "edit"; 
         $this->data['kd_barang'] = $id;
         $this->data['title']='EDIT STOK'; 
         $this->data['page'] = 'tbl_stok/form'; 
         $this->load->view('harga', $this->data); 
     } 
// fungsi hapus    // 
     function hapus() { 
         $u = $this->uri->segment(3); 
         $this->load->model('m_stok'); 
         $this->m_stok->hapus($u); 
         redirect('c_stok'); 
     }
//fungsi cari//
/*function cari(){
        if($this->input->post('cari'))
        {
            $keyword = $this->input->post('cari');
            
            $this->session->set_userdata(
                        array('keyword' => $this->input->post('cari',TRUE))
                    );
        }
 
 $config['base_url'] = site_url('c_stok/cari');
 $config['total_rows'] = $this->m_stok->tampil();
 $config['per_page'] = $this->config->item('per_page');
 $config['uri_segment']= 3;
 $config['num_links']= 9;
 $this->pagination->initialize($config);
        
        $this->data['number']       = (int)$this->uri->segment(3) +1;
        $this->data["query"]        = $this->m_stok->caridata($config['per_page'], $this->uri->segment(3));
        $this->data["halaman"]      = $this->pagination->create_links();
   $this->data['title']='HASIL PENCARIAN'; 
   $this->data['page'] = 'tbl_stok/view'; 
   $this->load->view('harga', $this->data); 
 }*/

// fungsi simpan    // 
     function simpan() { 
        $this->load->library('form_validation');
         $this->form_validation->set_rules('kd_barang', ' Kode', 'trim|required');
          if ($this->form_validation->run() == FALSE) {  
 
 
        if ($this->input->post('submit')) { 
                 $this->data['kd_barang'] = $this->input->post('kd_barang');
                 $this->data['beli'] = $this->input->post('buy');
                 $this->data['nama'] =$this->input->post('name');
                 $this->data['st'] = $this->input->post('st'); 
                 
                 $this->data['page'] = 'tbl_stok/form'; 
                 $this->load->view('harga', $this->data); 
             }   
         } else { 
                 $st = $this->input->post('st'); 
                 if ($this->input->post('submit')) { 
                     if ($st == "tambah") { 
                         $this->load->model('m_stok'); 
                         $this->m_stok->tambah(); 
                         redirect('c_stok'); 
                     } else if ($st == "edit") { 
                         $kd_barang = $this->input->post('id'); 
                         $this->load->model('m_stok'); 
                         $this->m_stok->update($kd_barang); 
                         redirect('c_stok'); 
                     } 
                              } 
             } 
         } 
     } 