<?php

namespace Model;


class TagsModel extends BaseModel
{
    protected $table = 'tags';

    public function getBy($bySomething, $direction = "ASC")
    {
        $result = $this->db->query('select * from ' . $this->table . ' order by ' . $bySomething . " {$direction}");
        return $result;
    }

    public function getMessage($id)
    {
        $result = $this->db->query('select * from ' . $this->table . " where news_id='{$id}' and response_to<1");
        return $result;
    }

    public function saveTags($tags)
    {
        foreach ($tags as $tag) {

            $tag = $this->db->escape($tag);

            $query = " INSERT ignore INTO tags
                    set `tag_name` = '{$tag}'
        ";

            $this->db->execute($query);
        }
        return TRUE;
    }

    public function getTagsId($tags)
    {
        foreach ($tags as &$tag){
            $tag ="'".$tag."'";
        }

        $tagsQuerry=implode(",", $tags);
        $result = $this->db->query('select * from ' . $this->table . " where tag_name in ($tagsQuerry)");

        return $result;
    }

}