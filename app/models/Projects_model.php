<?php

class Projects_model
{
    private $table = 'projects';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllProjects()
    {
        $this->db->query("SELECT * FROM " . $this->table);
        return $this->db->resultAll();
    }

    public function getProjectById($id)
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id=:id');
        $this->db->bind('id', $id);

        return $this->db->single();
    }

    public function deleteProjectById($id)
    {
        $this->db->query('DELETE FROM ' . $this->table . ' WHERE id=:id');
        $this->db->bind('id', $id);

        $this->db->execute();
        return $this->db->rowCount();
    }

    public function addNewProject($data)
    {
        $query = 'INSERT INTO projects VALUES (0, :title, :start_date, :end_date, :description, :image)';

        $this->db->query($query);
        $this->db->bind('title', $data['title']);
        $this->db->bind('start_date', $data['startDate']);
        $this->db->bind('end_date', $data['endDate']);
        $this->db->bind('description', $data['description']);
        $this->db->bind('image', $data['image']);

        $this->db->execute();
        return $this->db->rowCount();
    }
}

