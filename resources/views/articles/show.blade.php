@extends('layouts.app')

@section('content')

    <div class="row">

        <div class="col-md-8">

            <div class="panel panel-default">
                <div class="panel-heading">{{ $article->title }}</div>

                <div class="panel-body">
                    <div class="article">
                        <parse :content="{{ $article->body }}"></parse>
                    </div>

                </div>
            </div>

            <div class="comment">
                @foreach($article->comments as $comment)
                    <div class="panel panel-default">
                        <div class="panel-heading">{{ $comment->user->name }}</div>

                        <div class="panel-body">
                            <div class="article">
                                <parse :content="{{ $comment->body }}"></parse>
                            </div>

                        </div>
                    </div>
                @endforeach

                <form action="{{ route('comments.store',$article->id) }}" method="post">

                    {{ csrf_field() }}
                    <div class="form-group">
                        <textarea placeholder="添加留言" class="form-control" name="body" rows="5" >
                        </textarea>
                    </div>

                    <div class="form-group">
                        <button class="btn btn-primary" type="submit">提交</button>
                    </div>
                </form>

            </div>

        </div>

        <div class="col-md-4 hidden-sm hidden-xs">
            @include('layouts.partials.category')
        </div>


    </div>

@endsection