@component('users.activities.activity')
    @slot('heading')

        @if($activity->subject->commentable instanceof \App\Models\SpecialPage)
            {{ $user->name }} 评论页面
            <a href="/{{ $activity->subject->commentable['route'] }}">
                "{{ $activity->subject->commentable['title'] }}"
            </a>
        @else
            {{ $user->name }} 评论文章
            <a href="/articles/{{ $activity->subject->commentable['category']['slug'] }}/{{ $activity->subject->commentable['id'] }}">
                "{{ $activity->subject->commentable['title'] }}"
            </a>
        @endif

    @endslot

    @slot('body')
        <parse :content="{{ $activity->subject->body }}"></parse>
    @endslot
@endcomponent