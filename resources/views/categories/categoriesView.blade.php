@extends('layouts.admin')
@section('content')
<div class="card">
    <div class="card-body">
        <table border="1" class="table table-hover table-bordered">
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Description</th>
                <th></th>
                <th></th>
            </tr>
            @forelse($categories as $category)
            <tr>
                <td>{{$category['id']}}</td>
                <td>{{$category['name']}}</td>
                <td>{{$category['description']}}</td>
                <td><a href="categories/update/{{$category['id']}}">Update</a></td>
                <td><a href="categories/delete/{{$category['id']}}">Delete</a></td>
            </tr>
            @empty
            <tr>
                <td colspan="5">No data!</td>
            </tr>
            @endforelse
        </table>
    </div>
</div>
    <br>
    <button class="button btn btn-inverse-primary btn-rounded mr-2"><a href="categories/create">CREATE NEW CATEGORY</a></button>
@endsection