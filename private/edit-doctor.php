<?php 
include "inc/navbar.php";
include "inc/sidenav.php";

$doctor = null;
if (isset($_POST['id'])){
    $doctor = Doctor::findOrFail($_POST['id']);
}

if (isset($_POST['edit-doctor'])){
    $doctor->firstname = $_POST['firstname'];
    $doctor->lastname = $_POST['lastname'];
    $doctor->role = $_POST['role'];
    $doctor->email = $_POST['email'];
    $doctor->password = $_POST['password'];
    $doctor->save();
}

if (isset($_POST['delete-doctor'])){
    $doctor->delete();
}
 ?>
      
      <!-- Main Content -->
      <div class="col-md-10">
        <main>
          <div class="container">
            <h1 class="mt-4">Edit Doctor</h1>
            <div class="row justify-content-center">
              <div class="col-lg-9">
                <div class="card shadow-lg border-0 rounded-lg mt-5">
                  <div class="card-header">
                    <h3 class="text-center font-weight-light my-2">Edit Doctor</h3>
                  </div>
        
                  <div class="card-body">
                <form method="post" >
                    <div class="form-group">
                        <input type='hidden' name='id' id='' value='<?php echo $doctor->id?>'>
                            <label class="small mb-1" for="firstname">First Name :</label>
                            <input class="form-control py-4" name="firstname"type="text" 
                            value='<?php echo $doctor->firstname?>' placeholder="Enter first name" />
                        </div>
                        <div class="form-group">
                            <label class="small mb-1" >Last Name :</label>
                            <input class="form-control py-4" name="lastname" type="text" 
                            value='<?php echo $doctor->lastname?>' placeholder="Enter last name" />
                        </div>
                        <div class="form-group">
                            <label class="small mb-1" for="phone">Role :</label>
                            <input class="form-control py-4" name="role" type="text"
                            value='<?php echo $doctor->role?>' placeholder="Enter role" />
                        </div>
                        <div class="form-group">
                            <label class="small mb-1" for="phone">Email :</label>
                            <input class="form-control py-4" name="email" id="email" type="email"
                            value='<?php echo $doctor->email?>' placeholder="Enter email" />
                        </div>
                        <div class="form-group">
                            <label class="small mb-1" for="phone">Password :</label>
                            <input class="form-control py-4" name="password" id="email" type="password"
                            value='<?php echo $doctor->password?>' placeholder="Enter password" />
                        </div>
                        <input class="btn btn-primary"  id="login" value="Edit Doctor"
                         type="submit" name="edit-doctor"/>
                        <input class="btn btn-primary"  id="login" value="Delete Doctor"
                         type="submit" name="delete-doctor"/>
                    </form>
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
