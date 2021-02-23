<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CodigoController extends Controller
{
    public function index(){
        return view('welcome');
    }

    public function show(Request $request){

        try{

            $name = $request->all();

            $prestamo = $request->prestamo;
            $cuota = $request->cuota;
            $monto = $request->monto;
            $nroMeses = $request->nroMeses;
            
            $prestamo = ($prestamo/12) / 100;
        
            if($cuota == 1){
                $resul = ($prestamo*$monto) / (1 -(1+$prestamo)**(-$nroMeses));
            }else if($cuota == 2){
                $resul = $monto / $nroMeses;
            }
        
            $resul = round($resul, 2);

            $resul = number_format($resul);
            
            return view('datos', compact('resul'));
            
        } catch (\Throwable $th) {

            $resul = 'revise los datos introducidos';
            return view('datos', compact('resul'));
        }
    }

}