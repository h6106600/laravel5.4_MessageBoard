
@extends('layouts.app')

@section('home')
<div class="container">
    <div class="row">
        @foreach ($show as $v)
            <div class="col-md-4">
                <h3>{{ $v->id }}</h3>
                <h4>{{ $v->title }}</h4>
                <p>{{ $v->content }}</p>
            </div>    
        @endforeach
    </div>
</div>
@endsection

