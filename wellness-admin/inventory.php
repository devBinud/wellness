<?php
  require_once('include/header.php');
?>

<div class="row">

  <div class="col-12 col-xl-12 mb-4 mb-xl-0">
    <h3 class="font-weight-bold text-primary mb-2">INVENTORY</h3>
    <p class="text-secondary">Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis, necessitatibus.</p>
  </div>
  <div class="col-md-12"> 

    <div class="row mt-4">
      <div class="col-md-12 table-responsive mt-3">
          <div class="card-body table-responsive">
            <table cellpadding="0"; cellspacing="0">
              <thead>
                <tr class="text-center bg-primary text-white">
                  <th style="padding:10px;border-right: 2px solid rgb(63, 60, 60)!important;">Name & Packaging</th>
                  <th style="border-right: 2px solid rgb(63,60,60);">Category</th>
                  <th style="border-right: 2px solid rgb(63,60,60);">SKU</th>
                  <th style="border-right: 2px solid rgb(63,60,60);">Available</th>
                  <th>Status</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td><input type="text" /></td>
                  <td>
                    <select name="category"
                    id="category" class="category" required style="margin-left:3px;padding:0 26px;">
                    <option value="">Select Category</option>
                    <option value="1">Classical</option>
                    <option value="2">Patended</option>
                </select>
                 
                  </td>
                  <td><input type="text"/></td>
                  <td width="60" height="30"><input type="text" /></td>
                  <td width="60"><input type="text" /></td>
                </tr>
                <tr>
                  <td><input type="text" /></td>
                  <td><input type="text" /></td>
                  <td><input type="text" /></td>
                  <td width="60" height="30" ><input type="text" /></td>
                  <td><input type="text" /></td>
                </tr>
                <tr>
                  <td><input type="text" /></td>
                  <td><input type="text" /></td>
                  <td><input type="text" /></td>
                  <td width="60" height="30" ><input type="text" /></td>
                  <td><input type="text" /></td>
                </tr>
                <tr>
                  <td><input type="text" /></td>
                  <td><input type="text" /></td>
                  <td><input type="text" /></td>
                  <td width="60" height="30" ><input type="text" /></td>
                  <td><input type="text" /></td>
                </tr>
                <tr>
                  <td><input type="text" /></td>
                  <td><input type="text" /></td>
                  <td><input type="text" /></td>
                  <td width="60" height="30" ><input type="text" /></td>
                  <td><input type="text" /></td>
                </tr>
                <tr>
                  <td><input type="text" /></td>
                  <td><input type="text" /></td>
                  <td><input type="text" /></td>
                  <td width="60" height="30" ><input type="text" /></td>
                  <td><input type="text" /></td>
                </tr>
                <tr>
                  <td><input type="text" /></td>
                  <td><input type="text" /></td>
                  <td><input type="text" /></td>
                  <td width="60" height="30" ><input type="text" /></td>
                  <td><input type="text" /></td>
                </tr>
                <tr>
                  <td><input type="text" /></td>
                  <td><input type="text" /></td>
                  <td><input type="text" /></td>
                  <td width="60" height="30" ><input type="text" /></td>
                  <td><input type="text" /></td>
                </tr>
              </tbody>
            </table>

          </div>

      </div>
    </div>
    <div class="row mt-5">
      <div class="col-md-12 text-center mb-4">
        <button type="submit" class="btn btn-primary " id="submit">Submit</button>
        <button type="#" class="btn btn-danger " id="cancel">Cancel</button>
      </div>
    </div>
  </div>

</div>

<?php
    require_once('include/footer.php');
?>