<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
   
public function up(): void
{
    Schema::create('profiles', function (Blueprint $table) {
        $table->id();
        $table->string('title');
        $table->text('description');
        $table->timestamps();
    });
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

};
