<article class="media">
    <div class="media-left">
        <figure class="image is-48x48">
            <img class="avatar img-thumbnail" src="{{ $message->user->avatar }}" alt="Image">
        </figure>
    </div>
    <div class="media-content">
        <div class="content">
            <p>
                <strong> <a href="{{ route('users.show',$message->user->id) }}">{{ $message->user->name }}</a> </strong>
                评论了你的文章 <a href="{{ $message->path() }}"> {{ $message->commentable->title }}</a>
                •
                <span style="color: #888;font-size: 0.8rem">{{ $notification->created_at->diffForHumans() }}</span>
                <br>
                <parse :content="{{ $message->body }}"></parse>
            </p>
        </div>
    </div>
</article>