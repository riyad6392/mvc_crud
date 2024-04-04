<?php

require_once 'CrudModel.php';

class CrudController {
    private $model;

    public function __construct($model) {
        $this->model = $model;
    }

    public function getAllEmployees() {
        return $this->model->getAllEmployees();
    }

    public function updateEmployee($id, $name, $email, $designation, $address) {
        return $this->model->updateEmployee($id, $name, $email, $designation, $address);
    }

    public function deleteEmployee($id) {
        return $this->model->deleteEmployee($id);
    }
}

?>