@extends('layouts.app')

@section('content')

    <article-view inline-template :initial-comments-count="0">
        <div class="row">

            <div class="col-md-9">

                <div class="panel panel-default">

                    <div class="panel-heading">
                        <div class="level">
                            <span class="flex">
                                {{ $article->title }}
                                @can('update',$article)
                                    <a href="{{ route('articles.edit',$article) }}"><i class="ion-edit"></i></a>
                                @endcan
                            </span>
                            <span><a href="{{ route('users.show',$article->user) }}">{{ $article->user->name }}</a>发表于{{ $article->created_at->diffForHumans() }}</span>

                            @can('update',$article)
                                <form action="{{ route('articles.destroy',$article) }}" method="post">
                                    {{ csrf_field() }}
                                    {{ method_field("DELETE") }}
                                    <button class="delete-article"><i class="ion-trash-a"></i></button>
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
            </div>

            <div class="col-md-3 hidden-sm hidden-xs">
                @include('layouts.partials.category')
            </div>


        </div>
    </article-view>



@endsection