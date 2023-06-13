<?php require "private/bootstrap.php";?>
<?php session_start(); ?>
<html>
<head>
<link rel="stylesheet" href="bootstrap/style.css">
<link rel="stylesheet" href="style/index.css">

<!-- Icon Font Stylesheet -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
</head>

<body>
  <header>
     <!-- Navbar Start -->
     <div class="container-fluid sticky-top bg-white shadow-sm">
      <div class="container">
      <nav class="navbar navbar-expand-lg bg-white navbar-light py-3 py-lg-0">
              <a href="index.html" class="navbar-brand">
                  <h1 class="m-0 text-uppercase text-primary"><i class="fa fa-clinic-medical me-2"></i>Hospital</h1>
              </a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                  <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarCollapse">
                  <div class="navbar-nav ms-auto py-0">
                        <a href="index.php" class="nav-item nav-link">Home</a>
                        <a href="doctors.php" class="nav-item nav-link">Doctors</a>
                        <a href="contact.php" class="nav-item nav-link">Contact</a>
                        <?php
                        if (isset($_SESSION['id'])) {
                            // User is authenticated
                            
                            if ($_SESSION['role'] == 1) {
                                // User has role = 1 (doctor or admin), show the Appointments and Admin links
                                echo '<a href="appointments.php" class="nav-item nav-link">Appointments</a>';
                                echo '<a href="private/index.php" class="nav-item nav-link">Admin</a>';
                            } else {
                                // User has role = 0 (patient), show the Appointments link only
                                echo '<a href="appointments.php" class="nav-item nav-link">Appointments</a>';
                            }
                            
                            echo '<a href="logout.php" class="nav-item nav-link">Logout</a>';
                        } else {
                            // User is not authenticated, show the Login link
                            echo '<a href="login.php" class="nav-item nav-link">Login</a>';
                        }
                        ?>
                        
                        
                  </div>
              </div>
          </nav>
      </div>
  </div>
  <!-- Navbar End --> 