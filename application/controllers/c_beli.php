<?php 
 
if (!defined('BASEPATH')) 
     exit('No Direct Access Allowed !'); 
 
class c_beli extends CI_Controller { 
 
     function __construct() {  
 
 

         parent::__construct(); 
         $this->load->helper(array('url', 'form'));
         $this->load->model('m_beli'); 
     } 
// fungsi index saat controller pertamakali dijalankan // 
     function index() { 
$config['base_url'] = site_url('c_beli/index/'); 
$config['total_rows'] = $this->m_beli->hitung(); 
$config['per_page'] =2; 
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
$this->data["query"] = $this->m_beli->batas($config["per_page"], $this->uri->segment(3));
         $this->data['page'] = 'tbl_beli/view';
         $this->data['title'] ='INDEX PEMBELIAN';
         $this->load->view('harga', $this->data); 
     } 
// fungsi tambah jenis    // 
     function tambah_jenis() { 
         $this->data['id_beli'] = "";
         $this->data['kd_barang']= "Z-0001"; 
         $this->data['tanggal'] = "";
         $this->data['nama']="Pulsa All Operator";
         $this->data['st'] = "tambah"; 
         $this->data['beli'] = ""; 
         $this->data['page'] = 'tbl_beli/form';
         $this->data['title'] ='TAMBAH PEMBELIAN';
         $this->load->view('harga', $this->data); 
     } 
// fungsi edit // 
     function edit() { 
         $id = $this->uri->segment(3); 
         if ($id == NULL) { 
             redirect('c_beli'); 
         } 
         $this->load->model('m_beli'); 
         $dt = $this->m_beli->edit($id);
         $this->data['kd_barang']=$dt->kd_barang; 
         $this->data['tanggal'] = $dt->tanggal;
         $this->data['nama'] = $dt->nama;
         $this->data['beli'] = $dt->harga; 
         $this->data['st'] = "edit"; 
         $this->data['id_beli'] = $id; 
         $this->data['page'] = 'tbl_beli/form';
         $this->data['title'] ='EDIT PEMBELIAN';
          
         $this->load->view('harga', $this->data); 
     } 
// fungsi hapus    // 
     function hapus() { 
         $u = $this->uri->segment(3); 
         $this->load->model('m_beli'); 
         $this->m_beli->hapus($u); 
         redirect('c_beli'); 
     } 

//fungsi autocomplete//


// fungsi cari //
function cari(){
        if($this->input->post('cari'))
        {
            $keyword = $this->input->post('cari');
            
            $this->session->set_userdata(
                        array('keyword' => $this->input->post('cari',TRUE))
                    );
        }
 
 $config['base_url'] = site_url('c_beli/cari');
 $config['total_rows'] = $this->m_beli->tampil();
 $config['per_page'] = $this->config->item('per_page');
 $config['uri_segment']= 3;
 $config['num_links']= 9;
 $this->pagination->initialize($config);
        
        $this->data['number']       = (int)$this->uri->segment(3) +1;
        $this->data["query"]        = $this->m_beli->caridata($config['per_page'], $this->uri->segment(3));
        $this->data["halaman"]      = $this->pagination->create_links();
   $this->data['title']='HASIL PENCARIAN'; 
   $this->data['page'] = 'tbl_beli/cari'; 
   $this->load->view('harga', $this->data); 
 }
// fungsi simpan    // 
     function simpan() { 
        $this->load->library('form_validation');
         $this->form_validation->set_rules('day', 'Kode Harga', 'trim|required'); 
         if ($this->form_validation->run() == FALSE) {  
 
 
        if ($this->input->post('submit')) { 
                 $this->data['tanggal'] = $this->input->post('day');
                 $this->data['nama'] = $this->input->post('name');
                 $this->data['id_beli'] = $this->input->post('id_beli');
                 $this->data['kd_barang']=$this->input->post('kode'); 
                 $this->data['st'] = $this->input->post('st'); 
                 $this->data['beli'] = $this->input->post('buy'); 
                 $this->data['page'] = 'tbl_beli/form'; 
                 $this->load->view('harga', $this->data); 
             }   
         } else { 
                 $st = $this->input->post('st'); 
                 if ($this->input->post('submit')) { 
                     if ($st == "tambah") { 
                         $this->load->model('m_beli'); 
                         $this->m_beli->tambah(); 
                         redirect('c_beli'); 
                     } else if ($st == "edit") { 
                         $id_beli = $this->input->post('id'); 
                         $this->load->model('m_beli'); 
                         $this->m_beli->update($id_beli); 
                         redirect('c_beli'); 
                     } 
                              } 
             } 
         } 
     } 