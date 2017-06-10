<div class="article-info">

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
            <i class="ion-ios-eye"></i>{{ $article->views_count }}
            <a href="{{ $article->path() }}" class="pull-right">
                Read More <i class="ion-ios-arrow-forward"></i></a>
        </div>

    </div>

</div>



