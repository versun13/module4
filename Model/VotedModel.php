<?php

namespace Model;


class VotedModel extends BaseModel
{
    protected $table = 'voted';

    public function findVote($user_id, $comment_id) {
        $result = $this->db->query('select * from ' . $this->table. " where user_id='{$user_id}' and message_id='{$comment_id}'");
        return $result;
    }

    public function saveVote($user_id, $comment_id) {

        $user_id = $this->db->escape($user_id);
        $comment_id = $this->db->escape($comment_id);

        $query = " INSERT INTO voted
                    set `user_id` = '{$user_id}',
                        `message_id` = '{$comment_id}'
        ";

        return $this->db->execute($query);
    }

}

