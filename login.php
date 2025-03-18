<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Barangay Census</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="/barangay_census/public/css/style.css?v=<?php echo time(); ?>"> <!-- Prevent caching -->
</head>
<body>

    <div class="container d-flex justify-content-center align-items-center vh-100">
        <div class="row w-100">
            <!-- Left Section: System Title -->
            <div class="col-md-6 d-flex flex-column justify-content-center text-left px-5">
                <h1 class="display-5 fw-bold">Information and Census Monitoring System</h1>
                <p class="text-muted">Ensuring accurate and efficient census monitoring for a better community.</p>
            </div>
             
          

            <!-- Right Section: Login Form -->
            <div class="col-md-6 d-flex justify-content-center">
                <div class="login-card p-4">
                    <div class="text-center">
                        <img src="/barangay_census/public/images/logo.png" alt="Barangay Logo" class="barangay-logo">
                        <h4 class="mt-3">Welcome Back</h4>
                        <p class="text-muted">Login to your account</p>
                    </div>
                    <form action="../controllers/authenticate.php" method="POST">
                        <div class="mb-3">
                            <label for="username" class="form-label">Username</label>
                            <input type="text" class="form-control" name="username" placeholder="Enter your username" required>
                        </div>

                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control" name="password" placeholder="Enter your password" required>
                        </div>

                        <button type="submit" class="btn btn-primary w-100">Login</button>
                    </form>

                    <div class="text-center mt-3">
                        <a href="#" class="text-muted">Forgot Password?</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
</html>
