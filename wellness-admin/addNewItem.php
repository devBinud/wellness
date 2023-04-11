  <?php
  require_once('include/header.php');
  ?>

<div class="row">

  <div class="col-12 col-xl-12 mb-4 mb-xl-0">
    <h3 class="font-weight-bold text-primary mb-2" style="font-size: 22px;">ADD NEW PRODUCT</h3>
    <!-- <p class="text-secondary">Lorem, ipsum dolor sit amet consectetur adipisicing elit</p> -->
  </div>

  <div class="col-md-12 mt-5">
    <div class="col-md-12">
      <div class="card" style="border:1px solid #a4aec4;">
        <div class="card-body">
          <form class="forms-sample" action="#" method="POST" id="addPatient" enctype="multipart/form-data">
            <input type="hidden" name="" value="">
            <div class="row">
              <div class="col-md-12">
                <div class="row">
                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="name" class="font-weight-bold">Product Name <span class="text-danger"> *</span> </label>
                      <input type="text" name="name" class="form-control" id="name" placeholder="Enter Product name"
                        required>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="name" class="font-weight-bold">Packaging <span class="text-danger"> *</span> </label>
                      <input type="text" name="name" class="form-control" id="name" placeholder="Enter Product name"
                        required>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="name" class="font-weight-bold">Company <span class="text-danger"> *</span> </label>
                      <input type="text" name="name" class="form-control" id="name" placeholder="Enter Company Name"
                        required>
                    </div>
                  </div>
              
                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="category" class="font-weight-bold">Category</label>
                      <select name="category" class="form-control" id="category" required>
                        <option value="">Select Category</option>
                        <option value="T">Tablet</option>
                        <option value="L">Liquid</option>
                        <option value="D">Drops</option>
                        <option value="I">Injections</option>
                      </select>
                    </div>
                  </div>

                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="group" class="font-weight-bold">Group <span class="font-weight-bold"> *</span></label>
                      <select name="group" class="form-control" id="group" required>
                        <option value="">Select Group</option>
                        <option value="T">Classical</option>
                        <option value="L">Patented</option>
                      </select>
                    </div>
                  </div>

                  
                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="group" class="font-weight-bold">GST Slabs <span class="font-weight-bold"> *</span></label>
                      <select name="group" class="form-control" id="group" required>
                        <option value="">Select GST</option>
                        <option value="">6%</option>
                        <option value="">12%</option>
                        <option value="">18%</option>
                      </select>
                    </div>
                  </div>
               
                </div>
            
              </div>
            </div>
  
            <div class="row mt-3">
              <div class="col-md-12 text-center mb-4">
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