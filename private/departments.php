<?php 
include "inc/navbar.php"; 
include "inc/sidenav.php";

$departments = Department::with('doctor')->get();

?>

<!-- Main Content -->
    <div class="col-md-10">
      <div id="layoutSidenav_content">
        <main>
          <div class="container-fluid">
            <h1 class="mt-4">Departments</h1>
            <div class="row">
              <div class="col-12">
                <div class="table-responsive">
                  <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                      <tr>
                        <th>Name</th>
                        <th>Description</th>
                        <th>Doctor</th>
                        <th>Created at</th>
                        <th>Updated at</th>
                        <th>Edit</th>
                        <!--<th>Delete</th>-->
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                       foreach($departments as $department){
                           echo "<tr>";
                           echo "<td> $department->name</td>";
                           echo "<td>$department->description</td>";
                           echo "<td>" . $department->doctor->firstname . " " . $department->doctor->lastname ."</td>";
                           echo "<td>$department->created_at</td>";
                           echo "<td>$department->updated_at</td>";
                           echo "<td><form method='post' action='edit-department.php'>
                                <input type='hidden' name='id' id='' value='$department->id'>
                                <input type='submit' class='btn btn-primary' value='Edit'>
                                </form></td>";
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
