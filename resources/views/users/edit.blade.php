<?php
/**
 * Created by PhpStorm.
 * User: vaio_b970
 * Date: 12.02.2018
 * Time: 0:13
 */
?>

@extends('layouts.app')

@section('content')

    <div class="container">
        <form method="post" action="{{ action('UserController@update', $user->id) }}">

            <div class="form-group row">
                {{ csrf_field() }}
                {{ method_field('PUT') }}
                <label for="lgFormGroupInput" class="col-sm-2 col-form-label col-form-label-lg">Title</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control form-control-lg" placeholder="title"
                           name="name" value="{{$user->name}}">
                </div>
            </div>

            @if (count($errors) > 0)
                <div class="alert alert-danger">
                    <strong>Whoops!</strong> There were some problems with your input.<br><br>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <div class="form-group row">
                <div class="col-md-2"></div>
                <button type="submit" class="btn btn-primary">Update</button>
            </div>

        </form>
    </div>

@endsection
