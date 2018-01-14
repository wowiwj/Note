@extends('layouts.app')


@section('content')

    <div class="columns">

        <div class="column is-9">
            <div class="card">

                <div class="card-header">
                    <div class="card-header-title">
                        编辑文章
                    </div>

                </div>

                <div class="card-content">
                    <article-md-editor
                            :article-id="{{ $article->id }}"
                    ></article-md-editor>

                </div>

            </div>

        </div>

        <div class="column is-3">
            <div class="card">

                <div class="card-header">
                    <div class="card-header-title">
                        提示信息
                    </div>
                </div>

                <div class="card-content">
                    这是奥克兰发还发爱古法卡法咖啡馆花费
                </div>

            </div>
        </div>

    </div>


@endsection