<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Actor;

class ActorController extends Controller
{
    // Menampilkan daftar aktor dengan pagination
    public function index()
    {
        $actors = Actor::paginate(10); // Menampilkan 10 data per halaman
        return view('actors.index', compact('actors'));
    }

    // Menampilkan form tambah aktor
    public function create()
    {
        return view('actors.create');
    }

    // Menyimpan data aktor baru
    public function store(Request $request)
    {
        $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
        ]);

        Actor::create([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
        ]);

        return redirect()->route('actors.index')->with('success', 'Aktor berhasil ditambahkan.');
    }

    // Menampilkan form edit aktor
    public function edit($id)
    {
        $actor = Actor::findOrFail($id);
        return view('actors.edit', compact('actor'));
    }

    // Menyimpan perubahan data aktor
    public function update(Request $request, $id)
    {
        $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
        ]);

        $actor = Actor::findOrFail($id);
        $actor->update([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
        ]);

        return redirect()->route('actors.index')->with('success', 'Aktor berhasil diperbarui.');
    }

    // Menghapus data aktor
    public function destroy($id)
    {
        $actor = Actor::findOrFail($id);
        $actor->delete();

        return redirect()->route('actors.index')->with('success', 'Aktor berhasil dihapus.');
    }
}
