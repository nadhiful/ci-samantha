<?
if (!defined('BASEPATH')) 
     exit('No direct script access allowed'); 
 
class m_laporan extends CI_Model { 

function laporan($fromdate,$todate){
$lapor = $this->db->query("SELECT * FROM tbl_trans where tanggal >= '$fromdate' and tanggal <= '$todate'");
return ($lapor->num_rows() > 0)? $lapor->result():FALSE;
//return $this->db->query("SELECT * FROM tbl_trans where tanggal >= '$fromdate' and tanggal <= '$todate'");
}
//function total($fromdate,$todate,$jml){

function total($fromdate,$todate){
$jumlah = $this->db->query("SELECT SUM(harga) as coba from tbl_trans where tanggal >= '$fromdate' and tanggal <= '$todate'");
return($jumlah->num_rows()>0)? $jumlah->result():FALSE;
}
function total2($fromdate,$todate){
$kurang =$this->db->query("SELECT SUM(beli) as coba from tbl_trans where tanggal >= '$fromdate' and tanggal <='$todate'");
return($kurang->num_rows()>0)? $kurang->result():FALSE;
}
function hasil($fromdate,$todate){
$result = $this->db->query("SELECT SUM(harga) - SUM(beli)  as coba from tbl_trans where tanggal >= '$fromdate' and tanggal <= '$todate'");
return($result->num_rows()>0)? $result->result():FALSE;
}
function uang($fromdate,$todate){
$hasil =$this->db->query("SELECT (SUM(harga) - SUM(beli)) + SUM(harga) as coba from tbl_trans where tanggal >= '$fromdate' and tanggal <= '$todate'");
return($hasil->num_rows()>0)? $hasil->result():FALSE;
}
}











//function lapor($fromdate,$todate)
//{
//$lapor = $this->db->query("SELECT * FROM tbl_trans where tanggal >= '$fromdate' and tanggal <= '$todate'");
//return ($lapor->num_rows() > 0)? $lapor->result():FALSE;
//}