@extends('layouts.admin')
@section('content')
<div class="card">
    <div class="card-body">
        <form action="" method="POST">
            @csrf
            <label for="">Description</label><br>
            <input type="text" name="description">
            <input type="submit" value="UPDATE" class="button btn btn-inverse-primary btn-rounded mr-2">
        </form>
    </div>
</div>
@endsection