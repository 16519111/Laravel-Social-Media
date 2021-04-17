@extends('master')
@section('content')
<a href="/post/create" class="btn btn-primary mb-3">Tambah</a>
<table class="table">
    <thead class="thead-light">
        <tr>
        <th scope="col">#</th>
        <th scope="col">Type</th>
        <th scope="col">Contents</th>
        <th scope="col">Actions</th>
        </tr>
    </thead>
    <tbody>
        @forelse ($post as $key=>$value)
            <tr>
                <td>{{$key + 1}}</th>
                <td>{{$value->type}}</td>
                <td>{{$value->contents}}</td>
                <td>
                    <a href="/post/{{$value->id}}" class="btn btn-info">Show</a>
                    <a href="/post/{{$value->id}}/edit" class="btn btn-primary">Edit</a>
                    <form action="/post/{{$value->id}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <input type="submit" class="btn btn-danger my-1" value="Delete">
                    </form>
                </td>
            </tr>
        @empty
            <tr colspan="3">
                <td>No data</td>
            </tr>  
        @endforelse              
    </tbody>
</table>
@endsection