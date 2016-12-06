<?php

namespace Model;


class MessageModel extends BaseModel
{
    protected $table = 'messages';

    public function save($message, $newsId, $userId)
    {

        $message['message'] = $this->db->escape($message['message']);
        $newsId = $this->db->escape($newsId);
        $userId = $this->db->escape($userId);

        $query = " INSERT INTO messages
                    set `message` = '{$message['message']}',
                        user_id = '{$userId}',
                        news_id = '{$newsId}'
        ";

        return $this->db->execute($query);
    }

    public function saveAnswer($message, $newsId, $userId,$responseTo)
    {

        $message['message'] = $this->db->escape($message['message']);
        $newsId = $this->db->escape($newsId);
        $userId = $this->db->escape($userId);
        $responseTo = $this->db->escape($responseTo);

        $query = " INSERT INTO messages
                    set `message` = '{$message['message']}',
                        user_id = '{$userId}',
                        news_id = '{$newsId}',
                        response_to = '{$responseTo}'
        ";

        return $this->db->execute($query);
    }

    public function getMessage($id)
    {
        $result = $this->db->query('select * from ' . $this->table . " LEFT JOIN login
ON user_id=id left join articles ON news_id=article_id where news_id='{$id}' and response_to<1 order by rating desc");
        return $result;
    }
    public function getAnswer($newsId,$id)
    {
        $result = $this->db->query('select * from ' . $this->table . " LEFT JOIN login
ON user_id=id left join articles ON news_id=article_id where news_id='{$newsId}' and response_to='{$id}' order by message_time DESC");
        return $result;
    }

    public function getMessageToAgree()
    {
        $result = $this->db->query('select * from ' . $this->table . " LEFT JOIN login
ON user_id=id left join articles ON news_id=article_id where category_id='1' and is_agreed='0'");
        return $result;
    }
    public function saveAgree($id)
    {
        $id = $this->db->escape($id);

        $query = " UPDATE messages
                    set `is_agreed` = '1' where message_id='{$id}'
                        
        ";

        return $this->db->execute($query);
    }
    public function edit($id,$message)
    {
        $id = $this->db->escape($id);
        $message = $this->db->escape($message);

        $query = " UPDATE messages
                    set `message` = '$message' where message_id='{$id}'
                        
        ";
        return $this->db->execute($query);
    }
    public function getMessageEdit($id)
    {
        $result = $this->db->query('select * from ' . $this->table . " where message_Id='{$id}'");
        return $result;
    }
    public function getTopUsers()
    {
        $result = $this->db->query('select user_id,login,count(*) from ' . $this->table . " left join login on user_id=id Group by user_id order by count(*) desc limit 5");
        return $result;
    }
    public function countMessages($id) {
        $result = $this->db->query('select COUNT(*) from ' .$this->table. " where user_id ='{$id}'");
        return $result;
    }
    public function getPageArticles($from,$limit,$id) {
        $result = $this->db->query('select * from ' . $this->table. " where user_id='{$id}' limit {$from},{$limit} ");
        return $result;
    }
    public function getTopThree() {
        $result = $this->db->query('select article_id,title,article_date, count(*) from ' . $this->table.' left join articles on news_id=article_id Where  `article_date` > NOW( ) - INTERVAL 1 day group by article_id  order by count(*)  desc' );
        return $result;
    }
    public function rating($zero,$id) {
        if($zero==1){
            $query = " UPDATE messages
                    set `rating` =`rating`+ '1' where message_id='{$id}'
                        
        ";
        } else{
            $query = " UPDATE messages
                    set `rating` =`rating`- 1 where message_id='{$id}'
                        
        ";
        }
        return $this->db->execute($query);
    }

}