
@extends('layouts.app')

@section('admin')
<div class="container">
    <div class="row">
        <div class="col-md-3">
            <h2>select1</h2>
            <form action="{{url('/admin')}}" method="get">
                <div class="form-group">
                    <label for="id">id:</label>
                    <input type="text" class="form-control" id="id" name="id">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
        <div class="col-md-3">
            <h2>insert1</h2>
            <form action="{{url('/insert')}}" method="get">
                <div class="form-group">
                    <label for="title">title:</label>
                    <input type="text" class="form-control" id="title" name="title">
                </div>
                <div class="form-group">
                    <label for="content">content:</label>
                    <input type="text" class="form-control" id="content" name="content">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
        <div class="col-md-3">
            <h2>update1</h2>
            <form action="{{url('/update')}}" method="get">
                <div class="form-group">
                    <label for="id">id:</label>
                    <input type="text" class="form-control" id="id" name="id">
                </div>
                <div class="form-group">
                    <label for="title">title:</label>
                    <input type="text" class="form-control" id="title" name="title">
                </div>
                <div class="form-group">
                    <label for="content">content:</label>
                    <input type="text" class="form-control" id="content" name="content">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
        <div class="col-md-3">
            <h2>delete1</h2>
            <form action="{{url('/delete')}}" method="get">
                <div class="form-group">
                    <label for="id">id:</label>
                    <input type="text" class="form-control" id="id" name="id">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>
<hr>
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