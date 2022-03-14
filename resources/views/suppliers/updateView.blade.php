@extends('layouts.admin')
@section('content')
<div class="card">
    <div class="card-body">
        <form action="" method="POST">
            @csrf
            <label for="">Name</label><br>
            <input type="text" name="name" value="{{$suppliers['name']}}"><br>
            @if($errors->has('name'))
            <b>{{$errors->first('name')}}</b>
            @endif <br>
            <label for="">Phone</label><br>
            <input type="text" name="phone" value="{{$suppliers['phone']}}"><br>
            @if($errors->has('phone'))
            <b>{{$errors->first('phone')}}</b>
            @endif <br>
            <input type="submit" value="UPDATE" class="button btn btn-inverse-primary btn-rounded mr-2">
        </form>
    </div>
</div>
@endsection