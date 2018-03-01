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
                            <form role="form" method="POST"  action="{{ route('password.email') }}">
                                {{ csrf_field() }}

                                @if (session('status'))
                                    <b-notification>
                                        {{ session('status') }}
                                    </b-notification>
                                @endif

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

                                <div class="field is-grouped is-grouped-centered">
                                    <p class="control is-full-width">
                                        <button class="button is-success is-submit">
                                            发送重置链接到邮箱
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
