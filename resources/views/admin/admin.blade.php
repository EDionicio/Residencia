<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Servicio Electricos Automotriz Patricio</title>
    <link rel="stylesheet" href="{{ url('css/style.css') }}">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:200,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/font-awesome/css/font-awesome.min.css') }}">
  </head>
  <body>
    <header>
      @include('../layouts/nav')
    </header>
    <main class="wrapper">
      <aside class="menu" id="aside">
        <div class="logo">
          <!-- <a href="{{ url('/admin/admin-welcome') }}"><img class="img-menu" src="{{ url('img/LogoRX.png')}}" alt=""></a> -->
        </div>
        <ul class="ul-menu">
          <li class="li-menu-nav">MENU DE NAVEGACION</li>
          <li class="active"><a href="{{ url('/admin/admin-welcome') }}"><i class="fa fa-home"></i>Inicio</a></li>
          <li><a href="{{ url('/admin/client') }}"><i class="fa fa-users"></i>Clientes</a></li>
          <li ><a href="{{ url('/admin/suppliers') }}"><i class="fa fa-address-card-o"></i>Proveedores</a></li>
          <li><a href="{{ url('/admin/employee') }}"><i class="fa fa-user"></i>Empleados</a></li>
          <li class="li-menu-nav">INVENTARIO</li>
          <li >
            <a id="inventary"><i class="fa fa-pencil-square"></i>Inventario <i class="fa fa-chevron-down"></i></a>
            <ul class="submenu-list" id="submenu-list">
              <li><a href="{{url('admin/catalogo')}}"><i class="fa fa-list"></i>Catálogo</a></li>
              <li><a href="{{url('admin/inventary')}}"><i class="fa fa-list"></i>Productos </a></li>
              <li><a href="{{url('admin/checkin')}}"><i class="fa fa-list"></i>Entradas de Productos</a></li>
              <li><a href="{{url('admin/inventary-out')}}"><i class="fa fa-list"></i>Salidas de Productos</a></li>
              <li><a href="{{url('admin/clasificationProduct')}}"><i class="fa fa-list"></i>Tipos de Productos</a></li>
            </ul>
          </li>
        </ul>
      </aside>
      <div class="container" id="container">
        <div class="location">
          {{-- <h1 class="title">Administrador: {{ auth()->user()->name }}</h1> --}}
          <h1 class="title">Administrador</h1>
          <div class="breadcrumb">
            <ol>
              Se encuentra en
              <li class="ol-active"><i class="fa fa-home"></i>Inicio</li>
            </ol>
          </div>
        </div>
        <div class="eslogan">
          <h1>AUTOMOTRIZ PATRICIO SE MUEVE A DONDE TU LO NECESITES!</h1>
        </div>
        <div class="businessComplet">
          {{-- <img src="{{ url('img/3.jpg')}}" alt=""> --}}
          <div class="businessBody">
            <div class="business">
              <h2>Misión</h2>
              <p>SER UNA MICRO-EMPRESA DE CALIDAD EN EL DESARROLLO DE SOLUCIONES A EMPRESAS
                CONSTRUCTORAS, COMPROMETIDAS EN SATISFACER LAS NECESIDADES DE SUS CLIENTES
                OFRECIENDOLES UN BUEN SERVICIO, A TRAVES DE SERVICIOS CONFIABLES, ENFOCADOS A LA MEJORA CONTINUA EN LOS PROCESOS Y SERVICIOS.
              </p>
            </div>
            <div class="business">
              <h2>Visión</h2>
              <p>SER UNA EMPRESA DE CALIDAD EN SOLUCIONES DE PROBLEMAS DE EMPRESAS
              CONSTRUCTORAS, VOLVIENDOSE PARTE FUNDAMENTAL DEL EXITO DE SUS CLIENTES,
              OFRECIENDO UN SERVICIO CONFIABLE, CON VALORES Y COMPROMETIDOS CON LA CALIDAD.
              </p>
            </div>

          </div>
          <div class="businessImg">
            <img src="{{ url('img/imagen2.png')}}" alt="">
          </div>

        </div>

        </div>
      </div>
    </main>
    <footer id="footerM">
      <h3>© 2017 Todos Los Derechos Reservados</h3>
    </footer>
    <script src="{{ url('js/datatable/jQuery-2.1.3.min.js') }}"></script>
    <script type="text/javascript" src="{{ url('js/menu-vertical.js') }}"></script>
    <script type="text/javascript" src="{{ url('js/inventary.js') }}"></script>
  </body>
</html>
