<?php
require_once("include/header.php")
?>

<div class="col-12 col-xl-8 mb-4 mb-xl-0 d-flex">
    <h3 class="font-weight-bold text-primary mb-2">REPORTS</h3>
    <p class="ms-4">
    <input type="date" value="2022-06-01" style="background: #27ae60; color:#fff;padding:0.5rem; border:none;outline:none;border-radius:0.4rem"/>
    </p>
</div>

<div class="col-12">
    <div class="container">
        <div class="reports__section">
            <div class="row gy-3">
                <div class="col-md-6">
                    <div class="reports_card">
                        <h2>Total Sales</h2>
                        <div class="report_details">
                            <div class="icon">
                                <img src="./images/icons/sales.png" alt="total-sales" width="40px" height="40px">
                            </div>
                            <div class="data">
                                <h3>₹ 23232.00</h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="reports_card">
                        <h2>Cash Collections</h2>
                        <div class="report_details">
                            <div class="icon">
                                <img src="./images/icons/cash.png" alt="total-sales" width="40px" height="40px">
                            </div>
                            <div class="data">
                                <h3>₹ 45443.00</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="reports__section">
            <div class="row gy-3">
                <div class="col-md-6">
                    <div class="reports_card">
                        <h2>Online Collections</h2>
                        <div class="report_details">
                            <div class="icon">
                                <img src="./images/icons/online.png" alt="total-sales" width="40px" height="40px">
                            </div>
                            <div class="data">
                                <h3>₹ 23232.00</h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="reports_card">
                        <h2>Registration</h2>
                        <div class="report_details">
                            <div class="icon">
                                <img src="./images/icons/registration.png" alt="total-sales" width="40px" height="40px">
                            </div>
                            <div class="data">
                                <h3>₹ 25443.00</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="reports__section mb-5">
            <div class="row gy-3">
                <div class="col-md-6">
                    <div class="reports_card">
                        <h2>Total Patients</h2>
                        <div class="report_details">
                            <div class="icon">
                                <img src="./images/icons/patient.png" alt="total-sales" width="40px" height="40px">
                            </div>
                            <div class="data">
                                <h3>65</h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="reports_card_doctor">
                        <h2>No of Doctors</h2>
                        <div class="report_details">
                            <div class="icon">
                                <img src="./images/icons/doctor.png" alt="total-sales" width="40px" height="40px">
                            </div>
                            <div class="data">
                                <h3>04</h3>
                            </div>

                        </div>
                        <div class="select__doctors">
                                <div class="col-md-10">
                                    <div class="form-group">
                                        <label for="doctor" class="text-white">Select Doctor<span class="text-white">
                                                *</span></label>
                                        <select name="" class="form-control" id="" required>
                                            <option value="">Select Doctor</option>
                                            <option value="">Dr Amal Roy</option>
                                            <option value="">Dr Praksh jyoti Das Sonowal</option>
                                            <option value="">Dr Hema Gupta</option>
                                        </select>
                                    </div>
                                </div>
                            <div class="result">
                                <h3>= 33</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
require_once("include/footer.php")
?>