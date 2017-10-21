<?
if (!defined('BASEPATH')) 
     exit('No direct script access allowed'); 
 
class m_user extends CI_Model { 
 
// insert data ke database    // 
     function tambah() { 
         $awal  = $this->input->post('f_name'); 
         $akhir = $this->input->post('l_name'); 
         $user  = $this->input->post('user_name'); 
         $pass  = $this->input->post('pass_word');
         $data  = array('userid' => NULL, 
             'fname' => $awal, 
             'lname' => $akhir, 
             'username' =>  $user, 
             'password' =>  $pass);        
         $this->db->insert('users', $data); 
     } 
  
 // mengambil semua data dari database // 
     function ambil($limit, $offset) { 
          $ambil = $this->db->get('users', $limit, $offset); 
         if ($ambil->num_rows() > 0) { 
             foreach ($ambil->result() as $data) { 
                 $hasil[] = $data; 
             } 
             return $hasil; 
         } 
     } 
 
// mengambil data sesuai id_jenis    // 
     function edit($a) { 
         $d = $this->db->get_where('users', array('userid' => $a))->row(); 
         return $d; 
     } 
 
// menghapus salah satu data    // 
     function hapus($a) { 
         $this->db->delete('users', array('userid' => $a)); 
         return; 
     } 
 
// mengubah isi data    // 
     function update($id) { 
         $awal  = $this->input->post('f_name'); 
         $akhir = $this->input->post('l_name'); 
         $user  = $this->input->post('user_name'); 
         $pass  = $this->input->post('pass_word');
         $data = array( 
             'fname'    => $awal, 
             'lname'    => $akhir, 
             'username' => $user,
             'password' => $pass); 
         $this->db->where('userid', $id); 
         $this->db->update('users', $data); 
     } 
} 