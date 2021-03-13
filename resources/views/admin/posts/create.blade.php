@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="card">
                    <div class="card-header">
                        Crear entrada
                    </div>
                    <div class="card-body">
                        {!! Form::open(['route' => 'posts.store', 'files' => true]) !!}
                        @include('admin.posts.partials.form')
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
