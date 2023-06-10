<?php include "inc/navbar.php" ?>

<?php include "inc/sidenav.php" ?>
      
      <!-- Main Content -->
      <div class="col-md-10">
        <main>
          <div class="container">
            <h1 class="mt-4">Add a Appointment</h1>
            <div class="row justify-content-center">
              <div class="col-lg-9">
                <div class="card shadow-lg border-0 rounded-lg mt-5">
                  <div class="card-header">
                    <h3 class="text-center font-weight-light my-2">Add Appointment</h3>
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
                            <label class="small mb-1" for="date">Date:</label>
                            <input class="form-control py-2" name="date" id="date" type="text" placeholder="Enter date" />
                          </div>
                          <div class="form-group my-2">
                            <label class="small mb-1" for="time">Time:</label>
                            <input class="form-control py-2" name="time" id="time" type="text" placeholder="Enter time" />
                          </div>
                          <div class="form-group my-2">
                            <label class="small mb-1" for="doctor">Doctor:</label>
                            <input class="form-control py-2" name="doctor" id="doctor" type="text" placeholder="Enter doctor" />
                          </div>
                          <div class="form-group my-2">
                            <label class="small mb-1" for="description">Description:</label>
                            <input class="form-control py-2" name="description" id="description" type="text" placeholder="Enter description" />
                          </div>
                          <div class="my-2 py-2">
                            <input class="btn btn-primary" id="login" value="Create Appointment" type="submit" name="add-appointment" />
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