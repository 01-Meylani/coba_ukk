<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Guru;

class APIGuruController extends Controller
{
    /**
     * Menampilkan semua data guru.
     */
    public function index()
    {
        $guru = Guru::all();
        return response()->json($guru, 200);
    }

    /**
     * Menyimpan data guru baru.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama' => 'required|string|max:255',
            'nip' => 'required|string|max:20|unique:gurus,nip',
            'gender' => 'required|in:L,P',
            'alamat' => 'required|string',
            'kontak' => 'required|string',
            'email' => 'required|email|unique:gurus,email',
        ]);

        $guru = Guru::create($validated);
        return response()->json($guru, 201);
    }

    /**
     * Menampilkan data guru berdasarkan ID.
     */
    public function show(string $id)
    {
        $guru = Guru::findOrFail($id);
        return response()->json($guru, 200);
    }

    /**
     * Memperbarui data guru.
     */
    public function update(Request $request, string $id)
    {
        $guru = Guru::findOrFail($id);

        $validated = $request->validate([
            'nama' => 'required|string|max:255',
            'nip' => 'required|string|max:20|unique:gurus,nip,' . $id,
            'gender' => 'required|in:L,P',
            'alamat' => 'required|string',
            'kontak' => 'required|string',
            'email' => 'required|email|unique:gurus,email,' . $id,
        ]);

        $guru->update($validated);
        return response()->json($guru, 200);
    }

    /**
     * Menghapus data guru.
     */
    public function destroy(string $id)
    {
        $guru = Guru::findOrFail($id);
        $guru->delete();
        return response()->json(['message' => 'Guru berhasil dihapus'], 200);
    }
}
