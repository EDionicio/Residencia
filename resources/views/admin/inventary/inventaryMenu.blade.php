<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Servicio Electricos Automotriz Patricio</title>
    <link rel="stylesheet" href="{{ url('css/style.css') }}">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:200,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/font-awesome/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('js/datatable/dataTables.bootstrap.css') }}">
  </head>
  <body>
    <header>
      @include('../layouts/nav')
    </header>
    <main class="wrapper">
      <aside class="menu" id="aside">
        <div class="logo">
          <a href="{{ url('/admin/admin-welcome') }}"><img class="img-menu" src="{{ url('img/patricio.png')}}" alt=""></a>
        </div>
        <ul class="ul-menu">
          <li class="li-menu-nav">MENU DE NAVEGACION</li>
          <li><a href="{{ url('/admin/admin-welcome') }}"><i class="fa fa-home"></i>Inicio</a></li>
          <li ><a href="{{ url('/admin/client') }}"><i class="fa fa-users"></i>Clientes</a></li>
          <li ><a href="{{ url('/admin/suppliers') }}"><i class="fa fa-address-card-o"></i>Proveedores</a></li>
          <li ><a href="{{ url('/admin/employee') }}"><i class="fa fa-address-book-o"></i>Empleados</a></li>
          <li class="li-menu-nav">INVENTARIO</li>
          <li class="active"><a href="{{url('admin/inventaryMenu')}}"><i class="fa fa-pencil-square"></i>Inventario</a></li>
        </ul>
      </aside>
      <div class="container" id="container">
        <div class="location">
          <h1 class="title">Administrador</h1>
          <div class="breadcrumb">
            <ol>
              Se encuentra en
              <li><i class="fa fa-home"></i>Inicio</li>
                <li class="ol-active"><i class="fa fa-pencil-square"></i>Inventario</li>
            </ol>
          </div>
        </div>
        <div class="table-container-i">
          <!-- <div class="container-search">
            <a href="{{url('admin/add-product')}}" class="btn-success" ><i class="fa fa-user-plus"></i> Registrar Productos</a>
            <a href="{{url('admin/add-out')}}" class="btn-success" ><i class="fa fa-user-plus"></i> Salidas</a>
          </div> -->
          <div class="inventary">
            <div class="inventaryTitle">
              <h2><i class="fa fa-pencil-square"></i> Inventario</h2>
            </div>
            <div class="inventaryMenu">
              <a href="{{url('admin/inventary')}}" class="product"> <i class="fa fa-leanpub fa-3x"></i><label for="">Productos</label></a>
              <a href="#" class="reports"> <i class="fa fa-book fa-3x"></i><label for="">Reportes</label></a>
            </div>
            <div class="img">
              <img src="{{ url('img/productos2.jpg')}}" alt="">

            </div>

          </div>

        </div>
      </div>
    </main>
    <footer id="footer">
      <h3>© 2017 Todos Los Derechos Reservados</h3>
    </footer>
    <script type="text/javascript" src="{{ url('js/menu-vertical.js') }}"></script>
    <script src="{{ url('js/datatable/jQuery-2.1.3.min.js') }}"></script>
    <script src="{{ url('js/datatable/jquery.dataTables.js') }}" type="text/javascript"></script>
    <script src="{{ url('js/datatable/dataTables.bootstrap.js') }}" type="text/javascript"></script>
    <script src="{{ url('js/toggle.js') }}" type="text/javascript"></script>
    <script type="text/javascript">
      $(function () {
        $('#Jtabla').dataTable({
          "bPaginate": true,
          "bLengthChange": true,
          "bFilter": true,
          "bSort": true,
          "bInfo": true,
          "bAutoWidth": true
        });
      });
    </script>
  </body>
</html>
