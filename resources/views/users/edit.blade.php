@extends('layouts.app')

@section('content')

    <div class="row">
        <div class="col-md-3">
            @include('users.partials.setting_nav')
        </div>

        <div class="col-md-9">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3>修改资料</h3>
                </div>

                <div class="panel-body">

                    <form class="form-horizontal" method="POST" action="{{ route('users.update',$user) }}" accept-charset="UTF-8">

                        {{ csrf_field() }}
                        {{ method_field('PUT') }}

                        <div class="form-group">
                            <label class="col-md-2 control-label">昵称：</label>
                            <div class="col-md-6">
                                <input name="name" class="form-control" type="text" value="{{ $user->name }}">
                            </div>
                            <div class="col-sm-4 help-block">
                                您的昵称
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-2 control-label">邮箱：</label>
                            <div class="col-md-6">
                                <input name="" class="form-control" type="text" value="{{ $user->email }}" disabled="">
                            </div>
                            <div class="col-sm-4 help-block">
                                您的邮箱，暂时不支持修改
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-2 control-label">个性签名：</label>
                            <div class="col-md-6">
                                <input name="signature" class="form-control" type="text" value="{{ $user->signature }}" placeholder="请输入个性签名">
                            </div>
                            <div class="col-sm-4 help-block">
                                请一句话介绍你自己，大部分情况下会在你的头像和名字旁边显示
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-6">
                                <input class="btn btn-primary" id="user-edit-submit" type="submit" value="应用修改">
                            </div>
                        </div>
                    </form>

                </div>

            </div>


        </div>



    </div>



@endsection