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

        $data['title'] = 'Admin Projects';
        $data['dir'] = 'Admin';
        $data['projects'] = $this->model('Projects_model')->getAllProjects();

        $this->view('templates/templates-admin/header', $data);
        $this->view('admin/projects/' . $url, $data);
        $this->view('templates/templates-admin/footer');
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
