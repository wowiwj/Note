@extends('layouts.app')

@section('content')

    <div class="row">

        <div class="col-md-8">

            <div class="panel panel-default">
                <div class="panel-heading">文章</div>

                <div class="panel-body">

                    @foreach($articles as $article)
                        @include('articles.partials.article')
                    @endforeach

                    <div class="text-center">
                        {{ $articles->links() }}
                    </div>


                </div>
            </div>
        </div>

        <div class="col-md-4 hidden-sm hidden-xs">
            @include('layouts.partials.category')
        </div>


    </div>

@endsection