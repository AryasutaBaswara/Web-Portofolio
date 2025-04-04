<?php

namespace App\Http\Controllers;

use App\Models\Skill;
use Illuminate\Http\Request;

class SkillController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $skills = Skill::all();
        return view('skills.index', compact('skills'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('skills.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'percentage' => 'required|integer|min:0|max:100',
        ]);

        Skill::create($request->all());

        return redirect()->route('home', ['#skills'])->with('success', 'Skill berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view('skills.show', compact('skill'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {   
        $skill = Skill::findOrFail($id); // Ambil skill berdasarkan id
        return view('skills.edit', compact('skill'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Skill $skill)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'percentage' => 'required|integer|min:0|max:100',
        ]);

        $skill->update($request->all());

        return redirect()->route('home', ['#skills'])->with('success', 'Skill berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Skill $skill)
    {
        $skill->delete();

        return redirect()->route('home', ['#skills'])->with('success', 'Skill berhasil dihapus.');
    }
}
