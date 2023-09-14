@extends('layouts.app')

@section('content')

    <div class="container">

        <p class="fs-5 text-center"> ADD PETS </p>
    
        <form action="" method="POST">
            <input type="text" name="input_name" placeholder="Name"  class="form-control">
    
            <div class="select mt-2">
                <select name="input_races" class="form-control">
                    <option value> Select the race... </option>
                    <option value=""> name race </option>
                </select>
            </div>

            <div class="select mt-2">
                <select name="input_categories" class="form-control">
                    <option value> Select the categorie... </option>
                    <option value=""> name categorie </option>
                </select>
            </div>

            <div class="select mt-2">
                <select name="input_genders" class="form-control">
                    <option value> Select the gender... </option>
                    <option value=""> name gender </option>
                </select>
            </div>

            <input type="file" name="input_photo" placeholder="Add photo"  class="form-control mt-2">

            <button type="submit" class="btn btn-success mt-2 form-control">
                SAVE PET
            </button>
        </form>
    </div>
    
@endsection