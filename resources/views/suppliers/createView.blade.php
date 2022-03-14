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
            <label for="">Phone</label><br>
            <input type="text" name="phone"><br>
            @if($errors->has('phone'))
            <b>{{$errors->first('phone')}}</b>
            @endif <br>
            <input type="submit" value="CREATE">
        </form>
    </div>
</div>
@endsection