<div class="article-info">

    <div>
        <div class="meta">


            <div class="front">

                <a href="#">
                    <img class="avatar" src="{{ $article->user->avatar }}" alt="">

                </a>
                <a href="#" class="nickname m-l-5">
                    {{ $article->user->name }}
                </a>

                <span class="time m-l-15">
                        {{ $article->created_at->diffForHumans()}}
                    </span>

            </div>


            <span class="tags is-desktop">
                    <span class="tag">标签1</span>
                    <span class="tag">标签1</span>
                    <span class="tag">标签1</span>
                    <span class="tag">标签1</span>
                    <span class="tag">标签1</span>
                </span>

        </div>

        <div class="article-intro">

            <div class="describe">
                <a href="{{ $article->path() }}">
                    <h4 class="title">{{ $article->title }}</h4>
                </a>
                <div class="info">
                    <article-info :info="{{ $article->body }}"></article-info>

                </div>
            </div>

            @if($article->page_image)
                <div class="placeimage">
                    <img src="{{ $article->page_image }}" alt="测试图片">
                </div>
            @endif
        </div>


        <div class="article-state">

            <div class="extra">
                <a href="#">
                    <div class="label">
                        {{ $article->category->name }}
                    </div>
                </a>
            </div>

            <div class="info">
                    <span class="icon">
                        <i class="fa fa-fw fa-eye"></i>
                    </span>
                @if($article->views_count > 0)
                    {{ $article->views_count }}
                @else
                    浏览
                @endif
                <span class="icon">
                        <i class="fa fa-fw fa-comments"></i>
                    </span>
                @if($article->comments_count > 0)
                {{ $article->comments_count }}
                @else
                    评论
                @endif
                <span class="icon">
                        <i class="fa fa-fw fa-heart "></i>
                    </span>
                喜欢
                <span class="icon">
                        <i class="fa fa-fw fa-usd"></i>
                    </span>
                打赏
            </div>

        </div>

    </div>


</div>



<!-- <div class="article-info">

    <div class="article-intro">

        <div class="describe">
            <a href="{{ $article->path() }}">
                <h4 class="title">{{ $article->title }}</h4>
            </a>
            <div class="info">
                <article-info :info="{{ $article->body }}"></article-info>

            </div>

        </div>

        @if($article->page_image)
    <div class="placeimage">
        <img src="{{ $article->page_image }}" alt="测试图片">
            </div>
        @endif
        </div>

        <div class="article-state">

            <div class="extra">
                <a href="#">
                    <div class="label">
                        <i class="ion-bookmark"></i>{{ $article->category->name }}
        </div>
    </a>
</div>

<div class="info"><i class="ion-person"></i>{{ $article->user->name }}&nbsp;,&nbsp;
            <i class="ion-clock"></i>{{ $article->created_at->diffForHumans() }}&nbsp;,&nbsp;
            <i class="ion-ios-eye"></i>{{ $article->views_count }} ,&nbsp;
            <i class="ion-chatbubble-working"></i>{{ $article->comments_count }}

        <a href="{{ $article->path() }}" class="pull-right">
                Read More <i class="ion-ios-arrow-forward"></i></a>
        </div>

    </div>

</div> -->



