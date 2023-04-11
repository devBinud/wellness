<?php
require_once('include/header.php');
?>

                    <div class="row">
                        <div class="col-md-1">
                            <img src="./images/faces/avtar.png" alt="" width="60px" height="60px">
                        </div>
                        <div class="col-md-6 px-4 pt-2">
                            <h3 class="font-weight-bold mt-auto">Prakash Boul</h3>
                            <h6 class="font-weight-normal  mb-0">UHID : AYUR0000001</h6>
                        </div>
                        <div class="col-md-5 text-right">
                            <a href="registerCase.php" class="btn btn-primary"> Register Case </a>
                            <a href="patientDetails.php" class="btn btn-danger"> Edit Details </a>
                            <!-- <span class="btn btn-warning edit-patient-details-btn"> Edit Details </span> -->
                        </div>
                    </div>
                    <div class="row mt-4 patient-details">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-12 table-responsive">

                                            <table class="table table-borderless">
                                                <tbody>
                                                    <tr>

                                                        <td>Phone : 1234567890</td>
                                                        <td>Email : prakashboul@gmail.com </td>
                                                        <td>Gender : Male
                                                        </td>
                                                        <td>Blood Group : O-</td>
                                                    </tr>
                                                    <tr>

                                                        <td>Date of Birth : 1991-01-01</td>
                                                        <td>Age : 31 (Thirty One Years old)</td>
                                                        <td>Marital Status : Single</td>
                                                        <td>Nationality : Indian</td>
                                                    </tr>
                                                    <tr>

                                                        <td>State : Assam</td>
                                                        <td>District : Kamrup Metropolitan</td>
                                                        <td>PIN Code : 123456</td>
                                                        <td>City / Village : lal ganesh</td>
                                                    </tr>
                                                    <tr>

                                                        <td>Registered Date : 19-04-22 </td>
                                                        <td>Registered Time : 12:03:23 PM </td>
                                                        <td>Registered By : Rupjyoti</td>
                                                        <td>Total Patient Case : 2</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-md-12 table-responsive">
                                            <h3>Patient Case History</h3>
                                            <br>
                                            <table class="table table-bordered table-hover ">

                                                <thead>
                                                    <th>#</th>
                                                    <th>Case Id</th>
                                                    <th>Department</th>
                                                    <th>Doctor</th>
                                                    <th>Case Register Date</th>
                                                    <th>Action</th>
                                                </thead>
                                                <tbody>

                                                    <tr>
                                                        <td>2</td>
                                                        <td><a class="text-primary" href="caseID.html">PC000006 </a></td>
                                                        <td>Cardiology</td>
                                                        <td>
                                                            Ramen Bhatta
                                                        </td>
                                                        <td> 02 Nov, 22 | 12:03:23 PM</td>
                                                        <td> <a href="caseID.html" class="btn btn-danger btn-sm"> view</a> </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                       
                                        
                                    </div>

                                </div>
                                
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

                                
<?php
require_once('include/footer.php');
?>