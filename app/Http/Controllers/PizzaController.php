<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Pizza;


class PizzaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $pizzas = Pizza::latest()->get();
       return view('pizza.index', compact('pizzas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('pizza.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $this->validate($request, [
           'name' => "required",
           'description' => "required",
           'price' => "required | integer"
       ]);
       Pizza::create([
           'name' => $request->get('name'),
           'description' => $request->get('description'),
           'price' => $request->get('price')
       ]);
       return  redirect()->back()->with('message', 'Product created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $pizzas = Pizza::findOrFail($id);
        return view('orders.create', compact('pizzas'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pizza = Pizza::findOrFail($id);
        return view('pizza.update', compact('pizza'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => "required",
            'description' => "required",
            'price' => "required | integer"
        ]);
        $pizza = Pizza::findOrFail($id);
        $pizza->name = $request->get('name');
        $pizza->description = $request->get('description');
        $pizza->price = $request->get('price');
        $pizza->save();
        return redirect()->route('pizza.index')->with('message','Pizza item updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    
    {
    
        $pizza = Pizza::findOrFail($id);
        $pizza->delete();
        return redirect()->route('pizza.index')->with('message','Pizza item deleted');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function listingPizza()
    {
       $pizzas = Pizza::latest()->get();
       return view('pizza.list', compact('pizzas'));
    }

      /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function showProduct($id)
    {
        $pizzas = Pizza::findOrFail($id);
        return view('orders.create', compact('pizzas'));
    }

}
