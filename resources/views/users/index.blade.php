<?php
/**
 * Created by PhpStorm.
 * User: vaio_b970
 * Date: 10.02.2018
 * Time: 22:36
 */
?>
@extends('layouts.app')

@section('content')

    <div class="container">
        @if (Session::has('success'))
            <div class="alert alert-info">
                {{ Session::get('success') }}
            </div>
        @endif

        @if (count($users) > 0)
            <div class="panel panel-default">
                <div class="panel-heading">
                    Пользователи
                </div>

                <div class="panel-body">
                    <table class="table table-striped task-table">
                        <thead>
                        <th>ФИО</th>
                        <th>ДР</th>
                        <th>Роль</th>
                        <th>Пол</th>
                        </thead>

                        <tbody>

                        @foreach ($users as $user)
                            <tr>
                                <td class="table-text">
                                    <div>{{ $user->fst_name }} {{ $user->mdl_name }} {{ $user->lst_name }}</div>
                                </td>
                                <td class="table-text">
                                    <div>{{ $user->name }}</div>
                                </td>
                                <td class="table-text">
                                    <div>{{ $user->roles[0]->name }}</div>
                                </td>
                                <td class="table-text">
                                    <div>{{ $user->gender }}</div>
                                </td>
                                <td>
                                    <a href="{{action('UserController@edit', $user->id)}}"
                                       class="btn btn-warning">Edit</a>
                                    <a href="{{action('UserController@edit', $user->id)}}"
                                       class="btn btn-warning">Edit</a>
                                    <a href="{{action('UserController@destroy', $user->id)}}"
                                       class="btn btn-danger">delete</a>
                                </td>
                            </tr>

                        @endforeach

                        </tbody>
                    </table>
                </div>

            </div>
        @endif

    </div>
@endsection
