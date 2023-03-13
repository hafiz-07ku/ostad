<?php
class UserController {
    protected $file = './includes/users.csv';

    public $name;
    public $email;
    public $status;
    public $errors = [];
    public $user = [];
    public $users = [];

    public function store() {
        if (empty($_POST['name'])) {
            $this->errors['Name'] = 'Name is Required';
        } else {
            $this->user['name'] = $_POST['name'];
        }

        if (empty($_POST['email'])) {
            $this->errors['Email'] = 'Email is Required';
        } else {
            $this->user['email'] = $_POST['email'];
        }

        if (empty($_POST['password'])) {
            $this->errors['Password'] = 'Password is Required';
        }

        if ($_FILES['image']['error'] == 4 || ($_FILES['image']['size'] == 0 && $_FILES['image']['error'] == 0)) {
            $this->errors['Image'] = 'Image is Required';
        }

        if (empty($this->errors)) {
            $this->user['image'] = date('Y-m-d-H-i-s'). '.' . pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION);

            move_uploaded_file($_FILES["image"]["tmp_name"], "uploads/". $this->user['image']);
            $fp = fopen($this->file, "a");

            fputcsv($fp, $this->user);
            fclose($fp);
    
            $this->status = 'success';

        }
    }

    public function allUsers(){
        $fp = fopen($this->file, "r");

        while ($data = fgetcsv($fp)) {
            $this->users[] = $data;
        }
    }
}