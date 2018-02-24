@extends('layouts.app')


@section('content')

    <{{ $draft->source }}-draft-editor draft-ref="{{ $draft->ref }}">

    </{{ $draft->source }}-draft-editor>

@endsection