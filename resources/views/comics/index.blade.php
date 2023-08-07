@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row mt-5">
        <div class="col-12">
            <a href="{{route('comics.create')}}" class="btn btn-sm btn-primary">Aggiungi Fumetto</a>
        </div>
            <div class="col-12">
                <table class="table">
                    <thead>
                        <tr>
                            <th>id</th>
                            <th>Titolo</th>
                            <th>Serie</th>
                            <th>Prezzo</th>
                            <th>Azioni</th>
                           
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($comics as $comic)
                        <tr>
                            <td>
                                {{$comic->id}}
                            </td>
                            <td>
                                {{$comic->title}}
                            </td>
                            <td>
                                {{$comic->series}}
                            </td>
                            <td>
                                {{$comic->price}}
                            </td>
                            
                            <td class="text-center">
                                <a href="{{route('comics.show', $comic->id)}}">
                                    <i class="fas fa-eye"></i>
                                </a>
                                <a  class= "btn btn-warning btn-sm" href="{{route('comics.edit', $comic->id)}}">
                                    <i class="fas fa-edit"></i>
                                </a>
                                <form class="d-inline-block" action="{{route('comics.destroy',$comic->id)}}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection