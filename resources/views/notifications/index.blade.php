@extends('layouts.app')

@section('content')

    <div class="columns">

        <div class="column is-3 white-bg">
            @include('notifications.partials.nav')

        </div>
        <div class="column is-faded">


            <h4 class="title is-5">
                我的提醒
            </h4>

            @forelse ($notifications as $notification)

                @if (view()->exists("notifications.partials.".snake_case(class_basename($notification->type))))
                    @include ("notifications.partials.".snake_case(class_basename($notification->type)), [
                        'message' => notification_parser($notification),
                        'notification' => $notification
                    ])
                @endif
            @empty
                <p class="empty-block">暂时没有任何消息哦</p>
            @endforelse

            {{ $notifications->links() }}

        </div>

    </div>



@endsection