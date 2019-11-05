<?php
class Login_model extends CI_Model{
    private $table = 'tbl_user';

  public function cek_login($where){
    return $this->db->get_where($this->table,$where);
  }
  
}

?>