<?php

namespace App\Http\Controllers;

use App\Models\Announcement;
use Illuminate\Http\Request;

class AnnouncementController extends Controller
{
    public function index()
    {
        $announcements = Announcement::orderBy('order', 'asc')->get();
        return view('announcements.index', compact('announcements'));
    }

    public function create()
    {
        return view('announcements.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'badge_text' => 'required|string|max:100',
            'badge_class' => 'required|string|max:100',
            'button_text' => 'nullable|string|max:100',
            'button_url' => 'nullable|string|max:255',
            'order' => 'nullable|integer',
        ]);

        Announcement::create([
            'title' => $request->title,
            'description' => $request->description,
            'badge_text' => $request->badge_text,
            'badge_class' => $request->badge_class,
            'button_text' => $request->button_text,
            'button_url' => $request->button_url,
            'is_active' => $request->has('is_active'),
            'order' => $request->order ?? 0,
        ]);

        return redirect()->route('announcements.index')->with('success', 'Anuncio creado correctamente.');
    }

    public function edit(Announcement $announcement)
    {
        return view('announcements.edit', compact('announcement'));
    }

    public function update(Request $request, Announcement $announcement)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'badge_text' => 'required|string|max:100',
            'badge_class' => 'required|string|max:100',
            'button_text' => 'nullable|string|max:100',
            'button_url' => 'nullable|string|max:255',
            'order' => 'nullable|integer',
        ]);

        $announcement->update([
            'title' => $request->title,
            'description' => $request->description,
            'badge_text' => $request->badge_text,
            'badge_class' => $request->badge_class,
            'button_text' => $request->button_text,
            'button_url' => $request->button_url,
            'is_active' => $request->has('is_active'),
            'order' => $request->order ?? 0,
        ]);

        return redirect()->route('announcements.index')->with('success', 'Anuncio actualizado correctamente.');
    }

    public function destroy(Announcement $announcement)
    {
        $announcement->delete();
        return redirect()->route('announcements.index')->with('success', 'Anuncio eliminado correctamente.');
    }
}