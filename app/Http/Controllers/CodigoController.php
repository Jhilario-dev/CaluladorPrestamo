<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CodigoController extends Controller
{
     public function CalcularDatos()
    {
        echo'<script type="text/javascript">
    alert("hola mundo");
    window.location.href="index.php";
    </script>';
    }
}
