<?php
include "inc/navbar.php";
include "inc/sidenav.php";

$appointments = Appointment::with('patient')->with('doctor')->get();
?>

<!-- Main Content -->
<div class="col-md-10">
    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid">
                <h1 class="mt-4">Appointments</h1>
                <div class="row mb-3">
                    <div class="col-md-6">
                        <button class="btn btn-success" onclick="exportToCSV()">Export Appointments</button>
                    </div>
                    <div class="col-md-6 text-end">
                        <form method="post" enctype="multipart/form-data" class="d-inline-block">
                            <input type="file" name="file" accept=".csv" class="form-control-file d-inline-block">
                            <button type="submit" class="btn btn-primary" name="import">Import Appointments</button>
                        </form>
                    </div>
                </div>
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
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($appointments as $appointment): ?>
                                <tr>
                                    <td><?= $appointment->firstname . ' ' . $appointment->lastname ?></td>
                                    <td><?= $appointment->date ?></td>
                                    <td><?= $appointment->time ?></td>
                                    <td><?= $appointment->doctor->firstname . ' ' . $appointment->doctor->lastname ?></td>
                                    <td><?= $appointment->description ?></td>
                                    <td><?= $appointment->created_at ?></td>
                                    <td><?= $appointment->updated_at ?></td>
                                    <td>
                                        <form method="post" action="edit-appointment.php">
                                            <input type="hidden" name="id" value="<?= $appointment->id ?>">
                                            <input type="submit" class="btn btn-primary" value="Edit">
                                        </form>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </main>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script>
    function exportToCSV() {
        const table = document.getElementById("dataTable");
        const rows = table.querySelectorAll("tr");
        let csvContent = "data:text/csv;charset=utf-8,";
        rows.forEach(row => {
            const cells = row.querySelectorAll("th, td");
            const rowData = Array.from(cells).map(cell => cell.textContent);
            csvContent += rowData.join(",") + "\n";
        });
        const encodedURI = encodeURI(csvContent);
        const link = document.createElement("a");
        link.setAttribute("href", encodedURI);
        link.setAttribute("download", "appointments.csv");
        document.body.appendChild(link);
        link.click();
    }
</script>
</body>
</html>
