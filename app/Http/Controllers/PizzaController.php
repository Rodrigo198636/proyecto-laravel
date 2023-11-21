<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCurso;
use Illuminate\Http\Request;
use App\Models\Pizza;

class PizzaController extends Controller
{
    public function pizza()
    {
        $pizzas = Pizza::orderBy('id', 'desc')->paginate();
        return view('pizza.pizza', compact('pizzas'));
    }

    public function crea()
    {
        return view('pizza.crea');
    }

    public function store(StoreCurso $request)
    {
      

        $pizza = Pizza::tupizza($request->all());

        return redirect()->route('pizzas.tupizza', $pizza->id);
    }

    public function tupizza(Pizza $pizza)
    {
        return view('pizza.tupizza', ['pizza' => $pizza]);
    }

    public function edit(Pizza $pizza)
    {
        return view('pizza.edit', compact('pizza'));
    }

    public function update(Request $request, Pizza $pizza)
    {
        $request->validate([
            'nombre' => 'required',
            'descripcion' => 'required',
            'categoria' => 'required'
        ]);

        $pizza -> update($request->all());

        return redirect()->route('pizzas.tupizza', $pizza->id);
    }

    public function destroy(pizza $pizza){
        $pizza ->delete();

        return redirect()->route('pizzas.pizza');
    }

}
