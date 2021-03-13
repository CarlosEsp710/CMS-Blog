@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="col-md-8 offset-md-2">
            <h1>Lista de artículos</h1>
            @foreach ($posts as $post)
                <div class="card">
                    <div class="card-header">
                        {{ $post->name }}
                    </div>
                    <div class="card-body">
                        @if ($post->file)
                            <img src="{{ $post->file }}" class="img-fluid">
                            <br>
                        @endif
                        {{ $post->excerpt }}
                        <a href="{{ route('post', $post->slug) }}" class="right-align">Leer más</a>
                    </div>
                </div>
                <br>
            @endforeach
            {{ $posts->render('pagination::bootstrap-4') }}
        </div>
    </div>
@endsection
