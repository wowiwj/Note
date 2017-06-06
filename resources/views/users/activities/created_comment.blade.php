@component('users.activities.activity')
    @slot('heading')
        {{ $user->name }} 评论文章
        <a href="/articles/{{ $activity->subject->commentable['category']['slug'] }}/{{ $activity->subject->commentable['id'] }}">
            "{{ $activity->subject->commentable['title'] }}"
        </a>
    @endslot

    @slot('body')
        <parse :content="{{ $activity->subject->body }}"></parse>
    @endslot
@endcomponent