<?php

class Controller_Task extends Controller
{
    public function __construct()
    {
        parent::__construct();
    }
    function action_index()
    {
        $this->model = new Model_Task();
        $data = $this->model->get_data();
        $this->view->generate("main_view.php", "tasks_view.php", $data);
    }
    function action_create()
    {
        $this->view->generate("create_view.php", "tasks_view.php");
    }
    function action_store()
    {
        $title = $_POST['title'];
        $description = $_POST['description'];
        $due_date = $_POST['due_date'];
        $this->model = new Model_Task();
        $this->model->create_task($title, $description, $due_date);
        header('Location:/');
    }
    function action_delete()
    {
        $id = $_POST['id'];
        $this->model = new Model_Task();
        $this->model->delete_task($id);
        header('Location:/');
    }
    function action_check()
    {
        $id = $_POST['id'];
        $is_done = $_POST['is_done'] == "" ? 0 : 1;
        $this->model = new Model_Task();
        $this->model->task_done($id, $is_done);
        header('Location:/');
    }
}
