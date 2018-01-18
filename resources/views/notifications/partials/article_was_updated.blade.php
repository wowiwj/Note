<article class="media">
    <div class="media-left">
        <figure class="image is-48x48">
            <img class="avatar img-thumbnail" src="{{ $message->from->avatar }}" alt="Image">
        </figure>
    </div>
    <div class="media-content">
        <div class="content">
            <p>
                <strong> <a href="{{ route('users.show',$message->from->id) }}">{{ $message->from->name }}</a> </strong> {!! $message->message !!}
                •
                <span style="color: #888;font-size: 0.8rem">1小时前</span>
                <br>
                <parse :content="{{ $message->object->body }}"></parse>
            </parse>
        </div>
    </div>
</article>