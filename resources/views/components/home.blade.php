@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">Category</div>

                <div class="card-body">
                <ul class="list-group list-group-flush">
                    @foreach ($category as $item)
                   
                    <li class="list-group-item d-flex justify-content-between align-items-center"> <a href="{{ URL::to('home/' . $item->id )}}" >{{ $item->title }}</a>

                        <span class="badge badge-primary badge-pill">{{ $item->post_count }}</span>
                    </li>
                    @endforeach
                </ul>
                </div>
            </div>
        </div>
        <div class="col-md-8">
            @foreach ($blogs as $blog)
            <h2><b>{{ $blog->title }}</b></h2>
            <hr>
                @foreach ($blog->post as $item)
                <div class="card">
                    <div class="card-header">
                    <b>{{ $item->title }}</b> 
                    </div>
                    <div class="card-body">
                        <blockquote class="blockquote mb-0">
                        <p> {{ $item->description }}</p>
                        <footer class="blockquote-footer">Written by  <cite title="Source Title"> {{ $item->user->name }} </cite>  </footer>
                        </blockquote>
                    </div>
                </div>
                <br>
                @endforeach
            @endforeach
        </div>
    </div>
</div>
@endsection
