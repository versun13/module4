<?php

namespace Model;


class ArticleModel extends BaseModel
{
    protected $table = 'articles';

    public function getArticle($id) {
        $result = $this->db->query('select * from ' . $this->table. " where category_id='{$id}'".' ORDER BY article_date DESC'.' LIMIT 5' );
        return $result;
    }
    public function getLastOne() {
        $result = $this->db->query('select * from ' . $this->table.' ORDER BY article_date DESC'.' LIMIT 1' );
        return $result;
    }

    public function getLast() {
        $result = $this->db->query('select * from ' . $this->table.' ORDER BY article_date DESC'.' LIMIT 4' );
        return $result;
    }

    public function getart($id) {
        $result = $this->db->query('select * from ' . $this->table. " where article_id='{$id}'");
        return $result;
    }

    public function count($id) {
        $query = "UPDATE articles set `views` = `views`+1 WHERE article_id={$id}";

        return $this->db->execute($query);
    }

    public function getArticleByTag($id) {
        $result = $this->db->query('select * from ' . $this->table. " a left join article_and_tag at on a.article_id=at.article_id LEFT JOIN tags t ON t.tag_id = at.tag_id where at.tag_id='{$id}'".' ORDER BY article_date DESC' );
        return $result;
    }
    public function getArticleByName($name) {
        $result = $this->db->query('select * from ' . $this->table. " a left join article_and_tag at on a.article_id=at.article_id LEFT JOIN tags t ON t.tag_id = at.tag_id where t.tag_name='{$name}'".' ORDER BY article_date DESC' );
        return $result;
    }

    public function saveArticle($data) {

        $data['articleName'] = $this->db->escape($data['articleName']);
        $data['image'] = $this->db->escape($data['image']);
        $data['category'] = $this->db->escape($data['category']);
        $data['content'] = $this->db->escape($data['content']);

        $query = " INSERT INTO articles
                    set `title` = '{$data['articleName']}',
                        `photo` = '{$data['image']}',
                        `category_id` = '{$data['category']}',
                        `description` = '{$data['content']}'
        ";

        return $this->db->execute($query);
    }
    public function countArticle($id) {
        $result = $this->db->query('select COUNT(*) from ' .$this->table. " where category_id ='{$id}'");
        return $result;
    }
    public function getPageArticles($from,$limit,$id) {
        $result = $this->db->query('select * from ' . $this->table. " where category_id='{$id}' order by article_date desc limit {$from},{$limit} ");
        return $result;
    }
    public function getTopThree() {
        $result = $this->db->query('select * from ' . $this->table.' left join messages on  ORDER BY article_date DESC'.' LIMIT 1' );
        return $result;
    }

}