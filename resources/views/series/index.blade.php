@extends('layouts.app')

@section('title','课程首页')



@section('banner')

    <section class="hero is-medium is-primary is-bold">
        <div class="hero-body">
            <div class="container">
                <h1 class="title">
                    高质量的web开发视频
                </h1>
                <h2 class="subtitle">
                    发现好课程
                </h2>
            </div>
        </div>
    </section>

@endsection

@section('content')

    <div class="series">
        <div class="columns is-multiline">

            @foreach($series as $item)
                <div class="column is-3">

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

                </div>
            @endforeach

            <div class="center-block">
                {{ $series->links('vendor.pagination.default') }}
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

