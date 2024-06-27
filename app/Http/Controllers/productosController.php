<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;
use PDF;

class productosController extends Controller
{
    public function getPDF(){
        $name="Gabriel :)";
        $id=1;
        $nombreProyecto="Proyecto 1";
        $fuenteFondos="Empresarial";  
        $MontoPlanificado=850;   
        $MontoPatrocinado=968;
        $MontoFondosPropios=1500;

        $pdf = PDF::loadView('PDF_Example',compact('name','id','nombreProyecto','fuenteFondos','MontoPlanificado','MontoPatrocinado','MontoFondosPropios'));
        return $pdf->stream('prueba.pdf');
        // return $pdf->download('prueba.pdf');
    }

    // public function index(){
    //     return view('productos');
    // }

    public function mostrar(){
        return view('mostrar');
    }
    public function crear(){
        return view('crear');
    }

    public function dataformulario(Request $request){
        return $request->input('nombre');
    }
}
