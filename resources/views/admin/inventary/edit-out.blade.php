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
          <a href="{{ url('/admin/admin-welcome') }}"><img class="img-menu" src="{{ url('img/patricio.png')}}" alt=""></a>
        </div>
        <ul class="ul-menu">
          <li class="li-menu-nav">MENU DE NAVEGACION</li>
          <li><a href="{{ url('/admin/admin-welcome') }}"><i class="fa fa-home"></i>Inicio</a></li>
          <li ><a href="{{ url('/admin/client') }}"><i class="fa fa-users"></i>Clientes</a></li>
          <li ><a href="{{ url('/admin/suppliers') }}"><i class="fa fa-address-card-o"></i>Proveedores</a></li>
          <li ><a href="{{ url('/admin/employee') }}"><i class="fa fa-address-book-o"></i>Empleados</a></li>
          <li class="li-menu-nav">INVENTARIO</li>
          <li class="active">
            <a id="inventary"><i class="fa fa-pencil-square"></i>Inventario <i class="fa fa-chevron-down"></i></a>
              <ul class="submenu-list" id="submenu-list">
                <li class="active" ><a href="{{url('admin/inventary')}}">Productos </a></li>
                <li><a href="{{url('admin/checkin')}}"> Entradas de Productos </a></li>
                <li><a href="{{url('admin/inventary-out')}}"> Salidas de Productos <small class="bg-indicator">Editar</small></a></li>
                <li><a href="{{url('admin/clasificationProduct')}}">Tipos de Productos</a></li>
              </ul>
          </li>
        </ul>
      </aside>
      <div class="container" id="container">
        <div class="location">
          <h1 class="title">Administrador</h1>
          <div class="breadcrumb">
            <ol>
              Se encuentra en
              <li><i class="fa fa-home"></i>Inicio</li>
              <li class="ol-active"><i class="fa fa-pencil-square-o"></i>Editar Salidas</li>
            </ol>
          </div>
        </div>
        <div class="for-container">
          <h2><i class="fa fa-pencil-square-o"></i>Editar Salidas</h2>
          {!! Form::model($checkout, ['method' => 'PATCH','route' => ['inventary-out.update', $checkout->id], 'class' => 'container-add-clients']) !!}
            {{ csrf_field() }}
            <div class="date-clients">
              <label for="nInvoice">N° de Factura:</label>
              <input type="text" name="nInvoice" value="{{ $checkout->nInvoice }}" required>
              <div class="clasification">
                <div class="select">
                  <label for="TProduct">Tipo de Producto:</label>
                  <input type="text" class="inicialesInput" name="TProduct" value="{{ $checkout->TProduct }}" readonly="">
                </div>
                <div class="iniciales">
                  <input type="text" class="inicialesInput" name="NProduct" value="{{ $checkout->NProduct }}" readonly="readonly">
                </div>
              </div>
              <label for="provider">Proveedor:</label>
              <input type="text" name="provider" value="{{ $checkout->provider }}" readonly="">
              <label for="description">Descripción:</label>
              <textarea type="text" rows="4" name="description" readonly="">{{ $checkout->description }}</textarea>
            </div>
            <div class="date-clients">
              <label for="checkout">Fecha de Salida:</label>
              <input class="date-design" type="date" name="checkout" value="{{ $checkout->checkout }}">
              <label for="unit">Unidad de Medida:</label>
              <input type="text" name="unit" value="{{ $checkout->unit }}" readonly="">
              <label for="stock">Existencia:</label>
              <input type="text" name="stock" value="{{ $checkout->stock }}" readonly="">
              <label for="quantity">Cantidad de Salida:</label>
              <input type="number" name="quantity" value="{{ $checkout->quantity }}" required>
              <label for="merma">Merma:</label>
              <input type="text" name="merma" value="{{ $checkout->merma }}" required>
            </div>
            <div class="date-clients">
              <label for="priceList">Precio Lista:</label>
              <input type="text" name="priceList" value="{{ $checkout->priceList }}" readonly="">
              <label for="cost">Costo:</label>
              <input type="text" name="cost" value="{{ $checkout->cost }}" readonly="">
              <label for="priceSales">Precio Venta :</label>
              <input type="text" name="priceSales" value="{{ $checkout->priceSales }}" id='priceSales' placeholder="Precio Venta">
              <label for="totalAmount">Precio Total:</label>
              <input type="text" name="totalAmount" value="{{ $checkout->totalAmount }}" required>
            </div>
            <div class="button-client">
              <button type="submit" href="#" class="btn-save"><i class="fa fa-save fa-lg"></i> Guardar</button>
              <a href="{{url('admin/inventary-out')}}"  class="btn-danger"><i class="fa fa-times-rectangle-o"></i>  Cancelar</a>
            </div>
          {!! Form::close() !!}
          <div class="button-pdf">

          </div>
        </div>
      </div>
    </main>
    <footer id="footerQuotation">
      <h3>© 2017 Todos Los Derechos Reservados</h3>
    </footer>
    <script src="{{ url('js/datatable/jQuery-2.1.3.min.js') }}"></script>
    <script type="text/javascript" src="{{ url('js/menu-vertical.js') }}"></script>
    <script type="text/javascript" src="{{ url('js/inventary.js') }}"></script>
  </body>
</html>
