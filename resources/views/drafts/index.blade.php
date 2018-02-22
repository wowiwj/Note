@extends('layouts.app')

@section('content')

    @component('users.components.user',['user'=>$user])

        <h1>草稿</h1>
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

            console.log(top);

        });

    </script>

@endsection