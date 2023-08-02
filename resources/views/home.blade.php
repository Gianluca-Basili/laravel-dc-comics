@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row mt-5">
            <div class="col-12 ">
                <h1>DC COMICS</h1>
            </div>
            <div class="row">
                <div class="col-12">
                    
                    <a href="{{route('comics.index')}}" class="btn btn-primary mx-2">Visualizza tutti i fumetti</a>
                  
                </div>

            </div>
        </div>
    </div>
@endsection