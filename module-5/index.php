<?php
include_once 'Class.php';
$name = '';
$email = '';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $person = new Person();
    $person->setName($_POST['name']);
    $person->setEmail($_POST['email']);

    $name = $person->getName();
    $email = $person->getEmail();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Module 5 Assignment</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-5">
                <h3>Ostad Laravel Module 5 Assignment</h3>
                <div class="card">
                    <div class="card-header">
                        <h4>Input Section</h4>
                    </div>
                    <div class="card-body">
                        <p class="text-info">Please, fill up the form and submit to see result below</p>
                        <form action="/" method="post">
                            <div class="mb-3 row">
                                <label for="inputName" class="col-sm-2 col-form-label">Name</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="inputName" name="name" placeholder="Your Name">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="inputEmail" name="email" placeholder="Your Email">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <button type="submit" class="btn btn-lg btn-dark">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <?php
        if ($name || $email) {
        ?>
            <div class="row justify-content-center mt-5">
                <div class="col-5">
                    <div class="card">
                        <div class="card-header bg-info">
                            <h4 class="text-white">Result</h4>
                        </div>
                        <div class="card-body">
                            <h5 class="text-success">You have inserted</h5>
                            <div class="mb-3 row">
                                <label for="inputPassword" class="col-sm-2 col-form-label">Name</label>
                                <div class="col-sm-10">
                                    <?php
                                    if ($name) {
                                        echo '<input type="text" class="form-control" id="inputPassword" value="' . $name . '" disabled>';
                                    } else {
                                        echo '<input type="text" class="form-control" id="inputPassword" value="Name is not set yet" disabled>';
                                    }
                                    ?>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="staticEmail" class="col-sm-2 col-form-label">Email</label>
                                <div class="col-sm-10">
                                    <?php
                                    if ($email) {
                                        echo '<input type="text" class="form-control" id="staticEmail" value="' . $email . '" disabled>';
                                    } else {
                                        echo '<input type="text" class="form-control" id="staticEmail" value="Email is not set yet" disabled>';
                                    }
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php
        }
        ?>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>