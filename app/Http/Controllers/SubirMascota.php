<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pet;
use Symfony\Contracts\Service\Attribute\Required;

class SubirMascota extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function submit(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'race_id'  => 'required',
            'categorie_id' => 'required',
            'photo'	 => 'required',
            'gender_id' => 'required',
        ]);

        $pet= new Pet();

        $pet->name = $request->name;
        $pet->race_id = $request->race_id;
        $pet->categorie_id = $request->categorie_id;
        $pet->photo = $request->photo;
        $pet->gender_id = $request->gender_id;

        $pet->save();

        return "hola";
    }
}
