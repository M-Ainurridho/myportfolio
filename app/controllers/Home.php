<?php

class Home extends Controller
{
    public function index()
    {
        $data['title'] = 'Home';

        $this->view('templates/templates-user/header', $data);
        $this->view('home/index');
        $this->view('templates/templates-user/footer');
    }

    public function dark()
    {
        $_SESSION['theme'] = true;
        header('Location: ' . BASEURL . '/home');
        exit;
    }

    public function light()
    {
        unset($_SESSION['theme']);
        header('Location: ' . BASEURL . '/home');
        exit;
    }
}
