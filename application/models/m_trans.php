<?
if (!defined('BASEPATH')) 
     exit('No direct script access allowed'); 
 
class m_trans extends CI_Model { 
 
 // insert data ke database    // 
   function tambah() { 
         $kode = $this->input->post('kd_harga'); 
         $tgl_trans = date('Y-m-d',strtotime($this->input->post('tanggal'))); 
         $nomor = $this->input->post('numb'); 
		 $buy = $this->input->post('select2');
         $price = $this->input->post('select'); 
        
         
         $data = array('id_trans' => NULL, 
             'kode_harga' => $kode,
             'tanggal'    => $tgl_trans, 
             'nomor'      => $nomor,
			 'beli'		  => $buy,
             'harga'      => $price, 
            
             ); 
         $this->db->insert('tbl_trans', $data); 
     }
	 
   // mengambil semua data dari database // 
     function ambil($limit, $offset) { 
          $ambil = $this->db->get('tbl_trans', $limit, $offset); 
         if ($ambil->num_rows() > 0) { 
             foreach ($ambil->result() as $data) { 
                 $hasil[] = $data; 
             } 
             return $hasil; 
         } 
     } 
//Pagination//
    function hitung() {
        $this->db->order_by('id_trans', 'ASC');
        return $this->db->count_all("tbl_trans");
    }

 function batas($limit, $start) {
        $this->db->limit($limit, $start);
        $this->db->order_by('id_trans', 'ASC');
        $query = $this->db->get("tbl_trans");
 
        if ($query->num_rows() > 0) {
            foreach ($query->result() as $row) {
                $data[] = $row;
            }
            return $data;
        }
        return false;
   }
 // mengambil data sesuai id_jenis    // 
   /**  function edit($a) { 
         $d = $this->db->get_where('tbl_trans', array('id_trans' => $a))->row(); 
         return $d; 
     } **/
 // menghapus salah satu data    // 
     function hapus($a) { 
         $this->db->delete('tbl_trans', array('id_trans' => $a)); 
         return; 
     } 
 function tampil(){
$keyword = $this->session->userdata('keyword');
        $this->db->from('tbl_trans');        
                
        $this->db->like('tanggal', $keyword);  
        
        return $this->db->count_all_results();
 }


function caridata($limit, $offset) {
$keyword = $this->session->userdata('keyword');
$this->db->like('tanggal', $keyword);  
$query = $this->db->get ('tbl_trans');
$this->db->limit($limit, $offset);
return $query->result();
if ($result->num_rows() > 0) 
        {
            return $result->result_array();
        } 
        else 
        {
            return array();
        } 


}



} 