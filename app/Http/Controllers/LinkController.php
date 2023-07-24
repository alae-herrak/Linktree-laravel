<?php

namespace App\Http\Controllers;

use App\Models\Link;
use Illuminate\Http\Request;

class LinkController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $links = auth()->user()->links;
        return view('links.index', ['links' => $links]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('links.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => ['required', 'string', 'max:25'],
            'url' => ['required', 'string', 'max:100'],
        ]);

        $request->user()->links()->create($validated);

        return redirect('/links');
    }

    /**
     * Display the specified resource.
     */
    public function show(Link $link)
    {
        return redirect('/links');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Link $link)
    {
        return view('links.edit', ['link' => $link]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Link $link)
    {
        $validated = $request->validate([
            'title' => ['required', 'string', 'max:25'],
            'url' => ['required', 'string', 'max:100'],
        ]);

        $link->update($validated);

        return redirect('/links');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Link $link)
    {
        $link->delete();

        return redirect('/links');
    }
}
