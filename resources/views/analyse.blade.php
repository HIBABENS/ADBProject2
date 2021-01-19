<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
  Home
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
  <!-- CSS Files -->
  <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet" />
  <link href="{{asset('css/paper-dashboard.css')}}?v=2.0.1" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="{{asset('demo/demo.css')}}" rel="stylesheet" />
</head>


<body class="">
  <div class="wrapper ">
    <div class="sidebar" data-color="white" data-active-color="danger">
      <div class="logo">
        <a href="" class="simple-text logo-normal">
          ABD
        </a>
      </div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li class="active">
            <a href="">
              <i class="nc-icon nc-bank"></i>
              <p>Index Détails</p>
            </a>
          </li>
          <li>
            <a href="">
              <i class="nc-icon nc-diamond"></i>
              <p>Créer</p>
            </a>
          </li>
          <li>
            <a href="">
              <i class="nc-icon nc-single-02"></i>
              <p>User Profile</p>
            </a>
          </li>
          <li>
            <a href="">
              <i class="nc-icon nc-tile-56"></i>
              <p>Logout</p>
            </a>
          </li>
        </ul>
      </div>
    </div>
    <div class="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-absolute fixed-top navbar-transparent">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <div class="navbar-toggle">
              <button type="button" class="navbar-toggler">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
              </button>
            </div>
            <a class="navbar-brand" href="javascript:;"> Analyse </a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end" id="navigation">
            <ul class="navbar-nav">

              <li class="nav-item btn-rotate dropdown">
                <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="nc-icon nc-bell-55"></i>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                  <a class="dropdown-item" href="#">Profile</a>
                  <a class="dropdown-item" href="#">Logout</a>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </nav>

      <!-- End Navbar -->
      <div class="content">
        <div class="row">
          <div class="col-md-12">
            @if (session('error'))
            <div class="alert alert-danger alert-dismissible fade show">
              <button type="button" aria-hidden="true" class="close" data-dismiss="alert" aria-label="Close">
                <i class="nc-icon nc-simple-remove"></i>
              </button>
              <span>{{ session('error') }}</span>
            </div>
            @endif
          </div>
         
          


          <div class="row">
						<div class="col-xl-6 col-xxl-5 d-flex">
							<div class="w-100">
								<div class="row">
									<div class="col-sm-6">

										<div class="card">
											<div class="card-body">
												<h5 class="card-title mb-4">HEIGHT</h5>
												<h1 class="mt-1 mb-3">2.382</h1>
												
											</div>
                                        </div>
                                        
										<div class="card">
											<div class="card-body">
												<h5 class="card-title mb-4">BLOCKS</h5>
												<h1 class="mt-1 mb-3">14.212</h1>
												
											</div>
										</div>
									</div>
									<div class="col-sm-6">
										<div class="card">
											<div class="card-body">
												<h5 class="card-title mb-4">NAME</h5>
												<h1 class="mt-1 mb-3">$21.300</h1>
												
											</div>
										</div>
										<div class="card">
											<div class="card-body">
												<h5 class="card-title mb-4">PARTITION_NAME</h5>
												<h1 class="mt-1 mb-3">64</h1>
												
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>

						<div class="col-xl-6 col-xxl-5 d-flex">
							<div class="w-100">
								<div class="row">
									<div class="col-sm-6">

										<div class="card">
											<div class="card-body">
												<h5 class="card-title mb-4">Sales</h5>
												<h1 class="mt-1 mb-3">2.382</h1>
												<div class="mb-1">
													<span class="text-danger"> <i class="mdi mdi-arrow-bottom-right"></i> -3.65% </span>
													<span class="text-muted">Since last week</span>
												</div>
											</div>
                                        </div>
                                        
										<div class="card">
											<div class="card-body">
												<h5 class="card-title mb-4">Visitors</h5>
												<h1 class="mt-1 mb-3">14.212</h1>
												<div class="mb-1">
													<span class="text-success"> <i class="mdi mdi-arrow-bottom-right"></i> 5.25% </span>
													<span class="text-muted">Since last week</span>
												</div>
											</div>
										</div>
									</div>
									<div class="col-sm-6">
										<div class="card">
											<div class="card-body">
												<h5 class="card-title mb-4">Earnings</h5>
												<h1 class="mt-1 mb-3">$21.300</h1>
												<div class="mb-1">
													<span class="text-success"> <i class="mdi mdi-arrow-bottom-right"></i> 6.65% </span>
													<span class="text-muted">Since last week</span>
												</div>
											</div>
										</div>
										<div class="card">
											<div class="card-body">
												<h5 class="card-title mb-4">Orders</h5>
												<h1 class="mt-1 mb-3">64</h1>
												<div class="mb-1">
													<span class="text-danger"> <i class="mdi mdi-arrow-bottom-right"></i> -2.25% </span>
													<span class="text-muted">Since last week</span>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
                        </div>
                        
                        <div class="col-xl-6 col-xxl-5 d-flex">
							<div class="w-100">
								<div class="row">
									<div class="col-sm-6">

										<div class="card">
											<div class="card-body">
												<h5 class="card-title mb-4">Sales</h5>
												<h1 class="mt-1 mb-3">2.382</h1>
												<div class="mb-1">
													<span class="text-danger"> <i class="mdi mdi-arrow-bottom-right"></i> -3.65% </span>
													<span class="text-muted">Since last week</span>
												</div>
											</div>
                                        </div>
                                        
										<div class="card">
											<div class="card-body">
												<h5 class="card-title mb-4">Visitors</h5>
												<h1 class="mt-1 mb-3">14.212</h1>
												<div class="mb-1">
													<span class="text-success"> <i class="mdi mdi-arrow-bottom-right"></i> 5.25% </span>
													<span class="text-muted">Since last week</span>
												</div>
											</div>
										</div>
									</div>
									<div class="col-sm-6">
										<div class="card">
											<div class="card-body">
												<h5 class="card-title mb-4">Earnings</h5>
												<h1 class="mt-1 mb-3">$21.300</h1>
												<div class="mb-1">
													<span class="text-success"> <i class="mdi mdi-arrow-bottom-right"></i> 6.65% </span>
													<span class="text-muted">Since last week</span>
												</div>
											</div>
										</div>
										<div class="card">
											<div class="card-body">
												<h5 class="card-title mb-4">Orders</h5>
												<h1 class="mt-1 mb-3">64</h1>
												<div class="mb-1">
													<span class="text-danger"> <i class="mdi mdi-arrow-bottom-right"></i> -2.25% </span>
													<span class="text-muted">Since last week</span>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
                        </div>
                        
                        <div class="col-xl-6 col-xxl-5 d-flex">
							<div class="w-100">
								<div class="row">
									<div class="col-sm-6">

										<div class="card">
											<div class="card-body">
												<h5 class="card-title mb-4">Sales</h5>
												<h1 class="mt-1 mb-3">2.382</h1>
												<div class="mb-1">
													<span class="text-danger"> <i class="mdi mdi-arrow-bottom-right"></i> -3.65% </span>
													<span class="text-muted">Since last week</span>
												</div>
											</div>
                                        </div>
                                        
										<div class="card">
											<div class="card-body">
												<h5 class="card-title mb-4">Visitors</h5>
												<h1 class="mt-1 mb-3">14.212</h1>
												<div class="mb-1">
													<span class="text-success"> <i class="mdi mdi-arrow-bottom-right"></i> 5.25% </span>
													<span class="text-muted">Since last week</span>
												</div>
											</div>
										</div>
									</div>
									<div class="col-sm-6">
										<div class="card">
											<div class="card-body">
												<h5 class="card-title mb-4">Earnings</h5>
												<h1 class="mt-1 mb-3">$21.300</h1>
												<div class="mb-1">
													<span class="text-success"> <i class="mdi mdi-arrow-bottom-right"></i> 6.65% </span>
													<span class="text-muted">Since last week</span>
												</div>
											</div>
										</div>
										<div class="card">
											<div class="card-body">
												<h5 class="card-title mb-4">Orders</h5>
												<h1 class="mt-1 mb-3">64</h1>
												<div class="mb-1">
													<span class="text-danger"> <i class="mdi mdi-arrow-bottom-right"></i> -2.25% </span>
													<span class="text-muted">Since last week</span>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
                        </div>


					</div>


           



        <div class="col-md-12">
             <div class="col-12 col-xl-12">
							<div class="card">
								<div class="card-header">
									<h5 class="card-title">Information de Stockage</h5>
								</div>
								<table class="table table-striped">
									<thead>
										<tr>
                                            <th class="d-none d-md-table-cell text-muted" style="width:5%"> HEIGHT</th>
                                            <th class="d-none d-md-table-cell text-muted" style="width:5%">BLOCKS</th>
											<th class="d-none d-md-table-cell text-muted" style="width:10%">PARTITION_NAME</th>
                                            <th class="d-none d-md-table-cell text-muted" style="width:10%">LF_ROWS</th>
                                            <th class="d-none d-md-table-cell text-muted" style="width:12%">LF_BLKS</th>
                                            <th class="d-none d-md-table-cell text-muted" style="width:10%">LF_ROWS_LEN</th>
                                            <th class="d-none d-md-table-cell text-muted" style="width:10%"> BR_ROWS</th>

                                            <th class="d-none d-md-table-cell text-muted" style="width:5%">BR_BLKS</th>
											<th class="d-none d-md-table-cell text-muted" style="width:10%">BR_ROWS_LEN</th>
                                            <th class="d-none d-md-table-cell text-muted" style="width:10%">BR_BLK_LEN</th>
                                            <th class="d-none d-md-table-cell text-muted" style="width:12%">DEL_LF_ROWS_LEN</th>
                                            <th class="d-none d-md-table-cell text-muted" style="width:10%">DISTINCT_KEYS</th>
                                            <th class="d-none d-md-table-cell text-muted" style="width:10%"> MOST_REPEATED_KEY</th>
										</tr>
									</thead>
									<tbody>
										<tr>
                                            
                                            
										</tr>
										
									</tbody>
								</table>
							</div>
						</div>
              </div>
            </div>
         

        </div>

          <footer class="footer footer-black  footer-white ">
            <div class="container-fluid">
              <div class="row">
                <div class="credits ml-auto">
                  <span class="copyright">
                    © <script>
                      document.write(new Date().getFullYear())
                    </script>, made by Imane & Hiba
                  </span>
                </div>
              </div>
            </div>
          </footer>
        </div>
      </div>

      <script>
          function editmon(){
            var id = document.querySelector('input[name = "mon"]:checked').id;
            var url = '{{route("index.mon",":id")}}';
            url=url.replace(':id',id);
            document.location.href=url;
          }
         
          }
      </script>
      <script src="{{asset('js/core/jquery.min.js')}}"></script>
  <script src="{{asset('js/core/popper.min.js')}}"></script>
  <script src="{{asset('js/core/bootstrap.min.js')}}"></script>
  <script src="{{asset('js/plugins/perfect-scrollbar.jquery.min.js')}}"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <script src="{{asset('js/plugins/chartjs.min.js')}}"></script>
  <script src="{{asset('js/plugins/bootstrap-notify.js')}}"></script>
  <script src="{{asset('js/paper-dashboard.min.js')}}?v=2.0.1" type="text/javascript"></script> <script src="{{asset('demo/demo.js')}}"></script>
 
</body>
</html>
