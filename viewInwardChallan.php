<?php
require_once("include/header.php")
?>

<div class="row mb-3">

    <div class="col-lg-12 stretch-card ">
        <div class="card mt-3" style="border:1px solid #c9c8c8">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <div class="card">
                            <h3 class="text-dark ml-3" style="font-size: 18px;">Challan No: <small><span class="font-weight-normal">ARTY6/22/1221R</span></small></h3>
                            <h3 class="text-dark ml-3 mt-2" style="font-size: 18px;">Date : <small><span class="font-weight-normal">25/12/22</span></small></h3>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="card-body table-responsive">

                        <table class="table table-bordered table-hover text-center">
                        <thead class="bg-primary text-white">
                            <tr>
                                <th>Sl No</th>
                                <th>Product Name</th>
                                <th>Company</th>
                                <th>Category</th>
                                <th>Batch No</th>
                                <th>Expiry Date</th>
                                <th>MRP</th>
                                <th>Quantity</th>
                                <th>Status</th>

                            </tr>
                        </thead>

                        <tbody>

                            <tr>
                                <td>1</td>
                                <td>Bitter melon</td>
                                <td>Baidyanath</td>
                                <td>Patented</td>
                                <td>AGT-M10000</td>
                                <td>09/26</td>
                                <td>645.00</td>
                                <td>10</td>
                                <td>
                                    <select name="" id="" class="" required
                                        style="margin-left:3px;padding:0 26px; width:140px;">
                                        <option value="2">short 1 out of 10</option>
                                        <option value="2">short 2 out of 10</option>
                                        <option value="2">short 3 out of 10</option>
                                        <option value="2">short 4 out of 10</option>
                                    </select>

                                </td>
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


<?php
require_once("include/footer.php")
?>