@extends('layout')

@section('title', "Calculador de Prestamos")
    
@section('content')
    <div class="container col-12 col-m-6 col-lg-8">
        <fieldset>
            <h1>Calculadora de prestamos: </h1>
            <form action="{{route('datos.show')}}" method="post">
                @csrf

                <h6>prestamo</h6>
                <div class="input-group mb-3">
                    <select class="form-select" id="inp" name="prestamo" onchange="prest();" required>
                      <option class="select" value="">Choose...</option>
                      <option class="select" value="18" >PRÉSTAMO CONSUMO</option>
                      <option class="select" value="15">préstamo vehículo</option>
                      <option  class="select" value="13">préstamo hipotecario</option>
                      <option class="select" value="14">préstamo comercio</option>
                    </select>
                    @error('prestamo')
                    <div class="alert alert-danger" role="alert">
                        <small>*{{$message}}</small>
                      </div>
                    @enderror
                </div>
                 
                <h6>cuotas</h6>
                <div class="input-group mb-3" >
                    <select class="form-select" id="inputGroupSelect01" name="cuota" required>
                        <option value="">Choose...</option>
                        <option value="1">cuota fija</option>
                        <option value="2">capital fijo</option>
                    </select>
                    @error('cuota')
                    <div class="alert alert-danger" role="alert">
                        <small>*{{$message}}</small>
                      </div>
                    @enderror
                </div>
                
                <h6>TASA DE INTERÉS (%):</h6>
                <div class="input-group mb-3">
                    <input type="number" class="form-control" name="tasa" value="" id="ta" required>
                    @error('tasa')
                    <div class="alert alert-danger" role="alert">
                        <small>*{{$message}}</small>
                      </div>
                    @enderror
                </div>
               
                <h6>monto:</h6>
                <div class="input-group mb-3">
                    <input type="number" name="monto" class="form-control" id="pruevaaa" aria-label="Dollar amount (with dot and two decimal places)" required>
                    @error('monto')
                    <div class="alert alert-danger" role="alert">
                        <small>*{{$message}}</small>
                      </div>
                    @enderror
                </div>
                
                <h6>Nro. de meses:</h6>
                <div class="input-group mb-3">
                    <input type="number" name="nroMeses" class="form-control" aria-label="Dollar amount (with dot and two decimal places)" required>
                    @error('nroMeses')
                    <div class="alert alert-danger" role="alert">
                        <small>*{{$message}}</small>
                      </div>
                    @enderror
                </div>
                
                <button type="submit" id="btn" class="btn btn-warning" >aceptar</button>
                <button type="reset" id="btn"class="btn btn-warning">resetear</button>
                
            </form>
        </fieldset>
    </div>

@endsection

@section('js')
<script>
// $(document).ready(function(){
//     $('#pruevaaa').mask('000,000,000,000,000. 00', {reverse: true});
// });
</script>
@endsection