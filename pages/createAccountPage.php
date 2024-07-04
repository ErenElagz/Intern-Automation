<!DOCTYPE html>
<html lang="en">

<head>
    <!--Meta-->
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Intern Managment System</title>
    <link rel="icon" type="image/x-icon" href="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQhOOn89h2oC2mX4CubFI1t2B2ftiUldDH5sHC9BFxd9g&s" />

    <!--Bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <!--Header-->
    <header class="container-fluid bg-light  p-4 ">
        <h1 class="text-center">Internship Managment System</h1>
    </header>

    <!--Login-->
    <form action="../php/createAccount.php" method="post" class="container d-flex justify-content-center mt-5">
        <div class="w-75 bg-light rounded-4 p-4">
            <h2>Create an Account</h2>
            <div class="input-group mt-4 mb-2">
                <div class="input-group-prepend">
                    <div class="input-group-text">Admin</div>
                </div>
                <input type="text" name="admin" class="form-control" required /><br />
            </div>
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <div class="input-group-text">Password</div>
                </div>
                <input type="password" name="password" class="form-control" required /><br />
            </div>
            <button type="submit" class="w-100 btn btn-lg btn-primary">Sign Up</button>
        </div>
    </form>
    <div class="text-center mt-3"> <a href="../index.php" class="nav-link">
            <h5>Go Back</h5>
        </a>
    </div>
</body>

</html>