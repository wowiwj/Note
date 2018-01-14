@extends('layouts.app')

@section('content')


    <div class="columns">

        <div class="column is-3 white-bg">
            @include('users.partials.setting_nav')

        </div>
        <div class="column is-faded">

            <h2 class="title is-3">
                修改你的资料
            </h2>

            <form class="form-horizontal" method="POST" action="{{ route('users.update',$user) }}" accept-charset="UTF-8">


                {{ csrf_field() }}
                {{ method_field('PUT') }}
                <div class="field">
                    <label class="label">昵称</label>
                    <div class="control">
                        <input class="input" name="name" type="text" value="{{ $user->name }}" placeholder="请输入您的昵称">
                    </div>
                </div>

                <div class="field">
                    <label class="label">邮箱</label>
                    <div class="control">
                        <input class="input" name="email" type="text" placeholder="Text input" value="{{ $user->email }}" disabled>
                    </div>
                </div>

                <div class="field">
                    <label class="label">个性签名</label>
                    <div class="control">
                        <input class="input" name="signature" type="text" placeholder="请输入您的个性签名" value="{{ $user->signature }}">
                    </div>
                </div>

                <div class="control">
                    <button class="button is-primary">应用修改</button>
                </div>



            </form>


        </div>

    </div>


@endsection