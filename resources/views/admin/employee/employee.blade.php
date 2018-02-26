<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Servicio Electricos Automotriz Patricio</title>
    <link rel="stylesheet" href="{{ url('css/style.css') }}">
    {{-- <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css" rel="stylesheet"> --}}
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
          @if (auth()->user()->cliente === 1)
            <li><a href="{{ url('/admin/client') }}"><i class="fa fa-users"></i>Clientes</a></li>
          @endif
          @if (auth()->user()->proveedores === 1)
            <li><a href="{{ url('/admin/suppliers') }}"><i class="fa fa-address-card-o"></i>Proveedores</a></li>
          @endif
          @if (auth()->user()->empleados === 1)
            <li class="active" ><a href="{{ url('/admin/employee') }}"><i class="fa fa-address-book-o"></i>Empleados</a></li>
          @endif
          <li class="li-menu-nav">INVENTARIO</li>
          @if (auth()->user()->inventario === 1)
            <li>
              <a id="inventary"><i class="fa fa-pencil-square"></i>Inventario <i class="fa fa-chevron-down"></i></a>
              <ul class="submenu-list" id="submenu-list">
                <li><a href="{{url('admin/catalogo')}}"><i class="fa fa-list"></i>Catálogo</a></li>
                <li><a href="{{url('admin/inventary')}}"><i class="fa fa-list"></i>Productos </a></li>
                <li><a href="{{url('admin/checkin')}}"><i class="fa fa-list"></i>Entradas de Productos</a></li>
                <li><a href="{{url('admin/inventary-out')}}"><i class="fa fa-list"></i>Salidas de Productos</a></li>
                <li><a href="{{url('admin/clasificationProduct')}}"><i class="fa fa-list"></i>Tipos de Productos</a></li>
              </ul>
            </li>
          @endif
        </ul>
      </aside>
      <div class="container" id="container">
        <div class="location">
          <h1 class="title">Administrador</h1>
          <div class="breadcrumb">
            <ol>
              Se encuentra en
              <li><i class="fa fa-home"></i>Inicio</li>
              <li class="ol-active"><i class="fa fa-users"></i>Empleados</li>
            </ol>
          </div>
        </div>
        <div class="table-container">
          <div class="container-search">
            @if (auth()->user()->create === 1)
              <a href="{{ url('admin/add-employee') }}" class="btn-green" ><i class="fa fa-user-plus"></i> Registrar Empleados</a>
            @endif
          </div>
          @if ($message = Session::get('success'))
            <div class="message-danger">
              <p>{{ $message }}</p>
            </div>
          @endif
          <div class="">
            <table id="Jtabla">
              <thead>
                <tr class="theader">
                  <th>Acciones</th>
                  <th>N° de Empleado</th>
                  <th>Nombre completo</th>
                  <th>Teléfono</th>
                  <th>Usuario</th>
                  <th>Tipo de Usuario</th>
               </tr>
              </thead>
              <tbody class="tbodymain">
                @foreach ($employees as $employee)
                  <tr class="tbody">
                    <td class="action">
                      @if (auth()->user()->update === 1)
                        <a class="btn-green-action" href="{{ url('admin/edit-employee',$employee->id) }}"><i class="fa fa-pencil-square-o fa-lg"></i></a>
                      @endif
                      @if (auth()->user()->delete === 1)
                        {!! Form::open(['method' => 'DELETE','route' => ['employee.destroy', $employee->id]]) !!}
                          <button type="submit" class="btn-danger-action"><i class="fa fa-trash-o fa-lg"></i></button>
                        {!! Form::close() !!}
                      @endif
                    </td>
                    <td>RX-{{ $employee->id }}</td>
                    <td>{{ $employee->name }}</td>
                    <td>{{ $employee->phone }}</td>
                    <td>{{ $employee->user }}</td>
                    <td>{{ $employee->tipo }}</td>
                  </tr>
                @endforeach
              </tbody>
            </table>
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
    <script type="text/javascript" src="{{ url('js/inventary.js') }}"></script>
  </body>
</html>
