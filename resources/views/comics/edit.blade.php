@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row mt_5">
        <div class="col-12">
            <h1>Modifica Comic</h1>
        </div>
        
        <div class="col-12">
            <form action="{{route('comics.update', $comic->id)}}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <div class="controll-label">
                        Titolo
                    </div>
                    <input type="text" class="form-control" id="title" name="title" placeholder="titolo" value="{{$comic->title}}">
                </div>
                <div class="form-group">
                    <div class="controll-label">
                        description
                    </div>
                    <input type="text" class="form-control" id="description" name="description" placeholder="description" value="{{$comic->description}}">
                </div>
                <div class="form-group">
                    <div class="controll-label">
                        thumb
                    </div>
                    <input type="text" class="form-control" id="thumb" name="thumb" placeholder="thumb"  value="{{$comic->thumb}}">
                </div>
                <div class="form-group">
                    <div class="controll-label">
                    thumb2
                    </div>
                    <input type="text" class="form-control" id="thumb2" name="thumb2" placeholder="thumb2" value="{{$comic->thumb2}}">
                </div>
                <div class="form-group">
                    <div class="controll-label">
                      price
                    </div>
                    <input type="text" class="form-control" id="price" name="price" placeholder="price" value="{{$comic->price}}">
                </div>
                <div class="form-group">
                    <div class="controll-label">
                        series
                    </div>
                    <input type="text" class="form-control" id="series" name="series" placeholder="series" value="{{$comic->series}}">
                </div>
                <div class="form-group">
                    <div class="controll-label">
                        sale_date
                    </div>
                    <input type="text" class="form-control" id="sale_date" name="sale_date" placeholder="sale_date" value="{{$comic->sale_data}}">
                </div>
                <div class="form-group">
                    <div class="controll-label">
                        type
                    </div>
                    <input type="text" class="form-control" id="type" name="type" placeholder="type" value="{{$comic->type}}">
                </div>
                <div class="form-group">
                    <div class="controll-label">
                        artists
                    </div>
                    <input type="text" class="form-control" id="artists" name="artists" placeholder="artists" value="{{$comic->artists}}">
                </div>
                <div class="form-group">
                    <div class="controll-label">
                        writers
                    </div>
                    <input type="text" class="form-control" id="writers" name="writers" placeholder="writers" value="{{$comic->writers}}">
                </div>
                <div class="form-group mt-4">
                    <button type="submit" class="btn btn-success">Salva</button>
                </div>
                
                
            </form>
        </div>

    </div>
</div>