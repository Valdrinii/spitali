<?php 
include "inc/navbar.php";

include "inc/sidenav.php";

if (isset($_POST['add-patient'])){
  $patient = new Patient();
  $patient->firstname = $_POST['firstname'];
  $patient->lastname = $_POST['lastname'];
  $patient->identity_number = $_POST['identity_number'];
  $patient->email = $_POST['email'];
  $patient->password = $_POST['password'];
  $patient->save();
} 

?>
      
      <!-- Main Content -->
      <div class="col-md-10">
        <main>
          <div class="container">
            <h1 class="mt-4">Add a Patient</h1>
            <div class="row justify-content-center">
              <div class="col-lg-9">
                <div class="card shadow-lg border-0 rounded-lg mt-5">
                  <div class="card-header">
                    <h3 class="text-center font-weight-light my-2">Add Patient</h3>
                  </div>
        
                  <div class="card-body">
                    <form method="post">
                      <div class="form-group my-2">
                        <label class="small mb-1" for="firstname">First Name:</label>
                        <input class="form-control py-2" name="firstname" type="text" placeholder="Enter first name" />
                      </div>
                      <div class="form-group my-2">
                        <label class="small mb-1" for="lastname">Last Name:</label>
                        <input class="form-control py-2" name="lastname" type="text" placeholder="Enter last name" />
                      </div>
                      <div class="form-group my-2">
                        <label class="small mb-1" for="identity_number">Identity Number:</label>
                        <input class="form-control py-2" name="identity_number" id="identity_number" type="text" placeholder="Enter identity number" />
                      </div>
                      <div class="form-group my-2">
                        <label class="small mb-1" for="email">Email:</label>
                        <input class="form-control py-2" name="email" id="email" type="email" placeholder="Enter email" />
                      </div>
                      <div class="form-group my-2">
                        <label class="small mb-1" for="password">Password:</label>
                        <input class="form-control py-2" name="password" id="password" type="password" placeholder="Enter password" />
                      </div>
                      <div class="my-2 py-2">
                        <input class="btn btn-primary" id="login" value="Create Patient" type="submit" name="add-patient" />
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </main>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
