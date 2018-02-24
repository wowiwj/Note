@extends('layouts.app')

@section('title',$discussion->title)

@section('content')

    <discussion-view inline-template :initial-comments-count="0" :discussion-id="{{ $discussion->id }}">
    <div class="columns discussion-page">

            <div class="column is-9">
                <div class="card">

                    <div class="card-content">
                        <div class="content">

                            <div class="title is-3 main-title">
                                {{ $discussion->title }}
                                <div class="title-summary">

                                    <a href="{{ route('users.show',$discussion->user) }}" class="m-l-5">
                                        {{ $discussion->user->name }}
                                    </a>
                                    于
                                    {{ $discussion->created_at->diffForHumans()}}

                                    @if($discussion->lastComment)
                                        ⋅
                                        <span class="is-hidden-mobile">
                                            最后回复由
                                            <a href="{{ route('users.show',$discussion->lastComment->user) }}" class="m-l-5">
                                                {{ $discussion->lastComment->user->name }}
                                            </a>
                                            于
                                            {{ $discussion->lastComment->created_at->diffForHumans()}}
                                        </span>

                                    @endif
                                    ⋅
                                    {{ $discussion->views_count }}阅读
                                </div>
                            </div>


                            <div class="discussion">
                                <parse :content="{{ $discussion->body }}"></parse>
                            </div>
                        </div>



                        <div class="columns">

                            <div class="column">

                                <favorite-subject
                                        :favorites_count="{{ $discussion->favorites_count }}"
                                        :is_favorited="{{ (int)$discussion->is_favorited }}"
                                        :subject_id="{{$discussion->id}}"
                                        subject="discussions"
                                >

                                </favorite-subject>


                            </div>
                            @if(count($discussion->tags) > 0)
                                <div class="column is-4">
                                    <div style="display: flex;flex-direction: row-reverse;width: 100%;height: 100%">
                                        @foreach($discussion->tags as $tag)
                                            <span style="align-self: flex-end;margin: 5px" class="tag is-medium is-light">{{ $tag->name }}</span>
                                        @endforeach
                                    </div>

                                </div>
                            @endif

                        </div>

                        <div class="columns">
                            <div class="column is-8 is-hidden-mobile">
                                <div class="social-share-container">
                                    <div class="social-share" data-disabled="google" data-description="Share.js - 一键分享到微博，QQ空间，腾讯微博，人人，豆瓣"></div>
                                </div>
                            </div>

                            <div class="column is-4" style="line-height: 30px">


                                @can('update',$discussion)
                                    <div class="is-pulled-right m-l-20">
                                        <b-tooltip label="编辑">
                                            <a class="popover-with-html" href="{{ route('discussions.edit',$discussion) }}">
                                                <i class="fa fa-edit"></i> <span></span>
                                            </a>
                                        </b-tooltip>
                                    </div>


                                    <div class="is-pulled-right m-l-20">
                                        <b-tooltip label="删除">
                                            <a class="popover-with-html" @click="confirmDelete()">
                                                <i class="fa fa-trash"></i> <span></span>
                                            </a>
                                        </b-tooltip>
                                    </div>
                                @endcan

                                <subject-subscribe subject="discussion" :initial-subscribed="{{ (int)$discussion->isSubscribed }}" :subject-id = {{ $discussion->id }}></subject-subscribe>

                            </div>
                        </div>

                    </div>



                </div>

                <comments></comments>

            </div>

            <div class="column is-3">

                @include('discussions.partials.filter')

            </div>
        </div>
    </discussion-view>

    



@endsection