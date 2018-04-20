@extends('layouts.app')

@section('title','课程-'.$lesson->title)


@section('banner')


    <div style="margin-top: 62px;margin-bottom: 12px;background-color: #00d1b2">
        <div class="container" style="padding: 10px;font-size: 1rem;font-weight: bold">
            <p class="text-center" style="color: white">{{ $lesson->title }}</p>
        </div>

    </div>
    <div style="background-color: #1b1e21;">

        <div class="container" style="background-color: #1b1e21">
            <div class="columns">
                <div class="column is-10 is-offset-1" style="padding: 0">
                    <video-player></video-player>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('content')

    <div class="series columns is-multiline" style="margin-top: 20px">
        <div class="column is-12">
            <div class="lessons" style="width: 100%">
                <div class="card">
                    <div class="card-content">
                        <div class="content">
                            <div class="article">
                                <parse markdown="{{ $lesson->body }}"></parse>
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
                                                <a class="popover-with-html" href="{{ route('special_pages.edit',$lesson) }}">
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
            </div>
        </div>
        <div class="column is-12">
            <comments></comments>
        </div>
    </div>

@endsection

@section('styles')

    <style>

        #app > .container{
            padding-top: 0;
        }

    </style>

@endsection