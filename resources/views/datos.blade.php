<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>calculadorPrestamo</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

  
</head>
<body>
    <div class="container">
        <fieldset>
            <h1>Calculadora de prestamos: </h1>
            <form action="{{route('datos.show')}}" method="post">
                @csrf
                
                <div class="input-group mb-3">
                    <label class="input-group-text" for="inputGroupSelect01">prestamo</label>
                    <select class="form-select" id="inp" name="prestamo" onchange="prest();">
                    <option value=''>Choose...</option>
                    <option value="18" >prestamo consumo</option>
                    <option value="15">prestamo vehiculo</option>
                    <option value="13">prestamo hipotecario</option>
                    <option value="14">prestamo comercio</option>
                    </select>
                </div>
                
                <div class="input-group mb-3" >
                <label class="input-group-text" for="inputGroupSelect01">cuotas</label>
                <select class="form-select" id="inputGroupSelect01" name="cuota">
                        <option value="">Choose...</option>
                        <option value="1">cuota fija</option>
                        <option value="2">capital fijo</option>
                    </select>
                </div>
                TASA DE INTERÉS (%):
                <div>
                    <input type="text" class="tasa" name="tasa" value="" id="ta" readonly>
                </div>

                monto:
                <div class="input-group mb-3">
                    <input type="number" name="monto" class="form-control" aria-label="Dollar amount (with dot and two decimal places)">
                </div>
                
                Nro. de meses
                <div class="input-group mb-3">
                    <input type="number" name="nroMeses" class="form-control" aria-label="Dollar amount (with dot and two decimal places)">
                </div>
                
                <button type="submit" class="btn btn-primary btn-lg">aceptar</button>
                <button type="reset" class="btn btn-primary btn-lg">reset</button>
                
            </form>
            <p id="resp">su cuota a paga es de:  DOP$ {{$resul}}</p>
        </fieldset>
    </div>
    <script type="text/javascript">

        function prest(){
            var x = document.getElementById("inp");
            var y = x.options[x.selectedIndex].value;

            $("#ta").attr("value",y);
        }
    </script>

    <script
    src="https://code.jquery.com/jquery-3.5.1.js"
    integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="
    crossorigin="anonymous"></script>
    <script
    src="https://code.jquery.com/jquery-3.5.1.min.js"
    integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
    crossorigin="anonymous"></script>
</body>
</html>