  <!-- CORE PLUGINS -->
  <script src="{{asset('admin/assets/vendors/jquery/dist/jquery.min.js')}}" type="text/javascript"></script>
  <script src="{{asset('admin/assets/vendors/popper.js/dist/umd/popper.min.js')}}" type="text/javascript"></script>
  <script src="{{asset('admin/assets/vendors/bootstrap/dist/js/bootstrap.min.js')}}" type="text/javascript"></script>
  <!-- PAGE LEVEL PLUGINS -->
  <script src="{{asset('admin/assets/vendors/jquery-validation/dist/jquery.validate.min.js')}}" type="text/javascript"></script>
  <!-- CORE SCRIPTS-->
  <script src="{{asset('admin/assets/js/app.js')}}" type="text/javascript"></script>
  <script src="{{asset('admin/assets/js')}}" type="text/javascript"></script>
  <!-- PAGE LEVEL SCRIPTS-->
  <script type="text/javascript">
      $(function() {
          $('#login-form').validate({
              errorClass: "help-block",
              rules: {
                  email: {
                      required: true,
                      email: true
                  },
                  password: {
                      required: true
                  }
              },
              highlight: function(e) {
                  $(e).closest(".form-group").addClass("has-error")
              },
              unhighlight: function(e) {
                  $(e).closest(".form-group").removeClass("has-error")
              },
          });
      });
  </script>
  <script src="{{asset('admin/assets/vendors/DataTables/datatables.min.js')}}" type="text/javascript"></script>
  <!-- CORE SCRIPTS-->
  <script src="{{asset('admin/assets/js/app.min.js')}}" type="text/javascript"></script>
  <!-- PAGE LEVEL SCRIPTS-->
  <script type="text/javascript">
      $(function() {
          $('#example-table').DataTable({
              pageLength: 10,
              //"ajax": './assets/demo/data/table_data.json',
              /*"columns": [
                  { "data": "name" },
                  { "data": "office" },
                  { "data": "extn" },
                  { "data": "start_date" },
                  { "data": "salary" }
              ]*/
          });
      })
  </script>

