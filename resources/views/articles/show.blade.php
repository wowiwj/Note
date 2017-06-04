@extends('layouts.app')

@section('content')

    <article-view inline-template :initial-comments-count="0">
        <div class="row">

            <div class="col-md-8">

                <div class="panel panel-default">

                    <div class="panel-heading">
                        <div class="level">
                            <span class="flex">{{ $article->title }}</span>
                            <span><a href="#">{{ $article->user->name }}</a>发表于{{ $article->created_at->diffForHumans() }}</span>

                            @can('update',$article)
                                <form action="{{ route('articles.destroy',$article) }}" method="post">
                                    {{ csrf_field() }}
                                    {{ method_field("DELETE") }}
                                    <button class="btn btn-danger btn-xs">删除</button>
                                </form>
                            @endcan
                        </div>
                    </div>

                    <div class="panel-body">
                        <div class="article">
                            <parse :content="{{ $article->body }}"></parse>
                        </div>

                    </div>
                </div>

                <comments></comments>

                {{--<div class="comment">--}}
                    {{--@foreach($article->comments as $comment)--}}
                        {{--<div class="panel panel-default">--}}
                            {{--<div class="panel-heading">--}}
                                {{--<div class="level">--}}
                                {{--<span class="flex">--}}
                                    {{--<a href="#">{{ $comment->user->name }}</a>--}}
                             {{--发表于 {{ $comment->created_at->diffForHumans() }}--}}
                                {{--</span>--}}
                                    {{--<a href="#">回复</a>--}}
                                {{--</div>--}}

                            {{--</div>--}}

                            {{--<div class="panel-body">--}}
                                {{--<div class="article">--}}
                                    {{--<parse :content="{{ $comment->body }}"></parse>--}}
                                {{--</div>--}}

                            {{--</div>--}}
                        {{--</div>--}}
                    {{--@endforeach--}}

                    {{--<form action="{{ route('comments.store',$article->id) }}" method="post">--}}

                        {{--{{ csrf_field() }}--}}
                        {{--<div class="form-group">--}}
                        {{--<textarea placeholder="添加留言" class="form-control" name="body" rows="5" >--}}
                        {{--</textarea>--}}
                        {{--</div>--}}

                        {{--<div class="form-group">--}}
                            {{--<button class="btn btn-primary" type="submit">提交</button>--}}
                        {{--</div>--}}
                    {{--</form>--}}

                {{--</div>--}}

            </div>

            <div class="col-md-4 hidden-sm hidden-xs">
                @include('layouts.partials.category')
            </div>


        </div>
    </article-view>



@endsection