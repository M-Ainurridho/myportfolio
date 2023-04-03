<?php

class Projects extends Controller
{
    // Default open pages
    public function index()
    {
        $data['title'] = 'Projects';
        $data['projects'] = $this->model('Projects_model')->getAllProjects();

        $this->view('templates/templates-user/header', $data);
        $this->view('projects/index', $data);
        $this->view('templates/templates-user/footer');
    }

    // Page Detail Project
    public function detail($id)
    {
        $data['title'] = 'Project Detail';
        $data['project'] = $this->model('Projects_model')->getProjectById($id);

        $data['project']["start_date"] = date('F j, Y', strtotime($data['project']["start_date"]));
        $data['project']["end_date"] = date('F j, Y', strtotime($data['project']["end_date"]));

        $this->view('templates/templates-user/header', $data);
        $this->view('projects/detail', $data);
        $this->view('templates/templates-user/footer');
    }

    // Delete Spesifik Project
    public function delete($id)
    {
        if (empty($_SESSION['login'])) {
            header('Location: ' . BASEURL . '/login');
            exit;
        }

        if ($this->model('Projects_model')->deleteProjectById($id) > 0) {
            Message::flash('Selamat projects berhasil', 'dihapus', 'success');
            header('Location: ' . BASEURL . '/admin');
            exit;
        } else {
            Message::flash('Maaf projects gagal', 'dihapus', 'danger');
            header('Location: ' . BASEURL . '/admin');
            exit;
        }
    }

    // Page Add New Project
    public function add()
    {
        if (empty($_SESSION['login'])) {
            header('Location: ' . BASEURL . '/login');
            exit;
        }

        $data['title'] = 'Add New Project';
        $data['dir'] = 'Admin';

        $this->view('templates/templates-admin/header', $data);
        $this->view('projects/add', $data);
        $this->view('templates/templates-admin/footer');
    }

    // Insert New Project to Database
    public function insert_data()
    {
        if (empty($_SESSION['login'])) {
            header('Location: ' . BASEURL . '/login');
            exit;
        }

        if ($this->model('Projects_model')->addNewProject($_POST) > 0) {
            Message::flash('Selamat projects baru berhasil', 'ditambahkan', 'success');
            header('Location: ' . BASEURL . '/admin');
            exit;
        } else {
            Message::flash('Maaf projects baru gagal', 'ditambahkan', 'danger');
            header('Location: ' . BASEURL . '/admin');
            exit;
        }
    }

    // Page Edit Spesifik Project
    public function edit($id)
    {
        if (empty($_SESSION['login'])) {
            header('Location: ' . BASEURL . '/login');
            exit;
        }

        $data['title'] = 'Edit Project';
        $data['dir'] = 'Admin';
        $data['project'] = $this->model('Projects_model')->getProjectById($id);

        $this->view('templates/templates-admin/header', $data);
        $this->view('projects/edit', $data);
        $this->view('templates/templates-admin/footer');
    }

    public function dark()
    {
        $_SESSION['theme'] = true;
        header('Location: ' . BASEURL . '/projects');
        exit;
    }

    public function light()
    {
        unset($_SESSION['theme']);
        header('Location: ' . BASEURL . '/projects');
        exit;
    }
}
