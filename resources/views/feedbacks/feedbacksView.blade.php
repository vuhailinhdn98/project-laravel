@extends('layouts.admin')
@section('content')
<div class="card">
    <div class="card-body">
        <table border="1" class="table table-hover table-bordered">
            <tr>
                <th>Id</th>
                <th>Description</th>
                <th>Product Id</th>
                <th>Customer Id</th>
                <th>Create dat</th>
                <th></th>
                <th></th>
            </tr>
            @forelse($feedbacks as $feedback)
            <tr>
                <td>{{$feedback['id']}}</td>
                <td>{{$feedback['description']}}</td>
                <td>{{$category['productId']}}</td>
                <td>{{$category['customerId']}}</td>
                <td>{{$category['createdat']}}</td>
                <td><a href="feedbacks/update/{{$feedback['id']}}">Update</a></td>
                <td><a href="feedbacks/delete/{{$feedback['id']}}">Delete</a></td>
            </tr>
            @empty
            <tr>
                <td colspan="7">No data!</td>
            </tr>
            @endforelse
        </table>
    </div>
</div>
@endsection