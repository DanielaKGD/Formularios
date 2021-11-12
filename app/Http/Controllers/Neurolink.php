<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Neurolink extends Controller
{

    function datosarea(){
        return view ('area');
    }
    function calculaArea(Request $request){
        $base=$request->input('inbase');
        $altura=$request->input('inaltura');
        $area = floatval($base) * floatval($altura);
        return view('showarea',['area'=>$area]);
    }
    function log(){
        return view('login');
    }
    public function iSesion (Request $request){
        $correo = $request->input('correo');
        $contrase = $request->input('contrase');

        if ($correo==0) {
            return view('sincorreo');
        } else if ($contrase==0) {
            return view('sincontra');
        } else {
            return view('logexitoso');
        }
    }





    public function inicio (){
        return view('welcome');
} public function planti (){
        return view('plantilla');
}
    public function parametro($h=10,$bg=20,$bc=18) {
    $a=(($bg+$bc)*$h)/2;
    return view('trapecio',[
    'altura'=>$h,
    'basemayor'=>$bg,
    'basemenor'=>$bc,
    'area'=>$a
    ]);
}
public function hora($r=32) {
    $a=$r* sqrt(2);
    return view('apotema',[
    'radio'=>$r,
    'apotema'=>$a
    ]);
}
public function oculto ($r=28,$h=22) {
    $a=(((3.141592*($r*$r))*$h)/3);
    return view('cono',[
    'radio'=>$r,
    'altura'=>$h,
    'area'=>$a
    ]);
}
public function pegar(){
    $edad=87;
    return view('votar')
    ->with('edad',$edad);
}
public function diez(){
    $h=46;
    $pph=50;
    return view('sueldo')
    ->with('h',$h)
    ->with('pph',$pph);
}
public function porfa(){
    $cal=7;
    return view('calificaciones')
    ->with('cal',$cal);
}
public function nueve(){
    $si=1500;
    $aum=$aum=(10*$si)/100;
    $arreglo=array('si'=>$si);
    return view('profe',$arreglo);
}
}