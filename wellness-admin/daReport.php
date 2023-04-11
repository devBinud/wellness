<?php
  require_once('include/header.php');
?>

<style>
    .info-card {
        /* border: 1px solid rgba(112, 129, 252, 0.5); */
        box-shadow: 0 0.25rem 0.2rem rgba(0, 0, 0, 0.3);
        display: flex;
        align-items: center;
        text-align: center;
        justify-content: center;
        background: #cccbff;
    }

    .span_small {
        color: rgb(72, 71, 71);
        font-size: 13px;
        font-weight: 300;
    }

    .agents__box {
        margin-top: 30px;
        margin-left: 2rem;
        width: 200px;
        height: 50px;
        display: flex;
        align-items: center;
        text-align: center;
        justify-content: center;
        border: 1px solid #c5d5f0;
        border-radius: 10px;
        box-shadow: 0 0.25rem 0.2rem rgba(0, 0, 0, 0.3);
    }
</style>

<div class="row">

    <div class="col-12 col-xl-12 mb-4 mb-xl-0 d-flex justify-content-between">
        <div class="title">
            <h3 class="font-weight-bold text-primary mb-2" style="font-size:20px;">DELIVERY AGENTS REPORT</h3>
            <p class="text-secondary mb-3">Reports of all delivery agents</p>
        </div>
        <div class="title__button">
            <!-- <a href="viewAllInvoices.php" class="btn btn-primary">View All Invoices <i class="fa fa-eye ml-2"></i></a> -->
        </div>
    </div>
</div>

<div class="row">
    <div class="col-xxl-4 col-md-6 mb-3">
        <div class="card info-card doctor-card">
            <div class="card-body">
                <h5 class="card-title text-primary">Total Delivery Agents</h5>

                <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                    </div>
                    <div class="p-2 ml-4">
                        <h3 class="text-center text-dark">45</h3>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <div class="col-xxl-4 col-md-6">
        <div class="card info-card revenue-card">

            <div class="card-body">
                <h5 class="card-title text-primary">Total Delivery <span class="span_small">| This Month</span></h5>

                <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                    </div>
                    <div class="p-2 ml-3">
                        <h3 class="text-dark">964</h3>

                    </div>
                </div>
            </div>

        </div>
    </div>

</div>
<div class="row mt-3">
    <div class="col-xxl-4 col-md-6 mb-3">
        <div class="card info-card doctor-card">
            <div class="card-body">
                <h5 class="card-title text-primary">Total Collection <span class="span_small">| Today</span></h5>

                <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                    </div>
                    <div class="p-2 ml-4">
                        <h3 class="text-center text-dark">₹ 345600.00</h3>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <div class="col-xxl-4 col-md-6">
        <div class="card info-card revenue-card">

            <div class="card-body">
                <h5 class="card-title text-primary">Total Collection <span class="span_small">| This Month</span></h5>

                <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                    </div>
                    <div class="p-2 ml-3">
                        <h3 class="text-dark">₹ 109654.00</h3>

                    </div>
                </div>
            </div>

        </div>
    </div>

</div>


<div class="row mt-3 d-flex justify-content-between">
    <div class="col-md-12">

        <div class="card-body table-responsive mt-3">
            <h4 class="mb-3 text-primary">Delivery Agents :</h4>


            <div class="row col-md-8 mx-auto">
                <div class="col-md-7">
                    <div class="form-group">
                        <label for="department">Select Center <span class="text-danger"> *</span>
                        </label>
                        <select name="department[]" class="form-control js-example-basic-single" id="department"
                            required>
                            <option value="">Select Center</option>
                            <option value="1">Guwahati Center</option>
                            <option value="2">Silchar Center</option>
                            <option value="3">Jorhat Center</option>
                        </select>
                    </div>

                </div>
                <div class="col-md-1 mt-4">
                    <button class="btn btn-primary"><i class="fa fa-search"></i></button>
                </div>


            </div>
        </div>
    </div>

    <div class="card-body table-responsive">

        <table class="table table-bordered table-hover text-center">
            <thead>
                <tr class="bg-light">
                    <th>#</th>
                    <th>Agents Name</th>
                    <th>Phone No</th>
                    <th>Vehicle No (if yes)</th>
                    <th>View Details</th>
                </tr>
            </thead>

            <tbody>

                <tr>
                    <td>1</td>
                    <td>Ram sharma</td>
                    <td>88767 98980</td>
                    <td>AS 06 XXXX</td>
                    <td><i class="fa fa-eye mr-2"></i></td>
                </tr>

                <tr>
                    <td>2</td>
                    <td>Biplab Gogoi</td>
                    <td>99876 24518</td>
                    <td>AS 06 XXXX</td>

                    <td><i class="fa fa-eye mr-2"></i></td>

                </tr>


                <tr>
                    <td>3</td>
                    <td>Abhisekh Goswami</td>
                    <td>98786 56483</td>
                    <td>AS 06 XXXX</td>

                    <td><i class="fa fa-eye mr-2"></i></td>
                </tr>


                <tr>
                    <td>4</td>
                    <td>Abhisekh Goswami</td>
                    <td>98786 56483</td>
                    <td>AS 06 XXXX</td>

                    <td><i class="fa fa-eye mr-2"></i></td>
                </tr>


            </tbody>
        </table>

    </div>

</div>


    <?php
require_once('include/footer.php');
?>