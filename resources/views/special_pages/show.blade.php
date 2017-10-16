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