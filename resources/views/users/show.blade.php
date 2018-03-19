@extends('layouts.app')

@section('content')

    @component('users.components.user',['user'=>$user])
        @forelse ($activities as $date => $activity)
            <div class="page-header">{{ $date }}</div>
            <div class="">
                @foreach ($activity as $record)
                    @if (view()->exists("users.activities.{$record->type}"))
                        @include ("users.activities.{$record->type}", ['activity' => $record])
                    @endif
                @endforeach
            </div>

        @empty
            <p class="empty-block">暂时没有任何动态哦</p>
        @endforelse
    @endcomponent


@endsection

@section('scripts')

    <script type="text/javascript">


        $(window).scroll(function (event) {

            if ($(window).width() <= 991) {
                $("#sticker").unstick();
                return;
            }
            var top = $(window).scrollTop();

            if (top > 600){
                $("#sticker").sticky({topSpacing:20});
            }else{

                $("#sticker").unstick();
            }

        });

    </script>

@endsection