<?php

namespace App\Http\Controllers;

use App\Models\Film;
use Illuminate\Http\Request;

class FilmsController extends Controller
{
    public function index()
    {
        // Pass data to the view if needed
        $films = Film::all();

        // Return the view 'users.index' with data
        return view('films', ['films' => $films]);
    }

    public function store(Request $request)
    {
        // Validate the form data
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'duration' => 'required||string|max:255',
            'description' => 'required||string|max:255',
        ]);

        // Create a new user
        Film::create($validated);

        // Redirect back to the user list with a success message
        return redirect()->route('films.index')->with('success', 'Film added successfully!');
    }
}
