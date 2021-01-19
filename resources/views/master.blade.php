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
              <p>Dashboard</p>
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
          <div class=col-md-12>
            <div class="card">
              <div class="card-header">
                <h5 class="card-title">Rechercher</h5>
              </div>
              <div class="card-body">
                <form>
                  <div class="row">
                    <div class="col-md-4 pr-1">
                      <div class="form-group">
                        <label>Rechercher par</label>
                        <select class="form-control" name="objet">
                          <option selected class="form-control">Table</option>
                          <option class="form-control">Index</option>
                        </select>
                      </div>
                    </div>
                    <div class="col-md-4 px-1">
                      <div class="form-group">
                        <label>Schéma</label>
                        <input type="text" class="form-control" placeholder="Schéma" name="schema">
                      </div>
                    </div>
                    <div class="col-md-4 pl-1">
                      <div class="form-group">
                        <label>Nom objet</label>
                        <input type="text" class="form-control" placeholder="Nom Table ou Index">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="update ml-auto mr-auto">
                      <button type="submit" class="btn btn-primary btn-round">Chercher</button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title">Indexes</h4>
              </div>
              
              <div class="d-flex">
              <a class="btn btn-primary btn-round ml-auto" href="javascript:showfunction()" name="visualiser" role="button">Visualiser</a>
                  <button class="btn btn-primary btn-round">Modifier</button>
                  <button class="btn btn-primary btn-round">Supprimer</button>
                </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table">
                    <thead class=" text-primary">
                      <th class="border-right">
                        Sélectionner
                      </th>
                      <th class="border-right">
                        Propriétaire Table
                      </th>
                      <th class="border-right">
                        Table
                      </th>
                      <th class="border-right">
                        Colonnes indexées
                      </th>
                      <th class="border-right">
                        Propriétaire Index
                      </th>
                      <th class="border-right">
                        Index
                      </th>
                      <th class="border-right">
                        Tablespace
                      </th>
                      <th class="text-right">
                        Dernière analyse
                      </th>
                    </thead>
                    <tbody>
                      @foreach($indexes as $index)
                      <tr>
                        <td class="border-right">
                          <input id="{{ $index->index_name }}" type="radio" class="form-control btn" name="select"></input>
                        </td>
                        <td class="border-right">
                          {{ $index->table_owner }}
                        </td>
                        <td class="border-right">
                        {{ $index->table_name }}
                        </td>
                        <td class="border-right">
                        
                        </td>
                        <td class="border-right">
                        {{ $index->owner }}
                        </td>
                        <td class="border-right">
                        {{ $index->index_name }}
                        </td>
                        <td class="border-right">
                        {{ $index->tablespace_name }}
                        </td>
                        <td class="text-right border-right">
                        {{ $index->last_analyzed }}
                        </td>
                      </tr>
                      <tr>
                      @endforeach
                    </tbody>
                  </table>
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
          function showfunction(){
            var id = document.querySelector('input[name = "select"]:checked').id;
            var url = '{{route("detail.show",":id")}}';
            url=url.replace(':id',id);
            document.location.href=url;
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

 <!--
      <footer class="footer footer-black  footer-white ">
        <div class="container-fluid">
          <div class="row">
            <nav class="footer-nav">
              <ul>
                <li><a href="https://www.creative-tim.com" target="_blank">Creative Tim</a></li>
                <li><a href="https://www.creative-tim.com/blog" target="_blank">Blog</a></li>
                <li><a href="https://www.creative-tim.com/license" target="_blank">Licenses</a></li>
              </ul>
            </nav>
            <div class="credits ml-auto">
              <span class="copyright">
                © <script>
                  document.write(new Date().getFullYear())
                </script>, made with <i class="fa fa-heart heart"></i> by Creative Tim
              </span>
            </div>
          </div>
        </div>
      </footer>
    </div>
  </div>
  <script src="{{asset('js/core/jquery.min.js')}}"></script>
  <script src="{{asset('js/core/popper.min.js')}}"></script>
  <script src="{{asset('js/core/bootstrap.min.js')}}"></script>
  <script src="{{asset('js/plugins/perfect-scrollbar.jquery.min.js')}}"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <script src="{{asset('js/plugins/chartjs.min.js')}}"></script>
  <script src="{{asset('js/plugins/bootstrap-notify.js')}}"></script>
  <script src="{{asset('js/paper-dashboard.min.js')}}?v=2.0.1" type="text/javascript"></script> <script src="{{asset('demo/demo.js')}}"></script>
  <script>
    $(document).ready(function() {
      demo.initChartsPages();
    });
  </script>
</body>
-->
</html>
