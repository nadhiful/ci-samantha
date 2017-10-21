<?
if (!defined('BASEPATH')) 
     exit('No direct script access allowed'); 
 
class m_harga extends CI_Model { 
 
// insert data ke database    // 
     function tambah() { 
         $kode = $this->input->post('kd_harga'); 
         $beli = $this->input->post('har_beli'); 
         $jual = $this->input->post('har_jual'); 
         $data = array('id_harga' => NULL, 
             'kode_harga' => $kode,
             'harga_beli' => $beli, 
             'harga_jual' => $jual); 
         $this->db->insert('tbl_harga', $data); 
     } 
   // mengambil semua data dari database // 
     function ambil() { 
          $ambil = $this->db->get('tbl_harga'); 
         if ($ambil->num_rows() > 0) { 
             foreach ($ambil->result() as $data) { 
                 $hasil[] = $data; 
             } 
             return $hasil; 
         } 
     } 
// autocomplete//
/**function search()
	{
		// tangkap variabel keyword dari URL
		$keyword = $this->uri->segment(3);

		// cari di database
		$data = $this->db->from('tbl_harga')->like('kode_harga',$keyword)->get();	

		// format keluaran di dalam array
		foreach($data->result() as $row)
		{
			$arr['query'] = $keyword;
			$arr['suggestions'][] = array(
				'value'	=>$row->kode_harga,
				'data'	=>$row->id_harga
			);
		}
		// minimal PHP 5.2
		echo json_encode($arr);
	}**/
	 
	 
 // mengambil data sesuai id_jenis    // 
     function edit($a) { 
         $d = $this->db->get_where('tbl_harga', array('id_harga' => $a))->row(); 
         return $d; 
     } 
 // menghapus salah satu data    // 
     function hapus($a) { 
         $this->db->delete('tbl_harga', array('id_harga' => $a)); 
         return; 
     } 
 // mengubah isi data    // 
     function update($id) { 
         $kode = $this->input->post('kd_harga');
         $beli = $this->input->post('har_beli'); 
         $jual = $this->input->post('har_jual'); 
         $data = array( 
             'kode_harga' => $kode,
             'harga_beli' =>$beli, 
             'harga_jual' => $jual); 
         $this->db->where('id_harga', $id); 
         $this->db->update('tbl_harga', $data); 
     }

/*function getData($kode)
    {
        $this->db->select('kode_harga');
        $this->db->like('kode_harga', $kode);
        $query = $this->db->get('tbl_harga');
        return $query->result();
    }*/

function hitung() {
        $this->db->order_by('id_harga', 'ASC');
        return $this->db->count_all("tbl_harga");
    }

 function batas($limit, $start) {
        $this->db->limit($limit, $start);
        $this->db->order_by('id_harga', 'ASC');
        $query = $this->db->get("tbl_harga");
 
        if ($query->num_rows() > 0) {
            foreach ($query->result() as $row) {
                $data[] = $row;
            }
            return $data;
        }
        return false;
   }


 function tampil(){
//$this->db->from('mahasiswa');
$keyword = $this->session->userdata('keyword');
        $this->db->from('tbl_harga');        
                
        $this->db->like('kode_harga', $keyword);  
        
        return $this->db->count_all_results();
 }


 function caridata($limit, $offset) {

$keyword = $this->session->userdata('keyword');
$this->db->like('kode_harga', $keyword);  
$query = $this->db->get ('tbl_harga');
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