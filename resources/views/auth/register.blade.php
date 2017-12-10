@extends('layouts.app')

@section('content')

    <div class="columns">
        <div class="column is-3 has-text-centered">
            <p class="subtitle">
                第三方登录
            </p>
            <p class="control">
                <a href="#" class="button is-fullwidth">
                    <span class="icon">
                        <i class="fa fa-qq">
                        </i></span>
                    <span>
                        <strong>QQ登录</strong>
                    </span>
                </a>
            </p>
            <p class="control">
                <a href="{{ route('oauth.redirect','github') }}" class="button is-fullwidth">
                    <span class="icon">
                        <i class="fa fa-github">
                        </i></span>
                    <span>
                        <strong>GitHub登录</strong>
                    </span>
                </a>
            </p>
        </div>

        <div class="column is-2">
            <p class="subtitle has-text-centered">
                或
            </p>
        </div>
        <div class="column is-7">
            <div class="box">
                <form role="form" method="POST" action="{{ route('register') }}">
                    {{ csrf_field() }}

                    <div class="field">
                        <label class="label bigger-font-label">用户名</label>
                        <p class="control">
                            <input class="input {{ $errors->has('name') ? ' is-danger' : '' }}" type="text" name="name" value="{{ old('name') }}" placeholder="请输入用户名">
                        </p>

                        @if ($errors->has('name'))
                            <p class="help is-danger">{{ $errors->first('name') }}</p>
                        @endif

                    </div>

                    <div class="field">
                        <label class="label">邮箱</label>
                        <p class="control">
                            <input type="text" name="email" value="{{ old('email') }}" placeholder="请输入您的邮箱"
                                   class="input {{ $errors->has('email') ? ' is-danger' : '' }}  "
                            >
                        </p>

                        @if ($errors->has('email'))
                            <p class="help is-danger">{{ $errors->first('email') }}</p>
                        @endif
                    </div>

                    <div class="field">
                        <label class="label">请输入密码</label>
                        <p class="control">
                            <input type="password" name="password" placeholder="请输入不少于6位的密码" class="input {{ $errors->has('password') ? ' is-danger' : '' }}">
                        </p>
                        @if ($errors->has('password'))
                            <p class="help is-danger">{{ $errors->first('password') }}</p>
                        @endif
                    </div>


                    <label class="label">确认密码</label>
                    <p class="control">
                        <input type="password" name="password_confirmation" placeholder="再次输入密码" class="input">
                    </p>

                    <div class="control m-t-30">
                        <p class="control">
                            <button type="submit" name="register"
                                    class="button is-primary is-outlined is-fullwidth">
                                <strong>注册</strong>
                            </button>
                        </p>
                    </div>
                </form>

            </div>

        </div>
    </div>

@endsection
