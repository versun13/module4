<?php

namespace Model;


class LoginModel extends BaseModel
{
    protected $table = 'login';
    
    public function getUsers($login,$password) {
        $login= $this->db->escape($login);
        $password= $this->db->escape($password);
        $result = $this->db->query('select `id`,`is_admin` from ' . $this->table." where login='{$login}' AND password='{$password}'" );
        return $result;
    }
    
    public function getUser($login,$email) {
        $result = $this->db->query('select `id` from ' . $this->table. " where login='{$login}' OR email='{$email}'");
        return $result;
    }
  
    public function save($data) {

        $data['login'] = $this->db->escape($data['login']);
        $data['password'] = $this->db->escape($data['password']);
        $data['email'] = $this->db->escape($data['email']);

        $query = " INSERT INTO login
                    set `login` = '{$data['login']}',
                        `password` = '{$data['password']}',
                        `email` = '{$data['email']}'
        ";

        return $this->db->execute($query);
    }
}

