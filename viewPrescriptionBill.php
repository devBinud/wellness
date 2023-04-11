<?php
  require_once('include/header.php');
?>

<div class="row">
    <div class="col-lg-12 stretch-card mt-2">
        <div class="card mt-3" style="border:1px solid #c9c8c8;padding:1rem">
            <div class="card-body">
                <div class="row">

                    <div class="col-md-6">
                        <div class="card">
                            <h3 class="text-primary" style="font-size: 18px; margin-bottom:1rem;">Customer Details</h3>
                            <div class="table-responsive table-borderless">
                                <table class="table table-sm">
                                    <tbody>

                                        <tr>
                                            <th style="font-size: 14px">Date:</th>
                                            <td>08-12-22</td>
                                        </tr>
                                        <tr>
                                            <th style="font-size: 14px">Name:</th>
                                            <td>Kapil Das</td>
                                        </tr>
                                        <tr>
                                            <th style="font-size: 14px">Sex:</th>
                                            <td>Male</td>
                                        </tr>
                                        <tr>
                                            <th style="font-size: 14px">Address:</th>
                                            <td><span class="fw-bold text-danger">Borbari,Guwahati |</span> Pin :786013</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="card px-2">
                            <h3 class="text-primary" style="font-size: 18px;margin-bottom:1rem">Bill Details</h3>
                            <div class="table-responsive table-borderless">
                                <table class="table table-sm">
                                    <tbody>
                                        <tr>
                                            <th style="font-size: 14px">Invoice No:</th>
                                            <td class="text-danger">AR00-22/001</td>
                                        </tr>
                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div>

                    <div class="row mt-4">
                        <div class="col-md-12 table-responsive mt-3">
                            <div class="card">
                                <div class="card-body table-responsive">
                                    <table class="table table-bordered table-hover text-center">
                                        <thead>
                                            <tr>
                                                <th>Sl No</th>
                                                <th>Medicine Name</th>
                                                <th>MRP</th>
                                                <th>Quantity</th>
                                                <th>Total</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            <tr>
                                                <td>01</td>
                                                <td>Licorice root</td>
                                                <td>₹ 323.00</td>
                                                <td>2</td>
                                                <td>₹ 646.00</td>
                                            </tr>
                                            <tr>
                                                <td colspan="4" class="font-weight-bold">Grand Total</td>
                                                <td class="font-weight-bold">₹ 646.00</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="card">
                            <h3 class="text-primary mt-4" style="font-size: 18px;margin-bottom:1rem">Executive Details</h3>
                            <div class="table-responsive table-borderless">
                                <table class="table table-sm">
                                    <tbody>
                                        <tr>
                                            <th style="font-size: 14px">Name of the Executive :</th>
                                            <td>Ankur Das</td>
                                        </tr>
                                        <tr>
                                            <th style="font-size: 14px">Phone No:</th>
                                            <td>
                                                +91 99878 77682
                                            </td>
                                        </tr>
                                        <tr>
                                            <th style="font-size: 14px">Address:</th>
                                            <td><span class="fw-bold text-danger">Ganeshguri,Guwahati |</span> Pin :7860XX</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </div>
</div>



<?php
require_once('include/footer.php');
?>