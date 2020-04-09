<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PizzaController extends Controller
{
    public function show($id){
        return view('details',['id'=>$id]);
    }
}
