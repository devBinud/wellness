<?php
  require_once('include/header.php');
  ?>

<div class="row">

    <div class="col-12 col-xl-12 mb-4 mb-xl-0 d-flex justify-content-between">
        <h3 class="font-weight-bold text-primary mb-2" style="font-size:20px;">ADD NEW DEPARTMENT</h3>
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
                                            <label for="department">Department <span class="text-danger"> *</span>
                                            </label>
                                            <select name="department[]" class="form-control js-example-basic-single"
                                                id="department" required>
                                                <option value="">Select Department</option>
                                                <option value="1">Cardiology</option>
                                                <option value="2">Gynocology</option>
                                                <option value="3">Dermatology</option>
                                                <option value="4">E.N.T</option>
                                                <option value="5">Gastroenterology</option>
                                                <option value="6">Medicine</option>
                                                <option value="7">Nephrology</option>
                                                <option value="8">Neurology</option>
                                                <option value="9">Radiology</option>
                                                <option value="10">Urology</option>
                                                <option value="11">Others</option>
                                            </select>
                                        </div>

                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="phone">Phone No<span class="text-danger"> *</span> </label>
                                            <input type="phone" name="" class="form-control" id="name"
                                                placeholder="Enter your email" required>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="phone">Email<span class="text-danger"> *</span> </label>
                                            <input type="text" name="" class="form-control" id="name"
                                                placeholder="Enter your email" required>
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