@extends('layouts.app')

@section('content')
<div class="container">

    <div class="columns" style="padding-top: 100px">
        <div class="column is-5 is-offset-4">
            <div class="card">
                <header class="card-header">
                    <p class="card-header-title" style="text-align: center">
                        重置密码
                    </p>
                    <a href="#" class="card-header-icon" aria-label="more options">
                    </a>
                </header>
                <div class="card-content">
                    <div class="content">
                        <div>
                            <form role="form" method="POST"  action="{{ route('password.request') }}">
                                {{ csrf_field() }}

                                <input type="hidden" name="token" value="{{ $token }}">

                                <div class="field">
                                    <label class="label">邮箱</label>
                                    <div class="control has-icons-left has-icons-right">
                                        <input name="email" class="input {{ $errors->has('email') ? 'is-danger' : '' }}" type="text" placeholder="请输入邮箱"
                                               value="{{ old('email') }}">
                                        <span class="icon is-small is-left">
                                            <i class="fas fa-user"></i>
                                            </span>
                                        <span class="icon is-small is-right">
                                            <i class="fas fa-check"></i>
                                            </span>
                                    </div>
                                    @if($errors->has('email'))
                                        <p class="help is-danger">{{ $errors->first('email') }}</p>
                                    @endif
                                </div>

                                <div class="field">
                                    <label class="label">密码</label>
                                    <p class="control">
                                        <input type="password" name="password" placeholder="请输入不少于6位的密码" class="input {{ $errors->has('password') ? ' is-danger' : '' }}">
                                    </p>
                                    @if ($errors->has('password'))
                                        <p class="help is-danger">{{ $errors->first('password') }}</p>
                                    @endif
                                </div>

                                <div class="field">
                                    <label class="label">确认密码</label>
                                    <p class="control">
                                        <input type="password_confirmation" name="password_confirmation" placeholder="请输入不少于6位的密码" class="input {{ $errors->has('password_confirmation') ? ' is-danger' : '' }}">
                                    </p>
                                    @if ($errors->has('password'))
                                        <p class="help is-danger">{{ $errors->first('password_confirmation') }}</p>
                                    @endif
                                </div>

                                <div class="field is-grouped is-grouped-centered">
                                    <p class="control is-full-width">
                                        <button class="button is-success is-submit">
                                            重置密码
                                        </button>
                                    </p>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>

</div>
@endsection
