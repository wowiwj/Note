@extends('layouts.app')

@section('title','文章首页')


@section('content')

    <div class="row">

        <div class="col-md-9">

            <div class="panel panel-default">
                <div class="panel-heading">

                    <div class="level">
                        <div class="flex">文章</div>

                        <a href="/articles"> 最新 </a> &nbsp;/&nbsp;
                        <a href="/articles?popular=1">热门</a> &nbsp;/&nbsp;
                        @if(Auth::check())
                        <a href="/articles?by={{ Auth::user()->name }}"> 我的 </a> &nbsp;/&nbsp;
                        @endif
                        <a href="/articles?uncommented=1">零回复</a>
                    </div>



                </div>

                <div class="panel-body">

                    @forelse($articles as $article)
                        @include('articles.partials.article')
                    @empty
                        <div class="empty-block">没有文章数据</div>
                    @endforelse

                    <div class="text-center">
                        {{ $articles->links() }}
                    </div>


                </div>
            </div>
        </div>

        <div class="col-md-3 hidden-sm hidden-xs">
            @include('layouts.partials.category')
        </div>


    </div>

@endsection