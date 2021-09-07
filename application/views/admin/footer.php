<?php $arr=siteConfig();?>
<footer class="main-footer">
    <strong>Copyright &copy; 2021 <a href="<?php echo $arr['url'] ?>"><?php echo $arr['site_name'] ?></a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 1.1.0
    </div>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<!--<script src="<?php //echo base_url() ?><?php //echo adm_assets ?>/plugins/jquery/jquery.min.js"></script>-->
<!-- jQuery UI 1.11.4 -->
<!--<script src="<?php //echo base_url() ?><?php //echo adm_assets ?>/plugins/jquery-ui/jquery-ui.min.js"></script>-->
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="<?php echo base_url() ?><?php echo adm_assets ?>/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="<?php echo base_url() ?><?php echo adm_assets ?>/plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="<?php echo base_url() ?><?php echo adm_assets ?>/plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="<?php echo base_url() ?><?php echo adm_assets ?>/plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="<?php echo base_url() ?><?php echo adm_assets ?>/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="<?php echo base_url() ?><?php echo adm_assets ?>/plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="<?php echo base_url() ?><?php echo adm_assets ?>/plugins/moment/moment.min.js"></script>
<script src="<?php echo base_url() ?><?php echo adm_assets ?>/plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="<?php echo base_url() ?><?php echo adm_assets ?>/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="<?php echo base_url() ?><?php echo adm_assets ?>/plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="<?php echo base_url() ?><?php echo adm_assets ?>/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url() ?><?php echo adm_assets ?>/dist/js/adminlte.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url() ?><?php echo adm_assets ?>/dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="<?php echo base_url() ?><?php echo adm_assets ?>/dist/js/pages/dashboard.js"></script>

<script src="<?php echo base_url() ?><?php echo adm_assets ?>/plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
<script src="<?php echo base_url() ?><?php echo adm_assets ?>/plugins/sweetalert2/sweetalert2.min.js"></script>

<script src="<?php echo base_url() ?><?php echo adm_assets ?>/plugins/toastr/toastr.min.js"></script>
<script>
  $(function () {
    // Summernote
    $('#summernote').summernote()

    // CodeMirror
    CodeMirror.fromTextArea(document.getElementById("codeMirrorDemo"), {
      mode: "htmlmixed",
      theme: "monokai"
    });
  })

  $(function () {
 bsCustomFileInput.init();
});

  $( function() {

            var dtToday = new Date();
            
            var month = dtToday.getMonth() + 1;
            var day = dtToday.getDate();
            var year = dtToday.getFullYear();
            if(month < 10)
                month = '0' + month.toString();
            if(day < 10)
                day = '0' + day.toString();
            
            var maxDate = year + '-' + month + '-' + day;

            $('#valid_from').attr('min', maxDate);

    $( "#valid_from" ).datepicker({
      changeMonth: true,
      changeYear: true
      
    });

    $( "#valid_to" ).datepicker({
      changeMonth: true,
      changeYear: true
    });

    $( "#date_of_publishing" ).datepicker({
      changeMonth: true,
      changeYear: true
    });



  } );


</script>



</body>
</html>