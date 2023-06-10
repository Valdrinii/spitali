<?php include "inc/header.php" ?>

<!-- Appointment Start -->
<div class="container-fluid bg-primary my-5 py-5">
    <div class="container py-5">
        <div class="row gx-5">
            <div class="col-lg-6 mb-5 mb-lg-0">
                <div class="mb-4">
                    <h5 class="d-inline-block text-white text-uppercase border-bottom border-5">Appointment</h5>
                    <h1 class="display-4">Make An Appointment For Your Family</h1>
                </div>
                <p class="text-white mb-5">Eirmod sed tempor lorem ut dolores. Aliquyam sit sadipscing kasd ipsum. Dolor ea et dolore et at sea ea at dolor, justo ipsum duo rebum sea invidunt voluptua. Eos vero eos vero ea et dolore eirmod et. Dolores diam duo invidunt lorem. Elitr ut dolores magna sit. Sea dolore sanctus sed et. Takimata takimata sanctus sed.</p>
                <a class="btn btn-dark rounded-pill py-3 px-5 me-3" href="doctors.php">Find Doctor</a>
                <a class="btn btn-outline-dark rounded-pill py-3 px-5" href="">Read More</a>
            </div>
            <div class="col-lg-6">
                <div class="bg-white text-center rounded p-5">
                    <h1 class="mb-4">Book An Appointment</h1>
                    <form method="post">
                        <div class="row g-3">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <input type="text" name="firstname" class="form-control bg-light border-0" placeholder="Your First Name" style="height: 55px;">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <input type="text" name="lastname" class="form-control bg-light border-0" placeholder="Your Last Name" style="height: 55px;">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <textarea name="description" class="form-control bg-light border-0" placeholder="Description" style="height: 55px;"></textarea>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <input type="date" name="date" class="form-control bg-light border-0 datetimepicker-input" placeholder="Date" data-target="#date" data-toggle="datetimepicker" style="height: 55px;">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <input type="time" name="time" class="form-control bg-light border-0 datetimepicker-input" placeholder="Time" data-target="#time" data-toggle="datetimepicker" style="height: 55px;">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <select name="doctor_id" class="form-select bg-light border-0" style="height: 55px;">
                                        <option>Choose a Doctor:</option>
                                        <!-- Replace the following option tags with your dynamic data -->
                                        <option value="1">Doctor 1</option>
                                        <option value="2">Doctor 2</option>
                                        <option value="3">Doctor 3</option>
                                        <!-- End of dynamic data -->
                                    </select>
                                </div>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-primary w-100 py-3" name="add-appointment" type="submit">Make An Appointment</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Appointment End -->


<?php include "inc/footer.php" ?>