<?php
include "inc/navbar.php";
include "inc/sidenav.php";

$doctors = Doctor::get();
$patients = Patient::get();
$appointment=null;

if (isset($_POST['id'])){
    $appointment = Appointment::findOrFail($_POST['id']);
}


if (isset($_POST['edit-appointment'])){
    $appointment->firstname = $_POST['firstname'];
    $appointment->lastname = $_POST['lastname'];
    $appointment->date = $_POST['date'];
    $appointment->time = $_POST['time'];
    $appointment->doctor_id = $_POST['doctor_id'];
    $appointment->description = $_POST['description'];
    $appointment->save();
}


if (isset($_POST['delete-appointment'])){
    $appointment->delete();
}
?>    
      
      <!-- Main Content -->
      <div class="col-md-10">
        <main>
          <div class="container">
            <h1 class="mt-4">Edit Appointment</h1>
            <div class="row justify-content-center">
              <div class="col-lg-9">
                <div class="card shadow-lg border-0 rounded-lg mt-5">
                  <div class="card-header">
                    <h3 class="text-center font-weight-light my-2">Edit Appointment</h3>
                  </div>
        
                  <div class="card-body">
                    <form method="post">
                      <div class="form-group my-2">
                      <input type='hidden' name='id' id='' value='<?php echo $appointment->id?>'>
                      
                        <label class="small mb-1" for="firstname">First Name:</label>
                        <input class="form-control py-2" name="firstname" type="text" 
                        value='<?php echo $appointment->firstname?>' placeholder="Enter first name" />
                      </div>
                      <div class="form-group my-2">
                        <label class="small mb-1" for="lastname">Last Name:</label>
                        <input class="form-control py-2" name="lastname" type="text" 
                        value='<?php echo $appointment->lastname?>' placeholder="Enter last name" />
                      </div>
                      <div class="form-group my-2">
                        <label class="small mb-1" for="date">Date:</label>
                        <input class="form-control py-2" name="date" id="date" type="date" 
                        value='<?php echo $appointment->date?>' placeholder="Enter date" />
                      </div>
                      <div class="form-group my-2">
                        <label class="small mb-1" for="time">Time:</label>
                        <input class="form-control py-2" name="time" id="time" type="time" 
                        value='<?php echo $appointment->time?>' placeholder="Enter time" />
                      </div>
                      <div class="form-group">
                            <label class="small mb-1">Doctor :</label>
                            <select name="doctor_id" class="form-control" id="">
                              <?php
                              foreach($doctors as $doctor) {
                                  $selected = ($doctor->id == $appointment->doctor_id) ? 'selected' : '';
                                  echo "<option value='$doctor->id' $selected>$doctor->firstname $doctor->lastname</option>";
                              }
                              ?>
                          </select>
                        </div>
                      <div class="form-group my-2">
                        <label class="small mb-1" for="description">Description:</label>
                        <input class="form-control py-2" name="description" id="description" type="text" 
                        value='<?php echo $appointment->description?>' placeholder="Enter description" />
                      </div>
                      <div class="my-2 py-2">
                        <input class="btn btn-primary" value="Edit Appointments"
                        type="submit" name="edit-appointment"/>
                       <input class="btn btn-primary" value="Delete Appointments"
                        type="submit" name="delete-appointment"/>
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
