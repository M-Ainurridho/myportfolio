<?php

class Projects extends Controller
{
    public function index()
    {
        $data['title'] = 'Projects';
        $data['projects'] = $this->model('Projects_model')->getAllProjects();

        $this->view('templates/templates-user/header', $data);
        $this->view('projects/index', $data);
        $this->view('templates/templates-user/footer');
    }

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
