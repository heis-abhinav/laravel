<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PizzaController extends Controller
{
    public function index(){
        $pizzas = [
        ['type'=>'hawaiin','base'=>'cheesy crust','price'=> 15],
        ['type'=>'volcano','base'=>'garlic crust','price'=> 25],
        ['type'=>'veg supreme','base'=>'thin and crispy','price'=> 10],
    ];

    $name = request('name');
    return view('pizzas',[
        'pizzas' => $pizzas,
        'name' => $name]);
    }

    public function show($id){
         return view('details',['id'=> $id]);
    }
}
