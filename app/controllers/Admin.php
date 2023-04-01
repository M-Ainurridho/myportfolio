<?php

class Admin extends Controller
{
    public function index()
    {
        return $this->projects();
    }

    public function projects($url = 'index', $id = 0)
    {
        if (empty($_SESSION['login'])) {
            header('Location: ' . BASEURL . '/login');
            exit;
        }

        if ($url === 'detail') {
            $data['title'] = 'Detail Project';
            $data['dir'] = 'Admin';

            $this->view('templates/templates-admin/header', $data);
            $this->view('admin/projects/' . $url);
            $this->view('templates/templates-admin/footer');
        } else if ($url === 'delete') {
            if ($this->model('Projects_model')->deleteProjectById($id) > 0) {
                Message::flash('Selamat projects berhasil', 'dihapus', 'success');
                header('Location: ' . BASEURL . '/admin/projects');
                exit;
            } else {
                Message::flash('Maaf projects gagal', 'dihapus', 'danger');
                header('Location: ' . BASEURL . '/admin/projects');
                exit;
            }
        } else if ($url === 'add') {
            $data['title'] = 'Add New Project';
            $data['dir'] = 'Admin';

            $this->view('templates/templates-admin/header', $data);
            $this->view('admin/projects/' . $url, $data);
            $this->view('templates/templates-admin/footer');
        } else if ($url === 'insert-data') {
            if ($this->model('Projects_model')->addNewProject($_POST) > 0) {
                Message::flash('Selamat projects baru berhasil', 'ditambahkan', 'success');
                header('Location: ' . BASEURL . '/admin/projects');
                exit;
            } else {
                Message::flash('Maaf projects baru gagal', 'ditambahkan', 'danger');
                header('Location: ' . BASEURL . '/admin/projects');
                exit;
            }
        } else {
            $data['title'] = 'Admin Projects';
            $data['dir'] = 'Admin';
            $data['projects'] = $this->model('Projects_model')->getAllProjects();

            $this->view('templates/templates-admin/header', $data);
            $this->view('admin/projects/' . $url, $data);
            $this->view('templates/templates-admin/footer');
        }
    }

    public function logout()
    {
        unset($_SESSION['login']);
        header('Location: ' . BASEURL . '/home');
        exit;
    }

    public function dark()
    {
        $_SESSION['theme'] = true;
        header('Location: ' . BASEURL . '/admin');
        exit;
    }

    public function light()
    {
        unset($_SESSION['theme']);
        header('Location: ' . BASEURL . '/admin');
        exit;
    }
}


