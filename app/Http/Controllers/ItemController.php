<?php

namespace App\Http\Controllers;

use App\Item;
use Illuminate\Http\Request;
use Gate;

class ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = Item::all();
        
        return view('item.index', compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('item.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'image' => 'required|file|image|max:5000',
            'title' => 'required',
            'text'  => 'required'
        ]);

        $item = Item::create($validatedData);
        $item->update([
            'image' => $request->image->store('uploads', 'public')
        ]);

        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function show(Item $item)
    {
        return view('item.show', compact('item'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function edit(Item $item)
    {
        // if (Gate::denies('edit-users')) {
        //     return redirect(route('items.index'));
        // }

        return view('item.edit')->with([
            'item' => $item,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Item $item)
    {
        $validatedData = $request->validate([
            'title' => 'required',
            'text'  => 'required',
            'image' => 'optional|file|image|max:5000'
        ]);

        $item->update($validatedData);

        if ($request->has('image')) {
            
            // $request->validate(['image' => 'required|file|image|max:5000']);
            $item->update([
                'image' => $request->image->store('uploads', 'public')
            ]);
        }

        return redirect(route('items.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function destroy(Item $item)
    {
        if (Gate::denies('delete-users')) {
            return redirect(route('items.index'));
        }

        $item->delete();

        return redirect()->route('items.index');
    }
}
