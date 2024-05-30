<?php include "inc/header.php" ?>

<!-- Team Start -->
<div class="container-fluid py-5">
    <div class="container">
        <div id="app">
            <!-- Adjusted the size and padding of the filter input -->
            <input type="text" id="filterInput" placeholder="Find" class="form-control mb-2 filter-input">
            <div class="row g-2">
                <div class="table-responsive">
                    <table id="departmentsTable" class="table table-bordered border-5 table-striped">
                        <thead class="thead-dark">
                            <tr class="bg-primary text-white">
                                <th scope="col">Department Name</th>
                                <th scope="col">Department Description</th>
                                <th scope="col">Doctor</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $departments = Department::get();
                            $doctors = Doctor::get();
                            
                            foreach ($departments as $department) {
                                echo "<tr>";
                                echo "<td>" . $department->name . "</td>";
                                echo "<td>" . $department->description . "</td>";
                            
                                $doctor = $doctors->firstWhere('id', $department->doctor_id);
                            
                                if ($doctor) {
                                    echo "<td>" . $doctor->firstname . " " . $doctor->lastname ."</td>";
                                    
                                } else {
                                    echo "<td>N/A</td>";
                                }
                            
                                echo "</tr>";
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Team End -->

<!--Filter Start-->
<script src="https://cdn.jsdelivr.net/npm/vue@2.6.14/dist/vue.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        new Vue({
            el: '#app',
            data: {
                filterText: ''
            },
            mounted() {
                const filterInput = document.getElementById('filterInput');
                
                filterInput.addEventListener('input', () => {
                    this.filterText = filterInput.value.toLowerCase();
                    this.filterDepartments();
                });
            },
            methods: {
                filterDepartments() {
                    const rows = document.querySelectorAll('#departmentsTable tbody tr');
                    rows.forEach(row => {
                        const departmentName = row.querySelector('td:first-child').textContent.toLowerCase();
                        const departmentDescription = row.querySelector('td:nth-child(2)').textContent.toLowerCase();
                        const doctorName = row.querySelector('td:last-child').textContent.toLowerCase();
                        
                        const matches = departmentName.includes(this.filterText) || 
                                        departmentDescription.includes(this.filterText) ||
                                        doctorName.includes(this.filterText);

                        if (matches) {
                            row.style.display = '';
                        } else {
                            row.style.display = 'none';
                        }
                    });
                }
            }
        });
    });
</script>
<!--Filter End-->

