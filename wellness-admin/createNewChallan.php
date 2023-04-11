<?php
  require_once('include/header.php');
?>


<div class="row">

    <div class="col-12 col-xl-12 mb-4 mb-xl-0 d-flex justify-content-between">
        <div class="title">
            <h3 class="font-weight-bold text-primary mb-2" style="font-size:20px;">CREATE NEW CHALLAN</h3>
            <p class="text-secondary">Add your challan</p>
        </div>
        <div class="title__button">
            <a href="viewAllChallans.php" class="btn btn-primary">View All Challans <i class="fa fa-eye ml-2"></i></a>
        </div>
    </div>


 
    <div class="col-md-12">

        <div class="row mt-4">
            <div class="col-md-12 table-responsive mt-0">
           

                <div class="card" style="border:1px solid #a4aec4;">
                    <div class="row mt-3 mr-1 d-flex align-items-center justify-content-between">
                        <div class="col-md-4 ml-4">
                            <div class="form-group">
                                <label for="attendentRel">Select Store </label>
                                <select name="attendent_rel[]" class="form-control js-example-basic-single" id="attendentRel">
                                    <option value="">Guwahati Store</option>
                                    <option value="">Jorhat Store</option>
                                    <option value="">Silchar Store</option>
                    
                                </select>
                            </div>
                        </div>
                        <div class="col-md-4">
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
                            <thead>
                                <tr>
                                    <th>SL No</th>
                                    <th>Product Name</th>
                                    <th>Quantity</th>
                                    <th>SKU</th>
                                    <th>Price</th>
                                    <th>Action</th>

                                </tr>
                            </thead>

                            <tbody>

                                <tr>
                                    <td>2</td>
                                    <td>Hydrochlorothiazide</td>
                                    <td>1</td>
                                    <td>00013</td>
                                    <td>745.00</td>
                                    <td><i class="fa fa-trash text-danger"></i></td>

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
require_once('include/footer.php');
?>