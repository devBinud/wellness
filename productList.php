<?php
require_once("include/header.php")
?>

<div class="col-md-12">

    <div class="row mt-4">
        <div class="col-md-12 table-responsive mt-3">
            <div class="card" style="border:1px solid #a4aec4;">
                <div class="col-md-12 py-3">
                <h3 class="text-dark ml-3" style="font-size: 18px;">Date : <small><span class="font-weight-normal">23-12-2022</span></small></h3>
                <h3 class="text-dark ml-3" style="font-size: 18px;">Challan No : <small><span class="font-weight-normal">AR00-22/00001</span></small></h3>
                <h3 class="text-dark ml-3" style="font-size: 18px;">To (Center Name) : <small><span class="font-weight-normal">Jorhat Center</span></small></h3>
                <h3 class="text-dark ml-3" style="font-size: 18px;">Remarks : <small><span class="font-weight-normal">Instructed from H/O</span></small></h3>
                </div>
                <div class="row mt-3 mr-1 d-flex align-items-center justify-content-center">
                    <div class="col-md-6">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Scan SKU" aria-label="">
                            <div class="input-group-append">
                                <button class="btn btn-sm btn-primary" type="button">Scan</button>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="card-body table-responsive mt-3">

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
                            </tr>

                        </tbody>
                    </table>

                </div>

                <div class="pagination__box">
                    <nav aria-label="...">
                        <ul class="pagination">
                            <li class="page-item disabled">
                                <span class="page-link"><i class="fa-solid fa-angles-left"></i></span>
                            </li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item active">
                                <span class="page-link">
                                    2
                                    <span class="sr-only">(current)</span>
                                </span>
                            </li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item">
                                <a class="page-link" href="#"><i class="fa-solid fa-angles-right"></i></a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
require_once("include/footer.php")
?>