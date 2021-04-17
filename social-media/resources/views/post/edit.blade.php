@extends('master')
@section('content')
<div>
    <h2>Edit Post {{$post->id}}</h2>
    <form action="/post/{{$post->id}}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="type">Type</label>
            <input type="text" class="form-control" name="type" value="{{$post->type}}" id="type" placeholder="Masukkan Type">
            @error('type')
                <div class="alert alert-danger">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="form-group">
            <label for="contents">Contents</label>
            <input type="text" class="form-control" name="contents"  value="{{$post->contents}}" id="contents" placeholder="Masukkan Contents">
            @error('contents')
                <div class="alert alert-danger">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">Edit</button>
    </form>
</div>
@endsection