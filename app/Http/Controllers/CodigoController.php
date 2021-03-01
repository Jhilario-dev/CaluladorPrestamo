<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CodigoController extends Controller
{
    public function index(){
        return view('welcome');
    }

    public function show(Request $request){

        $request->validate([
            'tasa'=>'required',
            'cuota'=>'required',
            'monto'=>'required',
            'nroMeses'=>'required',
            'prestamo'=>'required'
        ]);

        try{

            $name = $request->all();

            $prestamo = $request->tasa;
            $cuota = $request->cuota;
            $monto = $request->monto;
            $nroMeses = $request->nroMeses;
            
            $monto=str_replace(',','',$monto);

            $prestamo = ($prestamo/12) / 100;
        
            if($cuota == 1){
                $resul = ($prestamo*$monto) / (1 -(1+$prestamo)**(-$nroMeses));

                $tabla =[[]];
                
                $saldo = $monto;
                // llenado de tabla de amortizacion
                for ($i=1; $i <= $nroMeses; $i++) { 
                     
                    $interes = $saldo * $prestamo;

                    $amortizacion = $resul - $interes;

                    $saldo = $saldo - $amortizacion;

                    for ($y=1; $y <= 2; $y++) {

                        $tabla[$i][0]= $i;
                        $tabla[$i][1]= number_format(round($amortizacion,2),$decimal = 2);
                        $tabla[$i][2]= number_format(round($interes,2),$decimal = 2);
                        $tabla[$i][3]= number_format(round($resul,2),$decimal = 2);
                        $tabla[$i][4]= number_format(round($saldo,2),$decimal = 2);

                    }

                }

            }else if($cuota == 2){
                $resul = $monto / $nroMeses;
                
                $tabla =[[]];
                $tabla2 =[['null','null','null','null','null']];

                $saldo = $monto;
                // llenado de tabla de amortizacion
                for ($i=1; $i <= $nroMeses; $i++) { 
                    
                    $interes = $saldo * $prestamo;

                    $amortizacion = $resul + $interes;

                    $saldo = $saldo - $resul;

                    for ($y=1; $y <= 2; $y++) {

                        $tabla[$i][0]= $i;
                        $tabla[$i][1]= number_format(round($resul,2),$decimal = 2);
                        $tabla[$i][2]= number_format(round($interes,2),$decimal = 2);
                        $tabla[$i][3]= number_format(round($amortizacion,2),$decimal = 2);
                        $tabla[$i][4]= number_format(round($saldo,2),$decimal = 2);

                    }

                }

            }

            $resul = round($resul, 2);

            $resul = number_format($resul,$decimal = 2);

            return view('datos', compact('resul', 'tabla'));
            
        } catch (\Throwable $th) {

            $resul = 'revisé los datos introducidos';
            return view('datos', compact('resul'));
        }
    }

}