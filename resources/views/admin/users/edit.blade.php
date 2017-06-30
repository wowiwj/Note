@extends('layouts.admin')


@section('content')

    <div class="card">
        <header class="card-header">
            <p class="card-header-title">
                编辑用户
            </p>
            <a class="card-header-icon">
      <span class="icon">
        <i class="fa fa-angle-down"></i>
      </span>
            </a>
        </header>
        <div class="card-content">
            <div class="content">

                <figure class="image is-96x96 embed" style="margin: 0 auto;">
                    <img src="{{ $user->avatar}}">
                </figure>

                <form action="">

                    <div class="field">
                        <label class="label">用户名</label>
                        <p class="control">
                            <input value="{{ $user->name }}" class="input" type="text" placeholder="请输入用户名">
                        </p>
                    </div>

                    <div class="field">
                        <label class="label">邮箱</label>
                        <p class="control">
                            <input value="{{ $user->email }}" class="input" type="text" placeholder="请输入邮箱">
                        </p>
                    </div>

                    <div class="field">
                        <label class="label">签名</label>
                        <p class="control">
                            <input value="{{ $user->signature }}" class="input" type="text" placeholder="请输入签名">
                        </p>
                    </div>


                    <div class="field is-grouped">
                        <p class="control">
                            <button type="submit"  class="button is-primary">提交</button>
                        </p>

                        <p class="control">
                            <a class="button is-link" href="{{ route('admin.users.index') }}">
                                取消
                            </a>
                        </p>
                    </div>

                </form>

            </div>
        </div>
    </div>


@endsection