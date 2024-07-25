<?php include("./includes/config.php");
$msg = "";

if (isset($_POST['login'])) {

  $email = mysqli_real_escape_string($conn, $_POST['email']);
  $password = mysqli_real_escape_string($conn, $_POST['password']);

  if ($email == "" || $password == "") {
    $msg = "All fields are required...";
  }

  // get data from database
  $select_qry = "SELECT * FROM employees WHERE `email`='$email' AND `password`='$password'";
  $result = mysqli_query($conn, $select_qry);
  if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);

    session_start();
    $_SESSION['name'] = $row['name'];
    $_SESSION['id'] = $row['employee_id'];
    $_SESSION['role'] = $row['role'];
    header("Location:index.php");
  } else {
    $msg = "Invalid Credionals...";
  }
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Login - LMS</title>
  <!-- css links -->
  <?php include("./includes/css-links.php") ?>

</head>

<body class="bg-light">
  <div class="row justify-content-center p-4 my-5 m-0">
    <h4 class="text-center">
      <span class="text-primary">
        <i class="fa-solid fa-user-pen"></i> Leave
      </span>
      Management System
    </h4>
    <div class="col-md-4 bg-white shadow p-4 mt-3">
      <!-- Login Form -->
      <form method="post" action="">

        <!-- alert -->
        <?php if (!empty($msg)) : ?>
          <div class="alert alert-warning alert-dismissible fade show" id="notification" role="alert">
            <strong>warning!</strong> <?php echo $msg; ?>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
        <?php endif; ?>

        <h4 class="text-center">Login</h4>

        <div class="mb-3">
          <label for="email" class="form-label">Email </label>
          <input type="email" class="form-control" id="email" placeholder="Enter here..." name="email" required />
        </div>
        <div class="mb-3">
          <label for="password" class="form-label">Password</label>
          <input type="password" class="form-control" name="password" id="password" placeholder="Enter here..." required />
        </div>

        <div class="d-grid">
          <button type="submit" name="login" class="btn btn-primary my-2">Submit</button>
        </div>

      </form>
    </div>
  </div>


  <!-- js links -->
  <?php include("./includes/js-links.php") ?>
  <script>
    var notification = document.getElementById("notification");

    setTimeout(() => {
      notification.style.display = "none";
    }, 3000)
  </script>

</body>

</html>