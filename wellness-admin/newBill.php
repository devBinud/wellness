<?php
  require_once('include/header.php');
  ?>

<div class="row">

    <div class="col-12 col-xl-12 mb-4 mb-xl-0 d-flex justify-content-between">
        <h3 class="font-weight-bold text-primary mb-2" style="font-size:20px;">ADD NEW BILL</h3>
    </div>

 
    <div class="col-md-12 mt-5">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <form class="forms-sample" action="#" method="POST" id="addPatient" enctype="multipart/form-data">
                        <input type="hidden" name="" value="">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="name"> Patient Name <span class="text-danger"> *</span> </label>
                                            <input type="text" name="name" class="form-control" id="name"
                                                placeholder="Enter patient Name" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="uhid">UHID <span class="text-danger"> *</span> </label>
                                            <input type="text" name="name" class="form-control" id="name"
                                                placeholder="Enter your UHID No" required>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="name">Age (years)</span></label>
                                            <input type="text" name="" class="form-control" id=""
                                                placeholder="Enter age" required>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                          <label for="bloodGroup">Blood Group <span class="text-danger"> *</span></label>
                                          <select name="blood_group_id" class="form-control" id="bloodGroup" required>
                                            <option value="">Select Blood Group</option>
                                            <option value="1"> A+</option>
                      
                                            <option value="2"> A-</option>
                      
                                            <option value="3"> B+</option>
                      
                                            <option value="4"> B-</option>
                      
                                            <option value="5"> O+</option>
                      
                                            <option value="6"> O-</option>
                      
                                            <option value="7"> AB+</option>
                      
                                            <option value="8"> AB-</option>
                      
                                          </select>
                                        </div>
                                      </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="gender">Sex <span class="text-danger"> *</span></label>
                                            <select name="sex" class="form-control" id="sex" required>
                                                <option value="">Select gender</option>
                                                <option value="M">Male</option>
                                                <option value="F">Female</option>
                                                <option value="O">Other</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="name">Phone No</label>
                                            <input type="phone" name="" class="form-control" id=""
                                                placeholder="Enter the Phone No" required>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="name">Rx No<span class="text-danger"> * </span></label>
                                            <input type="text" name="" class="form-control" id=""
                                                placeholder="Enter the RX No" required>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                          <label for="dob">Date </label>
                                          <input type="date" name="" class="form-control" id="" placeholder="Choose date">
                                        </div>
                                    </div>
                               


                                    <div class="col-md-12 mt-5">
                                        <div class="card">
                                          <div class="card-body">
                                            <form action="#" method="GET">
                                              <div class="row">
                                               
                                             
                                                <!-- <div class="col-md-3">
                                                    <div class="form-group">
                                                      <label for="name">Medicine Name</label>
                                                      <input type="text" name="name" class="form-control form-control-sm" id="name" value=""
                                                        placeholder="">
                                                    </div>
                                                  </div>

                                                  <div class="col-md-3">
                                                    <div class="form-group">
                                                      <label for="name">Price<span class="text-danger"> * </span></label>
                                                      <input type="text" name="name" class="form-control form-control-sm" id="name" value=""
                                                        placeholder="">
                                                    </div>
                                                  </div>
                                            
                                                  <div class="col-md-3">
                                                    <div class="form-group">
                                                      <label for="name">Qty<span class="text-danger"> * </span></label>
                                                      <input type="number" name="name" class="form-control form-control-sm" id="name" value=""
                                                        placeholder="">
                                                    </div>
                                                  </div> -->
                              
                                                  <!-- <div id="formInput"></div>
                                                <div class="col-md-3 m-auto">
                                                    <div class="form-group m-auto ">
                                                      <button type="button" class="btn btn-success add-more" id="" data-toggle="tooltip"
                                                        data-placement="top" title="Search Patients"><i class="fa-solid fa-plus mr-2"></i>Add
                                                      </button>
                                                    </div>
                                                  </div> -->

                                                  


                                              </div>
                                            </form>

                                      <div class="row g-3 inputRow">
                                        <div class="col-md-3">
                                          <div class="form-group">
                                            <label for="name">Medicine Name</label>
                                            <input type="text" name="name" class="form-control form-control-sm" id="name" value=""
                                              placeholder="">
                                          </div>
                                        </div>
                                        <div class="col-md-3">
                                          <div class="form-group">
                                            <label for="name">Price<span class="text-danger"> * </span></label>
                                            <input type="text" name="name" class="form-control form-control-sm" id="name" value=""
                                              placeholder="">
                                          </div>
                                        </div>
                                  
                                        <div class="col-md-3">
                                          <div class="form-group">
                                            <label for="name">Qty<span class="text-danger"> * </span></label>
                                            <input type="number" name="name" class="form-control form-control-sm" id="name" value=""
                                              placeholder="">
                                          </div>
                                        </div>
                    
                                      <div class="col-md-3 m-auto">
                                          <div class="form-group m-auto ">
                                            <button type="button" class="btn btn-success add-more" id="" data-toggle="tooltip"
                                              data-placement="top" title="Search Patients"><i class="fa-solid fa-plus mr-2"></i>Add
                                            </button>
                                            <!-- <a href="#" class="btn btn-warning" data-toggle="tooltip" data-placement="top" title="Reset"><i class="bi bi-arrow-counterclockwise"></i> </a> -->
                                          </div>
                                        </div>

                                      </div>

                                          </div>


                                          
                                        </div>
                                      </div>
                                       
                                    </div>

                                </div>

                            </div>

                        </div>

                        <div class="row mt-2">
                            <div class="col-md-12 text-right mb-4">
                                <button type="submit" class="btn btn-primary " id="submit">Save</button>
                                <button type="#" class="btn btn-danger " id="cancel">Cancel</button>
                            </div>
                        </div>


                    </form>

                </div>
            </div>
        </div>

    </div>
</div>



<?php
          require_once('include/footer.php');
          ?>