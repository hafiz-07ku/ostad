<?php
include_once 'includes/header.php';
include_once 'UserController.php';
$user = new UserController();

$user->allUsers();
setcookie('ostad_cookie', 'jkjk', time() + (86400 * 30), '/');
?>
<div class="row justify-content-center mt-5">
    <div class="col-6">
        <div class="card">
            <div class="card-header">
                <h4>User List</h4>
            </div>
            <div class="card-body">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">SL</th>
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Image</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        if (count($user->users) > 0) {
                            $sl = 1;
                            foreach ($user->users as $value) {
                        ?>
                                <tr>
                                    <th><?php echo $sl; ?></th>
                                    <td><?php echo $value[0]; ?></td>
                                    <td><?php echo $value[1]; ?></td>
                                    <td><?php echo $value[2]; ?></td>
                                </tr>
                        <?php
                                $sl++;
                            }
                        } else {
                            echo '<tr><td colspan="4"><h5 class="text-center">No User Found</h5></td></tr>';
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<?php
include_once 'includes/footer.php';
?>