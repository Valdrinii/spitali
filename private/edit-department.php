<?php 
include "inc/navbar.php";
include "inc/sidenav.php"; 

$doctors = Doctor::get();
$department=null;

if (isset($_POST['id'])){
    $department = Department::findOrFail($_POST['id']);
}


if (isset($_POST['edit-department'])){
    $department->name = $_POST['name'];
    $department->description = $_POST['description'];
    $department->doctor_id = $_POST['doctor_id'];
    $department->save();
}

if (isset($_POST['delete-department'])){
    $department->delete();
}

?>
      
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
                    <form method="post" action="">
                    <div class="form-group">
                    <input type='hidden' name='id' id='' value='<?php echo $department->id?>'>
                    
                        <div class="form-group">
                            <label class="small mb-1" for="date">Name :</label>
                            <input class="form-control py-4" name="name" type="text" value='<?php echo $department->name?>' placeholder="Enter department's name" />
                        </div>
                        <div class="form-group">
                            <label class="small mb-1" for="phone">Description :</label>
                            <input class="form-control py-4" name="description" value='<?php echo $department->description?>' type="text" placeholder="Enter description" />
                        </div>
                        <div class="form-group">
                            <label class="small mb-1">Doctor :</label>
                            <select name="doctor_id" class="form-control">
                              <?php
                              foreach ($doctors as $doctor) {
                                $selected = ($doctor->id == $department->doctor_id) ? 'selected' : '';
                                echo "<option value='$doctor->id' $selected>$doctor->firstname $doctor->lastname</option>";
                                }
                              ?>
                            </select>
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
