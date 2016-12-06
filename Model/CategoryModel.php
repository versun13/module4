<?php

namespace Model;


class CategoryModel extends BaseModel
{
    protected $table = 'categories';
    public function saveCategory($data) {

        $data = $this->db->escape($data);


        $query = " INSERT INTO ".$this->table.
                    " set `category_name` = '{$data}'
        ";
        return $this->db->execute($query);
    }
    public function getAll() {
        $result = $this->db->query('select * from ' . $this->table);
        return $result;
    }


}