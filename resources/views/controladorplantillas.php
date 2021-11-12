<?php

namespace App-http-controllers;

use Illuminate-http-request;

class Controlador extends controllers{
    public function(){
        return view('welcome');
    });
//*     RUTAS DE PLANTILLAS
public function ($h,$bg,$bc) {
    $a=(($bg+$bc)*$h)/2;
    return view('trapecio',[
    'altura'=>$h,
    'basemayor'=>$bg,
    'basemenor'=>$bc,
    'area'=>$a
    ]);
});
public function ($r) {
    $a=$r* sqrt(2);
    return view('apotema',[
    'radio'=>$r,
    'apotema'=>$a
    ]);
});
public function ($r,$h) {
    $a=(((3.141592*($r*$r))*$h)/3);
    return view('cono',[
    'radio'=>$r,
    'altura'=>$h,
    'area'=>$a
    ]);
});
public function(){
    $edad=87;
    return view('votar')
    ->with('edad',$edad);
});
public function(){
    $h=46;
    $pph=50;
    return view('sueldo')
    ->with('h',$h)
    ->with('pph',$pph);
});
public function(){
    $cal=7;
    return view('calificaciones')
    ->with('cal',$cal);
});
public function(){
    $si=1500;
    $aum=$aum=(10*$si)/100;
    $arreglo=array('si'=>$si);
    return view('profe',$arreglo);
});
public function(){
    $n=3;
    $arreglo=array('n'=>$n);
    return view('tabla',$arreglo);
});




}
//* RUTAS