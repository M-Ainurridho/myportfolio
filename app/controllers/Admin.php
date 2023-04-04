<?php

class Admin extends Controller
{
    public function index()
    {
        return $this->projects();
    }

    public function projects($page = 'page', $index = '1')
    {
        if (empty($_SESSION['login'])) {
            header('Location: ' . BASEURL . '/login');
            exit;
        }

        $data['title'] = 'Admin Projects';
        $data['dir'] = 'Admin';
        $data['projects'] = $this->model('Projects_model')->getAllProjects($index);
        $data['jmlhalaman'] = $data['projects'][1];
        $data['active'] = $data['projects'][2];

        $this->view('templates/templates-admin/header', $data);
        $this->view('admin/projects/index', $data);
        $this->view('templates/templates-admin/footer');
    }

    public function info()
    {
        if (empty($_SESSION['login'])) {
            header('Location: ' . BASEURL . '/login');
            exit;
        }

        $data['title'] = 'Info Message';
        $data['dir'] = 'Admin';
        $data['info'] = $this->model('Contact_model')->getAllInfo();

        $this->view('templates/templates-admin/header', $data);
        $this->view('admin/info/index', $data);
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
