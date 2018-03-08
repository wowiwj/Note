@extends('layouts.admin')

@section('content')


    {{--<div class="container-fluidt">--}}

        <div class="columns">
            <div class="column">
                <div class="card">
                    <header class="card-header">
                        <p class="card-header-title">
                            用户
                        </p>
                    </header>
                    <div class="card-content">
                        <div class="content">
                            <h1 class="title">
                                {{ $userCount }} <span class="subtitle">人</span>
                            </h1>
                        </div>
                    </div>
                    {{--<footer class="card-footer">--}}
                        {{--<a class="card-footer-item">管理</a>--}}
                    {{--</footer>--}}
                </div>
            </div>
            <div class="column">
                <div class="card">
                    <header class="card-header">
                        <p class="card-header-title">
                            文章
                        </p>
                    </header>
                    <div class="card-content">
                        <div class="content">
                            <h1 class="title">
                                {{ $articleCount }} <span class="subtitle">篇</span>
                            </h1>
                        </div>
                    </div>
                    {{--<footer class="card-footer">--}}
                        {{--<a class="card-footer-item">管理</a>--}}
                    {{--</footer>--}}
                </div>
            </div>
            <div class="column">
                <div class="card">
                    <header class="card-header">
                        <p class="card-header-title">
                            评论
                        </p>
                    </header>
                    <div class="card-content">
                        <div class="content">
                            <h1 class="title">
                                {{ $discussionCount }} <span class="subtitle">条</span>
                            </h1>
                        </div>
                    </div>
                    {{--<footer class="card-footer">--}}
                        {{--<a class="card-footer-item">管理</a>--}}
                    {{--</footer>--}}
                </div>
            </div>
            <div class="column">
                <div class="card">
                    <header class="card-header">
                        <p class="card-header-title">
                            讨论数
                        </p>
                    </header>
                    <div class="card-content">
                        <div class="content">
                            <h1 class="title">
                                {{ $commentCount }} <span class="subtitle">次</span>
                            </h1>
                        </div>
                    </div>
                    {{--<footer class="card-footer">--}}
                        {{--<a class="card-footer-item">查看</a>--}}
                    {{--</footer>--}}
                </div>
            </div>
        </div>

    {{--</div>--}}



@endsection