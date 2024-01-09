<?php

namespace App\Http\Controllers;

use App\Models\KategoriTransport;
use App\Models\transport;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TransportController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $kategori_id = $request->input('kategori_id');
        $query = transport::query();

        if ($kategori_id) {
            $query->where('kategori_id', $kategori_id);
        }
        $transport = $query->get();
    
        return view('back.transport.index', [
            'transport' => $transport
        ]);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        $kategori = KategoriTransport::all();
        return view('back.transport.create', compact('kategori'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $transport=[
            'nama_gunung' => $request->nama,
            'nama_mobil' => $request->nama_mobil,
            'kategori_id' => $request->kategori_id,
            'transmisi' => $request->transmisi,
            'harga_1_6_hari' => $request->harga1,
            'harga_7_13_hari' => $request->harga7,
            'harga_14_hari' => $request->harga14,
            'deskripsi_mobil' => $request->deskripsi,
        ];
        $transport['gambar_mobil'] = $request->file('gambar_mobil')->store('trasnport');
        transport::create($transport);

        // Redirect atau response sesuai kebutuhan
        return redirect()->route('transport.index')->with('success', 'Data mobil berhasil disimpan.');
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
        $transport = transport::find($id);
        $kategori = KategoriTransport::all();
        return view('back.transport.edit', [
            'transport'=>$transport,
            'kategori'=>$kategori
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        if(empty($request->file('gambar_mobil'))){
            $transport = transport::find($id);
            $transport->update([
                'nama_gunung' => $request->nama,
                'nama_mobil' => $request->nama_mobil,
                'kategori_id' => $request->kategori_id,
                'transmisi' => $request->transmisi,
                'harga_1_6_hari' => $request->harga1,
                'harga_7_13_hari' => $request->harga7,
                'harga_14_hari' => $request->harga14,
                'deskripsi_mobil' => $request->deskripsi,
            ]);

            return redirect()->route('transport.index'); 
        }else{
            $transport = transport::find($id);
            $transport->update([
                Storage::delete($transport->gambar_mobil),
                'nama_gunung' => $request->nama,
                'nama_mobil' => $request->nama_mobil,
                'kategori_id' => $request->kategori_id,
                'transmisi' => $request->transmisi,
                'harga_1_6_hari' => $request->harga1,
                'harga_7_13_hari' => $request->harga7,
                'harga_14_hari' => $request->harga14,
                'deskripsi_mobil' => $request->deskripsi,
                'gambar_mobil' => $request->file('gambar_mobil')->store('trasnport')
            ]);
            

            return redirect()->route('transport.index');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $transport = transport::find($id);

        Storage::delete($transport->gambar_mobil);
        $transport -> delete();
        return redirect()->route('transport.index')->with(['success' => 'Data Berhasil Dihapus']);
    }
}
