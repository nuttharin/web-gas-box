<?php 
  include_once("../layout/header.html"); 
?>

<!-- Page Heading -->
<div class="container-fluid">

  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">log</h1>
    <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
  </div>

 
  <section aria-labelledby="table">

    <!-- DataTales  -->
    <div class="card shadow mb-4">
      <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Log Data in Server</h6>
      </div>
      <div class="card-body">
        <div class="table-responsive">
          <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
              <tr>
                <th>File log</th>
                <th>Action</th>
                
              </tr>
            </thead>
            <tfoot>
              <tr>
                <th>File log</th>
                <th>Action</th>
              </tr>
            </tfoot>
            <tbody>
              <tr>
                <td>Tiger Nixon</td>
                <td>
                    <center>
                        <button type="button" class="btn btn-warning btn-sm btn-look-file" index="6" data-toggle="tooltip" data-placement="top" title="" data-original-title="Look">
                            <i class="fas fa-file"></i>
                        </button>
                        <button type="button" class="btn btn-success btn-sm btn-download-file" index="6" data-toggle="tooltip" data-placement="top" title="" data-original-title="Download">
                            <i class="fas fa-arrow-down"></i>
                        </button>
                        <button type="button" class="btn btn-danger btn-sm btn-delete-file" index="6" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete">
                            <i class="fas fa-trash-alt"></i>
                        </button>
                    </center>
                </td>
               
              </tr>
              
              
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </section>
   


</div>
       


<?php 
  include_once("../layout/footer.html"); 
?>
