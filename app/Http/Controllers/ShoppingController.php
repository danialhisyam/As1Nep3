<?php

namespace App\Http\Controllers;

use App\Models\Shopping;
use Illuminate\Http\Request;

class ShoppingController extends Controller
{
    public function index()
    {
        $items = Shopping::all();
        return view('shopping.index', compact('items'));
    }

    public function create()
    {
        return view('shopping.create');
    }

    public function store(Request $request)
    {
        Shopping::create($request->all());
        return redirect()->route('shopping.index');
    }

    public function edit($id)
    {
        $item = Shopping::findOrFail($id);
        return view('shopping.edit', compact('item'));
    }

    public function update(Request $request, $id)
    {
        $item = Shopping::findOrFail($id);
        $item->update($request->all());
        return redirect()->route('shopping.index');
    }

    public function destroy($id)
    {
        Shopping::destroy($id);
        return redirect()->route('shopping.index');
    }
}
