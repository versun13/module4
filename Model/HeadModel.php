<?php

namespace Model;


class HeadModel extends BaseModel
{
    protected $table = 'head';


    public function saveSelected($id)
    {
        $query = " UPDATE head
                    set `is_active` = '0'
                      
        ";

        $this->db->execute($query);

        $query = " UPDATE head
                    set `is_active` = '1' where `head_id`='{$id}'
        ";

        return $this->db->execute($query);
    }
}