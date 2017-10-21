<?
if (!defined('BASEPATH')) 
     exit('No direct script access allowed'); 
 
class m_stok extends CI_Model { 
 
// insert data ke database    // 
     function tambah() { 
        
        
         $keempat = $this->input->post('kd_barang');
         $ketiga = $this->input->post('buy'); 
         $kelima  =$this->input->post('name');
         $data = array(
             'kd_barang' => $keempat,
             'beli'     => $ketiga,
             'nama'      => $kelima); 
         $this->db->insert('tbl_stok', $data); 
     } 
   // mengambil semua data dari database // 
     function ambil($limit, $offset) { 
          $ambil = $this->db->get('tbl_stok', $limit, $offset); 
         if ($ambil->num_rows() > 0) { 
             foreach ($ambil->result() as $data) { 
                 $hasil[] = $data; 
             } 
             return $hasil; 
         } 
     } 
 // mengambil data sesuai id_jenis    // 
     function edit($a) { 
         $d = $this->db->get_where('tbl_stok', array('kd_barang' => $a))->row(); 
         return $d; 
     } 
 // menghapus salah satu data    // 
     function hapus($a) { 
         $this->db->delete('tbl_stok', array('kd_barang' => $a)); 
         return; 
     } 
 // mengubah isi data    // 
     function update($id) { 
        
         $ketiga    = $this->input->post('buy');
         $keempat = $this->input->post('kd_barang');
         $kelima  =$this->input->post('name');  
         $data = array( 
             'beli' => $ketiga,
             'kd_barang'=> $keempat,
             'nama'    =>$kelima); 
         $this->db->where('kd_barang', $id); 
         $this->db->update('tbl_stok', $data); 
     }
 function getKodeBarang()
    {
        $q = $this->db->query("select MAX(RIGHT(kd_barang,4)) as kd_max from tbl_stok");
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

function hitung() {
        $this->db->order_by('kd_barang', 'ASC');
        return $this->db->count_all("tbl_stok");
    }

 function batas($limit, $start) {
        $this->db->limit($limit, $start);
        $this->db->order_by('kd_barang', 'ASC');
        $query = $this->db->get("tbl_stok");
 
        if ($query->num_rows() > 0) {
            foreach ($query->result() as $row) {
                $data[] = $row;
            }
            return $data;
        }
        return false;
   }


/* function tampil(){
//$this->db->from('mahasiswa');
$keyword = $this->session->userdata('keyword');
        $this->db->from('tbl_stok');        
                
        $this->db->like('kd_barang', $keyword);  
        
        return $this->db->count_all_results();
 }


 function caridata($limit, $offset) {

$keyword = $this->session->userdata('keyword');
$this->db->like('kd_barang', $keyword);  
$query = $this->db->get ('tbl_stok');
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

}*/
} 