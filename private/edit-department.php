<?php include "inc/navbar.php" ?>

<?php include "inc/sidenav.php" ?>
      
      <!-- Main Content -->
      <div class="col-md-10">
        <main>
          <div class="container">
            <h1 class="mt-4">Edit Department</h1>
            <div class="row justify-content-center">
              <div class="col-lg-9">
                <div class="card shadow-lg border-0 rounded-lg mt-5">
                  <div class="card-header">
                    <h3 class="text-center font-weight-light my-2">Edit Department</h3>
                  </div>
        
                  <div class="card-body">
                    <form method="post">
                        <div class="form-group my-2">
                            <label class="small mb-1" for="firstname">Name:</label>
                            <input class="form-control py-2" name="firstname" type="text" placeholder="Enter first name" />
                          </div>
                          <div class="form-group my-2">
                            <label class="small mb-1" for="description">Description:</label>
                            <input class="form-control py-2" name="description" id="description" type="text" placeholder="Enter description" />
                          </div>
                          <div class="form-group my-2">
                            <label class="small mb-1" for="doctor">Doctor:</label>
                            <input class="form-control py-2" name="doctor" id="doctor" type="text" placeholder="Enter doctor" />
                          </div>
                      <div class="my-2 py-2">
                        <input class="btn btn-primary" value="Edit department"
                        type="submit" name="edit-department"/>
                       <input class="btn btn-primary" value="Delete department"
                        type="submit" name="delete-department"/>
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
