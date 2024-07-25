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

        <h5>
            <i class="fa-solid fa-plus  text-primary"></i> Add New Department
        </h5>
        <div class="row bg-white p-2 shadow shadow-sm my-3">
            <div class="col-md-6 p-2">
                <div class="mb-3">
                    <label for="department" class="form-label">Department Name</label>
                    <input type="text" class="form-control" id="department" placeholder="Enter here..." name="department" required>
                </div>
            </div>
            <div class="col-md-3 p-2  align-self-center">
                <div class="d-grid">
                    <label class="form-label d-none d-md-block"></label>
                    <button class="btn btn-primary">Submit</button>
                </div>
            </div>
        </div>



        <!-- js  -->
        <?php include("./includes/js-links.php") ?>

</body>

</html>