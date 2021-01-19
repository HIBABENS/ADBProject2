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
            <a class="navbar-brand" href="javascript:;"> Dashboard </a>
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
         
          <div class="col-md-12">
          <div class="d-flex">
          <form method="POST" action="{{ url('/detail/ana') }}">
          {{ csrf_field() }}
          <a class="btn btn-primary btn-round ml-auto btn-submit" name="visualiser" role="button" data-toggle="modal" data-target="#mon<?php $id?>">Analize</a>
          </form> 

           <form method="POST" action="{{ url('/detail/mon') }}">
              {{ csrf_field() }}
              <div class="form-group">
              <input type="hidden" id="id" name="id" value="{{$id}}">
              </div>
              <button class="btn btn-primary btn-round ml-auto btn-submit">Start Monitoring</button>
            </form> 

            <form method="POST" action="{{ url('/detail/Unmon') }}">
              {{ csrf_field() }}
              <div class="form-group">
              <input type="hidden" id="id" name="id" value="{{$id}}">
              </div>
              <button class="btn btn-primary btn-round ml-auto btn-submit">Stop Monitoring</button>
            </form> 

         
               </div>
           
      <div class="row">
       <div class="col">
       @if(Session::has('Mon'))
           <div class="alert alert-success alert-dismissible">
               <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
               Monitoring de l'index a commancer
           </div>
       @endif

       @if(Session::has('NoMon'))
           <div class="alert alert-danger alert-dismissible">
               <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
               Le monitoring est desactivé 
           </div>
       @endif
       </div>
   </div>
  
        <div class="modal fade" id="mon<?php $id; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">

            <div class="modal-header text-center">
              <h4 class="modal-title w-100 font-weight-bold">Analyses</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            @if(Session::has('analyse'))
     
              <form method="POST" action="{{ url('index.analyze') }}">
                          {{ csrf_field() }}
                      <div class="modal-body mx-3">
                        <div class="md-form mb-5 text-center">
                              <div class="form-group @if($errors->has('thumbnail')) has-error @endif"> 
                              {!! Form::label('Date')!!}
                              {!! Form::date('date', null, ['class'=> 'form-control', 'placeholder' =>'date'])!!}
                              @if($errors->has('date'))
                              <span class="help-block">{!! $errors->first('date')!!}</span>
                              @endif
                              </div>
                              
                            </div>
                        </div>
                      </div>
                        
              {{ Form::hidden('id', <?php $id; ?>  ) }}
              <button class="btn btn-primary btn-round ml-auto btn-submit">Stop Monitoring</button>
               </form> 
              @endif
        </div>
      </div>
  
      </div>
      
           


             <div class="col-12 col-xl-12">
							<div class="card">
								<div class="card-header">
									<h5 class="card-title">Informations Générales</h5>
								</div>
								<table class="table table-striped">
									<thead>
										<tr>
                                            <th class="d-none d-md-table-cell text-muted" style="width:5%">Blevel</th>
                                            <th class="d-none d-md-table-cell text-muted" style="width:5%">Clés distinctes</th>
											<th class="d-none d-md-table-cell text-muted" style="width:10%">Facteur de cluster</th>
                                            <th class="d-none d-md-table-cell text-muted" style="width:10%">Blocs feuille</th>
                                            <th class="d-none d-md-table-cell text-muted" style="width:12%">Nbre moyen de blocs feuille par clé</th>
                                            <th class="d-none d-md-table-cell text-muted" style="width:13%">Nbre moyen de blocs de données par clé</th>
                                            <th class="d-none d-md-table-cell text-muted" style="width:10%">Nombre de lignes</th>
                                            <th class="d-none d-md-table-cell text-muted" style="width:10%">Taille d'échantillon</th>
										</tr>
									</thead>
									<tbody>
										<tr>
                                            @for($i = 1; $i<=$l ;$i++)
                                            <td class="d-none d-md-table-cell text-muted" style="width:10%">{{$details1[$i]}}</td>
                                            @endfor
										</tr>
										
									</tbody>
								</table>
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
                                            <th class="d-none d-md-table-cell text-muted" style="width:5%">INITIAL_EXTENT</th>
                                            <th class="d-none d-md-table-cell text-muted" style="width:5%">NEXT_EXTENT</th>
											<th class="d-none d-md-table-cell text-muted" style="width:10%">MIN_EXTENTS</th>
                                            <th class="d-none d-md-table-cell text-muted" style="width:10%">MAX_EXTENTS</th>
                                            <th class="d-none d-md-table-cell text-muted" style="width:12%">PCT_INCREASE</th>
                                            <th class="d-none d-md-table-cell text-muted" style="width:10%">PCT_THRESHOLD</th>
                                            <th class="d-none d-md-table-cell text-muted" style="width:10%">PCT_FREE</th>
										</tr>
									</thead>
									<tbody>
										<tr>
                                            @for($j = 1; $j<=$l2 ;$j++)
                                            <td class="d-none d-md-table-cell text-muted" style="width:10%">{{$details2[$j]}}</td>
                                            @endfor
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
