@include('base.header')
    <!-- Start -->
        <!-- Page Wrapper -->
        <div id="wrapper">

            <!-- Sidebar -->
                <ul class="navbar-nav bg-gradient-success sidebar sidebar-dark accordion" id="accordionSidebar">

                <!-- Sidebar - Brand -->
                <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/account">
                    <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-dollar-sign"></i>
                    </div>
                    <div class="sidebar-brand-text mx-3">FinBook</div>
                </a>

                <!-- Divider -->
                <hr class="sidebar-divider my-0">

                <!-- Nav Item - Dashboard -->
                <li class="nav-item active ">
                    <a class="nav-link" href="/account">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
                </li>

                <!-- Divider -->
                <hr class="sidebar-divider">

                <!-- Heading -->
                <div class="sidebar-heading">
                    Menu
                </div>

                <!-- Category Menu Item -->
                <li class="nav-item">
                    <a class="nav-link" href="/account/category">
                    <i class="fas fa-fw fa-list"></i>
                    <span>Category Management</span></a>
                </li>

                <!-- Ledger Menu Item -->
                <li class="nav-item">
                    <a class="nav-link" href="/account/ledger">
                    <i class="fas fa-fw fa-balance-scale"></i>
                    <span>Ledger</span></a>
                </li>

                <!-- Monthly Menu Item -->
                <li class="nav-item">
                    <a class="nav-link" href="#">
                    <i class="far fa-fw fa-calendar"></i>
                    <span>Monthly Report</span></a>
                </li>


                <!-- Divider -->
                <hr class="sidebar-divider d-none d-md-block">

                <!-- Sidebar Toggler (Sidebar) -->
                <div class="text-center d-none d-md-inline">
                    <button class="rounded-circle border-0" id="sidebarToggle"></button>
                </div>

                </ul>
            <!-- End of Sidebar -->

            <!-- Content Wrapper -->
            <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
                <div id="content">

                    <!-- Topbar -->
                    <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                        <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-search fa-fw"></i>
                        </a>
                        <!-- Dropdown - Messages -->
                        <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                            <form class="form-inline mr-auto w-100 navbar-search">
                            <div class="input-group">
                                <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                                <div class="input-group-append">
                                <button class="btn btn-primary" type="button">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                                </div>
                            </div>
                            </form>
                        </div>
                        </li>

                        <!-- Nav Item - Alerts -->
                        <li class="nav-item dropdown no-arrow mx-1">
                        <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-bell fa-fw"></i>
                            <!-- Counter - Alerts -->
                            <span class="badge badge-danger badge-counter">3+</span>
                        </a>
                        <!-- Dropdown - Alerts -->
                        <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="alertsDropdown">
                            <h6 class="dropdown-header">
                            Alerts Center
                            </h6>
                            <a class="dropdown-item d-flex align-items-center" href="#">
                            <div class="mr-3">
                                <div class="icon-circle bg-primary">
                                <i class="fas fa-file-alt text-white"></i>
                                </div>
                            </div>
                            <div>
                                <div class="small text-gray-500">December 12, 2019</div>
                                <span class="font-weight-bold">A new monthly report is ready to download!</span>
                            </div>
                            </a>
                            <a class="dropdown-item d-flex align-items-center" href="#">
                            <div class="mr-3">
                                <div class="icon-circle bg-success">
                                <i class="fas fa-donate text-white"></i>
                                </div>
                            </div>
                            <div>
                                <div class="small text-gray-500">December 7, 2019</div>
                                $290.29 has been deposited into your account!
                            </div>
                            </a>
                            <a class="dropdown-item d-flex align-items-center" href="#">
                            <div class="mr-3">
                                <div class="icon-circle bg-warning">
                                <i class="fas fa-exclamation-triangle text-white"></i>
                                </div>
                            </div>
                            <div>
                                <div class="small text-gray-500">December 2, 2019</div>
                                Spending Alert: We've noticed unusually high spending for your account.
                            </div>
                            </a>
                            <a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts</a>
                        </div>
                        </li>

                        

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="mr-2 d-none d-lg-inline text-gray-600 small">Jayson Cadiz</span>
                            <img class="img-profile rounded-circle" src="assets/img/sample.jpg">
                        </a>
                        <!-- Dropdown - User Information -->
                        <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                            <a class="dropdown-item" href="#">
                            <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                            Profile
                            </a>
                            <a class="dropdown-item" href="#">
                            <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                            Settings
                            </a>
                            <a class="dropdown-item" href="#">
                            <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                            Activity Log
                            </a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                            <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                            Logout
                            </a>
                        </div>
                        </li>

                    </ul>

                    </nav>
                    <!-- End of Topbar -->

                    <!-- Begin Page Content -->
                    <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
                        
                    </div>

                    <!-- Content Row -->
                    <div class="row">

                        <!-- Income (Monthly) Card Example -->
                        <div class="col-xl-4 col-md-6 mb-4">
                        <div class="card border-left-primary shadow h-100 py-2">
                            <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Income (Monthly)</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800"><span>₱</span>30,000</div>
                                </div>
                                <div class="col-auto">
                                <i class="fas fa-calendar fa-2x text-primary"></i>
                                </div>
                            </div>
                            </div>
                        </div>
                        </div>

                        <!-- Savings (Monthly) Card Example -->
                        <div class="col-xl-4 col-md-6 mb-4">
                        <div class="card border-left-success shadow h-100 py-2">
                            <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Savings (Monthly)</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800"><span>₱</span>5,000</div>
                                </div>
                                <div class="col-auto">
                                <i class="fas fa-wallet fa-2x text-success"></i>
                                </div>
                            </div>
                            </div>
                        </div>
                        </div>

                        <!-- Expenses (Monthly) Card Example -->
                        <div class="col-xl-4 col-md-6 mb-4">
                        <div class="card border-left-danger shadow h-100 py-2">
                            <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">Expenses (Monthly)</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800"><span>₱</span>25,000    </div>
                                </div>
                                <div class="col-auto">
                                <i class="fas fa-dollar-sign fa-2x text-danger"></i>
                                </div>
                            </div>
                            </div>
                        </div>
                        </div>

                        
                    </div>

                    <!-- Content Row -->

                    <div class="row">

                        <!-- Area Chart -->
                        <div class="col-xl-12 ">
                        <div class="card shadow mb-4">
                            <!-- Card Header - Dropdown -->
                            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                            <h6 class="m-0 font-weight-bold text-primary">Monthly Overview</h6>
                            </div>
                            <!-- Card Body -->
                            <div class="card-body">
                            <div class="chart-area">
                                <canvas id="myAreaChart"></canvas>
                            </div>
                            </div>
                        </div>
                        </div>

                        
                    </div>

                    <!-- Content Row -->
                    <div class="row">
                        <div class="col-xl-6">
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">My Categories</h6>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-bordered" id="categoryList" width="100%" cellspacing="0">
                                            <thead>
                                                <tr>
                                                <th>Description</th>
                                                <th>Type</th>
                                                </tr>
                                            </thead>
                                            
                                            <tbody>
                                                <tr>
                                                    <td>Food</td>
                                                    <td>Expense</td>
                                                </tr>
                                                <tr>
                                                    <td>Work Salary</td>
                                                    <td>Income</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">My Ledgers</h6>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-bordered" id="ledgerList" width="100%" cellspacing="0">
                                            <thead>
                                                <tr>
                                                <th>Date</th>
                                                <th>Desctiption</th>
                                                <th>Category</th>
                                                <th>Ammount</th>
                                                </tr>
                                            </thead>
                                            
                                            <tbody>
                                                <tr>
                                                    <td>March 23, 2020</td>
                                                    <td>My Salary from work</td>
                                                    <td>Work Salary</td>
                                                    <td class="text-success"><span>₱</span>5,000</td>
                                                </tr>
                                                <tr>
                                                    <td>March 24, 2020</td>
                                                    <td>Breakfast</td>
                                                    <td>Food</td>
                                                    <td class="text-danger"><span>(<span>₱</span>500)</span></td>
                                                </tr>
                                                <tr>
                                                    <td>March 24, 2020</td>
                                                    <td>Lunch</td>
                                                    <td>Food</td>
                                                    <td class="text-danger"><span>(<span>₱</span>250)</span></td>
                                                </tr>
                                                <tr>
                                                    <td>March 24, 2020</td>
                                                    <td>Dinner</td>
                                                    <td>Food</td>
                                                    <td class="text-danger"><span>(<span>₱</span>1,000)</span></td>
                                                </tr>
                                                <tr>
                                                    <td>March 23, 2020</td>
                                                    <td>My Salary from work</td>
                                                    <td>Work Salary</td>
                                                    <td class="text-success"><span>₱</span>5,000</td>
                                                </tr>
                                                <tr>
                                                    <td>March 24, 2020</td>
                                                    <td>Breakfast</td>
                                                    <td>Food</td>
                                                    <td class="text-danger"><span>(<span>₱</span>500)</span></td>
                                                </tr>
                                                <tr>
                                                    <td>March 24, 2020</td>
                                                    <td>Lunch</td>
                                                    <td>Food</td>
                                                    <td class="text-danger"><span>(<span>₱</span>250)</span></td>
                                                </tr>
                                                <tr>
                                                    <td>March 24, 2020</td>
                                                    <td>Dinner</td>
                                                    <td>Food</td>
                                                    <td class="text-danger"><span>(<span>₱</span>1,000)</span></td>
                                                </tr>

                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    </div>
                    <!-- /.container-fluid -->

                </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                <div class="copyright text-center my-auto">
                    <span>Copyright &copy; WebDev2 2020</span>
                </div>
                </div>
            </footer>
            <!-- End of Footer -->

            </div>
            <!-- End of Content Wrapper -->

        </div>
        <!-- End of Page Wrapper -->

        <!-- Scroll to Top Button-->
        <a class="scroll-to-top rounded" href="#page-top">
            <i class="fas fa-angle-up"></i>
        </a>

        <!-- Logout Modal-->
        <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
            </div>
        </div>
        
    <!-- End -->
    
        @include('base.footer')
        <script>
        $(document).ready(function() {
            $('#categoryList').DataTable({
                ordering: false,
                lengthMenu:[[5,10,25,50,-1],[5,10,25,50,'All']],
                searching: false
            });    
        });
        $(document).ready(function() {
            $('#ledgerList').DataTable({
                ordering: false,
                lengthMenu:[[5,10,25,50,-1],[5,10,25,50,'All']],
                searching: false
            });    
        });
    </script>
    </body>
</html>