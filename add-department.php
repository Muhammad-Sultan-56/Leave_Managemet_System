<?php
session_start();
include("./includes/config.php");
$msg = "";
if (isset($_POST['add-depart'])) {
    $department = mysqli_real_escape_string($conn, $_POST['department']);

    // get data from database to check if already exist
    $select_qry = "SELECT * FROM departments WHERE `department_name`='$department'";
    $result = mysqli_query($conn, $select_qry);
    if (mysqli_num_rows($result) > 0) {
        $msg = "This Department is Already Exist...";
    } else {
        $insert_qry = "INSERT INTO `departments`( `department_name`) VALUES ('$department')";
        $result = mysqli_query($conn, $insert_qry);


        $_SESSION['status'] = "Department has been Added Successfully...!";

        header("Location:departments.php");
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Add Department - LMS</title>
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
                    <i class="fa-solid fa-plus  text-primary"></i> Add New Department
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
            <div class="row bg-white p-2 shadow shadow-sm my-3">
                <div class="col-md-6 p-2">
                    <div class="mb-3">
                        <label for="department" class="form-label">Department Name</label>
                        <input type="text" class="form-control" id="department" placeholder="Enter here..." name="department" required>
                    </div>
                </div>
                <div class="col-md-3 p-2  align-self-center">
                    <div class="d-grid">
                        <label class="form-label d-none d-md-block mt-1"></label>
                        <button class="btn btn-primary" name="add-depart" type="submit">Submit</button>
                    </div>
                </div>
            </div>
        </form>


        <!-- js  -->
        <?php include("./includes/js-links.php") ?>

</body>

</html>