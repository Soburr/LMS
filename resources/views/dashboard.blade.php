<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Student | Portal</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Roboto:wght@500;700&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="portal-assets/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="portal-assets/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="portal-assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="portal-assets/css/style.css" rel="stylesheet">
</head>

<body>
    <div class="container-fluid position-relative d-flex p-0">
        <!-- Spinner Start -->
         <div id="spinner" class="show bg-dark position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        {{-- @if (!auth()->user()->profile)
           <script>
             alert('Please Create Your Profile To Have Access To Your Dashboard');
             window.location.href = '{{ route('profile')}}';
           </script>
        @endif --}}



        <!-- Sidebar Start -->
        <div class="sidebar pe-4 pb-3">
            <nav class="navbar bg-secondary navbar-dark">
                <a href="index.html" class="navbar-brand mx-4 mb-3">
                    <h3 class="text-primary"><i class="fa fa-user-edit me-2"></i>Newton</h3>
                </a>
                <div class="d-flex align-items-center ms-4 mb-4">
                     <div class="position-relative">
                        <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"></div>
                    </div>
                    <div class="ms-3">
                        <h6 class="mb-0">{{$name}}</h6>
                        <span>Student</span>
                    </div>
                </div>

                <div class="navbar-nav w-100">
                    <a href="index.html" class="nav-item nav-link active"><i class="fa fa-tachometer-alt me-2"></i>Dashboard</a>
                    <div>
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-laptop me-2"></i>Student's Profile</a>
                    </div>

                    <a href="#" class="nav-item nav-link"><i class="fa fa-th me-2"></i>Take An Exam</a>

                    <a href="#" class="nav-item nav-link"><i class="fa fa-keyboard me-2"></i>View Results</a>

                    <a href="#" class="nav-item nav-link"><i class="fa fa-table me-2"></i>Generate Fees</a>

                    <a href="#" class="nav-item nav-link"><i class="fa fa-chart-bar me-2"></i>Payment Advice</a>

                    <a href="#" class="nav-item nav-link"><i class="fa fa-chart-bar me-2"></i>Receipt</a>

                </div>
            </nav>
        </div>
        <!-- Sidebar End -->


        <!-- Content Start -->
        <div class="content">
            <!-- Navbar Start -->
            <nav class="navbar navbar-expand bg-secondary navbar-dark sticky-top px-4 py-0">
                <a href="index.html" class="navbar-brand d-flex d-lg-none me-4">
                    <h2 class="text-primary mb-0"><i class="fa fa-user-edit"></i></h2>
                </a>
                <a href="#" class="sidebar-toggler flex-shrink-0">
                    <i class="fa fa-bars"></i>
                </a>
                <form class="d-none d-md-flex ms-4">
                    <input class="form-control bg-dark border-0" type="search" placeholder="Search">
                </form>
                <div class="navbar-nav align-items-center ms-auto">
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <i class="fa fa-envelope me-lg-2"></i>
                            <span class="d-none d-lg-inline-flex">Message</span>
                        </a>

                    </div>

                   <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <i class="fa fa-bell me-lg-2"></i>
                            <span class="d-none d-lg-inline-flex">Notification</span>
                        </a>
                   </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <span class="d-lg-inline-flex">{{$name}}</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end bg-secondary border-0 rounded-0 rounded-bottom m-0">
                            <a href="#" class="dropdown-item">My Profile</a>
                            <a href="#" class="dropdown-item">Settings</a>
                            <a href="{{ url('/logout')}}" class="dropdown-item">Logout</a>

                        </div>
                    </div>
                </div>
            </nav>
            <!-- Navbar End -->



                        <!-- Widgets Start -->
                        <div class="container-fluid pt-4 px-4">
                            <div class="row g-4">
                                {{-- 1st box --}}
                                <div class="col-sm-12 col-md-6 col-xl-4">
                                    <div class="h-100 bg-secondary rounded p-4">
                                        <div class="d-flex align-items-center justify-content-between mb-4">
                                            <h6 class="mb-0">Calender</h6>
                                            <a href="">Show All</a>
                                        </div>
                                        <div id="calender"></div>
                                    </div>
                                </div>

                                {{-- 2ND box --}}
                                <div class="col-sm-12 col-md-6 col-xl-4">
                                    <div class="h-75 bg-secondary rounded p-4">
                                        <div class="card-body">
                                           <h5 class="card-title" style="font-family: cursive;">STUDENT'S PROFILE</h5>
                                           <p class="card-text">View the Student's profile</p>
                                           <a href="#" class="btn btn-primary">View Profile</a>
                                        </div>
                                        </div>
                                </div>


                                {{-- 3rd box --}}
                                <div class="col-sm-12 col-md-6 col-xl-4">
                                    <div class="h-75 bg-secondary rounded p-4">
                                        <div class="card-body">
                                           <h5 class="card-title" style="font-family: cursive;">TAKE AN EXAM</h5>
                                           <p class="card-text">Attempt Some Examination Questions</p>
                                           <a href="#" class="btn btn-primary">View Questions</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>



        <!-- Widgets Next Col -->
            <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    {{-- 4th box --}}
                    <div class="col-sm-12 col-md-6 col-xl-4">
                        <div class="h-75 bg-secondary rounded p-4">
                            <div class="card-body">
                                <h5 class="card-title" style="font-family: cursive;">VIEW RESULTS</h5>
                                <p class="card-text">View the Student's Examination Results</p>
                                <a href="#" class="btn btn-primary">View Results</a>
                            </div>
                        </div>
                    </div>

                    {{-- 5th box --}}
                    <div class="col-sm-12 col-md-6 col-xl-4">
                        <div class="h-75 bg-secondary rounded p-4">
                            <div class="card-body">
                                <h5 class="card-title" style="font-family: cursive;">GENERATE FEES</h5>
                                <p class="card-text">See Student Expenses</p>
                                <a href="#" class="btn btn-primary">View Expenses</a>
                            </div>
                        </div>
                    </div>


                    {{-- 6th box --}}
                    <div class="col-sm-12 col-md-6 col-xl-4">
                        <div class="h-75 bg-secondary rounded p-4">
                            <div class="card-body">
                               <h5 class="card-title" style="font-family: cursive;">PAYMENT ADVICE</h5>
                               <p class="card-text">Generate Payment Advice</p>
                               <a href="#" class="btn btn-primary">View Payment Advice</a>
                            </div>
                        </div>
                    </div>

                      {{-- 7th box --}}
                    <div class="col-sm-12 col-md-6 col-xl-4">
                        <div class="h-75 bg-secondary rounded p-4">
                            <div class="card-body">
                                <h5 class="card-title" style="font-family: cursive;">RECEIPT</h5>
                                <p class="card-text">View and Print Student's Receipt</p>
                                <a href="#" class="btn btn-primary">View Receipts</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Widgets End -->



            <!-- Footer Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="bg-secondary rounded-top p-4">
                    <div class="row">
                        <div class="col-12 col-sm-6 text-center text-sm-center">
                            &copy; <a href="#">Newton</a>, All Right Reserved.
                        </div>
                    </div>
                </div>
            </div>
            <!-- Footer End -->
        </div>
        <!-- Content End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="portal-assets/lib/chart/chart.min.js"></script>
    <script src="portal-assets/lib/easing/easing.min.js"></script>
    <script src="portal-assets/lib/waypoints/waypoints.min.js"></script>
    <script src="portal-assets/lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="portal-assets/lib/tempusdominus/js/moment.min.js"></script>
    <script src="portal-assets/lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="portal-assets/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="portal-assets/js/main.js"></script>
    <script src="portal-assets/js/header.js"></script>
</body>

</html>
