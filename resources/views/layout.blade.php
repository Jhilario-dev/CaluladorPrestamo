<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!--favicon -->
    <!--estilos -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
    
    <style>
        body{
            text-transform: uppercase;
        }

        h3{
            text-align: center; 
            padding: 10px;
        }
        h1{
            text-align: center; 
            padding: 10px;
        }
        
        .container{
            background-color:#f5f6f8; 
            padding: 10px;
            color: black;
            
        }
        fieldset{
            background-color:white;
            padding: 10px;
            border-radius:10px;
            border-style: inset;
        }

        table{
            text-align: right;
            
        }

        .col1{
            text-align: center;
        }


        select{
            max-width: 35%;
            text-transform: uppercase;
            
        }

        .form-select:focus { 
            box-shadow: 0px 0px 3px 2px  rgb(253, 186, 3);
        }

        input{
            max-width: 35%;
            text-transform: uppercase;
            
        }

        input[type=number]:focus {
            border-color: rgb(253, 186, 3);
            box-shadow: 0px 0px 3px 2px  rgb(253, 186, 3);
        }
        input[type=text]:focus {
            border-color: rgb(253, 186, 3);
            box-shadow: 0px 0px 3px 2px  rgb(253, 186, 3);
        }
        #btn{
            border: none;
            padding: 15px;
            margin: 10px
        }
        #btn:hover{
            background-color: green;
        }
     
    </style>
</head>
<body>
    <!--header -->
    <!--nav -->
    @yield('content')
    <!--footer -->

    <!--script -->
    <script type="text/javascript">
            //pasar los datos del select de prestamo al input de porcentaje
            function prest(){
                var x = document.getElementById("inp");
                var y = x.options[x.selectedIndex].value;
                $("#ta").attr("value",y);
            }
    </script>

   <!-- jQuery 3.x -->
   <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
   <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
   <script src="https://code.jquery.com/jquery-3.5.1.slim.js" integrity="sha256-DrT5NfxfbHvMHux31Lkhxg42LY6of8TaYyK50jnxRnM=" crossorigin="anonymous"></script>
   <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha256-4+XzXVhsDmqanXGHaHvgh1gMQKX40OUvDEBTu8JcmNs=" crossorigin="anonymous"></script>
 <!-- /jQuery 3.x -->
    <!-- jquery.mask -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js" integrity="sha512-pHVGpX7F/27yZ0ISY+VVjyULApbDlD0/X0rgGbTqCE7WFW5MezNTWG/dnhtbBuICzsd0WQPgpE4REBLv+UqChw==" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.js" integrity="sha512-0XDfGxFliYJPFrideYOoxdgNIvrwGTLnmK20xZbCAvPfLGQMzHUsaqZK8ZoH+luXGRxTrS46+Aq400nCnAT0/w==" crossorigin="anonymous"></script>
  <!-- /jquery.mask -->
@yield('js')
</body>
</html>