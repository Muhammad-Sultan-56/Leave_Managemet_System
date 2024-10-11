<?php
session_start();

include("./includes/config.php");
$msg = "";
if (isset($_POST['add-employee'])) {
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $mobile = mysqli_real_escape_string($conn, $_POST['mobile']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    $cnic = mysqli_real_escape_string($conn, $_POST['cnic']);
    $role = mysqli_real_escape_string($conn, $_POST['role']);
    $department = mysqli_real_escape_string($conn, $_POST['department']);
    $address = mysqli_real_escape_string($conn, $_POST['address']);



    // get data from database to check if already exist
    $select_qry = "SELECT * FROM employees WHERE `cnic`='$cnic'";
    $result = mysqli_query($conn, $select_qry);
    if (mysqli_num_rows($result) > 0) {
        $msg = "This Employee is Already Exist...";
    } else {
        $insert_qry = "INSERT INTO `employees`(`name`, `email`, `cnic`, `mobile`, `password`, `department_id`, `role`, `address`)
         VALUES ('$name','$email','$cnic','$mobile','$password','$department','$role','$address')";
        $result = mysqli_query($conn, $insert_qry);


        $_SESSION['status'] = "Employee has been Added Successfully...!";

        header("Location:employees.php");
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Add Employee - LMS</title>
    <!--  css -->
    <?php include("./includes/css-links.php") ?>
</head>

<body class="bg-light">
    <!-- Navbar -->
    <?php include("./includes/navbar.php") ?>


    <!-- add department form -->
    <div class="container my-1 p-4">

        <div class="row d-flex justify-conten-between align-items-center">

            <!-- heading -->
            <div class="col-md-6">
                <h5>
                    <i class="fa-solid fa-user  text-primary"></i> Add New Employee
                </h5>
            </div>

            <!-- alert -->
            <div class="col-md-6">
                <?php if (!empty($msg)) : ?>
                    <div class="alert alert-warning alert-dismissible fade show" id="notification" role="alert">
                        <strong>warning!</strong> <?php echo $msg; ?>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                <?php endif; ?>
            </div>


        </div>

        <form action="" method="post">
            <div class="row bg-white p-3 shadow shadow-sm my-3">
                <div class="col-md-6 p-2">
                    <div class="mb-2">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control" id="name" placeholder="Enter here..." name="name" required>
                    </div>
                </div>

                <div class="col-md-6 p-2">
                    <div class="mb-2">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" placeholder="Enter here..." name="email" required>
                    </div>
                </div>

                <div class="col-md-6 p-2">
                    <div class="mb-2">
                        <label for="cnic" class="form-label">CNIC</label>
                        <input type="number" class="form-control" id="cnic" placeholder="Enter here..." name="cnic" required>
                    </div>
                </div>

                <div class="col-md-6 p-2">
                    <div class="mb-2">
                        <label for="mobile" class="form-label">Mobile</label>
                        <input type="number" class="form-control" id="mobile" placeholder="Enter here..." name="mobile" required>
                    </div>
                </div>

                <div class="col-md-6 p-2">
                    <div class="mb-2">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" id="password" placeholder="Enter here..." name="password" required>
                    </div>
                </div>

                <div class="col-md-6 p-2">
                    <div class="mb-2">
                        <label for="address" class="form-label">Address</label>
                        <input type="text" class="form-control" id="address" placeholder="Enter here..." name="address" required>
                    </div>
                </div>

                <div class="col-md-6 p-2">
                    <div class="mb-2">
                        <label for="department" class="form-label">Department</label>
                        <select name="department" id="department" class="form-control">
                            <option value="-1">--- Choose here ---</option>
                        </select>
                    </div>
                </div>

                <div class="col-md-6 p-2">
                    <div class="mb-2">
                        <label for="role" class="form-label">Role</label>
                        <select name="role" id="role" class="form-control">
                            <option value="-1">--- Choose here ---</option>
                            <option value="0">User</option>
                            <option value="1">Admin</option>
                        </select>
                    </div>
                </div>


                <hr>
                <div class="col-md-9"></div>
                <div class="col-md-3 ">
                    <div class="d-grid text-end">
                        <button class="btn btn-primary mb-3 " name="add-employee" type="submit">Submit</button>
                    </div>
                </div>
            </div>
        </form>

        <!-- js  -->
        <?php include("./includes/js-links.php") ?>

</body>

</html>