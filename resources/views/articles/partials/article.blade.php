<div class="article-info">

    <div>
        <div class="meta">


            <div class="front">

                <a href="{{ route('users.show',$article->user) }}">
                    <img class="avatar" src="{{ $article->user->avatar }}" alt="">

                </a>

                <a href="{{ route('users.show',$article->user) }}" class="nickname m-l-5">
                    {{ $article->user->name }}
                </a>

                <span class="time m-l-15">
                        {{ $article->created_at->diffForHumans()}}
                    </span>

            </div>


            <span class="tags is-hidden-mobile">

                @foreach($article->tags as $tag)
                    <a class="tag" href="{{ $tag->path() }}">
                        <span >{{ $tag->name }}</span>
                    </a>

                @endforeach

            </span>

        </div>

        <div class="article-intro">

            <div class="describe">
                <a href="{{ $article->path() }}">
                    @if($article->hasUpdatesFor(auth()->user()))
                        <h5 class="title">{{ $article->title }}</h5>
                    @else
                        <h4 style="color: #aaa" class="title">{{ $article->title }}</h4>
                    @endif
                </a>
                <div class="info">
                    {{ $article->brief }}

                </div>
            </div>

            @if($article->page_image)
                <div class="placeimage">
                    <img src="{{ $article->page_image }}" alt="测试图片">
                </div>
            @endif
        </div>


        <div class="article-state">

            <div class="extra is-hidden-mobile">
                <a href="{{ $article->category->path() }}">
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
                @if($article->favorites_count > 0)
                    {{ $article->favorites_count }}
                @else
                    喜欢
                @endif
                <span class="icon">
                        <i class="fa fa-fw fa-usd"></i>
                    </span>
                打赏
            </div>

        </div>

    </div>


</div>


