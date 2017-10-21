<?php 
 
if (!defined('BASEPATH')) 
     exit('No Direct Access Allowed !'); 
 
class c_laporan extends CI_Controller { 
 
     function __construct() {  
         parent::__construct(); 
         $this->load->helper(array('url', 'form'));
         
         $this->load->model('m_laporan'); 
     } 
// fungsi index saat controller pertamakali dijalankan // 
     function index() { 

       $this->data['title']='INDEX LAPORAN';
       $this->data['page'] = 'tbl_laporan/form';
	   $this->load->view('harga', $this->data); 
}

    function laporan(){
     
      $fromdate = $this->input->post('fromdate');
      $todate = $this->input->post('todate');
      $this->data['lapor']=$this->m_laporan->laporan($fromdate,$todate);
  	  $this->data['jumlah']=$this->m_laporan->total($fromdate,$todate);
  	  $this->data['kurang']=$this->m_laporan->total2($fromdate,$todate);
  	  $this->data['result']=$this->m_laporan->hasil($fromdate,$todate);
  	  $this->data['hasil']=$this->m_laporan->uang($fromdate,$todate);
  	  
	  $this->data['page']='tbl_laporan/view';
      $this->data['title']='HASIL LAPORAN';
      $this->data['number']= (int)$this->uri->segment(3) +1;      
      $this->load->view('harga',$this->data);
      }
}
