@if(count($errors)>0)
    @foreach($errors->all() as $value)

        <b-message type="is-danger" has-icon>
            {{$value}}
        </b-message>
    @endforeach
@endif 