<?php

namespace Model;


class ArticleandtagModel extends BaseModel
{
    protected $table = 'article_and_tag';

    public function getTags($id) {
        $result = $this->db->query('select * from '. $this->table." at left join tags t on at.tag_id=t.tag_id where article_id={$id}");
        return $result;
    }

    public function saveArticleTags($tagsId,$articleId)
    {
        foreach ($tagsId as $key=>$tagId) {

            $tagId['tag_id'] = $this->db->escape($tagId['tag_id']);
            $articleId[0]['article_id'] = $this->db->escape($articleId[0]['article_id']);

            $query = " INSERT INTO article_and_tag
                    set `article_id` = {$articleId[0]['article_id']},
                        `tag_id` = {$tagId['tag_id']}
        ";

            $this->db->execute($query);
        }
        return TRUE;
    }
}