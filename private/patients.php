<?php 
include "inc/navbar.php";

include "inc/sidenav.php";

 
$patients = Patient::orderBy("id","desc")->get();

if (isset($_POST['id'])){
    $patient = Patient::findOrFail($_POST['id']);
}
if (isset($_POST['delete-patient'])){
    $patient->delete();
}
?>

<!-- Main Content -->
    <div class="col-md-10">
      <div id="layoutSidenav_content">
        <main>
          <div class="container-fluid">
            <h1 class="mt-4">Patients</h1>
            <div class="row">
              <div class="col-12">
                <div class="table-responsive">
                  <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                      <tr>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Identity Number</th>
                        <th>Email</th>
                        <th>Created at</th>
                        <th>Updated at</th>
                        <th>Edit</th>
                        <!--<th>Delete</th>-->
                      </tr>
                    </thead>
                    <tbody>
                      
                    <?php
                    
                       foreach($patients as $patient){
                           echo "<tr>";
                           echo "<td>$patient->firstname</td>";
                           echo "<td>$patient->lastname</td>";
                           echo "<td>$patient->identity_number</td>";
                           echo "<td>$patient->email</td>";
                           echo "<td>$patient->created_at</td>";
                           echo "<td>$patient->updated_at</td>";
                           echo "<td><form method='post' action='edit-patient.php'>
                                <input type='hidden' name='id' id='' value='$patient->id'>
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
