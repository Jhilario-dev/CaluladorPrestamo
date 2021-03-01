@extends('layout')


@section('content')
    <div class="container">
        <fieldset >
            <h1>Calculadora de prestamos: </h1>
            <form action="{{route('datos.show')}}" method="post">
                @csrf
                
                <h6>prestamo:</h6>
                <div class="input-group mb-3" >
                    <select class="form-select form-select-sm" id="inp" name="prestamo" onchange="prest();" required>
                      <option value="">Choose...</option>
                      <option value="18" >prestamo consumo</option>
                      <option value="15">prestamo vehiculo</option>
                      <option value="13">prestamo hipotecario</option>
                      <option value="14">prestamo comercio</option>
                    </select>
                </div>
                
                <h6>cuotas:</h6>
                <div class="input-group mb-3" >
                    <select class="form-select" id="inputGroupSelect01" name="cuota" required>
                        <option value="">Choose...</option>
                        <option value="1">cuota fija</option>
                        <option value="2">capital fijo</option>
                    </select>
                </div>

                <h6>TASA DE INTERÉS (%):</h6>
                <div class="input-group mb-3">
                    <input type="number" class="form-control" name="tasa" value="" id="ta" required>
                </div>

                <h6>monto:</h6>
                <div class="input-group mb-3">
                    <input type="text" name="monto" class="form-control" id="pruevaaa" aria-label="Dollar amount (with dot and two decimal places)" required>
                </div>
                
                <h6>Nro. de meses:</h6>
                <div class="input-group mb-3">
                    <input type="number" name="nroMeses" class="form-control" aria-label="Dollar amount (with dot and two decimal places)" required>
                </div>
                
                <button type="submit" id="btn" class="btn btn-warning">aceptar</button>
                <button type="reset" id="btn"   class="btn btn-warning">reset</button>
                
            </form>
            <h4 id="resp">su cuota a pagar es de:  DOP$ {{$resul}}</h4>

        </fieldset>
    </div>
    <div class="container">

        <h3>Tabla de AMORTIZACIÓN</h3>
        <table class="table table-hover">
            <thead>
              <tr>
                <th scope="col" class="col1">Num. pago</th>
                <th scope="col">capital</th>
                <th scope="col">interés</th>
                <th scope="col">cuota</th>
                <th scope="col">saldo</th>
              </tr>
            </thead>
            <tbody>
                <!--ordenado de tabla de amortizacion-->
                @for ($i = 0; $i < count($tabla); $i++)
                <tr>
                @for ($y = 0; $y < count($tabla[$i]); $y++)
                    @if ($tabla[$i][$y] == $tabla[$i][0])
                        <td scope="row" class="col1">{{$tabla[$i][$y]}}</td>
                    @else
                        <td scope="row">${{$tabla[$i][$y]}}</td>
                    @endif
                @endfor
                </tr>
                @endfor
            </tbody>
          </table>
    </div>
@endsection
@section('js')
<script>
$(document).ready(function(){
    $('#pruevaaa').mask('000,000,000,000,000.00', {reverse: true});
});
</script>
@endsection