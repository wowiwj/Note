@extends('layouts.admin')


@section('content')

    <div class="card">
        <header class="card-header">
            <p class="card-header-title">
                用户管理
            </p>
            <a class="card-header-icon">
      <span class="icon">
        <i class="fa fa-angle-down"></i>
      </span>
            </a>
        </header>
        <div class="card-content">
            <div class="content">
                <table class="table is-bordered is-striped is-narrow">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>头像</th>
                        <th>用户名</th>
                        <th>邮箱</th>
                        <th>注册日期</th>
                        <th>操作</th>
                    </tr>
                    </thead>
                    <tbody>


                    @foreach($users as $user)
                        <tr>
                            <td>{{ $user->id }}</td>
                            <td>
                                <figure class="image is-32x32" style="margin-right: 8px;">
                                    <img src="{{ $user->avatar}}">
                                </figure>
                            </td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->created_at->diffForHumans() }}</td>
                            <td>

                                <div class="block">

                                    <a href="{{ route('admin.users.edit',$user) }}" class="button is-small is-primary">编辑</a>

                                    <a class="button is-small is-danger"  href="{{ route('admin.users.destroy',$user) }}"
                                       onclick="event.preventDefault();
               document.getElementById('delete-form-{{$user->id}}').submit();">
                                        删除
                                        <form id="delete-form-{{$user->id}}" action="{{ route('admin.users.destroy',$user) }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                            {{ method_field('DELETE') }}
                                        </form>
                                    </a>


                                </div>

                            </td>
                        </tr>
                    @endforeach

                    </tbody>
                </table>
                {{ $users->links('vendor.pagination.admin')}}
            </div>
        </div>
    </div>


@endsection