@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row my-5">
        <div class="col-12 col-md-6 col-lg-4">
            <img src="{{$comic->thumb}}" >

        </div>
        <div class="col-12 col-md-6 ">
            <h2>{{$comic->title}}</h2>
            <p >Genere:{{$comic->type}}</p>
            <p >prezzo:{{$comic->price}}</p>
            <p >Serie:{{$comic->series}}</p>
            <p >Data di uscita:{{$comic->sale_date}}</p>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <p>{{$comic->description}}</p>
        </div>
        <div class="col-12 col-md-6">
            <p>autori:{{$comic->writers}}</p>
        </div>
    </div>

    <button class="btn btn-success"><a class="text-decoration-none link-light" href="{{route('comics.index')}}">Homepage</a></button>


</div>