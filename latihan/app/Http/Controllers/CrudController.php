<?php

namespace App\Http\Controllers;

use App\Models\CrudModel; // Pastikan namespace model benar
use Illuminate\Http\Request;

class CrudController extends Controller // Ganti nama kelas
{
    public function index()
    {
        $data = CrudModel::all(); // Ambil semua data dari model
        return view('crud.index', compact('data'));
    }

    public function create()
    {
        return view('crud.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'jumlah' => 'required|integer', // Validasi jumlah jika diperlukan
        ]);

        CrudModel::create([
            'name' => $request->name,
            'jumlah' => $request->jumlah,
        ]);

        return redirect()->route('crud.index')->with('success', 'Data berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $data = CrudModel::findOrFail($id); // Mencari data berdasarkan ID
        return view('crud.edit', compact('data'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'jumlah' => 'required|integer', // Validasi jumlah jika diperlukan
        ]);

        $data = CrudModel::findOrFail($id); // Mencari data berdasarkan ID
        $data->update([
            'name' => $request->name,
            'jumlah' => $request->jumlah,
        ]);

        return redirect()->route('crud.index')->with('success', 'Data berhasil diupdate.');
    }

    public function destroy($id)
    {
        $data = CrudModel::findOrFail($id); // Mencari data berdasarkan ID
        $data->delete();

        return redirect()->route('crud.index')->with('success', 'Data berhasil dihapus.');
    }
}
