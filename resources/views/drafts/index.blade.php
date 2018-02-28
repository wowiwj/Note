@extends('layouts.app')

@section('content')

    @component('users.components.user',['user'=>$user])

        <article class="media">
            <div class="media-content">
                <div class="content" >
                    @foreach($drafts as $draft)
                        <form id="delete-form-{{ $draft->ref }}" action="{{ route('drafts.destroy',$draft->ref) }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                            {{ method_field('DELETE') }}
                        </form>
                        <p style="border-bottom: 1px solid #ccc;padding-bottom: 10px">
                            <span style="padding:0 5px;font-size: 0.8rem;border: 1px solid #2ab27b;color: #4bb1b1;border-radius: 10px;">{{ $draft->sourceTitle }}</span>
                            <strong>{{ $draft->lastUpdate->title }} </strong>
                            @if($draft->relation)
                                ·
                                <a href="{{ $draft->relation->path() }}">关联</a>
                            @endif
                            <br>
                            {{ $draft->lastUpdate->brief }}
                            <br>
                            <small><a href="{{ route('drafts.edit',$draft->ref) }}">编辑</a> ·
                                <a href="{{ route('drafts.destroy',$draft->ref) }}"
                                   onclick="event.preventDefault();
                                   document.getElementById('delete-form-{{ $draft->ref }}').submit();"
                                >
                                    删除
                                </a> · {{ $draft->lastUpdate->created_at->diffForHumans() }} </small>
                        </p>

                    @endforeach


                </div>
            </div>
        </article>
        <div style="padding-top: 20px">{{ $drafts->links('vendor.pagination.simple-default') }}</div>
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