@extends('layouts.app')

@section('content')

    <div class="profile columns">
        <div class="column is-12">
            <div class="section profile-heading white-bg">
                <div class="columns">
                    <div class="column is-6 ">

                        <article class="media">
                            <figure class="media-left">
                                <div class="image is-96x96">
                                    <img class="avatar img-thumbnail" src="{{ $user->avatar }}">
                                </div>
                            </figure>
                            <div class="media-content">
                                <div class="content">
                                    <p>
                                        <span class="title">{{ $user->name }}</span>
                                    </p>
                                    <p class="tagline">The users profile bio would go here, of course. It could be two lines</p>
                                </div>
                            </div>

                        </article>


                    </div>
                    <div class="column is-6">

                        <div class="is-fullwidth" style="height: 100%; display: flex;align-items: flex-end;flex-direction: row-reverse">
                            <button class="button is-primary is-outlined">
                                关注
                            </button>
                            <button class="button is-primary is-outlined m-l-20 m-r-20">
                                发私信
                            </button>

                        </div>

                    </div>
                </div>
            </div>

        </div>


    </div>


    <div class="columns">
        <div class="column is-9">
            <section class="white-bg">
                <div class="tabs">
                    <ul>
                        <li class="is-active"><a>动态</a></li>

                    </ul>
                </div>

                <div class="tab-content" style="padding: 20px;padding-top: 0">
                    @forelse ($activities as $date => $activity)
                        <div class="page-header">{{ $date }}</div>
                        <div class="">
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


            </section>



        </div>
        <div class="column is-3">

            <div id="sticker">
                <div class="card">
                    <div class="card-content">

                        <div class="columns">

                            <div class="column followers has-text-centered">
                                <p class="stat-val">129k</p>
                                <p class="stat-key">关注了</p>
                            </div>

                            <div class="column followers has-text-centered">
                                <p class="stat-val">129k</p>
                                <p class="stat-key">关注者</p>
                            </div>

                        </div>



                    </div>
                </div>

                <div class="card m-t-20">
                    <header class="card-header">
                        <p class="card-header-title">
                            个人成就
                        </p>
                    </header>
                    <div class="card-content">
                        <div class="content">
                            <div class="ddd">

                                网站第00个会员
                            </div>

                            <div class="colddumn">

                                编辑XX次
                            </div>

                            <div class="dd">

                                回答了XX个问题
                            </div>

                            <div class="dd">

                                获得了XX个赞
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>











    {{--<div class="row">--}}

        {{--<div class="col-md-3">--}}

            {{--<div class="user">--}}

                {{--<div id="sticker">--}}

                    {{--<div class="panel panel-default">--}}
                        {{--<div class="panel-heading">用户信息</div>--}}
                        {{--<div class="panel-body">--}}
                            {{--<div class="media">--}}

                                {{--<div class="media-left">--}}
                                    {{--<a href="{{ route('users.editAvatar',$user) }}">--}}
                                        {{--<img class="avatar img-thumbnail" style="max-width: 80px" src="{{ $user->avatar }}" alt="">--}}
                                    {{--</a>--}}

                                {{--</div>--}}
                                {{--<div class="media-body">--}}
                                    {{--<h3>{{ $user->name }}</h3>--}}
                                    {{--<p>第{{ $user->id }}位会员</p>--}}
                                    {{--<p>注册于{{ $user->created_at->diffForHumans() }}</p>--}}
                                    {{--<p>活跃于 刚刚</p>--}}
                                {{--</div>--}}
                            {{--</div>--}}

                            {{--<hr>--}}

                            {{--@if($user->signature)--}}
                                {{--<p class="text-center">个新签名:{{ $user->signature }}</p>--}}
                            {{--@else--}}
                                {{--<p class="text-center">用户没有设置签名</p>--}}
                            {{--@endif--}}
                            {{--@can('update',$user)--}}
                                {{--<hr>--}}
                                {{--<a class="btn btn-primary btn-block" href="{{ route('users.edit',$user) }}">编辑个人资料</a>--}}
                            {{--@endcan--}}

                        {{--</div>--}}

                    {{--</div>--}}



                {{--</div>--}}


                {{--<ul class="list-group">--}}
                    {{--<li class="list-group-item">--}}
                        {{--<span class="badge">14</span>--}}
                        {{--Ta 发布的文章--}}
                    {{--</li>--}}
                    {{--<li class="list-group-item">--}}
                        {{--<span class="badge">14</span>--}}
                        {{--Ta 发布的评论--}}
                    {{--</li>--}}
                {{--</ul>--}}
            {{--</div>--}}


        {{--</div>--}}

        {{--<div class="col-md-9">--}}


            {{--<div class="panel panel-default">--}}
                {{--<div class="panel-heading">我的动态</div>--}}
                {{--<div class="panel-body">--}}
                    {{--@forelse ($activities as $date => $activity)--}}
                        {{--<h3 class="page-header">{{ $date }}</h3>--}}
                        {{--<div class="list-group">--}}
                            {{--@foreach ($activity as $record)--}}
                                {{--@if (view()->exists("users.activities.{$record->type}"))--}}
                                    {{--@include ("users.activities.{$record->type}", ['activity' => $record])--}}
                                {{--@endif--}}
                            {{--@endforeach--}}
                        {{--</div>--}}

                    {{--@empty--}}
                        {{--<p class="empty-block">暂时没有任何动态哦</p>--}}
                    {{--@endforelse--}}
                {{--</div>--}}

            {{--</div>--}}

        {{--</div>--}}

    {{--</div>--}}

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
                $("#sticker").sticky({topSpacing:20});
            }else{

                $("#sticker").unstick();
            }

            console.log(top);

        });

    </script>

@endsection