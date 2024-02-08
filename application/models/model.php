<?php

class Model extends CI_Model
{
    public function insert(string $tableName, array $data)
    {
        return $this->db->insert($tableName, $data);
    }

    public function findOne(string $tableName, array $data)
    {
        return $this->db->get_where($tableName, $data, 1)->row_array();
    }
}
