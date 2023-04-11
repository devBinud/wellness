<footer class="footer">
  <div class="d-sm-flex justify-content-center justify-content-sm-between">
    <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">@Copyright 2022 | Wellness Palm Private Limited | All
      rights reserved.</span>
  </div>

</footer>
<!-- partial -->
</div>
<!-- main-panel ends -->
</div>
<!-- page-body-wrapper ends -->
</div>
<!-- container-scroller -->

<!-- plugins:js -->
<script src="vendors/js/vendor.bundle.base.js"></script>
<!-- endinject -->
<!-- Plugin js for this page -->
<script src="vendors/chart.js/Chart.min.js"></script>
<script src="vendors/datatables.net/jquery.dataTables.js"></script>
<script src="vendors/datatables.net-bs4/dataTables.bootstrap4.js"></script>
<script src="js/dataTables.select.min.js"></script>

<!-- End plugin js for this page -->
<!-- inject:js -->
<script src="js/off-canvas.js"></script>
<script src="js/hoverable-collapse.js"></script>
<script src="js/template.js"></script>
<script src="js/settings.js"></script>
<script src="js/todolist.js"></script>
<!-- endinject -->
<!-- Custom js for this page-->
<script src="js/dashboard.js"></script>
<script src="js/Chart.roundedBarCharts.js"></script>
<!-- End custom js for this page-->

<!-- Add more button -->
<!-- <script type="text/javascript">
        $(document).on('click', '.add-more', function() {
            //alert(button_key);
            var html = $('.div_content').html();
            $(this).removeClass('btn-success').addClass('btn-danger');
            $(this).removeClass('add-more').addClass('remove-btn');

            $(this).html('<i class="fa fa-minus"> Remove </i>');

        })

        $(document).on('click', '.remove-btn', function() {

            $(this).parent().remove();

        });
    </script> -->
<script type="text/javascript">
$(document).ready(function(){

  $('.add-more').click(function(){
    $('.inputRow').append();
  });


});

</script>
</body>

</html>