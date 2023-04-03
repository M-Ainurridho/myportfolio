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

    public function updateProjectById($data)
    {

        if ($_FILES['newimage']['error'] === 4) {
            $image = $data['oldimage'];
        } else {
            $this->deleteImageById($data['id']);
            $image = $this->upload($_FILES['newimage']);
        }

        $query = "UPDATE " . $this->table . " SET
                    title = :title,
                    start_date = :start_date,
                    end_date = :end_date,
                    description = :description,
                    image = :image 
                    WHERE id = :id";

        $this->db->query($query);
        $this->db->bind('title', $data['title']);
        $this->db->bind('start_date', $data['startDate']);
        $this->db->bind('end_date', $data['endDate']);
        $this->db->bind('description', $data['description']);
        $this->db->bind('image', $image);
        $this->db->bind('id', $data['id']);

        $this->db->execute();
        return $this->db->rowCount();
    }

    public function deleteProjectById($id)
    {
        $this->deleteImageById($id);

        $this->db->query('DELETE FROM ' . $this->table . ' WHERE id=:id');
        $this->db->bind('id', $id);

        $this->db->execute();
        return $this->db->rowCount();
    }

    public function deleteImageById($id)
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id=:id');
        $this->db->bind('id', $id);

        $project = $this->db->single();
        $imgFile = 'images/projects/' . $project['image'];
        return unlink($imgFile);
    }

    public function addNewProject($data)
    {
        $query = 'INSERT INTO projects VALUES (0, :title, :start_date, :end_date, :description, :image)';

        $image = $this->upload($_FILES['image']);

        if (!$image) {
            return false;
        }

        $this->db->query($query);
        $this->db->bind('title', $data['title']);
        $this->db->bind('start_date', $data['startDate']);
        $this->db->bind('end_date', $data['endDate']);
        $this->db->bind('description', $data['description']);
        $this->db->bind('image', $image);

        $this->db->execute();
        return $this->db->rowCount();
    }

    // Upload Image
    public function upload($image)
    {
        $imageName = $image['name'];
        $error = $image['error'];
        $imageSize = $image['size'];
        $tmp_name = $image['tmp_name'];

        if ($error === 4) {
            Message::errorUploadImage('Masukan Gambar Terlebih dahulu');
            return false;
        }

        $allowedFileExtensions = ['jpg', 'jpeg', 'png'];
        $fileExtension = explode('.', $imageName);
        $fileExtension = strtolower(end($fileExtension));

        if (!in_array($fileExtension, $allowedFileExtensions)) {
            Message::errorUploadImage('File yang diperbolehkan hanya jpg, jpeg, png');
            return false;
        }

        if ($imageSize > 2097152) {
            Message::errorUploadImage('Maksimal upload gambar project adalah 2MB');
            return false;
        }

        $imageName = uniqid($fileExtension[0]);
        $imageName .= '.';
        $imageName .= $fileExtension;

        move_uploaded_file($tmp_name, 'images/projects/' . $imageName);
        return $imageName;
    }
}


