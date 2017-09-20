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
                        <a href="#">最新</a>
                        ·
                        <a href="#">我的</a>
                        ·
                        <a href="#">热门</a>
                        ·
                        <a href="#">零回复</a>
                    </div>
                </header>
                <div class="card-content">
                    <div class="content">
                        @forelse($articles as $article)
                            @include('articles.partials.article')
                        @empty
                            <div class="empty-block">没有文章数据</div>
                        @endforelse

                        <div class="center-block">
                            {{ $articles->links() }}
                        </div>
                    </div>
                </div>
            </div>

        </div>


        <div class="column">
            <div class="card">
                <header class="card-header">
                    <p class="card-header-title">
                        Component
                    </p>
                    <a href="#" class="card-header-icon" aria-label="more options">
                  <span class="icon">
                    <i class="fa fa-angle-down" aria-hidden="true"></i>
                  </span>
                    </a>
                </header>
                <div class="card-content">
                    <div class="content">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec iaculis mauris.
                        <a href="#">@bulmaio</a>. <a href="#">#css</a> <a href="#">#responsive</a>
                        <br>
                        <time datetime="2016-1-1">11:09 PM - 1 Jan 2016</time>
                    </div>
                </div>
                <footer class="card-footer">
                    <a href="#" class="card-footer-item">Save</a>
                    <a href="#" class="card-footer-item">Edit</a>
                    <a href="#" class="card-footer-item">Delete</a>
                </footer>
            </div>

        </div>


    </div>




    {{--<div class="row">--}}

    {{--<div class="col-md-9">--}}

    {{--<div class="panel panel-default">--}}
    {{--<div class="panel-heading">--}}

    {{--<div class="level">--}}
    {{--<div class="flex">文章</div>--}}

    {{--<a href="/articles"> 最新 </a> &nbsp;/&nbsp;--}}
    {{--<a href="/articles?popular=1">热门</a> &nbsp;/&nbsp;--}}
    {{--@if(Auth::check())--}}
    {{--<a href="/articles?by={{ Auth::user()->name }}"> 我的 </a> &nbsp;/&nbsp;--}}
    {{--@endif--}}
    {{--<a href="/articles?uncommented=1">零回复</a>--}}
    {{--</div>--}}



    {{--</div>--}}

    {{--<div class="panel-body">--}}

    {{--@forelse($articles as $article)--}}
    {{--@include('articles.partials.article')--}}
    {{--@empty--}}
    {{--<div class="empty-block">没有文章数据</div>--}}
    {{--@endforelse--}}

    {{--<div class="text-center">--}}
    {{--{{ $articles->links() }}--}}
    {{--</div>--}}


    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}

    {{--<div class="col-md-3 hidden-sm hidden-xs">--}}
    {{--@include('layouts.partials.category')--}}
    {{--</div>--}}


    {{--</div>--}}

@endsection