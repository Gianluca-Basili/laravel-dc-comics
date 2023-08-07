@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row mt-5">

    <div class="my-4 bg-white p-3">
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
        @endif
    </div>
        
        <div class="col-12">
            <form action="{{route('comics.store')}}" method="POST">
                @csrf
                
                <div class="form-group">
                    <div class="controll-label">
                        Titolo
                    </div>
                    <input type="text" class="form-control" id="title" name="title" placeholder="titolo">
                    @error('titolo')
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                    @enderror
                </div>
                <div class="form-group">
                    <div class="controll-label">
                        description
                    </div>
                    <input type="text" class="form-control" id="description" name="description" placeholder="description">
                    @error('description')
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                    @enderror
                    
                </div>
                <div class="form-group">
                    <div class="controll-label">
                        thumb
                    </div>
                    <input type="text" class="form-control" id="thumb" name="thumb" placeholder="thumb">
                    @error('thumb')
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                    @enderror
                </div>
                <div class="form-group">
                    <div class="controll-label">
                    thumb2
                    </div>
                    <input type="text" class="form-control" id="thumb2" name="thumb2" placeholder="thumb2">
                    @error('thumb2')
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                    @enderror
                </div>
                <div class="form-group">
                    <div class="controll-label">
                      price
                    </div>
                    <input type="text" class="form-control" id="price" name="price" placeholder="price">
                    @error('price')
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                    @enderror
                </div>
                <div class="form-group">
                    <div class="controll-label">
                        series
                    </div>
                    <input type="text" class="form-control" id="series" name="series" placeholder="series">
                    @error('series')
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                    @enderror
                </div>
                <div class="form-group">
                    <div class="controll-label">
                        sale_date
                    </div>
                    <input type="text" class="form-control" id="sale_date" name="sale_date" placeholder="sale_date">
                    @error('sale_date')
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                    @enderror
                </div>
                <div class="form-group">
                    <div class="controll-label">
                        type
                    </div>
                    <input type="text" class="form-control" id="type" name="type" placeholder="type">
                    @error('type')
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                    @enderror
                </div>
                <div class="form-group">
                    <div class="controll-label">
                        artists
                    </div>
                    <input type="text" class="form-control" id="artists" name="artists" placeholder="artists">
                    @error('artists')
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                    @enderror
                </div>
                <div class="form-group">
                    <div class="controll-label">
                        writers
                    </div>
                    <input type="text" class="form-control" id="writers" name="writers" placeholder="writers">
                    @error('writers')
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                    @enderror
                </div>
                <div class="form-group mt-4">
                    <button type="submit" class="btn btn-success">Salva</button>
                </div>
                
                
            </form>
        </div>
    </div>
</div>