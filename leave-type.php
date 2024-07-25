<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Leave Type - LMS</title>
  <!--  css -->
  <?php include("./includes/css-links.php") ?>
</head>

<body class="bg-light">
  <!-- Navbar -->
  <?php include("./includes/navbar.php") ?>

  <!-- statics -->
  <div class="container my-1 p-4">
    <!-- show leaves -->
    <div class="d-flex justify-content-between align-items-center">
      <h5><i class="fa-solid fa-list text-primary"></i> Leave Types</h5>

      <div>
        <a href="add-department.html" class="btn bg-primary text-white">Add Leave Type</a>
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
          <tr>
            <th scope="row">1</th>
            <td>Mark</td>
            <td>Otto</td>
            <td>
              <i class="fa-solid fa-pen-to-square text-primary"></i>
              |
              <i class="fa-regular fa-trash-can text-danger"></i>
            </td>
          </tr>
          <tr>
            <th scope="row">2</th>
            <td>Jacob</td>
            <td>Thornton</td>
            <td>
              <i class="fa-solid fa-pen-to-square text-primary"></i>
              |
              <i class="fa-regular fa-trash-can text-danger"></i>
            </td>
          </tr>
          <tr>
            <th scope="row">3</th>
            <td colspan="2">Larry the Bird</td>
            <td>
              <i class="fa-solid fa-pen-to-square text-primary"></i>
              |
              <i class="fa-regular fa-trash-can text-danger"></i>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>

  <!-- js  -->
  <?php include("./includes/js-links.php") ?>
</body>

</html>