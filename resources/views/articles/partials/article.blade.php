<div class="article-info">
    <div class="placeimage">
        <img src="http://img04.tooopen.com/images/20130701/tooopen_20083555.jpg" alt="测试图片">
    </div>

    <div class="describe">
        <a href="{{ $article->path() }}">
            <h4>{{ $article->title }}</h4>
        </a>
        <div class="info">
            <article-info :info="{{ $article->body }}"></article-info>
        </div>


        <div class="extra">
            <a href="#">
                <div class="label">
                    <i class="ion-pricetag"></i>error
                </div>
            </a>
            <div class="info"><i class="ion-person"></i>{{ $article->user->name }}&nbsp;,&nbsp;
                <i class="ion-clock"></i>{{ $article->created_at->diffForHumans() }}&nbsp;,&nbsp;
                <i class="ion-ios-eye"></i>49
                <a href="{{ $article->path() }}" class="pull-right">
                    Read More <i class="ion-ios-arrow-forward"></i></a>
            </div>
        </div>

    </div>
</div>