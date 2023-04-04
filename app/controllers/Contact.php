<?php

class Contact extends Controller
{
    public function index()
    {
        $data['title'] = 'Contact';

        $this->view('templates/templates-user/header', $data);
        $this->view('contact/index');
        $this->view('templates/templates-user/footer');
    }

    public function send()
    {
        if ($this->model('Contact_model')->sendInfo($_POST) > 0) {
            Message::contactInfoMessage('Pesan berhasil', 'dikirim', 'success', 'Mohon ditunggu infonya');
            header('Location: ' . BASEURL . '/contact');
            exit;
        } else {
            Message::contactInfoMessage('Pesan gagal', 'dikirim', 'danger', 'Silahkan dicoba kembali');
            header('Location: ' . BASEURL . '/contact');
            exit;
        }
    }

    public function dark()
    {
        $_SESSION['theme'] = true;
        header('Location: ' . BASEURL . '/contact');
        exit;
    }

    public function light()
    {
        unset($_SESSION['theme']);
        header('Location: ' . BASEURL . '/contact');
        exit;
    }
}
