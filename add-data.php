<?php include 'templates/header.php'; ?>
<!-- Content Row -->
          <section id="tabs" class="project-tab mt-5" style="margin-top:100px !important">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <nav>
                            <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
                              <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-profile" aria-selected="true">NON-HANSEN</a>
                                <a class="nav-item nav-link " id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-home" aria-selected="false">HANSEN</a>
                            </div>
                        </nav>
                        
                        <div class="tab-content" id="nav-tabContent">
                            <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                              <?php include_once 'non-hansen-table.php'; ?>
                            </div> 
                            <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                              <?php include_once 'hansen-table.php'; ?>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
            
        </section>
        <!-- /.container-fluid -->
      <!-- End of Main Content -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>




  <?php include 'templates/footer.php'; ?>