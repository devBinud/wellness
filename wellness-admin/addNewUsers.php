<?php
  require_once('include/header.php');
?>


<div class="row">

    <div class="col-12 col-xl-12 mb-4 mb-xl-0 d-flex justify-content-between">
        <div class="title">
            <h3 class="font-weight-bold text-primary mb-2" style="font-size:20px;">ADD NEW USER</h3>
            <p class="text-secondary">Add New user to store</p>
        </div>
        <div class="title__button">
            <a href="viewAllUsers.php" class="btn btn-primary">View All Users <i class="fa fa-eye ml-2"></i></a>
        </div>
    </div>

    <div class="col-md-12 mt-5">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body" style="border:1px solid #a4aec4;border-radius:10px">
                    <form class="forms-sample" action="#" method="POST" id="addPatient" enctype="multipart/form-data">
                        <input type="hidden" name="" value="">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="row mb-1 d-flex justify-content-between">

                                    <div class="upper__title__right">
                                        <h5 class="text-primary mr-3"></h5>
                                    </div>
                                </div>

                                <div class="row d-flex justify-content-between">
                                    <div class="col-md-12">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="name">Full Name <span class="text-danger"> *</span>
                                                    </label>
                                                    <input type="text" name="name" class="form-control" id="name"
                                                        placeholder="Enter patient's name" required>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="phone">Phone No<span class="text-danger"> *</span>
                                                    </label>
                                                    <input type="phone" name="" class="form-control" id="" placeholder=""
                                                        required>
                                                </div>
                                            </div>


                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="name">Password<span class="text-danger"> *</span>
                                                    </label>
                                                    <input type="password" name="" class="form-control" id=""
                                                        placeholder="" required>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="name">Confirm Password<span class="text-danger">
                                                            *</span> </label>
                                                    <input type="password" name="" class="form-control" id="" placeholder=""
                                                        required>
                                                </div>
                                            </div>

                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="state">State <span class="text-danger"> *</span></label>
                                                    <select name="state_id"
                                                        class="form-control js-example-basic-single w-100" id="state"
                                                        required>
                                                        <option value="">Select State</option>
                                                        <option value="1">Andaman &amp; Nicobar Islands</option>
                                                        <option value="2">Andhra Pradesh</option>
                                                        <option value="3">Arunachal Pradesh</option>
                                                        <option value="4">Assam</option>
                                                        <option value="5">Bihar</option>
                                                        <option value="6">Chandigarh</option>
                                                        <option value="7">Chhattisgarh</option>
                                                        <option value="8">Dadra &amp; Nagar Haveli</option>
                                                        <option value="9">Daman &amp; Diu</option>
                                                        <option value="10">Delhi</option>
                                                        <option value="11">Goa</option>
                                                        <option value="12">Gujarat</option>
                                                        <option value="13">Haryana</option>
                                                        <option value="14">Himachal Pradesh</option>
                                                        <option value="15">Jammu &amp; Kashmir</option>
                                                        <option value="16">Jharkhand</option>
                                                        <option value="17">Karnataka</option>
                                                        <option value="18">Kerala</option>
                                                        <option value="19">Lakshadweep</option>
                                                        <option value="20">Madhya Pradesh</option>
                                                        <option value="21">Maharashtra</option>
                                                        <option value="22">Manipur</option>
                                                        <option value="23">Meghalaya</option>
                                                        <option value="24">Mizoram</option>
                                                        <option value="25">Nagaland</option>
                                                        <option value="26">Odisha</option>
                                                        <option value="27">Puducherry</option>
                                                        <option value="28">Punjab</option>
                                                        <option value="29">Rajasthan</option>
                                                        <option value="30">Sikkim</option>
                                                        <option value="31">Tamil Nadu</option>
                                                        <option value="32">Tripura</option>
                                                        <option value="33">Uttar Pradesh</option>
                                                        <option value="34">Uttarakhand</option>
                                                        <option value="35">West Bengal</option>
                                                    </select>

                                                </div>

                                            </div>


                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="district">District <span class="text-danger">
                                                            *</span></label>
                                                    <select name="district_id"
                                                        class="form-control js-example-basic-single" id="district"
                                                        required>
                                                        <option value="">Select District</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="pincode">PIN Code <span class="text-danger">
                                                            *</span></label>
                                                    <input type="number" name="pincode" maxlength="6"
                                                        class="form-control" id="pincode" placeholder="Enter pincode"
                                                        required>
                                                </div>
                                            </div>

                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="role">Add Role <span class="text-danger">
                                                            *</span></label>
                                                    <input type="text" name=""
                                                        class="form-control" id="" placeholder="Please enter the Role"
                                                        required>
                                                </div>
                                            </div>

                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="role">Add Store <span class="text-danger">
                                                            *</span></label>
                                                    <input type="text" name=""
                                                        class="form-control" id="" placeholder="Please add ythe store name"
                                                        required>
                                                </div>
                                            </div>

                              
                                         
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                  <label for="Profile">Profile Picture <span class="text-danger"> *</span></label>
                                                  <input type="file" name="" class="form-control" id=""
                                                    placeholder="" required>
                                                </div>
                                              </div>


                                        </div>

                                    </div>

                                </div>



                            </div>
                        </div>

                </div>


                <div class="row mt-2">
                    <div class="col-md-12 text-center mb-4">
                        <button type="submit" class="btn btn-primary " id="submit">Submit</button>
                        <button type="#" class="btn btn-danger " id="cancel">Close</button>
                    </div>
                </div>


                </form>

            </div>
        </div>
    </div>

</div>




<?php
require_once('include/footer.php');
?>