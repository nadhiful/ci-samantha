<?
if (!defined('BASEPATH')) 
     exit('No direct script access allowed'); 
 
class m_beli extends CI_Model { 
 
// insert data ke database    // 
     function tambah() { 
         $pertama = $this->input->post('day'); 
         $ketiga = $this->input->post('buy');
         $keempat = "Z-0001";//$this->input->post('kode');
         $kelima ="Pulsa All Operator";//$this->input->post('name'); 
         $data = array('id_beli' => NULL, 
             'tanggal'  => $pertama,
             'beli'     => $ketiga,
             'kd_barang' => $keempat,
             'nama'     => $kelima); 
         $this->db->insert('tbl_beli', $data); 
     } 
   // mengambil semua data dari database // 
     function ambil($limit, $offset) { 
          $ambil = $this->db->get('tbl_beli', $limit, $offset); 
         if ($ambil->num_rows() > 0) { 
             foreach ($ambil->result() as $data) { 
                 $hasil[] = $data; 
             } 
             return $hasil; 
         } 
     } 
 // mengambil data sesuai id_jenis    // 
     function edit($a) { 
         $d = $this->db->get_where('tbl_beli', array('id_beli' => $a))->row(); 
         return $d; 
     } 
 // menghapus salah satu data    // 
     function hapus($a) { 
         $this->db->delete('tbl_beli', array('id_beli' => $a)); 
         return; 
     } 
 // mengubah isi data    // 
     function update($id) { 
         $pertama   = $this->input->post('day');
         $ketiga    = $this->input->post('buy');
         $keempat = $this->input->post('kode');
         $kelima  =$this->input->post('name');  
         $data = array( 
             'tanggal' => $pertama,
             'beli' => $ketiga,
             'kd_barang'=> $keempat,
             'nama'     => $kelima); 
         $this->db->where('id_beli', $id); 
         $this->db->update('tbl_beli', $data); 
     }
//Pagination//
    function hitung() {
        $this->db->order_by('id_beli', 'ASC');
        return $this->db->count_all("tbl_beli");
    }

function tampil(){
//$this->db->from('mahasiswa');
$keyword = $this->session->userdata('keyword');
        $this->db->from('tbl_beli');        
                
        $this->db->like('tanggal', $keyword);  
        
        return $this->db->count_all_results();
 }

function caridata($limit, $offset) {

$keyword = $this->session->userdata('keyword');
$this->db->like('tanggal', $keyword);  
$query = $this->db->get ('tbl_beli');
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

 function batas($limit, $start) {
        $this->db->limit($limit, $start);
        $this->db->order_by('id_beli', 'ASC');
        $query = $this->db->get("tbl_beli");
 
        if ($query->num_rows() > 0) {
            foreach ($query->result() as $row) {
                $data[] = $row;
            }
            return $data;
        }
        return false;
   }
function getKodeBarang()
    {
        $q = $this->db->query("select MAX(RIGHT(kd_barang,4)) as kd_max from tbl_beli");
        $kd = "";
        if($q->num_rows()>0)
        {
            foreach($q->result() as $k)
            {
                $tmp = ((int)$k->kd_max)+1;
                $kd = sprintf("%04s", $tmp);
            }
        }
        else
        {
            $kd = "0001";
        }
        return "Z-".$kd;
    }


} 