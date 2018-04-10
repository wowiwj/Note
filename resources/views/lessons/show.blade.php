@extends('layouts.app')

@section('title','课程-'.$lesson->title)


@section('banner')

    <div style="background-color: #1b1e21;margin-top: 62px">
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

    <div class="series">
        <div class="columns">
            <div class="lessons" style="width: 100%">
                <div class="card">
                    <div class="card-content">
                        {{--@foreach($series->lessons as $lesson)--}}
                            {{--<div class="media" style="display: flex;flex-direction: row;align-items: center;justify-content: flex-start">--}}
                                {{--<div class="media-left" style="flex-direction: column">--}}
                                    {{--<div class="circle">--}}
                                        {{--<span class="position">{{ $loop->iteration }}</span>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                                {{--<div class="media-content" style="padding: 10px;height: auto;align-items: flex-start;flex-direction: column">--}}
                                    {{--<p class="title is-5">--}}
                                        {{--<a href="{{ $lesson->path() }}">{{ $lesson->title }}</a>--}}
                                    {{--</p>--}}
                                    {{--<p class="subtitle is-6">{{ $lesson->body }}</p>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--@endforeach--}}
                    </div>
                </div>
            </div>

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