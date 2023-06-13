<?php
include "inc/header.php";
$doctors = Doctor::get();
$patients = Patient::get();

if (isset($_POST['register'])){
    $patient = new Patient();
    $patient->firstname = $_POST['firstname'];
    $patient->lastname = $_POST['lastname'];
    $patient->identity_number = $_POST['identity_number'];
    $patient->email = $_POST['email'];
    $patient->password = $_POST['password'];
    $patient->role = $_POST['role'];
    $patient->save();
    header('Location: login.php');
}
?>

<div class="container-fluid">
    <h1 class="mt-4">Register Form</h1>
    <div class="row justify-content-center">
        <div class="col-lg-9">
            <div class="card shadow-lg border-0 rounded-lg mt-5">
                <div class="card-header">
                    <h3 class="text-center font-weight-light my-2">Register</h3>
                </div>
                <div class="card-body">
                    <form method="post">
                        <div class="row g-3">
                            <div class="col-lg-12 col-12">
                                <div class="form-group">
                                    <input type="text" name="firstname" class="form-control bg-light border-0" placeholder="First Name" required>
                                </div>
                            </div>
                            <div class="col-lg-12 col-12">
                                <div class="form-group">
                                    <input type="text" name="lastname" class="form-control bg-light border-0" placeholder="Last Name" required>
                                </div>
                            </div>
                            <div class="col-lg-12 col-12">
                                <div class="form-group">
                                    <input type="text" name="identity_number" class="form-control bg-light border-0" placeholder="Identity Number" required>
                                </div>
                            </div>
                            <div class="col-lg-12 col-12">
                                <div class="form-group">
                                    <input type="email" name="email" class="form-control bg-light border-0" placeholder="Email" required>
                                </div>
                            </div>
                            <div class="col-lg-12 col-12">
                                <div class="form-group">
                                    <input type="password" name="password" class="form-control bg-light border-0" placeholder="Password" required>
                                </div>
                            </div>
                            <div class="col-lg-12 col-12">
                                <div class="form-group">
                                    <select name="role" class="form-select bg-light border-0" required>
                                        <option value="">Select Role:</option>
                                        <option value="0">Patient</option>
                                        <option value="1" disabled>Doctor</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <button class="btn btn-primary btn-block w-100" name="register" type="submit">Register</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="card-footer text-center">
                    <div class="small">
                        <a href="login.php">Have an account? Go to login</a> 
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>