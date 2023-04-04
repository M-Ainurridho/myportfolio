<?php

class Contact_model
{
    private $table = 'contact';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllInfo()
    {

        $this->db->query("SELECT * FROM " . $this->table);
        return $this->db->resultAll();
    }

    public function sendInfo($data)
    {
        $query = 'INSERT INTO ' . $this->table . '  VALUES
                    (0, :name, :email, :subject, :description)';

        $this->db->query($query);
        $this->db->bind('name', $data['name']);
        $this->db->bind('email', $data['email']);
        $this->db->bind('subject', $data['subject']);
        $this->db->bind('description', $data['description']);

        $this->db->execute();
        return $this->db->rowCount();
    }
}
