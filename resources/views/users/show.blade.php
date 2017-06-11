@extends('layouts.app')

@section('content')
    <div class="row">

        <div class="col-md-3">

            <div class="user">

                <div id="sticker">

                    <div class="panel panel-default">
                        <div class="panel-heading">用户信息</div>
                        <div class="panel-body">
                            <div class="media">

                                <div class="media-left">
                                    <a href="{{ route('users.editAvatar',$user) }}">
                                        <img class="avatar img-thumbnail" style="max-width: 80px" src="{{ $user->avatar }}" alt="">
                                    </a>

                                </div>
                                <div class="media-body">
                                    <h3>{{ $user->name }}</h3>
                                    <p>第{{ $user->id }}位会员</p>
                                    <p>注册于{{ $user->created_at->diffForHumans() }}</p>
                                    <p>活跃于 刚刚</p>
                                </div>
                            </div>

                            <hr>

                            @if($user->signature)
                                <p class="text-center">个新签名:{{ $user->signature }}</p>
                            @else
                                <p class="text-center">用户没有设置签名</p>
                            @endif
                            @can('update',$user)
                                <hr>
                                <a class="btn btn-primary btn-block" href="{{ route('users.edit',$user) }}">编辑个人资料</a>
                            @endcan

                        </div>

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
                        <p class="empty-block">暂时没有任何动态哦</p>
                    @endforelse
                </div>

            </div>

        </div>

    </div>

@endsection

@section('scripts')

    <script type="text/javascript">


        $(window).scroll(function (event) {

            if ($(window).width() <= 991) {
                $("#sticker").unstick();
                return;
            }
            var top = $(window).scrollTop();

            if (top > 600){
                $("#sticker").sticky({topSpacing:60});
            }else{

                $("#sticker").unstick();
            }

            console.log(top);

        });

    </script>

@endsection