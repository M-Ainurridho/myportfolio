<?php

class Login_model
{
    private $table = 'users';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getVerification($data)
    {
        $this->db->query("SELECT * FROM " . $this->table . " WHERE username=:username");
        $this->db->bind('username', $data['username']);

        $result = $this->db->single();
        if ($result['username'] === 'admin') {
            if (password_verify($data['password'], $result['password'])) {
                return true;
            }
        } else {
            return false;
        }
    }
}
