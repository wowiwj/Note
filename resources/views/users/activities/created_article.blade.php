@component('users.activities.activity')
    @slot('heading')
        {{ $user->name }} 发表文章
        <a href="{{ $activity->subject->path() }}">{{ $activity->subject->title }}</a>
    @endslot

    @slot('body')
    @endslot
@endcomponent