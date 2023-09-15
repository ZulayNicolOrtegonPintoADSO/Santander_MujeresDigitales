@extends('layouts.app')

@section('content')

    <div class="container">

        <p class="fs-5 text-center"> ADD PETS </p>
    
        <form action="{{ route('submitPet')}}" method="POST">
            @csrf
            
            <input type="text" name="name" placeholder="Name"  class="form-control">
    
            <div class="select mt-2">
                <select name="race_id" class="form-control">
                    <option value> Select the race... </option>
                    <option value=""> name race </option>
                </select>
            </div>

            <div class="select mt-2">
                <select name="categorie_id" class="form-control">
                    <option value> Select the categorie... </option>
                    <option value=""> name categorie </option>
                </select>
            </div>

            <div class="select mt-2">
                <select name="gender_id" class="form-control">
                    <option value> Select the gender... </option>
                    <option value=""> name gender </option>
                </select>
            </div>

            <input type="file" name="photo" placeholder="Add photo"  class="form-control mt-2">

            <button type="submit" class="btn btn-success mt-2 form-control">
                SAVE PET
            </button>
        </form>
    </div>
    
@endsection