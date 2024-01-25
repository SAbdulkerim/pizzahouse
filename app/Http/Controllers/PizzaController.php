<?php

namespace App\Http\Controllers;

use App\Models\Pizza;
use Illuminate\Http\Request;

use function Laravel\Prompts\error;

class PizzaController extends Controller
{
    //
  // public function __construct(){
  //   $this->middleware('auth');
  //   }


    public function index() {
        // get data from a database


        // $pizzas = [
        //   ['type' => 'hawaiian', 'base' => 'cheesy crust'],
        //   ['type' => 'volcano', 'base' => 'garlic crust'],
        //   ['type' => 'veg supreme', 'base' => 'thin & crispy']
        // ];
        
        // $pizzas = Pizza::all();  // read data from database

        $pizzas = Pizza::orderBy('name','desc')->get();  
        // $pizzas = Pizza::where('type','dfadsf ')->get();  
        // $pizzas = pizza::latest();

        return view('pizzas.index', [
          'pizzas' => $pizzas,
        ]);
      }
    
      public function show($id) {
        // use the $id variable to query the db for a record
        $pizza=Pizza::findOrfail($id);
        return view('pizzas.show', ['pizza' => $pizza]);
      }  

      public function create(){
        return view('pizzas.create');
        
      }

      public function store(){

        
        error_log(request('name'));
        error_log(request('type'));
        error_log(request('base'));
        // create an instance of Pizza model which is simulate the pizza table
        $pizza= new Pizza();
        $pizza->name=request('name');
        $pizza->type=request('type');
        $pizza->base=request('base');
        $pizza->toppings=request('toppings');
        $pizza->save();


        // return request('toppings');
        // error_log('toppings');
        // error_log($pizza);

        // $pizza->save();

        return redirect('/')->with('mssg','Thanks for your order');

      }

      public function destroy($id){
        $pizza = Pizza::findOrFail($id);
        $pizza->delete();
        return redirect('/pizzas');
      }
}
