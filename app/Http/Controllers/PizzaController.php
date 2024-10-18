<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Pizza;

class PizzaController extends Controller
{
    //funnciones
    public function index()
    {
        $pizzas = Pizza::all();
        return view('pizzas.index', compact('pizzas'));
    }

    public function create()
    {
        return view('pizzas.create');
    }

    public function store(Request $request)
    {
        $pizza = new Pizza;
        $pizza->name = $request->input('name');
        $pizza->type = $request->input('type');
        $pizza->ingredients = $request->input('ingredients');
        $pizza->size = $request->input('size');
        $pizza->save();

        return redirect()->route('pizzas.index');
    }

    public function destroy($id)
    {
        $pizza = Pizza::find($id);

        if (!$pizza) {
            return redirect()->route('pizzas.index')->with('error', 'pizza not found');
        }

        $pizza->delete();

        return redirect()->route('pizzas.index')->with('success', 'Pizza removed');
    }

}
