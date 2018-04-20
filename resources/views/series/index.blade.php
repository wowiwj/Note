@extends('layouts.app')

@section('title','课程首页')



@section('banner')

    <section class="hero is-medium is-primary is-bold" style="margin-top: 60px">
        <div class="hero-body">
            <div class="container">
                <h1 class="title">
                    高质量的web开发视频
                </h1>
                <h2 class="subtitle">
                    发现好课程
                </h2>

                @if(Auth::user() && Auth::user()->is_admin)
                    <div style="position: absolute;right: 10px;bottom: 10px">
                        <a href="{{ route('series.create') }}" class="button">添加课程</a>
                    </div>
                @endif
            </div>

        </div>
    </section>

@endsection

@section('content')

    <div class="series">
        <div class="columns is-multiline">

            @foreach($series as $item)
                <a class="column is-3" href="{{ $item->path() }}">
                    <div class="card">
                        <div class="card-image">
                            <figure class="image is-4by3">
                                <img src="{{ $item->banner }}" alt="Placeholder image">
                            </figure>
                        </div>
                        <div class="card-content">
                            <div class="content">
                                 <div class="is-title" style="font-weight: 600">
                                     {{ $item->title }}
                                 </div>
                            </div>
                        </div>
                    </div>
                </a>
            @endforeach

        </div>
        <div class="center-block">
            {{ $series->links('vendor.pagination.default') }}
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

