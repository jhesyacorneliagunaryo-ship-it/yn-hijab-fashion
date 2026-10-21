<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index()
    {
        $profiles = Profile::latest()->get();

        return view('admin-profiles', compact('profiles'));
    }

    public function create()
    {
        return view('admin-profile-create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|max:255',
            'description' => 'required',
        ]);

        Profile::create($request->only('title', 'description'));

        return redirect('/admin/profiles')
            ->with('success', 'Konten berhasil ditambahkan!');
    }

    public function edit(Profile $profile)
    {
        return view('admin-profile-edit', compact('profile'));
    }

    public function update(Request $request, Profile $profile)
    {
        $request->validate([
            'title' => 'required|max:255',
            'description' => 'required',
        ]);

        $profile->update($request->only('title', 'description'));

        return redirect('/admin/profiles')
            ->with('success', 'Konten berhasil diperbarui!');
    }

    public function destroy(Profile $profile)
    {
        $profile->delete();

        return redirect('/admin/profiles')
            ->with('success', 'Konten berhasil dihapus!');
    }

    public function home()
    {
        $profiles = Profile::latest()->get();

        return view('home', compact('profiles'));
    }
}
