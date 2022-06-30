<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">User Details</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
        <table id="modaldata" class="table table-striped table-hover table-bordered">
          <thead>
              <tr>
                  <th>Name</th>
                  <th>Position</th>
                  <th>Office</th>
                  <th>Age</th>
                  <th>Start date</th>
                  <th>Salary</th>
                
              </tr>
          </thead>
          <tbody>
              <tr></tr>
        </tbody>
        </table>
        </div>

        <script>
            jQuery(document).ready(function($) {
              //jQuery Functionality
              $('#example').DataTable();
              $(document).on('click', '#example tbody tr button', function() {       
                $("#modaldata tbody tr").html("");
                $("#modaldata tbody tr").html($(this).closest("tr").html());
                $("#exampleModal").modal("show");
              });
            } );
            </script>