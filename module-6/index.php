<?php
    include_once 'includes/header.php';
    include_once 'UserController.php';
    $user = new UserController();
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $user->store();
        setcookie('ostad_cookie', $_POST['name'], time() + (86400 * 30), '/');
    }
    
?>
    <div class="row justify-content-center mt-5">
        <div class="col-6">
            <h3>Ostad Laravel Module 6 Assignment</h3>
            <div class="card">
                <div class="card-header">
                    <h4>Create Your Profile</h4>
                </div>
                <div class="card-body">
                    <?php
                    if (!empty($user->errors)) {
                        $output = '<div class="alert alert-danger alert-dismissible fade show" role="alert">';
                        $output .= '<oul>';
                        
                        foreach ($user->errors as $key => $value) {
                            $output .= "<li>{$value}</li>";
                        }
                        $output .= '</ul>';
                        $output .= '</div>';

                        echo $output;
                    }
                    ?>
                    <p class="text-info">Please, fill up the form to create your social profile</p>
                    <form action="/" method="post" enctype="multipart/form-data">
                        <div class="mb-3 row">
                            <label for="inputName" class="col-sm-3 col-form-label">Name</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="inputName" name="name" placeholder="Your Name">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="inputEmail" class="col-sm-3 col-form-label">Email</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="inputEmail" name="email" placeholder="Your Email">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="inputPassword" class="col-sm-3 col-form-label">Password</label>
                            <div class="col-sm-9">
                                <input type="password" class="form-control" id="inputPassword" name="password" placeholder="Your Password">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="inputProfilePic" class="col-sm-3 col-form-label">Email</label>
                            <div class="col-sm-9">
                                <input type="file" class="form-control" id="inputProfilePic" name="image">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <button type="submit" class="btn btn-lg btn-success">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
<?php
include_once 'includes/footer.php';
?>