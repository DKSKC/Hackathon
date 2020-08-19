<?php 

require_once 'view/header.php';

?>
  <body>
    <!-- ============================================================== -->
    <!-- main wrapper -->
    <!-- ============================================================== -->
    <div class="dashboard-main-wrapper">
      <?php require_once 'view/navbar.php' ?>
      <!-- ============================================================== -->
      <!-- wrapper  -->
      <!-- ============================================================== -->
      <div class="dashboard-wrapper">
        <div class="dashboard-ecommerce">
          <div class="container-fluid dashboard-content">
            <!-- ============================================================== -->
            <!-- pageheader  -->
            <!-- ============================================================== -->
            <div class="row">
              <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="page-header">
                  <h2 class="pageheader-title">
                    E-commerce Dashboard Template
                  </h2>
                  <p class="pageheader-text">
                    Nulla euismod urna eros, sit amet scelerisque torton lectus
                    vel mauris facilisis faucibus at enim quis massa lobortis
                    rutrum.
                  </p>
                  <div class="page-breadcrumb">
                    <nav aria-label="breadcrumb">
                      <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                          <a href="#" class="breadcrumb-link">Dashboard</a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">
                          E-Commerce Dashboard Template
                        </li>
                      </ol>
                    </nav>
                  </div>
                </div>
              </div>
            </div>
            <!-- ============================================================== -->
            <!-- end pageheader  -->
            <!-- ============================================================== -->
            <div class="ecommerce-widget">
              <div class="row">
                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
                  <div class="card">
                    <div class="card-body">
                      <h5 class="text-muted">Total Revenue</h5>
                      <div class="metric-value d-inline-block">
                        <h1 class="mb-1">$12099</h1>
                      </div>
                      <div
                        class="metric-label d-inline-block float-right text-success font-weight-bold"
                      >
                        <span><i class="fa fa-fw fa-arrow-up"></i></span
                        ><span>5.86%</span>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
                  <div class="card">
                    <div class="card-body">
                      <h5 class="text-muted">Affiliate Revenue</h5>
                      <div class="metric-value d-inline-block">
                        <h1 class="mb-1">$12099</h1>
                      </div>
                      <div
                        class="metric-label d-inline-block float-right text-success font-weight-bold"
                      >
                        <span><i class="fa fa-fw fa-arrow-up"></i></span
                        ><span>5.86%</span>
                      </div>
                    </div>
                    <div id="sparkline-revenue2"></div>
                  </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
                  <div class="card">
                    <div class="card-body">
                      <h5 class="text-muted">Refunds</h5>
                      <div class="metric-value d-inline-block">
                        <h1 class="mb-1">0.00</h1>
                      </div>
                      <div
                        class="metric-label d-inline-block float-right text-primary font-weight-bold"
                      >
                        <span>N/A</span>
                      </div>
                    </div>
                    <div id="sparkline-revenue3"></div>
                  </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
                  <div class="card">
                    <div class="card-body">
                      <h5 class="text-muted">Avg. Revenue Per User</h5>
                      <div class="metric-value d-inline-block">
                        <h1 class="mb-1">$28000</h1>
                      </div>
                      <div
                        class="metric-label d-inline-block float-right text-secondary font-weight-bold"
                      >
                        <span>-2.00%</span>
                      </div>
                    </div>
                    <div id="sparkline-revenue4"></div>
                  </div>
                </div>
              </div>
            
                <!-- ============================================================== -->
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- ============================================================== -->
      <!-- end wrapper  -->
      <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- end main wrapper  -->
    <!-- ============================================================== -->
    <!-- Optional JavaScript -->
    <!-- jquery 3.3.1 -->
    <script src="assets/vendor/jquery/jquery-3.3.1.min.js"></script>
    <!-- bootstap bundle js -->
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
    <!-- slimscroll js -->
    <script src="assets/vendor/slimscroll/jquery.slimscroll.js"></script>
    <!-- main js -->
    <script src="assets/libs/js/main-js.js"></script>
    <!-- chart chartist js -->
    <script src="assets/vendor/charts/chartist-bundle/chartist.min.js"></script>
    <!-- sparkline js -->
    <script src="assets/vendor/charts/sparkline/jquery.sparkline.js"></script>
    <!-- morris js -->
    <script src="assets/vendor/charts/morris-bundle/raphael.min.js"></script>
    <script src="assets/vendor/charts/morris-bundle/morris.js"></script>
    <!-- chart c3 js -->
    <script src="assets/vendor/charts/c3charts/c3.min.js"></script>
    <script src="assets/vendor/charts/c3charts/d3-5.4.0.min.js"></script>
    <script src="assets/vendor/charts/c3charts/C3chartjs.js"></script>
    <script src="assets/libs/js/dashboard-ecommerce.js"></script>
  </body>
</html>
