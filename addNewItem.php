  <?php
  require_once('include/header.php');
  ?>
  

  <div class="row">

    <div class="col-12 col-xl-12 mb-4 mb-xl-0 d-flex justify-content-between">
      <h3 class="font-weight-bold text-primary mb-2" style="font-size: 22px;">ADD NEW ITEM</h3>
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
                    <div class="col-md-4">
                      <div class="form-group">
                        <label for="name">Item Name <span class="text-danger"> *</span> </label>
                        <input type="text" name="name" class="form-control" id="name" placeholder="Enter patient's name"
                          required>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-group">
                        <label for="name">Price <span class="text-danger"> *</span> </label>
                        <input type="text" name="name" class="form-control" id="name" placeholder="Enter Price"
                          required>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-group">
                        <label for="phone">SKU <span class="text-danger"> *</span></label>
                        <input type="text" name="sku" class="form-control" id="sku"
                          placeholder="Enter SKU number" required>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-group">
                        <label for="phone">Dimensions(in) <span class="text-danger"> *</span></label>
                        <input type="text" name="dimensions" class="form-control" id="dimension"
                          placeholder="Length * width * Height" required>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-group">
                        <label for="gender">Category</label>
                        <select name="gender" class="form-control" id="gender" required>
                          <option value="">Select Category</option>
                          <option value="T">Tablet</option>
                          <option value="L">Liquid</option>
                          <option value="D">Drops</option>
                          <option value="I">Injections</option>
                          <option value="L">Liquid</option>

                        </select>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-group">
                        <label for="gender">Manufacturer <span class="text-danger"> *</span></label>
                        <select name="gender" class="form-control" id="gender" required>
                          <option value="">Select Manufacturer</option>
                          <option value="">Klogister Company</option>
                          <option value="">Assam Medicine Company</option>
                      

                        </select>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-group">
                        <label for="gender">Add Warehouse <span class="text-danger"> *</span></label>
                        <select name="gender" class="form-control" id="gender" required>
                          <option value="">Select Warehouse</option>
                          <option value="">Warehouse 1</option>
                          <option value="">Warehouse 2</option>
                          <option value="">Warehouse 3</option>
                        </select>
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