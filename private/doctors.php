<?php include "inc/navbar.php" ?>

<?php include "inc/sidenav.php" ?>

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
                        <th>Email</th>
                        <th>Role</th>
                        <th>Created at</th>
                        <th>Updated at</th>
                        <th>Edit</th>
                        <!--<th>Delete</th>-->
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>Filan</td>
                        <td>Fisteku</td>
                        <td>filan.fisteku@gmail.com</td>
                        <td>1</td>
                        <td>2021-03-05</td>
                        <td>2023-06-23</td>
                        <td><a href="edit-doctor.php"><button class="btn btn-primary">Edit</button></a></td>
                        <!--<td><button class="btn btn-primary">Delete</button></td>-->
                      </tr>
                      <tr>
                        <td>Filan</td>
                        <td>Fisteku2</td>
                        <td>filan.fisteku2@outlook.com</td>
                        <td>1</td>
                        <td>2022-06-21</td>
                        <td>2022-06-25</td>
                        <td><a href="edit-doctor.html"><button class="btn btn-primary">Edit</button></a></td>
                        <!--<td><button class="btn btn-primary">Delete</button></td>-->
                      </tr>
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
