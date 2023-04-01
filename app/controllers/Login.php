<?php

class Login extends Controller
{
    public function index()
    {
        $data['title'] = 'Login';

        $this->view('templates/templates-user/header', $data);
        $this->view('login/index');
        $this->view('templates/templates-user/footer');
    }

    public function verification()
    {
        if ($this->model('Login_model')->getVerification($_POST) > 0) {
            $_SESSION['login'] = true;
            setcookie('error', '', time() - 60);
            header("Location: " . BASEURL . "/admin/projects");
            exit;
        } else {
            setcookie('error', 'Username dan password salah', time() + 30);
            header("Location: " . BASEURL . "/login");
            exit;
        }
    }

    public function dark()
    {
        $_SESSION['theme'] = true;
        header('Location: ' . BASEURL . '/login');
        exit;
    }

    public function light()
    {
        unset($_SESSION['theme']);
        header('Location: ' . BASEURL . '/login');
        exit;
    }
}
