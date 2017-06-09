@extends('layouts.app')

@section('content')

    <div class="row">
        <div class="col-md-3">
            @include('users.partials.setting_nav')
        </div>

        <div class="col-md-9">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3>修改头像</h3>
                </div>

                <div class="panel-body">

                    <upload-avatar></upload-avatar>

                </div>

            </div>


        </div>


    </div>



@endsection