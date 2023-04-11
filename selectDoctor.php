<?php
require_once('include/header.php')
?>

<div class="col-12 col-xl-8 mb-4 mb-xl-0">
    <h3 class="font-weight-bold text-primary mb-2" style="font-size: 21px;">ASSIGN DOCTOR</h3>
    <p class="mb-2 text-secondary">Select the doctors from dropdown and assign </p>
</div>

<div class="col-md-10 my-5 mx-auto">
  <div class="card" style="border:1px solid #a4aec4;padding:1.5rem;background:#fff">
    <div class="row">
        <div class="col-md-8">
            <div class="form-group">
                <label for="" class="font-weight-bold">Select Doctor <span class="text-danger"> *</span></label>
                <select name="marital_status" class="form-control" id="maritalStatus" required>
                    <option value="">Select Doctor</option>
                    <option value="">Dr Mousumi Bhattacharya</option>
                    <option value="">Dr Rupali Thakur</option>
                    <option value="">Dr Utpal Bora</option>
                    <option value="">Dr Himangshu Sarma</option>
                </select>
            </div>
        </div>
        <div class="col-md-4">
           <a href="" class="btn btn-primary" style="margin-top:1.7rem">Assign Now</a>
        </div>
    </div>
  </div>
</div>
    

<?php
require_once('include/footer.php')
?>