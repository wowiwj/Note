<article class="media">
    <div class="media-left">
        <figure class="image is-48x48">
            <img class="avatar img-thumbnail" src="{{ $message->object->user->avatar }}" alt="Image">
        </figure>
    </div>
    <div class="media-content">
        <div class="content">
            <p>
                <strong> <a href="{{ route('users.show',$message->object->user->id) }}">{{ $message->object->user->nickname }}</a> </strong>
                评论了你的文章 <a href="{{ $message->object->path() }}"> {{ $message->object->commentable->title }}</a>
                •
                <span style="color: #888;font-size: 0.8rem">{{ $notification->created_at->diffForHumans() }}</span>
                <br>
                <parse :content="{{ $message->object->body }}"></parse>
            </parse>
        </div>
    </div>
</article>