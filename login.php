<?php
include "inc/header.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Authenticate the user as a patient
    $patient = Patient::where('email', $email)->first();

    // If the user is not a patient, try authenticating as a doctor
    if (!$patient) {
        $doctor = Doctor::where('email', $email)->first();
    }

    if ($patient && $password == $patient->password && $patient->role == 0) {
        // Authentication successful for the patient, store user ID and role in session
        $_SESSION['id'] = $patient->id;
        $_SESSION['role'] = 0;
        header('Location: index.php');
        exit;
    } elseif ($doctor && $password == $doctor->password && $doctor->role == 1) {
        // Authentication successful for the doctor, store user ID and role in session
        $_SESSION['id'] = $doctor->id;
        $_SESSION['role'] = 1;
        header('Location: index.php');
        exit;
    } else {
        // Invalid credentials, show error message
        $errorMessage = 'Invalid email or password';
    }
}



?>

<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>
<div class="container-fluid">
    <h1 class="mt-4">Login Form</h1>
    <div class="row justify-content-center">
        <div class="col-lg-4">
            <div class="card shadow-lg border-0 rounded-lg mt-5">
                <div class="card-header">
                    <h3 class="text-center font-weight-light my-2">Login</h3>
                </div>
                <div class="card-body">
                    <form method="post">
                        <div class="form-group mb-3">
                            <input type="email" name="email" class="form-control bg-light border-0" placeholder="Email" required>
                        </div>
                        <div class="form-group mb-3">
                            <input type="password" name="password" class="form-control bg-light border-0" placeholder="Password" required>
                        </div>
                        <div class="form-group">
                            <button class="btn btn-primary btn-block w-100" name="login" type="submit">Login</button>
                        </div>

                    </form>
                </div>
                <div class="card-footer text-center">
                    <div class="small">
                        <a href="register.php">Don't have an account? Register here</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


</body>
</html>
