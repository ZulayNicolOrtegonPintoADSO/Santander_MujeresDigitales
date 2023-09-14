@extends('layouts.app')

@section('content')
{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div> --}}

<div class="container">

    <p class="fs-1 text-center"> PETS </p>

    @foreach ($pets as $pet)
        <div class="row border">
            <div class="col-4">
                <img src="" alt="image_pet" class="img-fluid"> Photo = {{ $pet->photo }}
            </div>

            <div class="col-4 text-center">
                <p class="fs-2 m-0">Name pet = {{ $pet->name }}</p>
                <p class="fs-5 m-0">Name race = {{ $pet->race_id }}</p>
                <p class="fs-5 m-0">Name categorie = {{ $pet->categorie_id }}</p>
                <p class="fs-5 m-0">Name gender = {{ $pet->gender_id }}</p>
            </div>

            <div class="col-4 d-flex justify-content-center align-items-center">
                <div class="mx-2">         
                    <a href=""> <button class="btn btn-primary fs-3"> Adopted </button></a>         
                </div>
            </div>
        </div>
    @endforeach
</div>
                                
@endsection
