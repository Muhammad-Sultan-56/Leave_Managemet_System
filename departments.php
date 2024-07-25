<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Departments - LMS</title>
  <!--  css -->
  <?php include("./includes/css-links.php") ?>
</head>

<body class="bg-light">
  <!-- Navbar -->
  <?php include("./includes/navbar.php") ?>

  <!-- statics -->
  <div class="container my-1 p-4">

    <!-- alert -->
    <?php if (!empty($_SESSION['status'])) : ?>
      <div class="alert alert-success alert-dismissible fade show" id="notification" role="alert">
        <strong>Congratulations!</strong> <?php echo $_SESSION['status']; ?>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
    <?php
      unset($_SESSION['status']);
    endif; ?>

    <!-- show leaves -->
    <div class="d-flex justify-content-between align-items-center">

      <h5>
        <i class="fa-regular fa-building text-primary"></i> All Departments
      </h5>

      <div>
        <a href="add-department.php" class="btn bg-primary text-white">Add Department</a>
      </div>
    </div>

    <hr />
    <div class="my-4 bg-white shadow-sm">
      <table class="table table-hover table-striped">
        <thead>
          <tr>
            <th scope="col" class="text-primary">#</th>
            <th scope="col" class="text-primary">Department Name</th>
            <th scope="col" class="text-primary">Employees</th>
            <th scope="col" class="text-primary">Actions</th>
          </tr>
        </thead>
        <tbody>

          <?php
          include("./includes/config.php");
          // get data from database
          $select_qry = "SELECT * FROM departments";
          $result = mysqli_query($conn, $select_qry);
          if (mysqli_num_rows($result) > 0) {

            $sr = 1;
            while ($row = mysqli_fetch_assoc($result)) {

          ?>

              <tr>
                <th scope="row"><?= $sr; ?></th>
                <td><?= $row['department_name']; ?></td>
                <td><span class="badge text-bg-primary">6</span>
                </td>
                <td>
                  <i class="fa-solid fa-pen-to-square text-primary"></i>
                  |
                  <i class="fa-regular fa-trash-can text-danger"></i>
                </td>
              </tr>

          <?php $sr++;
            }
          } else {
            echo "There is not any department added...";
          } ?>
        </tbody>
      </table>

    </div>
  </div>

  <!-- js  -->
  <?php include("./includes/js-links.php") ?>
</body>

</html>