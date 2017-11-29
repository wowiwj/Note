
<div class="card m-t-10 user-card">
    <header class="card-header">
        <p class="card-header-title">
            关于作者
        </p>
        <a href="#" class="card-header-icon" aria-label="more options">
            查看全部
        </a>
    </header>
    <div class="card-content">
        <div class="content">
            <article class="media">
                <figure class="media-left">
                    <a class="image is-64x64" href="{{ route('users.show',$article->user) }}">
                    <img class="avatar img-thumbnail" src="{{ $article->user->avatar }}" alt="{{ $article->user->name }}">
                    </a>
                </figure>
                <div class="media-content">
                    <div class="content">
                    <p>
                        <a href="{{ route('users.show',$article->user) }}"><strong>{{ $article->user->name }}</strong></a> 
                        <br>
                        @if($article->user->signature)
                            {{ $article->user->signature }}
                        @else
                            该用户很懒,什么都没有留下
                        @endif
                        
                    </p>
                    </div>
                </div>
            
            </article>
            @can('update',$article->user)
                <a style="width:100%" class="button is-primary is-outlined" href="{{ route('users.edit',$article->user) }}">编辑个人资料</a>
            @endcan
        </div>
    </div>
</div>