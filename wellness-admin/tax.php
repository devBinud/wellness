<?php
  require_once('include/header.php');
  ?>

<style>
  .tax_details_container {
    margin-top: 3rem;
  }

  .tax__box {
    border: 1px outset #adaeb3;
    box-shadow: 0 0.25rem 1.5rem rgba(0, 0, 0, 0.4);
    border-radius: 10px;
    width: 40px;
    height: 70px;
  }

  .save__buttons {
    margin-top: 30px;
  }
</style>
<div class="row">

  <div class="col-12 col-xl-8 mb-4 mb-xl-0">
    <h3 class="font-weight-bold text-primary mb-2">TAX</h3>
    <p class="mb-2 text-secondary">see details about taxes</p>
  </div>


  <div class="col-md-10  d-flex mx-auto align-items-center mt-5">

    <div class="col-md-6">
      <div class="form-group">
        <label for="department">GST Slabs <span class="text-danger"> *</span>
        </label>
        <select name="" class="form-control js-example-basic-single" id="" required>
          <option value="">Select GST</option>
          <option value="1">Patented</option>
          <option value="2">Classical</option>
          <option value="3">Cosmetic</option>

        </select>
      </div>

    </div>
    
      <div class="col-md-6">
        <div class="form-group">
          <label for="name" class="font-weight-bold">Text Percentage(%) <span class="text-danger"> *</span> </label>
          <input type="text" name="name" class="form-control" id="name" placeholder="Enter percentage"
            required>
        </div>
      </div>



  </div>

</div>

<div class="save__buttons text-center">
  <a href="#" class="btn btn-primary">Save Changes</a>
  <a href="#" class="btn btn-danger">Edit</a>
</div>



<?php
  require_once('include/footer.php');
  ?>