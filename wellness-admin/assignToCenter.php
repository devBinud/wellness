<?php
  require_once('include/header.php');
?>


<div class="row">

    <div class="col-12 col-xl-12 mb-4 mb-xl-0">
        <div class="title">
            <h3 class="font-weight-bold text-primary mb-2" style="font-size:20px;">ASSIGN TO CENTER</h3>
            <p class="text-secondary">Assign doctor to center</p>
        </div>
        <div class="title__button">
            <!-- <a href="viewAllChallans.php" class="btn btn-primary">View All Challans <i class="fa fa-eye ml-2"></i></a> -->
        </div>
    </div>



    <div class="col-md-12">

        <div class="row mt-4">
            <div class="col-md-12 table-responsive mt-0">

                <div class="card" style="border:1px solid #a4aec4">
                    <!-- <h4 class="ml-3 mt-4 text-dark">Assign doctor to Center</h4> -->

                    <div class="row mt-3 d-flex align-items-center justify-content-between">
                        <div class="col-md-5">
                            <div class="form-group">
                                <label for="attendentRel" class="ml-3 font-weight-bold">Select Doctor </label>
                                <select name="attendent_rel[]" class="form-control ml-3 js-example-basic-single"
                                    id="attendentRel">
                                    <option value="">Dr Abhisekh Paul</option>
                                    <option value="">Dr Ramesh Das</option>
                                    <option value="">Dr Ramgopal Barma</option>
                                    <option value="">Dr Abhisekh Saikia</option>

                                </select>
                            </div>
                        </div>
                        <div class="col-md-5">
                            <div class="form-group mr-3">
                                <label for="attendentRel" class="font-weight-bold">Select Center </label>
                                <select name="attendent_rel[]" class="form-control js-example-basic-single"
                                    id="attendentRel">
                                    <option value="">Guwahati Center</option>
                                    <option value="">Jorhat Center</option>
                                    <option value="">Silchar Center</option>

                                </select>
                            </div>
                        </div>

                    </div>
                    <div class="card-body table-responsive mt-3">

                        <table class="table table-bordered table-hover text-center">
                            <thead>
                                <tr>
                                    <th>SL No</th>
                                    <th>Doctor Name</th>
                                    <th>Center Name</th>
                                    <th>Assigned at</th>
                                </tr>
                            </thead>

                            <tbody>

                                <tr>
                                    <td>01</td>
                                    <td>Dr Liladhar Choudhury</td>
                                    <td>Guwahati Center</td>
                                    <td>2022-11-02 05:43:12</td>
                                </tr>

                                <tr>
                                    <td>02</td>
                                    <td>Dr Ashim Gogoi</td>
                                    <td>Jorhat Center</td>
                                    <td>2022-12-05 07:55:02</td>
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
    
</div>

    <?php
require_once('include/footer.php');
?>