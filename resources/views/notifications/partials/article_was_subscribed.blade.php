<article class="media">
    <div class="media-left">
        <figure class="image is-48x48">
            <img class="avatar img-thumbnail" src="{{ $message->user->avatar }}" alt="Image">
        </figure>
    </div>
    <div class="media-content" style="align-self: center">
        <div class="content">
            <p>
                <strong><a href="{{ route('users.show',$message->user->id) }}">{{ $message->user->name }}</a></strong> 订阅了你的文章
                <a href="{{ $message->article->path() }}">{{ $message->article->title }}</a>
            •
            <span style="color: #888;font-size: 0.8rem">{{ $notification->created_at->diffForHumans() }}</span>
            </p>
        </div>
    </div>
</article>