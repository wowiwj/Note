@extends('layouts.app')

@section('title','评论首页')


@section('content')

    <div class="columns">

        <div class="column is-9">
            <div class="card">
                <header class="card-header">
                    <p class="card-header-title">
                        讨论
                    </p>

                    <div class="card-header-icon articles-sort">
                        <a href="/discussions">最新</a>
                        ·
                        @auth
                            <a href="/discussions?by={{ Auth::user()->name }}">我的</a>
                            ·
                        @endauth

                        <a href="/discussions?popular=1">热门</a>
                        ·
                        <a href="/discussions?uncommented=1">零回复</a>
                    </div>
                </header>
                <div class="card-content nopadding">
                    <div class="content">
                        @forelse($discussions as $discussion)
                        @empty
                            <div class="empty-block">没有文章数据</div>
                        @endforelse

                        <div class="center-block">
                            {{ $discussions->links('vendor.pagination.default') }}
                        </div>
                    </div>
                </div>
            </div>

        </div>


        <div class="column">

            @include('layouts.partials.category')

        </div>


    </div>


@endsection