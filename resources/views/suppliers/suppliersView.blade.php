@extends('layouts.admin')
@section('content')
<div class="card">
    <div class="card-body">
        <table border="1" class="table table-hover table-bordered">
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Phone</th>
                <th></th>
                <th></th>
            </tr>
            @forelse($suppliers as $supplier)
            <tr>
                <td>{{$supplier['id']}}</td>
                <td>{{$supplier['name']}}</td>
                <td>{{$supplier['phone']}}</td>
                <td><a href="suppliers/update/{{$supplier['id']}}">Update</a></td>
                <td><a href="suppliers/delete/{{$supplier['id']}}">Delete</a></td>
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
    <button class="button btn btn-inverse-primary btn-rounded mr-2"><a href="suppliers/create">CREATE NEW SUPPLIER</a></button>
@endsection