<?php include "inc/header.php" ?>

<!-- Team Start -->
            <div class="container-fluid py-5">
                <div class="container">
                    <div class="row g-5">
                        <div class="table-responsive">
                            <table class="table table-bordered border-5 table-striped">
                                <thead class="thead-dark">
                                    <tr class="bg-primary text-white">
                                        <th scope="col">Department Name</th>
                                        <th scope="col">Department Description</th>
                                        <th scope="col">Doctor</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <tbody>
                                    <?php
                                    $departments = Department::get();
                                    $doctors = Doctor::get();
                                    
                                    foreach ($departments as $department) {
                                        echo "<tr>";
                                        echo "<td>" . $department->name . "</td>";
                                        echo "<td>" . $department->description . "</td>";
                                    
                                        // Find the corresponding doctor for the current department
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
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            

<!-- Team End -->
