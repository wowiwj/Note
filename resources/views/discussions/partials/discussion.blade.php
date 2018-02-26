<div class="discussion-info">

    <div>
        <div class="meta">


            <div class="front">

                <a href="{{ route('users.show',$discussion->user) }}">
                    <img class="avatar" src="{{ $discussion->user->avatar }}" alt="">

                </a>

                <a href="{{ route('users.show',$discussion->user) }}" class="nickname m-l-5">
                    {{ $discussion->user->name }}
                </a>

                <span class="time m-l-15">
                        {{ $discussion->created_at->diffForHumans()}}
                    </span>

            </div>


            <span class="tags is-hidden-mobile">

                @foreach($discussion->tags as $tag)
                    <a class="tag" href="{{ $tag->path() }}">
                        <span >{{ $tag->name }}</span>
                    </a>

                @endforeach

            </span>

        </div>

        <div class="discussion-intro">

            <div class="describe">
                <a href="{{ $discussion->path() }}">
                    @if($discussion->hasUpdatesFor(auth()->user()))
                        <h5 class="title">{{ $discussion->title }}</h5>
                    @else
                        <h4 style="color: #aaa" class="title">{{ $discussion->title }}</h4>
                    @endif
                </a>
                <div class="info">
                    {{ $discussion->brief }}

                </div>
            </div>

            @if($discussion->page_image)
                <div class="placeimage">
                    <img src="{{ $discussion->page_image }}" alt="测试图片">
                </div>
            @endif
        </div>


        <div class="discussion-state">
            
            <div class="info">
                @if($discussion->bestAnswer)
                    <span class="solved">
                        <span class="icon">
                            <i class="fa fa-fw fa-check"></i>
                        </span>
                        已解决
                    </span>
                @endif
                    <span class="icon">
                        <i class="fa fa-fw fa-eye"></i>
                    </span>
                @if($discussion->views_count > 0)
                    {{ $discussion->views_count }}
                @else
                    浏览
                @endif
                <span class="icon">
                        <i class="fa fa-fw fa-comments"></i>
                    </span>
                @if($discussion->comments_count > 0)
                    {{ $discussion->comments_count }}
                @else
                    评论
                @endif
                <span class="icon">
                        <i class="fa fa-fw fa-heart "></i>
                    </span>
                @if($discussion->favorites_count > 0)
                    {{ $discussion->favorites_count }}
                @else
                    喜欢
                @endif
            </div>

        </div>

    </div>


</div>