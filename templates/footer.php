  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
  <script src="js/bootstrap-datepicker.js"></script>
  <script src="js/bootstrap-datepicker.min.js"></script>
  <script src="js/datatables.min.js"></script>
  <script src="https://unpkg.com/@popperjs/core@2/dist/umd/popper.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>
  <script>
    $(document).ready(function() {
      $('#datepicker').datepicker();
      $('#datepicker').on('changeDate', function() {
        $('#my_hidden_input').val(
          $('#datepicker').datepicker('getFormattedDate')
        );
      });


      

      $('#non-hansen').DataTable({
        scrollY: '54vh',
        scrollCollapse: true,
        paging: false,
        searching: false,
        bPaginate: false,
        bLengthChange: false,
        bFilter: true,
        bInfo: false,
        bAutoWidth: false,
        bsort: false,
        order: [] 
      }),
      $('#hansen').DataTable({
        scrollY: '54vh',
        scrollCollapse: true,
        paging: false,
        searching: false,
        bPaginate: false,
        bLengthChange: false,
        bFilter: true,
        bInfo: false,
        bAutoWidth: false,
        bsort: false,
        order: [] 
      })
    });
  </script>

  </body>

  </html>