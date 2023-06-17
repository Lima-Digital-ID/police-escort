<!-- jQuery -->
<script src="{{ asset('/Backend') }}/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{ asset('/Backend') }}/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
    $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="{{ asset('/Backend') }}/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- daterangepicker -->
<script src="{{ asset('/Backend') }}/moment/moment.min.js"></script>
<script src="{{ asset('/Backend') }}/daterangepicker/daterangepicker.js"></script>
<!-- overlayScrollbars -->
<script src="{{ asset('/Backend') }}/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="{{ asset('/Backend') }}/js/adminlte.js"></script>
<!-- DataTables  & Plugins -->
<script src="{{ asset('/Backend') }}/datatables/jquery.dataTables.min.js"></script>
<script src="{{ asset('/Backend') }}/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="{{ asset('/Backend') }}/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="{{ asset('/Backend') }}/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="{{ asset('/Backend') }}/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="{{ asset('/Backend') }}/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="{{ asset('/Backend') }}/jszip/jszip.min.js"></script>
<script src="{{ asset('/Backend') }}/pdfmake/pdfmake.min.js"></script>
<script src="{{ asset('/Backend') }}/pdfmake/vfs_fonts.js"></script>
<script src="{{ asset('/Backend') }}/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="{{ asset('/Backend') }}/datatables-buttons/js/buttons.colVis.min.js"></script>
<script src="{{ asset('/Backend') }}/datatables-buttons/js/buttons.print.min.js"></script>

<script>
    $(function() {
        $("#example1").DataTable({
            "responsive": true,
            "lengthChange": false,
            "autoWidth": false,
            // "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
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

    function logout() {
        if (confirm('Apakah anda yakin akan logout?')) {
            // Save it!
            $('#logout').submit();
        } else {
            // Do nothing!
        }
    }
</script>
