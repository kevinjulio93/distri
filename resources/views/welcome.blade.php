@extends('layouts.master')

@section('title')
welcome
@endsection


@section('content')
    @parent
    @if(count($errors)>0)
        <div class="row">
            <div class="col-md-6">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach
                </ul>
            </div>
        </div>
    @endif
<div class="row">
    <div class="col-md-4">
        <form action="{{route('signup')}}" method="post">
            
            <div class="form-group {{$errors->has('email')? 'has-error': ''}}">
                <label for="email">Your email</label>
                <input class="form-control" type="text" name="email" id="email" value="{{Request::old('email')}}">
            </div>
            
            <div class="form-group {{$errors->has('name')? 'has-error': ''}}">
                <label for="name">Your Name</label>
                <input class="form-control" type="text" name="name" id="name" value="{{Request::old('name')}}">
            </div>
            
            <div class="form-group {{$errors->has('password')? 'has-error': ''}}">
                <label for="password">Your password</label>
                <input class="form-control" type="password" name="password" id="password" value="{{Request::old('password')}}">
            </div>
            
            <button type="submit" class="btn btn-primary">Registro</button>
            <input type="hidden" name="_token" value="{{Session::token()}}">
            
        </form>
    </div>
    <div class="col-md-4">
        <form action="{{route('signin')}}" method="post">
            
            <div class="form-group {{$errors->has('email')? 'has-error': ''}}">
                <label for="email">Your email</label>
                <input class="form-control" type="text" name="email" id="email" >
            </div>
            
           <div class="form-group {{$errors->has('password')? 'has-error': ''}}">
                <label for="password">Your password</label>
                <input class="form-control" type="password" name="password" id="password" >
            </div>
            
            <button type="submit" class="btn btn-primary">Entrar</button>
            <input type="hidden" name="_token" value="{{Session::token()}}">
            
        </form>
    </div>
</div>

@endsection