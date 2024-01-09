<?php

namespace App\Http\Controllers;

use App\Models\Transport;
use Illuminate\Http\Request;

class BaliTransport extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $query = Transport::query();
        $kategori_id = $request->input('kategori_id');
        if ($kategori_id) {
            $query->where('kategori_id', $kategori_id);
        }
    
        $balitsp = $query->get();
    
        // return view('front.transport.index', [
        //     'transport' => $balitsp
        // ]);
        return view('front.transport.index', compact('balitsp'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
