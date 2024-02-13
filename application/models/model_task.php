<?php

class Model_Task extends Model
{
    private static $PDO;
    public function __construct()
    {
        require_once "application/core/constant.php";
        Model_Task::$PDO = new PDO("mysql:dbname=" . dbname . ";host=" . dbhost, dbuser, dbpass);
    }
    public function get_data()
    {
        $select = "select id,title,description, due_date , is_done from tasks";
        $PDOStatement = Model_Task::$PDO->prepare($select);
        $PDOStatement->execute();
        return $PDOStatement->fetchAll(PDO::FETCH_BOTH);
    }
    public function create_task($title, $description, $due_date)
    {
        $insert = "insert into tasks (title, description, due_date) VALUES (:title, :description, :due_date)";
        $PDOStatement = Model_Task::$PDO->prepare($insert);
        $PDOStatement->bindParam(':title', $title);
        $PDOStatement->bindParam(':description', $description);
        $PDOStatement->bindParam(':due_date', $due_date);

        $PDOStatement->execute();
    }
    public function delete_task($id)
    {
        $insert = "delete from tasks where id=:id";
        $PDOStatement = Model_Task::$PDO->prepare($insert);
        $PDOStatement->bindParam(':id', $id);

        $PDOStatement->execute();
    }
    public function task_done($id, $is_done)
    {
        $update = "update tasks set is_done = :is_done where id = :id";
        $PDOStatement = Model_Task::$PDO->prepare($update);
        $PDOStatement->bindParam(':id', $id, PDO::PARAM_INT);
        $PDOStatement->bindParam(':is_done', $is_done, PDO::PARAM_INT);
        $PDOStatement->execute();
    }
}
