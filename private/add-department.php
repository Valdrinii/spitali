<?php 
include "inc/navbar.php";
include "inc/sidenav.php";

$doctors = Doctor::get();

if (isset($_POST['add-department'])){
    $department = new Department();
    $department->name = $_POST['name'];
    $department->description = $_POST['description'];
    $department->doctor_id = $_POST['doctor_id'];
    $department->save();
}

?>
      
      <!-- Main Content -->
      <div class="col-md-10">
        <main>
          <div class="container">
            <h1 class="mt-4">Add a Department</h1>
            <div class="row justify-content-center">
              <div class="col-lg-9">
                <div class="card shadow-lg border-0 rounded-lg mt-5">
                  <div class="card-header">
                    <h3 class="text-center font-weight-light my-2">Add Department</h3>
                  </div>
        
                  <div class="card-body">
                    <form method="post">
                      <div class="form-group my-2">
                        <label class="small mb-1" for="name">Name:</label>
                        <input class="form-control py-2" name="name" type="text" placeholder="Enter first name" />
                      </div>
                      <div class="form-group my-2">
                        <label class="small mb-1" for="description">Description:</label>
                        <input class="form-control py-2" name="description" id="description" type="text" placeholder="Enter description" />
                      </div>
                      <div class="form-group my-2">
                      <label class="small mb-1">Doctor :</label>
                            <select name="doctor_id" class="form-control" id="">
                                <option value="" class="">Choose a doctor:</option>
                                <?php
                                    foreach($doctors as $doctor){
                                        echo "<option value='$doctor->id'>$doctor->firstname $doctor->lastname</option>";
                                    }
                                ?>
                            </select>
                      </div>
                      <div class="my-2 py-2">
                        <input class="btn btn-primary" id="login" value="Create Department" type="submit" name="add-department" />
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
