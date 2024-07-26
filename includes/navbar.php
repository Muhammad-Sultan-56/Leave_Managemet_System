    <nav class="navbar navbar-expand-lg bg-primary navbar-dark sticky shadow shadow-sm">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php">
                <h5>
                    <span class="text-dark">
                        <i class="fa-solid fa-user-pen"></i> Leave
                    </span>
                    Management System
                </h5>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mx-auto mb-2 mb-lg-0 gap-2">
                    <li class="nav-item">
                        <a class="nav-link text-white" aria-current="page" href="index.php">Home</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link text-white" href="#">Apply Leave</a>
                    </li>

                    <?php if ($_SESSION['role'] == 1) : ?>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Settings
                            </a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a class="dropdown-item" href="departments.php">Departments</a>
                                </li>
                                <li><a class="dropdown-item" href="employees.php">Employees</a></li>
                                <li>
                                    <a class="dropdown-item" href="leave-type.php">Leave Type</a>
                                </li>
                            </ul>
                        </li>
                    <?php endif; ?>

                    <li class="nav-item">
                        <a class="nav-link text-white" href="logout.php">Logout</a>
                    </li>
                </ul>

                <div class="d-flex">
                    <span class="fs-5">
                        <i class="fa-solid fa-circle-user fs-3"></i>
                        Welcome!
                        <span class="text-white fw-bold ms-2"><?= $_SESSION['name'] ?></span></span>
                </div>
            </div>
        </div>
    </nav>