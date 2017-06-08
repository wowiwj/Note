@extends('layouts.app')

@section('content')
    <div class="row">

        <div class="col-md-3">

            <div class="user">
                <div class="panel panel-default">
                    <div class="panel-heading">用户信息</div>
                    <div class="panel-body">
                        <div class="media">

                            <div class="media-left">
                                <img class="avatar img-thumbnail" style="max-width: 80px" src="https://dn-phphub.qbox.me/uploads/avatars/6932_1479471995.jpeg?imageView2/1/w/200/h/200" alt="">
                            </div>
                            <div class="media-body">
                                <h3>{{ $user->name }}</h3>
                                <p>第{{ $user->id }}位会员</p>
                                <p>注册于{{ $user->created_at->diffForHumans() }}</p>
                                <p>活跃于 刚刚</p>
                            </div>
                        </div>

                        <hr>
                        <p class="text-center">个新签名:嘻嘻嘻，哈哈哈</p>
                        {{--@can('update',$user)--}}
                            <hr>
                            <a class="btn btn-primary btn-block" href="#">编辑个人资料</a>
                        {{--@endcan--}}

                    </div>

                </div>

                <ul class="list-group">
                    <li class="list-group-item">
                        <span class="badge">14</span>
                        Ta 发布的文章
                    </li>
                    <li class="list-group-item">
                        <span class="badge">14</span>
                        Ta 发布的评论
                    </li>
                </ul>
            </div>


        </div>

        <div class="col-md-9">


            <div class="panel panel-default">
                <div class="panel-heading">我的动态</div>
                <div class="panel-body">
                    @forelse ($activities as $date => $activity)
                        <h3 class="page-header">{{ $date }}</h3>
                        <div class="list-group">
                            @foreach ($activity as $record)
                                @if (view()->exists("users.activities.{$record->type}"))
                                    @include ("users.activities.{$record->type}", ['activity' => $record])
                                @endif
                            @endforeach
                        </div>

                    @empty
                        <p>There is no activity for this user yet.</p>
                    @endforelse
                </div>

            </div>

        </div>

    </div>

@endsection