<?php

namespace App\Http\Controllers;

use App\Models\Pet;
use Illuminate\Http\Request;

class Pets extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function createPets()
    {
        return view('addPets');
    }

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function updatePets()
    {
        $pets = Pet::paginate(16);

        return view('updatePets', compact('pets'));
    }
}
