<?php
class Transaksi_model extends CI_Model
{
    private $table = 'tbl_transaksi';
    public function getAll()
    {
        return $this->db->get($this->table)->result();
    }
    public function insertTransaksi($value)
    {
        $insert = $this->db->insert($this->table, $value);
        return $insert;
    }
    public function delete($id)
    {
        return $this->db->delete($this->table,$id);
    }
    public function getById($id)
    {
        return $this->db->where($id)
                        ->get($this->table)
                        ->row();
    }
    public function update($value , $id)
    {
        return $this->db
                    ->where($id)
                    ->set($value)
                    ->update($this->table);
    }
    public function search($key)
    {
        $this->db->select("*");
        $this->db->from($this->table);
        $this->db->like('nim', $key);
        return $this->db->get()->result();
    }

}
