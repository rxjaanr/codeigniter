<?php

class Model extends CI_Model
{
    public function insert($tableName,  $data)
    {
        return $this->db->insert($tableName, $data);
    }

    public function find($tableName, $data = FALSE)
    {
        if ($data == FALSE) {
            return $this->db->get($tableName)->result_array();
        }
        return $this->db->get_where($tableName, $data)->result_array();
    }

    public function findOne($tableName,  $data)
    {
        return $this->db->get_where($tableName, $data, 1)->row_array();
    }

    public function findAndJoin($tableName, $data, $joinTable, $condition)
    {
        if (count($data) <= 0) {
            return $this->db->join($joinTable, $condition)->get($tableName)->result_array();
        }

        return $this->db->where($data)->join($joinTable, $condition)->get($tableName)->result_array();
    }
}
