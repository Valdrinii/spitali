<?php include "inc/navbar.php";
 include "inc/sidenav.php";

 
 $doctors = Doctor::orderBy("id","desc")->get();
 
 if (isset($_POST['id'])){
     $doctor = Doctor::findOrFail($_POST['id']);
 }
 if (isset($_POST['delete-doctor'])){
     $doctor->delete();
 }
 


?>
<!-- Main Content -->
    <div class="col-md-10">
      <div id="layoutSidenav_content">
        <main>
          <div class="container-fluid">
            <h1 class="mt-4">Doctors</h1>
            <div class="row">
              <div class="col-12">
                <div class="table-responsive">
                  <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                      <tr>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Role</th>
                        <th>Email</th>
                        <th>Password</th>
                        <th>Created at</th>
                        <th>Updated at</th>
                        <th>Edit</th>
                        <!--<th>Delete</th>-->
                      </tr>
                    </thead>
                    <tbody>
                    <?php
                       foreach($doctors as $doctor){
                           echo "<tr>";
                           echo "<td>$doctor->firstname</td>";
                           echo "<td>$doctor->lastname</td>";
                           echo "<td>$doctor->email</td>";
                           echo "<td>$doctor->role</td>";
                           echo "<td>$doctor->created_at</td>";
                           echo "<td>$doctor->updated_at</td>";
                           echo "<td><form method='post' action='edit-doctor.php'>
                                <input type='hidden' name='id' id='' value='$doctor->id'>
                                <input type='submit' class='btn btn-primary' value='Edit'>
                                </form></td>";
                        //    echo "<td><form method='post' action='patients.php'>
                        //         <input type='hidden' name='id' id=''>
                        //         <input type='submit' name='delete-patient' class='btn btn-primary' value='Delete'>
                        //         </form></td>";
                       }

                    ?>
                    </tbody>
                  </table>
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
