<?php
include "inc/navbar.php";
include "inc/sidenav.php";


$appointments = Appointment::with('patient')->with('doctor')->get();
// dd($appointments);

?>
<!-- Main Content -->
    <div class="col-md-10">
      <div id="layoutSidenav_content">
        <main>
          <div class="container-fluid">
            <h1 class="mt-4">Appointments</h1>
            <div class="row">
              <div class="col-12">
                <div class="table-responsive">
                  <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                      <tr>
                        <th>Patient</th>
                        <th>Date</th>
                        <th>Time</th>
                        <th>Doctor</th>
                        <th>Description</th>
                        <th>Created at</th>
                        <th>Updated at</th>
                        <th>Edit</th>
                        <!--<th>Delete</th>-->
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                            foreach($appointments as $appointment){
                                echo "<tr>";
                                echo "<td>" . $appointment->firstname . " " . $appointment->lastname . "</td>";                       
                                echo "<td>$appointment->date</td>";
                                echo "<td>$appointment->time</td>";
                                echo "<td>" . $appointment->doctor->firstname . " " . $appointment->doctor->lastname . "</td>";
                                echo "<td>$appointment->description</td>";
                                echo "<td>$appointment->created_at</td>";
                                echo "<td>$appointment->updated_at</td>";
                                echo "<td><form method='post' action='edit-appointment.php'>
                                      <input type='hidden' name='id' id='' value='$appointment->id'>
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
