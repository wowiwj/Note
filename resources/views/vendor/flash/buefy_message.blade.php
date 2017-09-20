@foreach ((array) session('flash_notification') as $message)
    @if ($message['overlay'])
        @include('flash::modal', [
            'modalClass' => 'flash-modal',
            'title'      => $message['title'],
            'body'       => $message['message']
        ])
    @else

        <b-message
                @if ($message['important'])
                    title="{{ $message['level'] }}"
                @endif
                type="is-{{ $message['level'] }}" has-icon>
            {!! $message['message'] !!}
        </b-message>
    @endif
@endforeach

{{ session()->forget('flash_notification') }}
