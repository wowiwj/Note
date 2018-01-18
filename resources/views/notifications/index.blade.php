@extends('layouts.app')

@section('content')


    <div class="columns">

        <div class="column is-3 white-bg">
            @include('notifications.partials.nav')

        </div>
        <div class="column is-faded">


            <h4 class="title is-5">
                我的提醒
            </h4>

            @forelse ($notifications as $notification)

                @if (view()->exists("notifications.partials.{$notification->data['type']}"))
                    @include ("notifications.partials.{$notification->data['type']}", ['message' => notificationParser($notification->data)])
                @endif
            @empty
                <p class="empty-block">暂时没有任何消息哦</p>
            @endforelse

            <h1>ASFSPFS</h1>

            <article class="media">
                <div class="media-left">
                    <figure class="image is-48x48">
                        <img class="avatar img-thumbnail" src="https://bulma.io/images/placeholders/128x128.png" alt="Image">
                    </figure>
                </div>
                <div class="media-content">
                    <div class="content">
                        <p>
                            <strong>John Smith</strong> 评论了文章 <a href="#">PHP安全不完全指北</a>
                            <br>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean efficitur sit amet massa fringilla egestas. Nullam condimentum luctus turpis.
                            •
                            <span style="color: #888;font-size: 0.8rem">1小时前</span>
                        </p>
                    </div>
                </div>
            </article>

            <article class="media">
                <div class="media-left">
                    <figure class="image is-48x48">
                        <img class="avatar img-thumbnail" src="https://bulma.io/images/placeholders/128x128.png" alt="Image">
                    </figure>
                </div>
                <div class="media-content" style="align-self: center">
                    <div class="content">
                        <p>
                            <strong>John Smith</strong> 赞了迷得评论 <a href="#">我来划水了哈哈哈</a>
                            •
                            <span style="color: #888;font-size: 0.8rem">1小时前</span>
                        </p>
                    </div>
                </div>
            </article>

            <article class="media">
                <div class="media-left">
                    <figure class="image is-48x48">
                        <img class="avatar img-thumbnail" src="https://bulma.io/images/placeholders/128x128.png" alt="Image">
                    </figure>
                </div>
                <div class="media-content">
                    <div class="content">
                        <p>
                            <strong>John Smith</strong> 评论了文章 <a href="#">PHP安全不完全指北</a>
                            <br>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean efficitur sit amet massa fringilla egestas. Nullam condimentum luctus turpis.
                            •
                            <span style="color: #888;font-size: 0.8rem">1小时前</span>
                        </p>
                    </div>
                </div>
            </article>

            <article class="media">
                <div class="media-left">
                    <figure class="image is-48x48">
                        <img class="avatar img-thumbnail" src="https://bulma.io/images/placeholders/128x128.png" alt="Image">
                    </figure>
                </div>
                <div class="media-content" style="align-self: center">
                    <div class="content">
                        <p>
                            <strong>John Smith</strong> 赞了迷得评论 <a href="#">我来划水了哈哈哈</a>
                        </p>
                    </div>
                </div>
            </article>

            <article class="media">
                <div class="media-left">
                    <figure class="image is-48x48">
                        <img class="avatar img-thumbnail" src="https://bulma.io/images/placeholders/128x128.png" alt="Image">
                    </figure>
                </div>
                <div class="media-content" style="align-self: center">
                    <div class="content">
                        <p>
                            <strong>John Smith</strong> 赞了迷得评论 <a href="#">我来划水了哈哈哈</a>
                        </p>
                    </div>
                </div>
            </article>

            <article class="media">
                <div class="media-left">
                    <figure class="image is-48x48">
                        <img class="avatar img-thumbnail" src="https://bulma.io/images/placeholders/128x128.png" alt="Image">
                    </figure>
                </div>
                <div class="media-content">
                    <div class="content">
                        <p>
                            <strong>John Smith</strong> 评论了文章 <a href="#">PHP安全不完全指北</a>
                            <br>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean efficitur sit amet massa fringilla egestas. Nullam condimentum luctus turpis.
                        </p>
                    </div>
                </div>
            </article>


            <article class="media">
                <div class="media-left">
                    <figure class="image is-48x48">
                        <img class="avatar img-thumbnail" src="https://bulma.io/images/placeholders/128x128.png" alt="Image">
                    </figure>
                </div>
                <div class="media-content">
                    <div class="content">
                        <p>
                            <strong>John Smith</strong> 评论了文章 <a href="#">PHP安全不完全指北</a>
                            <br>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean efficitur sit amet massa fringilla egestas. Nullam condimentum luctus turpis.
                        </p>
                    </div>
                </div>
            </article>




        </div>

    </div>


@endsection