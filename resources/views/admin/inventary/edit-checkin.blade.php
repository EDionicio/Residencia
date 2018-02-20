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
          <li><a href="{{ url('/admin/admin-welcome') }}"><i class="fa fa-home"></i>Inicio</a></li>
          <li ><a href="{{ url('/admin/client') }}"><i class="fa fa-users"></i>Clientes</a></li>
          <li ><a href="{{ url('/admin/suppliers') }}"><i class="fa fa-address-card-o"></i>Proveedores</a></li>
          <li ><a href="{{ url('/admin/employee') }}"><i class="fa fa-address-book-o"></i>Empleados</a></li>
          <li class="li-menu-nav">INVENTARIO</li>
          <li class="active">
            <a id="inventary"><i class="fa fa-pencil-square"></i>Inventario <i class="fa fa-chevron-down"></i></a>
              <ul class="submenu-list" id="submenu-list">
                <li class="active" ><a href="{{url('admin/inventary')}}">Productos </a></li>
                <li><a href="{{url('admin/checkin')}}"> Entradas de Productos <small class="bg-indicator">Editar</small></a></li>
                <li><a href="{{url('admin/inventary-out')}}">  Salidas de Productos</a></li>
                <li><a href="{{url('admin/clasificationProduct')}}"> Tipos de Productos</a></li>
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
              <li class="ol-active"><i class="fa fa-pencil-square-o"></i>Editar Productos de entrada</li>
            </ol>
          </div>
        </div>
        <div class="for-container">
          <h2><i class="fa fa-pencil-square-o"></i> Editar Productos de entrada</h2>
          {!! Form::model($checkin, ['method' => 'PATCH','route' => ['checkin.update', $checkin->id], 'class' => 'container-add-clients']) !!}
            {{ csrf_field() }}
            <div class="date-clients">
              <label for="nInvoice">N° de Factura:</label>
              <input type="text" name="nInvoice" value="{{ $checkin->nInvoice }}" required>
              <div class="clasification">
                <div class="select">
                  <label for="TProduct">Tipo de Producto:</label>
                  <input type="text" class="inicialesInput" name="TProduct" value="{{ $checkin->TProduct }}" readonly="">
                </div>
                <div class="iniciales">
                  <input type="text" class="inicialesInput" name="NProduct" value="{{ $checkin->NProduct }}" id='letters'  readonly="readonly">
                </div>
              </div>
              <label for="provider">Proveedor:</label>
              <select class="select-design" name="provider">
                <option value="{{ $checkin->provider }}">{{ $checkin->provider }}</option>
                @foreach ($suppliers as $supplier)
                  <option value="{{ $supplier->business }}">{{ $supplier->business }}</option>
                @endforeach
              </select>
            </div>
            <div class="date-clients">
              <label for="checkin">Fecha de Entrada:</label>
              <input type="date" class="date-design" name="checkin" value="{{ $checkin->checkin }}" required>
              <label for="quantity">Cantidad de Entrada:</label>
              <input type="number" name="quantity" value="{{ $checkin->quantity }}" required>
              <label for="stock">Existencia:</label>
              <input type="text" name="stock" value="{{ $checkin->stock }}" readonly="">
            </div>
            <div class="date-clients">
              <label for="priceList">Precio Lista:</label>
              <input type="text" name="priceList" id='priceList' value="{{ $checkin->priceList }}" required>
              <label for="cost">Costo:</label>
              <input type="text" name="cost" id='cost' value="{{ $checkin->cost }}" required>
              <label for="unit">Unidad de Medida:</label>
              <input type="text" name="unit" value="{{ $checkin->unit }}" readonly="">
            </div>
            <div class="chekinText">
              <div class="add-chekinTextArea">
                <label for="description">Descripción:</label>
                <textarea type="text" rows="4" name="description" readonly="">{{ $checkin->description }}</textarea>
              </div>
              <div class="checkinMoney">
                <label for="money">Tipo de moneda:</label>
                <select class="select-design" name="">
                  <option value="">Seleccione tipo de moneda</option>
                </select>
              </div>
            </div>
            <div class="date-clients">
              <label for="">Categoria Precio Venta</label>
              <select class="select-design" class="select-design" onchange="priceSales(this);">
                <option value="">Seleccione categoria</option>
                <option value="Categoria 1">Categoria 1</option>
                <option value="Categoria 2">Categoria 2</option>
                <option value="Categoria 3">Categoria 3</option>
              </select>
              <label for="priceSales1" id='ps'>Precio de Venta 1<p id="pv1"></p></label>
              <input type="text" name="priceSales1" value="{{ $checkin->priceSales1 }}" id="priceSales1" placeholder="Precio de Venta 1" readonly="" required>
            </div>
            <div class="date-clients">
              <label for="priceSales2" id='ps'>Precio de Venta 2 <p id="pv2"></p></label>
              <input type="text" name="priceSales2" value="{{ $checkin->priceSales2 }}" id="priceSales2" placeholder="Precio de Venta 2" readonly="" required>
              <label for="priceSales3" id='ps'>Precio de Venta 3 <p id="pv3"></p></label>
              <input type="text" name="priceSales3" value="{{ $checkin->priceSales3 }}" id="priceSales3" placeholder="Precio de Venta 3" readonly="" required>
            </div>
            <div class="date-clients">
              <label for="priceSales4" id='ps'>Precio de Venta 4 <p id="pv4"></p></label>
              <input type="text" name="priceSales4" value="{{ $checkin->priceSales4 }}" id="priceSales4" placeholder="Precio de Venta 4" readonly="" required>
              <label for="priceSales5">Precio de Venta 5:</label>
              <input type="text" name="priceSales5" value="{{ $checkin->priceSales5 }}" id="priceSales5" placeholder="Precio de Venta 5" required>
            </div>
            <div class="button-client">
              <button type="submit" href="#" class="btn-save"><i class="fa fa-save fa-lg"></i> Guardar</button>
              <a href="{{url('admin/checkin')}}"  class="btn-danger"><i class="fa fa-times-rectangle-o fa-lg"></i>  Cancelar</a>
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
    <script type="text/javascript">
      function myProduct(e) {
        var val = <?php echo$products;?>;
        console.log(val);
      }
    </script>
    <script type="text/javascript">
      function priceSales(val) {
        var value = val.value
        var priceList = document.getElementById('priceList').value
        var cost = document.getElementById('cost').value
        var cat1 = [.70, .65, .60, .57]
        var cat2 = [.40, .37, .36, .35]
        var cat3 = [.70, .75, .80, .85]
        var newRes = []

        if (value === 'Categoria 1') {
          for (var i = 0; i < cat1.length; i++) {
            var res = cat1[i] * priceList
            newRes.push(res)
            document.getElementById('pv1').innerHTML = ' (x0.70)'
            document.getElementById('pv2').innerHTML = ' (x0.65)'
            document.getElementById('pv3').innerHTML = ' (x0.60)'
            document.getElementById('pv4').innerHTML = ' (x0.57)'
          }
        }else if (value === 'Categoria 2') {
          for (var i = 0; i < cat2.length; i++) {
            var res = cat2[i] * cost
            newRes.push(res)
            document.getElementById('pv1').innerHTML = ' (x0.40)'
            document.getElementById('pv2').innerHTML = ' (x0.37)'
            document.getElementById('pv3').innerHTML = ' (x0.36)'
            document.getElementById('pv4').innerHTML = ' (x0.35)'
          }
        }else if (value === 'Categoria 3') {
          for (var i = 0; i < cat3.length; i++) {
            var res = cost / cat3[i]
            newRes.push(res)
            document.getElementById('pv1').innerHTML = ' (/ 0.70)'
            document.getElementById('pv2').innerHTML = ' (/ 0.75)'
            document.getElementById('pv3').innerHTML = ' (/ 0.80)'
            document.getElementById('pv4').innerHTML = ' (/ 0.85)'
          }
        }
        document.getElementById('priceSales1').value='$'+newRes[0].toFixed(2)
        document.getElementById('priceSales2').value='$'+newRes[1].toFixed(2)
        document.getElementById('priceSales3').value='$'+newRes[2].toFixed(2)
        document.getElementById('priceSales4').value='$'+newRes[3].toFixed(2)
      }
    </script>
  </body>
</html>
