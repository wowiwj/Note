@extends('layouts.app')

@section('title',$page->title)


@section('content')

    <div class="row">

        <div class="col-md-12">

            <div class="card">
                <header class="card-header">
                    <p class="card-header-title article-title">
                        {{ $page->title }}
                    </p>

                </header>
                <div class="card-content">
                    <div class="content">
                        <div class="article">
                            <parse markdown="{{ $page->body }}"></parse>
                        </div>

                        <div class="columns">



                            <div class="column is-8">
                                <div class="social-share-container">
                                    <div class="social-share" data-disabled="google" data-description="Share.js - 一键分享到微博，QQ空间，腾讯微博，人人，豆瓣"></div>
                                </div>
                            </div>

                            <div class="column is-4" style="line-height: 30px">


                                @if(Auth::check() && Auth::user()->is_admin)
                                    <div class="is-pulled-right m-l-20">
                                        <b-tooltip label="编辑">
                                            <a class="popover-with-html" href="{{ route('special_pages.edit',$page) }}">
                                                <i class="fa fa-edit"></i> <span></span>
                                            </a>
                                        </b-tooltip>
                                    </div>

                                    {{--<form action="{{ route('special_pages.destroy',$page) }}" method="post">--}}
                                        {{--{{ csrf_field() }}--}}
                                        {{--{{ method_field("DELETE") }}--}}
                                        {{--<button class="delete-article">--}}

                                            {{--<b-tooltip label="删除">--}}
                                                {{--<a class="popover-with-html">--}}
                                                    {{--<i class="fa fa-trash"></i> <span></span>--}}
                                                {{--</a>--}}
                                            {{--</b-tooltip>--}}
                                        {{--</button>--}}
                                    {{--</form>--}}

                                    {{--<div class="is-pulled-right m-l-20">--}}
                                    {{--<b-tooltip label="删除">--}}
                                    {{--<a class="popover-with-html" href="{{ route('articles.edit',$article) }}">--}}
                                    {{--<i class="fa fa-trash"></i> <span></span>--}}
                                    {{--</a>--}}
                                    {{--</b-tooltip>--}}
                                    {{--</div>--}}
                                @endif

                                <div class="is-pulled-right m-l-20">
                                    <b-tooltip label="订阅">
                                        <a class="popover-with-html">
                                            <i class="fa fa-eye"></i> <span></span>
                                        </a>
                                    </b-tooltip>
                                </div>


                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{--<div class="panel panel-default infos">--}}

                {{--<div class="panel-heading">--}}

                    {{--@if(Auth::check() && Auth::user()->is_admin)--}}

                        {{--<span>--}}
                            {{--<h1 class="text-center">{{ $page->title }}</h1>--}}

                            {{--<div class="flex">--}}
                                {{--<span class="level meta">--}}
                                    {{--<a class="edit-article" href="{{ route('special_pages.edit',$page) }}"><i class="ion-edit" data-toggle="tooltip" data-placement="top" title="编辑页面"></i></a>--}}


                                    {{--<form action="{{ route('special_pages.destroy',$page) }}" method="post">--}}
                                                {{--{{ csrf_field() }}--}}
                                        {{--{{ method_field("DELETE") }}--}}
                                        {{--<button class="delete-article" data-toggle="tooltip" data-placement="top" title="删除页面"><i class="ion-trash-a"></i></button>--}}
                                    {{--</form>--}}
                                {{--</span>--}}
                            {{--</div>--}}
                        {{--</span>--}}


                    {{--@else--}}
                        {{--<h1 class="text-center">{{ $page->title }}</h1>--}}
                    {{--@endif--}}

                {{--</div>--}}

                {{--<div class="panel-body">--}}
                    {{--<div class="article">--}}

                        {{--<parse markdown="{{ $page->body }}"></parse>--}}
                    {{--</div>--}}




                {{--</div>--}}
            {{--</div>--}}

            <comments></comments>







        </div>






    </div>

@endsection