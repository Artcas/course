@foreach($data as $key => $value)
    @if($value)
        {!! $key !!}: {!! $value !!}

    @endif
@endforeach
