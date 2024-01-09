<?php

namespace App\Http\Controllers;

use App\Models\tracking;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class TrackingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $query = tracking::query();
    
        $tracking = $query->get();
    
        return view('back.tracking.index', [
            'tracking' => $tracking
        ]);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $trackings = tracking::all();
        return view('back.tracking.create', compact('trackings'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // $this->validate($request, [
        //     'nama' => 'required|min:4',
        //     'kategori_id' => 'required',
        // ]);
    
        $data = [
            'nama_gunung' => $request->nama,
            'overview' => $request->overview,
            'act_highlight' => $request->act_highlight,
            
            'price' => $request->harga,
            'include' => $request->include,
            // Sesuaikan dengan kolom-kolom lain di tabel
        ];
        $data['gambar_gunung'] = $request->file('gambar_gunung')->store('tracking');
    
        tracking::create($data);

        return redirect()->route('tracking.index')->with('success', 'Data tracking berhasil ditambahkan.');
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
        $tracking = tracking::find($id);
        return view('back.tracking.edit', [
            'tracking'=>$tracking
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        if(empty($request->file('gambar_gunung'))){
            $tracking = tracking::find($id);
            $tracking->update([
            'nama_gunung' => $request->nama,
            'overview' => $request->overview,
            'act_highlight' => $request->act_highlight,
            'price' => $request->harga,
            'include' => $request->include,
            ]);

            return redirect()->route('tracking.index'); 
        }else{
            $tracking = tracking::find($id);
            $tracking->update([
                'nama_gunung' => $request->nama,
                Storage::delete($tracking->gambar_gunung),
                'nama_gunung' => $request->nama,
                'overview' => $request->overview,
                'act_highlight' => $request->act_highlight,
                'price' => $request->harga,
                'include' => $request->include,
                'gambar_gunung' => $request->file('gambar_gunung')->store('tracking')
            ]);
            

            return redirect()->route('tracking.index');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $tracking = tracking::find($id);

        Storage::delete($tracking->gambar_gunung);
        $tracking -> delete();
        return redirect()->route('tracking.index')->with(['success' => 'Data Berhasil Dihapus']);
    }
}
