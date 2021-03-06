<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pizza;

class PizzaController extends Controller
{
    public function index(){
        $pizzas = Pizza::all();
        $name = request('name');
        return view('pizzas',['pizzas'=> $pizzas,'name'=> $name]);
    }
    public function show($id){
        return view('details',["id" => $id]);
    }
}
