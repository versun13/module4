<?php

namespace Model;


class BackModel extends BaseModel
{
    protected $table = 'back';


    public function saveSelected($id)
    {
        $query = " UPDATE back
                    set `is_active` = '0'
                      
        ";

        $this->db->execute($query);

        $query = " UPDATE back
                    set `is_active` = '1' where `back_id`='{$id}'
        ";

        return $this->db->execute($query);
    }
}