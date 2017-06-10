<div class="panel panel-default">
    <div class="panel-heading">用户信息</div>
    <div class="panel-body">
        <div class="media">

            <div class="media-left">
                <a href="{{ route('users.show',$article->user) }}">
                    <img class="avatar img-thumbnail" style="max-width: 80px" src="{{ $article->user->avatar }}" alt="{{ $article->user->name }}">
                </a>

            </div>
            <div class="media-body">
                <h3>{{ $article->user->name }}</h3>
                <p> 描述: {{ $article->user->signature }}</p>
            </div>
        </div>
        @can('update',$article->user)
            <hr>
            <a class="btn btn-primary btn-block" href="{{ route('users.edit',$article->user) }}">编辑个人资料</a>
        @endcan

    </div>

</div>