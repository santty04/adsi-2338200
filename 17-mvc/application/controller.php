<?php

class Controller {
public $load;
public $model;

function __construct() {
$this->load = new Load();
$this->model = new Model();
$this->welcome();


}
private function welcome() {
    $data = $this->model->listUsers();
    $this->load->view('welcome.php', $data);
}
}