@extends('layout')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header text-center">
                Contents
            </div>
            <div class="card-body">
                @foreach ($data as $post)
                    <div>
                        <h5 class="card-title">{{ $post->name }}</h5>
                        <p class="card-text">{{ $post->description }}</p>
                        <a href="#" class="btn btn-primary">View</a>
                    </div><hr>
                @endforeach
            </div>
            <div class="card-footer text-body-secondary">
                2 days ago
            </div>
        </div>
    </div>
@endsection