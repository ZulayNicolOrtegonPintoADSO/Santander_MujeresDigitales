@extends('layouts.app')

@section('content')

    <div class="container">

        <p class="fs-1 text-center"> UPDATE PETS </p>
    
        <div class="row border">
            <div class="col-4">
                <img src="" alt="image_pet" class="img-fluid">
            </div>

            <div class="col-4 text-center">
                <p class="fs-2 m-0">Name pet</p>
                <p class="fs-5 m-0">Name race</p>
                <p class="fs-5 m-0">Name categorie</p>
                <p class="fs-5 m-0">Name gender</p>
            </div>

            <div class="col-4 d-flex justify-content-center align-items-center">
                <div class="mx-2">         
                    <a href=""> <button class="btn btn-primary fs-3"> Edit </button></a>         
                </div>

                <div>         
                    <a href=""> <button class="btn btn-danger fs-3"> Delete </button></a>
                </div>
            </div>
        </div>
    </div>
    
@endsection