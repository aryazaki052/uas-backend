<?php

namespace App\Http\Controllers;

use App\Models\Tour;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TourController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $query = Tour::query();
    
        $tour = $query->get();
    
        return view('back.tour.index', [
            'tour' => $tour
        ]);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $tour = Tour::all();
        return view('back.tour.create', compact('tour'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $tour = [
            'judul' => $request->nama,
            'desk' => $request->desk,
            'highlight' => $request->highlight,
            'to_do' => $request ->todo,
            'itinerary' => $request ->itenary,
            'harga' => $request->harga,
        ];
        $tour['gambar_tour'] = $request->file('gambar')->store('tour');
    
        Tour::create($tour);

        return redirect()->route('tour.index')->with('success', 'Data tracking berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Tour $tour)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $tour = Tour::find($id);
        return view('back.tour.edit', [
            'tour'=>$tour
        ]);
        // $tour = Tour::find($id);
        // return view('back.tour.edit', compact('tour'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $tour = Tour::find($id);
    
        if (empty($request->file('gambar'))) {
            $tour->update([
                'judul' => $request->nama,
                'desk' => $request->desk,
                'highlight' => $request->highlight,
                'to_do' => $request->todo,
                'itinerary' => $request->itenary,
                'harga' => $request->harga,
            ]);
        } else {
            Storage::delete($tour->gambar_tour);
    
            $tour->update([
                'judul' => $request->nama,
                'desk' => $request->desk,
                'highlight' => $request->highlight,
                'to_do' => $request->todo,
                'itinerary' => $request->itenary,
                'harga' => $request->harga,
                'gambar_tour' => $request->file('gambar')->store('tour'),
            ]);
        }
    
        return redirect()->route('tour.index');
    }
    

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $tour = Tour::find($id);

        Storage::delete($tour->gambar_tour);
        $tour -> delete();
        return redirect()->route('tour.index')->with(['success' => 'Data Berhasil Dihapus']);
    }
}
