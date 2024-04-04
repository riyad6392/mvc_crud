<?php

class CrudModel {
    private $connection;

    public function __construct($host, $username, $password, $database) {
        $this->connection = new mysqli($host, $username, $password, $database);
        if ($this->connection->connect_error) {
            die("Connection failed: " . $this->connection->connect_error);
        }
    }

    public function getAllEmployees() {
        $query = "SELECT * FROM `employee`";
        $result = $this->connection->query($query);
        if (!$result) {
            die("Query failed: " . $this->connection->error);
        }
        return $result;
    }

    public function updateEmployee($id, $name, $email, $designation, $address) {
        $query = "UPDATE `employee` SET `name`='$name', `email`='$email', `designation`='$designation', `address`='$address' WHERE `id`='$id'";
        $result = $this->connection->query($query);
        if (!$result) {
            die("Update failed: " . $this->connection->error);
        }
        return $result;
    }

    public function deleteEmployee($id) {
        $query = "DELETE FROM `employee` WHERE `id`='$id'";
        $result = $this->connection->query($query);
        if (!$result) {
            die("Delete failed: " . $this->connection->error);
        }
        return $result;
    }
}

?>