<?php

namespace Model;


class MailsendModel extends BaseModel
{
    protected $table = 'mail_send';

    public function save($name,$surname,$email) {

        $name = $this->db->escape($name);
        $surname = $this->db->escape($surname);
        $email = $this->db->escape($email);

        $query = " INSERT INTO mail_send
                    set `name` = '{$name}',
                        `surname` = '{$surname}',
                        `email` = '{$email}'
        ";

        return $this->db->execute($query);
    }
}