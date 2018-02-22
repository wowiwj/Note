@extends('layouts.app')


@section('content')

    <div class="columns"<div class="columlass="column is-9">
            <div class="card">

                <div class="card-header">
                    <div class="card-header-title">
                        写文章
                    </div>

                </div>

                <div class="card-content">
                    <article-md-editor></article-md-editor>

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