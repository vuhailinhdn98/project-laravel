@extends('layouts.admin')
@section('content')
<div class="card">
    <div class="card-body">
        <form action="" method="POST">
            @csrf
            <label for="">Name</label><br>
            <input type="text" name="name" value="{{$categories['name']}}"><br>
            @if($errors->has('name'))
            <b>{{$errors->first('name')}}</b>
            @endif <br>
            <label for="">Description</label><br>
            <input type="text" name="description" value="{{$categories['description']}}"><br>
            @if($errors->has('description'))
            <b>{{$errors->first('description')}}</b>
            @endif
            <br>
            <input type="submit" value="UPDATE" class="button btn btn-inverse-primary btn-rounded mr-2">
        </form>
    </div>
</div>
@endsection