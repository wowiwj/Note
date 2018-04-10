@extends('layouts.app')

@section('title','课程-'.$series->title)


@section('banner')

    <section class="hero is-medium is-primary is-bold">
        <div class="hero-body">
            <div class="container series-banner">
                <div class="columns">
                    <div class="column">
                        <h1 class="title">
                            {{ $series->title }}
                        </h1>
                        <h2 class="subtitle">
                            {{ $series->body }}
                        </h2>
                    </div>
                    <div class="column is-4 has-text-centered is-hidden-mobile is-hidden-tablet-only">
                        <img class="series-thumbnail" src="{{ $series->banner }}" style="width: 180px;height: 180px">
                    </div>
                </div>

            </div>
        </div>
    </section>

@endsection

@section('content')

    <div class="series">
        <div class="columns">
            <div class="lessons" style="width: 100%">
                <div class="card">
                    <div class="card-content">
                        @foreach($series->lessons as $lesson)
                        <div class="media" style="display: flex;flex-direction: row;align-items: center;justify-content: flex-start">
                            <div class="media-left" style="flex-direction: column">
                                <div class="circle">
                                    <span class="position">{{ $loop->iteration }}</span>
                                </div>
                            </div>
                            <div class="media-content" style="padding: 10px;height: auto;align-items: flex-start;flex-direction: column">
                                <p class="title is-5">
                                    <a href="#">{{ $lesson->title }}</a>
                                </p>
                                <p class="subtitle is-6">{{ $lesson->body }}</p>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>

            @foreach($series->lessons as $lesson)
                {{--<a class="column is-3" href="{{ $item->path() }}">--}}
                    {{--<div class="card">--}}
                        {{--<div class="card-image">--}}
                            {{--<figure class="image is-4by3">--}}
                                {{--<img src="{{ $item->banner }}" alt="Placeholder image">--}}
                            {{--</figure>--}}
                        {{--</div>--}}
                        {{--<div class="card-content">--}}
                            {{--<div class="content">--}}
                                {{--<div class="is-title" style="font-weight: 600">--}}
                                    {{--{{ $item->title }}--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</a>--}}
            @endforeach

        </div>
        {{--<div class="center-block">--}}
            {{--{{ $series->links('vendor.pagination.default') }}--}}
        {{--</div>--}}
    </div>


@endsection

@section('styles')

    <style>

        #app > .container{
            padding-top: 0;
        }
    </style>

@endsection