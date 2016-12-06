<?php

namespace Model;


class AdModel extends BaseModel
{
    protected $table = 'ad';


    public function saveAd($name, $price, $site, $side)
    {

        $name = $this->db->escape($name);
        $price = $this->db->escape($price);
        $site = $this->db->escape($site);
        $side = $this->db->escape($side);

        $query = " INSERT INTO ad
                    set `name` = '{$name}',
                        `price` = '{$price}',
                        `site` = '{$site}',
                        `side` = '{$side}'
        ";

        return $this->db->execute($query);
    }

    public function deleteAd($id)
    {
        $result = $this->db->query('delete from ' . $this->table . " where ad_id='{$id}'");
        return $result;
    }
}


