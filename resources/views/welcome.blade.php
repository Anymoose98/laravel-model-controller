@extends('layouts.app')


@section('content')
    <div class="container">
        <div class="row">
            @foreach ($movies as $movie)
                <div class="col-6">
                    <div class="card my-3 p-2">
                        <h2 class="text-center">
                            {{$movie['title']}}
                        </h2>
                        <h5>
                            {{$movie['nationality']}}
                        </h5>
                        <h5>
                            Uscito il {{$movie['date']}}
                        </h5>
                        <h5>
                            il voto è di {{$movie['vote']}}
                        </h5>
                    </div>
                </div>
                
            @endforeach
        </div>
    </div>
@endsection

