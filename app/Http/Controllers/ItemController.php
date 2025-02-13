<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateItemRequest;
use App\Http\Requests\StoreItemRequest;
use Illuminate\Http\Request;
use App\Models\Item;


class ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $items = Item::all();
        //dd($items);
        return view('items.index', compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('items.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreItemRequest $request)
    {
        $validated = $request->validated();

        Item::create($validated);
        /** WITHOUT MASS ASSIGNMENT INSTEAD OF Item::create
         * $item = new Item;
         * $item->name = $validated['name'];
         * $item->description = $validated['description'];
         * $item->save();
         */
        return redirect()->route('items.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $item = Item::find($id);
        return view('items.edit', compact('item'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateItemRequest $request, Item $item)
    {
        $validated = $request->validated();

        Item::create($validated);

        /** WITHOUT MASS ASSIGNMENT INSTEAD OF Item::create
         * $item->name = $validated['name'];
         * $item->description = $validated['description'];
         * $item->save(); 
         */
      

        return redirect()->route('items.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Item $item)
    {
        $item->delete();

        return redirect()->route('items.index');
    }
}
