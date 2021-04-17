@extends('master')
@section('content')
<h2>Tambah Data</h2>
<form action="/post" method="POST">
    @csrf
    <div class="form-group">
        <label for="type">Type</label>
        <input type="text" class="form-control" name="type" id="type" placeholder="Masukkan Type">
        @error('type')
            <div class="alert alert-danger">
                {{ $message }}
            </div>
        @enderror
    </div>
    <div class="form-group">
        <label for="contents">Contents</label>
        <input type="text" class="form-control" name="contents" id="contents" placeholder="Masukkan Contents">
        @error('contents')
            <div class="alert alert-danger">
                {{ $message }}
            </div>
        @enderror
    </div>
    <button type="submit" class="btn btn-primary">Tambah</button>
</form>
@endsection