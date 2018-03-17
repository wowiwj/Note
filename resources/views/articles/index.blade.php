@extends('layouts.app')

@section('title','文章首页')


@section('content')


    <div class="columns">

        <div class="column is-9">
            <div class="card">
                <header class="card-header">
                    <p class="card-header-title">
                        文章
                    </p>

                    <div class="card-header-icon articles-sort">
                        <a href="/articles">最新</a>
                        ·
                        @auth
                        <a href="/articles?by={{ Auth::user()->name }}">我的</a>
                        ·
                        @endauth

                        <a href="/articles?popular=1">热门</a>
                        ·
                        <a href="/articles?uncommented=1">零回复</a>
                    </div>
                </header>
                <div class="card-content nopadding">
                    <div class="content">
                        @forelse($articles as $article)
                            @include('articles.partials.article')
                        @empty
                            <div class="empty-block">没有文章数据</div>
                        @endforelse

                        <div class="center-block">
                            {{ $articles->links('vendor.pagination.default') }}
                        </div>
                    </div>
                </div>
            </div>

        </div>


        <div class="column">

            @include('layouts.partials.category')

            @include('articles.partials.archive')


        </div>


    </div>


@endsection