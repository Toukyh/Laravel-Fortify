<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use App\Models\Publication;
use Illuminate\Http\Request;

class PublicationController extends Controller
{
    public function index()
    {
        $publications = Publication::with('user')->orderBy('created_at', 'desc')->get();

        return Inertia::render('Publications/Index', [
            "publications" => $publications
        ]);
    }
    public function store(Request $request)
    {
        $request->validate([
            'title' => ['required'],
            'content' => ['required', 'max:250']
        ]);
    }
}
