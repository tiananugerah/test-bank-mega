
<!-- jQuery -->
<script src="{{asset('AdminLte/plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap 4 -->
<script src="{{asset('AdminLte/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('AdminLte/dist/js/adminlte.min.js')}}"></script>
<!-- jQuery -->
<script src="{{asset('AdminLte/plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap 4 -->
<script src="{{asset('AdminLte/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- DataTables  & Plugins -->
<script src="{{asset('AdminLte/plugins/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('AdminLte/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{asset('AdminLte/plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
<script src="{{asset('AdminLte/plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>
<script src="{{asset('AdminLte/plugins/datatables-buttons/js/dataTables.buttons.min.js')}}"></script>
<script src="{{asset('AdminLte/plugins/datatables-buttons/js/buttons.bootstrap4.min.js')}}"></script>
<script src="{{asset('AdminLte/plugins/jszip/jszip.min.js')}}"></script>
<script src="{{asset('AdminLte/plugins/pdfmake/pdfmake.min.js')}}"></script>
<script src="{{asset('AdminLte/plugins/pdfmake/vfs_fonts.js')}}"></script>
<script src="{{asset('AdminLte/plugins/datatables-buttons/js/buttons.html5.min.js')}}"></script>
<script src="{{asset('AdminLte/plugins/datatables-buttons/js/buttons.print.min.js')}}"></script>
<script src="{{asset('AdminLte/plugins/datatables-buttons/js/buttons.colVis.min.js')}}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{asset('AdminLte/dist/js/demo.js')}}"></script>
<!-- bs-custom-file-input -->
<script src="{{asset('AdminLte/plugins/bs-custom-file-input/bs-custom-file-input.min.js')}}"></script>
<!-- Page specific script -->
<!-- Bootstrap 4 -->
<script src="{{asset('AdminLte/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('AdminLte/dist/js/adminlte.min.js')}}"></script>
<script>
$(function () {
  bsCustomFileInput.init();
});
</script>
<script>
    $(function () {
      $("#example1").DataTable({
        "responsive": true, "lengthChange": false, "autoWidth": false,
        "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
      }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
      $('#example2').DataTable({
        "paging": true,
        "lengthChange": false,
        "searching": false,
        "ordering": true,
        "info": true,
        "autoWidth": false,
        "responsive": true,
      });
    });
  </script>
<!-- Page specific script -->
  <script>
  $(document).ready(function(){
     $('#example2-tab1-dt').DataTable({
        responsive: true
     });
  
     $('#example2-tab2-dt').DataTable({
        responsive: true
     });
  
     $('#example2-tab3-dt').DataTable({
        responsive: true
     });
     
     
     $('a[data-toggle="tab"]').on('shown.bs.tab', function(e){
        $($.fn.dataTable.tables(true)).DataTable()
           .columns.adjust()
           .responsive.recalc();
     });   
     
  });
  </script> 