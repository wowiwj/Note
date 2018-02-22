@extends('layouts.app')

@section('title','评论首页')


@section('content')

    <div class="columns">

        <div class="column is-9">
            <div class="card">
                <div class="card-content nopadding">
                    <div class="content">
                        @forelse($discussions as $discussion)
                            @include('discussions.partials.discussion')
                        @empty
                            <div class="empty-block">没有提问数据</div>
                        @endforelse

                        <div class="center-block">
                            {{ $discussions->links('vendor.pagination.default') }}
                        </div>
                    </div>
                </div>
            </div>

        </div>


        <div class="column">
            @include('discussions.partials.filter')
        </div>


    </div>


@endsection