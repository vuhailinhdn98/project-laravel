@extends('layouts.admin')
@section('content')
<div class="card">
    <div class="card-body">
        <form action="" method="POST">
            @csrf
            <label for="">Name</label><br>
            <input type="text" name="name"><br>
            @if($errors->has('name'))
            <b>{{$errors->first('name')}}</b>
            @endif <br>
            <label for="">Description</label><br>
            <input type="text" name="description"><br>
            @if($errors->has('description'))
            <b>{{$errors->first('description')}}</b>
            @endif <br>
            <input type="submit" value="CREATE" class="button btn btn-inverse-primary btn-rounded mr-2">
        </form>
    </div>
</div>
@endsection