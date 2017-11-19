
@extends('layouts.app')

@section('content')


    <div class="columns">

        <div class="column is-3 white-bg">
            @include('users.partials.setting_nav')

        </div>
        <div class="column is-faded">

            <h2 class="title is-3">
                修改您的头像
            </h2>

            <div class="card">
                <div class="card-content text-center">
                    <upload-avatar :avatar="'{{  $user->avatar }}'"></upload-avatar>
                </div>

            </div>


        </div>

    </div>


@endsection

