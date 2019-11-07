<?php
class User_model extends CI_Model
{
    private $table = 'tbl_user';
    public function getAll()
    {
        return $this->db->get($this->table)->result();
    }
    public function insertUser($value)
    {
        return $this->db->insert($this->table, $value);
    }
    public function delete($id)
    {
        return $this->db->delete($this->table, $id);
    }
    public function getById($id)
    {
        return $this->db->where($id)
            ->get($this->table)
            ->row();
    }
    public function update($value, $id)
    {
        return $this->db
            ->where($id)
            ->set($value)
            ->update($this->table);
    }
}
